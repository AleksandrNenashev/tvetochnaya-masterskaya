<?php

use YooKassa\Common\Exceptions\ApiException;
use YooKassa\Model\CancellationDetailsPartyCode;
use YooKassa\Model\CancellationDetailsReasonCode;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\Notification\AbstractNotification;
use YooKassa\Model\Notification\NotificationFactory;
use YooKassa\Model\Notification\NotificationRefundSucceeded;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooMoneyModule\Model\KassaModel;

/**
 * Класс контроллера модуля оплаты с помощью ЮMoney
 *
 * @property ModelExtensionPaymentYoomoney $model_extension_payment_yoomoney
 * @property ModelPaymentYoomoney $model_payment_yoomoney
 * @property ModelCheckoutOrder $model_checkout_order
 * @property ModelAccountOrder $model_account_order
 * @property \Cart\Customer $customer
 */
class ControllerExtensionPaymentYoomoney extends Controller
{
    const MODULE_NAME = 'yoomoney';
    const MODULE_VERSION = '2.8.4';

    /**
     * @var ModelExtensionPaymentYoomoney
     */
    private $_model;

    /**
     * Экшен генерирующий страницу оплаты с помощью ЮMoney
     * @return string
     */
    public function index()
    {
        $this->load->language('extension/payment/'.self::MODULE_NAME);
        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['confirmation_token'])) {
            $this->session->data['confirmation_token'] = null;
        }
        $model = $this->getModel()->getPaymentModel();
        if ($model === null) {
            $this->failure('YooKassa module disabled');
        }

        if ($model->getMinPaymentAmount() > 0 && $model->getMinPaymentAmount() > $this->cart->getSubTotal()) {
            $this->failure(sprintf($this->language->get('error_minimum'),
                $this->currency->format($model->getMinPaymentAmount(), $this->session->data['currency'])));
        }

        $this->load->model('checkout/order');
        $orderInfo = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        $template  = $model->applyTemplateVariables($this, $data, $orderInfo);

        if ($this->currency->has('RUB')) {
            $data['amount'] = sprintf('%.2f', $this->currency->format($orderInfo['total'], 'RUB', '', false));
        } else {
            $data['amount'] = $this->getModel()->convertFromCbrf($orderInfo, 'RUB');
        }

        $data['language'] = $this->language;
        $data['fullView'] = false;

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        return $this->load->view($template, $data);
    }

    /**
     * @param $orderInfo
     * @param bool $fullView
     * @return mixed
     */
    private function payment($orderInfo, $fullView = false)
    {
        $this->load->language('extension/payment/'.self::MODULE_NAME);
        $this->document->setTitle($this->language->get('heading_title'));

        $model = $this->getModel()->getPaymentModel();
        if (!$model || !$model->isEnabled()) {
            $this->failure('YooKassa module disabled');
        }

        if ($model->getMinPaymentAmount() > 0 && $model->getMinPaymentAmount() > $orderInfo['total']) {
            $this->failure(
                sprintf(
                    $this->language->get('error_minimum'),
                    $this->currency->format($model->getMinPaymentAmount(), $orderInfo['currency_id'])
                )
            );
        }

        $template = $model->applyTemplateVariables($this, $data, $orderInfo);

        $data['language'] = $this->language;
        $data['fullView'] = $fullView;

        if ($fullView) {
            $data['column_left']    = $this->load->controller('common/column_left');
            $data['column_right']   = $this->load->controller('common/column_right');
            $data['content_top']    = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer']         = $this->load->controller('common/footer');
            $data['header']         = $this->load->controller('common/header');
        }

        return $this->load->view($template, $data);
    }

    public function simplePayment()
    {
        $kassa = $this->getModel()->getKassaModel();
        if (!$kassa->isEnabled()) {
            $this->failure('YooKassa module disabled');
        }
        if (!isset($this->request->get['order_id'])) {
            $this->failure('Order id not send');
        }
        $orderId = (int)$this->request->get['order_id'];
        if ($orderId <= 0) {
            $this->failure('Invalid order id');
        }
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link(
                'extension/payment/yoomoney/repay', 'order_id='.$orderId, 'SSL'
            );
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->model('account/order');
        $order = $this->model_account_order->getOrder($orderId);
        if (empty($order)) {
            $this->response->redirect(
                $this->url->link('account/order/info', 'order_id='.$orderId, true)
            );
        }

        $query = $this->db->query("SELECT `payment_code`, `order_status_id` FROM `".DB_PREFIX."order` WHERE order_id = '".$orderId."'");
        if (empty($query)) {
            $this->response->redirect(
                $this->url->link('account/order/info', 'order_id='.$orderId, true)
            );
        }
        if ($query->row['payment_code'] !== 'yoomoney') {
            $this->session->data['error'] = 'Не верный способ оплаты заказа';
            $this->response->redirect(
                $this->url->link('account/order/info', 'order_id='.$orderId, true)
            );
        }
        if ($query->row['order_status_id'] == $kassa->getSuccessOrderStatusId()) {
            $this->session->data['error'] = 'Заказ уже оплачен';
            $this->response->redirect(
                $this->url->link('account/order/info', 'order_id='.$orderId, true)
            );
        }

        $this->getModel()->log('info', 'Создание платежа для заказа №'.$orderId);

        $payment = $this->getModel()->createOrderPayment($order, false);
        if ($payment === null) {
            $this->failure('Платеж не прошел. Попробуйте еще или выберите другой способ оплаты');
        } elseif ($payment->getStatus() === PaymentStatus::CANCELED) {
            $this->failure('Платеж не прошел. Попробуйте еще или выберите другой способ оплаты');
        }
        $confirmation = $payment->getConfirmation();
        if ($confirmation !== null && $confirmation->getType() === ConfirmationType::REDIRECT) {
            $this->getModel()->getKassaLog()->sendHeka(array('payment.redirect.init'));
            $this->response->redirect($confirmation->getConfirmationUrl());
        }
        $this->session->data['error'] = 'Не удалось инициализировать платёж';
        $this->response->redirect(
            $this->url->link('account/order/info', 'order_id='.$orderId, true)
        );
    }

    /**
     * @param $error
     * @param bool $display
     */
    public function failure($error, $display = true)
    {
        if ($display) {
            $this->session->data['error'] = $error;
        }
        $this->getModel()->log('info', $error);
        $this->response->redirect($this->url->link('checkout/checkout', '', true));
    }

    /**
     * @param $message
     */
    public function jsonError($message)
    {
        $this->getModel()->log('error', $message);
        echo json_encode(array(
            'success' => false,
            'error'   => $message,
        ));
        exit();
    }

    /**
     * Экшен проведения платежа, вызываемый после подтверждения заказа пользователем
     */
    public function create()
    {
        ob_start();
        $kassa = $this->getModel()->getKassaModel();
        if (!$kassa->isEnabled()) {
            $this->jsonError('YooKassa module disabled');
        }
        if (!isset($this->session->data['order_id'])) {
            $this->jsonError('Cart is empty');
        }
        $orderId = $this->session->data['order_id'];
        $this->getModel()->log('info', 'Создание платежа для заказа №'.$orderId);
        if (!isset($this->request->get['paymentType'])) {
            $this->jsonError('Payment method not specified');
        }
        $paymentMethod = $this->request->get['paymentType'];
        $successUrl = $this->url->link('checkout/success', '', true);

        if (!$kassa->getEPL()) {
            $this->jsonError('Invalid payment method');
        }

        $payment = $this->getModel()->createPayment($orderId, $paymentMethod);

        if ($payment === null) {
            $this->jsonError('Платеж не прошел. Попробуйте еще или выберите другой способ оплаты');
        } elseif ($payment->getStatus() === PaymentStatus::CANCELED) {
            $this->jsonError('Платеж не прошел. Попробуйте еще или выберите другой способ оплаты');
        }

        $result = array(
            'success'  => true,
            'redirect' => $successUrl,
        );

        $confirmation = $payment->getConfirmation();

        if ($confirmation !== null) {
            if ($confirmation->getType() === ConfirmationType::REDIRECT) {
                $result['redirect'] = $confirmation->getConfirmationUrl();
                $this->getModel()->getKassaLog()->sendHeka(array('payment.redirect.init'));
            }
        }

        if ($kassa->getCreateOrderBeforeRedirect()) {
            $this->getModel()->log('info', 'Confirm order#'.$orderId.' after payment creation');
            $this->getModel()->addPaymentLinkToOrderHistory($orderId);
        }
        if ($kassa->getClearCartBeforeRedirect()) {
            $this->getModel()->log('info', 'Clear order#'.$orderId.' cart after payment creation');
            $this->cart->clear();
        }

        $output = ob_get_clean();
        if (!empty($output)) {
            $this->getModel()->log('warning', 'Non empty buffer: '.$output);
        }

        echo json_encode($result);
        exit();
    }

    /**
     * Экшен вызываемый при возврате пользователя из ЮKassa, проверяет статус платежа, добавляет в историю заказа
     * событие о создании платежа
     */
    public function confirm()
    {
        $this->load->language('extension/payment/'.self::MODULE_NAME);
        if (empty($_GET['order_id'])) {
            $this->failure('Не был передан идентификатор платежа');
        }
        $this->getModel()->log('info', 'Получение статуса платежа для заказа №'.$_GET['order_id']);
        $kassa = $this->getModel()->getKassaModel();
        if (!$kassa->isEnabled()) {
            $this->failure('Модуль оплаты выключен');
        }
        $orderId   = (int)$_GET['order_id'];
        $paymentId = $this->getModel()->findPaymentIdByOrderId($orderId);
        if (empty($paymentId)) {
            $this->failure('Не удалось получить ID платежа для заказа №'.$orderId);
        }
        $this->load->model('checkout/order');
        $payment = $this->getModel()->updatePaymentInfo($paymentId);
        if ($payment === null) {
            $this->failure('Не найден платёж '.$paymentId.' для заказа №'.$orderId);
        } elseif (!$payment->getPaid()) {
            $this->failure('Платёж не был проведён');
        } elseif ($payment->getStatus() === PaymentStatus::CANCELED) {
            $this->failure('Статус платежа '.$paymentId.' заказа №'.$orderId.' - canceled');
        } elseif ($payment->getStatus() !== PaymentStatus::SUCCEEDED) {
            $this->getModel()->log('info', 'Confirm order#'.$orderId.' with payment '.$payment->getId());
        }
        $this->getModel()->log('info', 'Статус платежа '.$paymentId.' заказа №'.$orderId. '-' . $payment->getStatus());
        $this->response->redirect($this->url->link('checkout/success', '', true));
    }

    public function validate()
    {
        $this->jsonError('Unknown payment type');
        exit();
    }

    /**
     * Экшен обработки нотификации для проведения capture платежа
     */
    public function capture()
    {
        if (!$this->getModel()->getKassaModel()->isEnabled()) {
            header('HTTP/1.1 403 Module disabled');
            exit();
        }
        $source = file_get_contents('php://input');
        if (empty($source)) {
            header('HTTP/1.1 400 Empty request body');
            exit();
        }

        $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.init'));

        $json = json_decode($source, true);
        if (empty($json)) {
            if (json_last_error() === JSON_ERROR_NONE) {
                $message = 'empty object in body';
            } else {
                $message = 'invalid object in body: '.$source;
            }
            $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.fail'));
            $this->getModel()->log('warning', 'Invalid parameters in capture notification controller - '.$message);
            header('HTTP/1.1 400 Invalid json object in body');
            exit();
        }

        $this->getModel()->log('info', 'Notification: '.$source);

        try {
            $factory = new NotificationFactory();
            $notification = $factory->factory($json);
        } catch (\Exception $e) {
            $this->getModel()->log('error', 'Invalid notification object - '.$e->getMessage());
            $this->getModel()->getKassaLog()->sendAlertLog('Invalid notification object', array(
                'methodid' => 'POST/capture',
                'exception' => $e,
            ), array('payment.notification.fail'));
            header('HTTP/1.1 400 Invalid object in body');
            exit();
        }

        $metadata = $notification->getObject()->getMetadata();

        if (
            isset($metadata['cms_name'])
            && !in_array($metadata['cms_name'], array(
                ModelExtensionPaymentYoomoney::CMS_NAME,
                ModelExtensionPaymentYoomoney::CMS_NAME_OLD,
                ModelExtensionPaymentYoomoney::CMS_NAME_INVOICE))
        ) {
            $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.skip'));
            $this->getModel()->log('info', 'This notification not for opencart3. This notification for: ' . $metadata['cms_name']);
            header('HTTP/1.1 400 Invalid object in body');
            exit();
        }

        $paymentId = $notification instanceof NotificationRefundSucceeded
            ? $notification->getObject()->getPaymentId()
            : $notification->getObject()->getId();

        $orderId = $this->getModel()->findOrderIdByPayment($paymentId);
        $this->load->model('checkout/order');
        $orderInfo = $this->model_checkout_order->getOrder($orderId);

        if ($orderId <= 0 || empty($orderInfo)) {
            $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.skip'));
            $this->getModel()->log('error', 'Order not exists for payment ' . $paymentId);
            exit();
        }

        if ($notification->getEvent() === NotificationEventType::REFUND_SUCCEEDED) {
            $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.skip'));
            $this->getModel()->log('info', 'Refund success for order #'.$orderId);
            exit();
        }

        $fetchedPayment = $this->getModel()->updatePaymentInfo($paymentId);

        if ($fetchedPayment === null) {
            $this->getModel()->log('error', 'Payment not not found');
        }

        $notificationEvent = $notification->getEvent();
        $fetchedPaymentStatus = $fetchedPayment->getStatus();

        if (
            $notificationEvent === NotificationEventType::PAYMENT_CANCELED
            && $fetchedPaymentStatus === PaymentStatus::CANCELED
        ) {
            $this->processPaymentCancelNotification($notification, $orderInfo, $orderId);
        }

        if (
            $notificationEvent === NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE
            && $fetchedPaymentStatus === PaymentStatus::WAITING_FOR_CAPTURE
        ) {
            $this->processPaymentWaitingForCaptureNotification($orderId);
        }

        if (
            $notificationEvent === NotificationEventType::PAYMENT_SUCCEEDED
            && $fetchedPaymentStatus === PaymentStatus::SUCCEEDED
        ) {
            $this->processPaymentSucceededNotification($notification, $orderInfo, $orderId, $fetchedPayment);
        }

        $this->getModel()->log('warning', 'Wrong notification (' . $notificationEvent . ') and payment(' . $fetchedPaymentStatus . ') status');
        $this->getModel()->getKassaLog()->sendHeka(array('payment.notification.skip'));
    }

    /**
     * @param AbstractNotification $notification
     * @param array $orderInfo
     * @param int $statusId
     * @return void
     * @throws Exception
     */
    private function handleSberLoan($notification, $orderInfo, $statusId)
    {
        $notifyPaymentMethod = $notification->getObject()->getPaymentMethod();
        $paymentId = $notification->getObject()->getId();

        $discountAmount = $notifyPaymentMethod->getDiscountAmount()->value;
        $this->getModel()->log(
            'info',
            'Sber loan. Discount amount: ' . $discountAmount
        );
        $this->addDiscountToOrder($orderInfo, $discountAmount);

        $paymentAmount = $notification->getObject()->getAmount()->getValue();
        $this->getModel()->updatePaymentAmount($paymentId, $paymentAmount);

        $this->load->language('extension/payment/'.self::MODULE_NAME);
        $this->getModel()->addOrderHistory(
            $orderInfo['order_id'],
            $statusId,
            $this->language->get('text_history_sber_loan_discount') . $discountAmount
        );
    }

    /**
     * Вычисление процента из числа
     *
     * @param float $total Общая сумма
     * @param float $percent Процент, который хотим вычесть из числа
     *
     * @return float
     */
    private function calculateTotalFromPercent($total, $percent)
    {
        return $total - ($percent * ($total / 100));
    }

    public function callback()
    {
        $this->getModel()->log('info', "callback:  request \n" . print_r($_REQUEST, true));
        $this->getModel()->log('warning', 'callback: YooMoney payment type is not available.');
        exit('YooMoney payment type is not available.');
    }

    public function repay()
    {
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link(
                'extension/payment/yoomoney/repay', 'order_id='.$this->request->get['order_id'], true
            );
            $this->response->redirect($this->url->link('account/login', '', true));
        }
        $this->load->model('account/order');
        $order = $this->model_account_order->getOrder((int)$this->request->get['order_id']);
        if (empty($order)) {
            $this->response->redirect(
                $this->url->link('account/order/info', 'order_id='.$this->request->get['order_id'], true)
            );
        }
        $this->response->setOutput($this->payment($order, true));
    }

    /**
     * @param $route
     * @param $args
     */
    public function hookOrderStatusChange(&$route, &$args)
    {
        $orderId  = (int)$args[0];
        $statusId = (int)$args[1];
        $this->getModel()->hookOrderStatusChange($orderId, $statusId);
    }

    /**
     * @param $price
     *
     * @return string
     */
    private function formatPrice($price)
    {
        $price = number_format((float)$price, 2, '.', '');

        return $price < 0 ? 0 : $price;
    }


    /**
     * @return ModelExtensionPaymentYoomoney
     */
    public function getModel()
    {
        if ($this->_model === null) {
            $this->load->model('extension/payment/yoomoney');
            $this->_model = $this->model_extension_payment_yoomoney;
        }

        return $this->_model;
    }

    /**
     * @param $orderInfo
     * @param $discountAmount
     * @return void
     */
    private function addDiscountToOrder($orderInfo, $discountAmount)
    {
        $discount = (float)str_replace(' ', '', $discountAmount);
        $orderTotal =  $orderInfo['total'];

        /** Высчитываем процент, по которому будем вычислять скидку для всех позиций в заказе */
        $percentDiscount = round(100 / ($orderTotal / (int)$discount), 1);

        $orderId = $orderInfo['order_id'];

        $this->load->model('account/order');
        $this->load->model('account/customer');

        $products = $this->model_checkout_order->getOrderProducts($orderId);
        $vouchers = $this->model_checkout_order->getOrderVouchers($orderId);
        $totals = $this->model_checkout_order->getOrderTotals($orderId);

        $isTaxInOrder = false;
        $isDeliveryInOrder = false;
        foreach($totals as $total) {
            if ($total['code'] === 'tax') {
                $isTaxInOrder = true;
            }

            if ($total['code'] === 'shipping') {
                $isDeliveryInOrder = true;
            }
        }

        $taxAndShippingInOrder = $isTaxInOrder && $isDeliveryInOrder;

        if ($taxAndShippingInOrder) {
            foreach ($totals as $index => $total) {
                if ($total['code'] === 'total') {
                    $totals[$index]['value'] = $this->calculateTotalFromPercent($total['value'], $percentDiscount);
                }
            }
        }

        if (!$taxAndShippingInOrder) {
            foreach ($totals as $index => $total) {
                if ($total['value']) {
                    $totals[$index]['value'] = $this->calculateTotalFromPercent($total['value'], $percentDiscount);
                }
            }
        }


        foreach ($products as $index => $product) {
            if (!$taxAndShippingInOrder) {
                $products[$index]['total'] = $this->calculateTotalFromPercent($product['total'], $percentDiscount);
                $products[$index]['tax'] = $this->calculateTotalFromPercent($product['tax'], $percentDiscount);
            }
            $products[$index]['option'] = $this->model_checkout_order->getOrderOptions($orderId, $product['order_product_id']);
        }

        $orderInfo['products'] = $products;
        $orderInfo['vouchers'] = $vouchers;
        $orderInfo['totals'] = $totals;
        $orderInfo['total'] = $this->calculateTotalFromPercent($orderInfo['total'], $percentDiscount);
        $customerInfo = $this->model_account_customer->getCustomer($orderInfo['customer_id']);
        $orderInfo['customer_group_id'] = isset($customerInfo['customer_group_id']) ? $customerInfo['customer_group_id'] : 1;

        $this->model_checkout_order->editOrder($orderId, $orderInfo);
    }

    private function processPaymentCancelNotification($notification, $orderInfo, $orderId)
    {
        $notifyPaymentMethod = $notification->getObject()->getPaymentMethod();
        $canceledStatusId = $this->getModel()->getKassaModel()->getOrderCanceledStatus();
        $this->load->language('extension/payment/'.self::MODULE_NAME);
        $cancellationDetails = $notification->getObject()->getCancellationDetails();
        $changeStatus = $cancellationDetails
            && $cancellationDetails->getParty() === CancellationDetailsPartyCode::MERCHANT
            && $cancellationDetails->getReason() === CancellationDetailsReasonCode::CANCELED_BY_MERCHANT;

        if (
            $notifyPaymentMethod
            && $notifyPaymentMethod->getType() === PaymentMethodType::SBER_LOAN
            && $notifyPaymentMethod->getDiscountAmount()
        ) {
            $this->load->model('checkout/order');
            $statusId = $changeStatus ? $canceledStatusId : $orderInfo['order_status_id'];
            try {
                $this->handleSberLoan($notification, $orderInfo, $canceledStatusId);
                if (!$changeStatus) {
                    // Возвращаем исходный статус заказу, т.к. он изменяется на 0 при вызове editOrder()
                    $this->getModel()->updateOrderStatus($orderId, array('order_status_id' => $statusId));
                }
            } catch (Exception $e) {
                $this->getModel()->log(
                    'error',
                    'Sber loan. Discount apply error',
                    array('exception' => $e)
                );
                $this->getModel()->getKassaLog()->sendAlertLog('Sber loan. Discount apply error', array(
                    'methodid' => 'POST/capture',
                    'exception' => $e,
                ));
            }
        }

        if ($changeStatus) {
            $this->getModel()->updateOrderStatus(
                $orderId,
                array('order_status_id' => $canceledStatusId),
                $this->language->get('cancel_payment_success_message')
            );
            //добавляем ссылку на повторную оплату в истории
            $this->getModel()->addPaymentLinkToOrderHistory($orderId, $canceledStatusId);
            $this->getModel()->log('info', 'Order #'.$orderId.' status changed to ' . $canceledStatusId);
        }
        $this->getModel()->log('info', 'Payment for order #'.$orderId.' cancelled');
        $shopId = $this->config->get('yoomoney_kassa_shop_id') ?: 'null';
        $this->getModel()->getKassaLog()->sendHeka(array(
            'shop.'.$shopId.'.payment.canceled',
            'payment.notification.success',
        ));
        exit();
    }

    private function processPaymentWaitingForCaptureNotification($orderId)
    {
        $kassa = $this->getModel()->getKassaModel();
        $this->load->language('extension/payment/'.self::MODULE_NAME);
        $this->getModel()->getKassaLog()->sendHeka(array('order-status.change.init'));
        $this->model_checkout_order->addOrderHistory(
            $orderId,
            $kassa->getHoldOrderStatusId(),
            $this->language->get('text_payment_on_hold')
        );
        $this->getModel()->getKassaLog()->sendHeka(array('order-status.change.success'));
        $this->getModel()->disablePaymentLink($orderId);
        $shopId = $this->config->get('yoomoney_kassa_shop_id') ?: 'null';
        $this->getModel()->getKassaLog()->sendHeka(array(
            'shop.'.$shopId.'.payment.waiting_for_capture',
            'payment.notification.success',
        ));
        exit();
    }

    private function processPaymentSucceededNotification($notification, $orderInfo, $orderId, $fetchedPayment)
    {
        $successOrderStatusId = $this->getModel()->getKassaModel()->getSuccessOrderStatusId();

        $paymentMethod = $notification->getObject()->getPaymentMethod();
        if ($paymentMethod->getType() === PaymentMethodType::SBER_LOAN && $paymentMethod->getDiscountAmount()) {

            try {
                $this->handleSberLoan($notification, $orderInfo, $successOrderStatusId);
            } catch (Exception $e) {
                $message = 'Sber loan. Error applying discount';
                $this->getModel()->log(
                    'error',
                    $message,
                    array('exception' => $e->getMessage())
                );
                $this->getModel()->getKassaLog()->sendAlertLog($message, array(
                    'methodid' => 'POST/capture',
                    'exception' => $e,
                ), array('payment.notification.fail'));
                exit();
            }
        }
        $this->getModel()->confirmOrderPayment($orderId, $fetchedPayment, $successOrderStatusId);

        $shopId = $this->config->get('yoomoney_kassa_shop_id') ?: 'null';
        $stat = $this->getModel()->getSuccessPaymentStat();
        if (!empty($stat)) {
            $host = str_replace(array('http://', 'https://', '.', '/', ':'), array('', '', '-', '-', '-'), trim(HTTPS_SERVER, '/'));
            $this->getModel()->getKassaLog()->sendHeka(array(
                'shop.' . $shopId . '.payment.succeeded',
                'shop.' . $shopId . '.host.' . $host . '.payment-count' => array(
                    'metric_type' => 'gauges',
                    'metric_count' => $stat['count']
                ),
                'shop.' . $shopId . '.host.' . $host . '.payment-total' => array(
                    'metric_type' => 'gauges',
                    'metric_count' => $stat['total']
                ),
                'payment.notification.success',
            ));
        }

        exit();
    }
}
