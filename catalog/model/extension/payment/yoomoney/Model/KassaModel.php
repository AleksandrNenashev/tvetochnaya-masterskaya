<?php

namespace YooMoneyModule\Model;

use Config;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Payment;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;

class KassaModel extends AbstractPaymentModel
{
    protected $shopId;
    protected $password;
    protected $epl = true;
    protected $isSendReceipt;
    protected $isSecondReceipt;
    protected $secondReceiptStatusId;
    protected $defaultTaxRate;
    protected $defaultTaxSystemCode;
    protected $taxRates;
    protected $log;
    protected $testMode;
    protected $showInFooter;
    protected $payment_description;
    protected $enableHoldMode;
    protected $holdOrderStatus;
    protected $orderCanceledStatus;
    protected $b2bSberbankEnabled;
    protected $b2bSberbankPaymentPurpose;
    protected $b2bSberbankDefaultTaxRate;
    protected $b2bTaxRates;
    protected $defaultPaymentMode;
    protected $defaultPaymentSubject;
    protected $defaultDeliveryPaymentMode;
    protected $defaultDeliveryPaymentSubject;
    protected $defaultVoucherPaymentMode;
    protected $defaultVoucherPaymentSubject;
    protected $currency;
    protected $currency_convert;
    protected $oauthToken;
    protected $isTestShop;
    protected $isFiscalizationEnabled;
    protected $oauthTokenExpiresIn;
    protected $oauthCmsState;
    protected $isSberLoanAvailable;

    public function __construct(Config $config)
    {
        parent::__construct($config, self::PAYMENT_KASSA);

        $this->shopId                 = $this->getConfigValue('shop_id');
        $this->password               = $this->getConfigValue('password');
        $this->payment_description    = $this->getConfigValue('payment_description');
        $this->enableHoldMode         = (bool)$this->getConfigValue('enable_hold_mode');
        $this->holdOrderStatus        = $this->getConfigValue('hold_order_status');
        $this->orderCanceledStatus    = $this->getConfigValue('cancel_order_status');
        $this->oauthToken             = $this->getConfigValue('access_token');
        $this->oauthTokenExpiresIn    = $this->getConfigValue('token_expires_in');
        $this->oauthCmsState          = $this->getConfigValue('oauth_state');

        $this->testMode = false;
        if ($this->enabled && strncmp('test_', $this->password, 5) === 0) {
            $this->testMode = true;
        }

        $this->isSendReceipt         = (bool)$this->getConfigValue('send_receipt');
        $this->isSecondReceipt       = (bool)$this->getConfigValue('second_receipt_enable');
        $this->secondReceiptStatusId = (int)$this->getConfigValue('second_receipt_status');
        $this->defaultTaxRate        = (int)$this->getConfigValue('tax_rate_default');
        $this->defaultTaxSystemCode  = (int)$this->getConfigValue('tax_system_default');
        $this->log                   = (bool)$this->getConfigValue('debug_log');

        $this->taxRates = array();
        $tmp            = $this->getConfigValue('tax_rates');
        if (!empty($tmp)) {
            if (is_array($tmp)) {
                foreach ($tmp as $shopTaxRateId => $kassaTaxRateId) {
                    $this->taxRates[$shopTaxRateId] = $kassaTaxRateId;
                }
            }
        }

        $this->createOrderBeforeRedirect   = $this->getConfigValue('create_order_before_redirect');
        $this->clearCartAfterOrderCreation = $this->getConfigValue('clear_cart_before_redirect');

        $this->showInFooter = $this->getConfigValue('show_in_footer');

        $this->b2bSberbankEnabled            = $this->getConfigValue('b2b_sberbank_enabled');
        $this->b2bSberbankPaymentPurpose     = $this->getConfigValue('b2b_sberbank_payment_purpose');
        $this->b2bSberbankDefaultTaxRate     = $this->getConfigValue('b2b_tax_rate_default');
        $this->b2bTaxRates                   = $this->getConfigValue('b2b_tax_rates');
        $this->defaultPaymentMode            = $this->getConfigValue('payment_mode_default');
        $this->defaultPaymentSubject         = $this->getConfigValue('payment_subject_default');
        $this->defaultDeliveryPaymentMode    = $this->getConfigValue('delivery_payment_mode_default');
        $this->defaultDeliveryPaymentSubject = $this->getConfigValue('delivery_payment_subject_default');
        $this->defaultVoucherPaymentMode     = $this->getConfigValue('voucher_payment_mode_default');
        $this->defaultVoucherPaymentSubject  = $this->getConfigValue('voucher_payment_subject_default');

        $this->currency                      = $this->getConfigValue('currency');
        $this->currency_convert              = $this->getConfigValue('currency_convert');
    }

    public function isTestMode()
    {
        return $this->testMode;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEPL()
    {
        return $this->epl;
    }

    public function isSendReceipt()
    {
        return $this->isSendReceipt;
    }

    public function isSecondReceipt()
    {
        return $this->isSecondReceipt;
    }

    public function getSecondReceiptStatus()
    {
        return $this->secondReceiptStatusId;
    }

    public function getTaxRateList()
    {
        return array(1, 2, 7, 8, 3, 4, 9, 10, 5, 6);
    }

    public function getTaxSystemCodeList()
    {
        return array(1, 2, 3, 4, 5, 6);
    }

    public function getB2bTaxRateList()
    {
        return array(VatDataType::UNTAXED, VatDataRate::RATE_5, VatDataRate::RATE_7, VatDataRate::RATE_10, VatDataRate::RATE_18, VatDataRate::RATE_20);
    }

    public function getB2bTaxRateId($shopTaxRateId)
    {
        if (isset($this->b2bTaxRates[$shopTaxRateId])) {
            return $this->b2bTaxRates[$shopTaxRateId];
        }

        return $this->defaultTaxRate;
    }

    public function getDefaultTaxRate()
    {
        return $this->defaultTaxRate;
    }

    public function getTaxRateId($shopTaxRateId)
    {
        if (isset($this->taxRates[$shopTaxRateId])) {
            return $this->taxRates[$shopTaxRateId];
        }

        return $this->defaultTaxRate;
    }

    public function getTaxRates()
    {
        return $this->taxRates;
    }

    public function getDefaultTaxSystemCode()
    {
        return $this->defaultTaxSystemCode;
    }

    public function getDebugLog()
    {
        return $this->log;
    }

    public function getShowLinkInFooter()
    {
        return $this->showInFooter;
    }

    /**
     * @param array $templateData
     * @param $controller
     *
     * @return string
     */
    public function applyTemplateVariables($controller, &$templateData, $orderInfo)
    {
        $templateData[self::PAYMENT_KASSA] = $this;
        $templateData['image_base_path']   = HTTPS_SERVER.'image/catalog/payment/yoomoney';
        $templateData['validate_url']      = $controller->url->link('extension/payment/yoomoney/create', '', true);

        $templateData['amount']            = $orderInfo['total'];
        $templateData['comment']           = $orderInfo['comment'];
        $templateData['orderId']           = $orderInfo['order_id'];
        $templateData['customerNumber']    = trim($orderInfo['order_id'].' '.$orderInfo['email']);
        $templateData['orderText']         = $orderInfo['comment'];

        return 'extension/payment/yoomoney/kassa_form';
    }

    /**
     * @return mixed
     */
    public function getPaymentDescription()
    {
        return $this->payment_description;
    }

    /**
     * @return mixed
     */
    public function getEnableHoldMode()
    {
        return $this->enableHoldMode;
    }

    /**
     * @return mixed
     */
    public function getHoldOrderStatusId()
    {
        return $this->holdOrderStatus;
    }

    /**
     * @return mixed
     */
    public function getOrderCanceledStatus()
    {
        return $this->orderCanceledStatus;
    }

    /**
     * @return mixed
     */
    public function getB2bSberbankEnabled()
    {
        return $this->b2bSberbankEnabled;
    }

    /**
     * @return mixed
     */
    public function getB2bSberbankPaymentPurpose()
    {
        return $this->b2bSberbankPaymentPurpose;
    }

    /**
     * @return mixed
     */
    public function getB2bSberbankDefaultTaxRate()
    {
        return $this->b2bSberbankDefaultTaxRate;
    }

    /**
     * @return mixed
     */
    public function getB2bTaxRates()
    {
        return $this->b2bTaxRates;
    }

    /**
     * @return mixed
     */
    public function getDefaultPaymentMode()
    {
        return $this->defaultPaymentMode;
    }

    /**
     * @return mixed
     */
    public function getDefaultPaymentSubject()
    {
        return $this->defaultPaymentSubject;
    }

    /**
     * @return mixed
     */
    public function getDefaultDeliveryPaymentMode()
    {
        return $this->defaultDeliveryPaymentMode;
    }

    /**
     * @return mixed
     */
    public function getDefaultDeliveryPaymentSubject()
    {
        return $this->defaultDeliveryPaymentSubject;
    }

    /**
     * @return mixed
     */
    public function getDefaultVoucherPaymentMode()
    {
        return $this->defaultVoucherPaymentMode;
    }

    /**
     * @return mixed
     */
    public function getDefaultVoucherPaymentSubject()
    {
        return $this->defaultVoucherPaymentSubject;
    }

    /**
     * @return array
     */
    public function getPaymentModeEnum()
    {
        return array(
            PaymentMode::FULL_PREPAYMENT    => 'Полная предоплата ('.PaymentMode::FULL_PREPAYMENT.')',
            PaymentMode::PARTIAL_PREPAYMENT => 'Частичная предоплата ('.PaymentMode::PARTIAL_PREPAYMENT.')',
            PaymentMode::ADVANCE            => 'Аванс ('.PaymentMode::ADVANCE.')',
            PaymentMode::FULL_PAYMENT       => 'Полный расчет ('.PaymentMode::FULL_PAYMENT.')',
            PaymentMode::PARTIAL_PAYMENT    => 'Частичный расчет и кредит ('.PaymentMode::PARTIAL_PAYMENT.')',
            PaymentMode::CREDIT             => 'Кредит ('.PaymentMode::CREDIT.')',
            PaymentMode::CREDIT_PAYMENT     => 'Выплата по кредиту ('.PaymentMode::CREDIT_PAYMENT.')',
        );
    }

    /**
     * @return array
     */
    public function getPaymentSubjectEnum()
    {
        return array(
            PaymentSubject::COMMODITY             => 'Товар ('.PaymentSubject::COMMODITY.')',
            PaymentSubject::EXCISE                => 'Подакцизный товар ('.PaymentSubject::EXCISE.')',
            PaymentSubject::JOB                   => 'Работа ('.PaymentSubject::JOB.')',
            PaymentSubject::SERVICE               => 'Услуга ('.PaymentSubject::SERVICE.')',
            PaymentSubject::GAMBLING_BET          => 'Ставка в азартной игре ('.PaymentSubject::GAMBLING_BET.')',
            PaymentSubject::GAMBLING_PRIZE        => 'Выигрыш в азартной игре ('.PaymentSubject::GAMBLING_PRIZE.')',
            PaymentSubject::LOTTERY               => 'Лотерейный билет ('.PaymentSubject::LOTTERY.')',
            PaymentSubject::LOTTERY_PRIZE         => 'Выигрыш в лотерею ('.PaymentSubject::LOTTERY_PRIZE.')',
            PaymentSubject::INTELLECTUAL_ACTIVITY => 'Результаты интеллектуальной деятельности ('.PaymentSubject::INTELLECTUAL_ACTIVITY.')',
            PaymentSubject::PAYMENT               => 'Платеж ('.PaymentSubject::PAYMENT.')',
            PaymentSubject::AGENT_COMMISSION      => 'Агентское вознаграждение ('.PaymentSubject::AGENT_COMMISSION.')',
            PaymentSubject::COMPOSITE             => 'Несколько вариантов ('.PaymentSubject::COMPOSITE.')',
            PaymentSubject::ANOTHER               => 'Другое ('.PaymentSubject::ANOTHER.')',
        );
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency ?: CurrencyCode::RUB;
    }

    /**
     * @return bool
     */
    public function getCurrencyConvert()
    {
        return $this->currency_convert == 'on';
    }

    /**
     * @return string
     */
    public function getOauthToken()
    {
        return $this->oauthToken;
    }

    /**
     * @return bool
     */
    public function isTestShop()
    {
        return (bool)$this->isTestShop;
    }

    /**
     * @return bool
     */
    public function isFiscalisationEnabled()
    {
        return (bool)$this->isFiscalizationEnabled;
    }

    /**
     * @return mixed
     */
    public function getOauthTokenExpiresIn()
    {
        return $this->oauthTokenExpiresIn;
    }

    /**
     * @return mixed
     */
    public function getOauthCmsState()
    {
        return $this->oauthCmsState;
    }
}
