<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flowertheme/template/common/cart.twig */
class __TwigTemplate_fb33d9a2813ace25c3690fc0d86a9841d83018c3c5b1e1eecb90178b641aeb4b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"cart\">
    <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"cart-btn dropdown-toggle\">
    <span id=\"cart-total\">
      <i class=\"fa fa-shopping-bag\"></i>
      <span class=\"cart-text\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</span>
      <span class=\"cart-count-badge\">";
        // line 6
        echo twig_trim_filter(twig_replace_filter(($context["text_items"] ?? null), ["(" => "", ")" => "", "item" => "", "items" => ""]));
        echo "</span>
    </span>
    </button>
    <ul class=\"dropdown-menu pull-right cart-dropdown\">
        ";
        // line 10
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 11
            echo "            <li>
                <div class=\"cart-header\">
                    <h4>";
            // line 13
            echo ($context["text_cart_title"] ?? null);
            echo "</h4>
                    <span class=\"cart-items-count\">";
            // line 14
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + twig_length_filter($this->env, ($context["vouchers"] ?? null)));
            echo " ";
            echo ($context["text_items_suffix"] ?? null);
            echo "</span>
                </div>
                <div class=\"cart-items\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "                        <div class=\"cart-item\">
                            <div class=\"item-image\">
                                ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" class=\"img-thumbnail\" /></a>
                                ";
                }
                // line 23
                echo "                            </div>
                            <div class=\"item-details\">
                                <a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\" class=\"item-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a>
                                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                                    <div class=\"item-options\">
                                        ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 29
                        echo "                                            <small>";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29);
                        echo "</small>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                                    </div>
                                ";
                }
                // line 33
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                                    <div class=\"item-recurring\">
                                        <small>";
                    // line 35
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35);
                    echo "</small>
                                    </div>
                                ";
                }
                // line 38
                echo "                                <div class=\"item-quantity-price\">
                                    <span class=\"quantity\">x ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39);
                echo "</span>
                                    <span class=\"price\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 40);
                echo "</span>
                                </div>
                            </div>
                            <button type=\"button\" onclick=\"cart.remove('";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 43);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-remove\">
                                <i class=\"fa fa-trash\"></i>
                            </button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 49
                echo "                        <div class=\"cart-item voucher-item\">
                            <div class=\"item-image\">
                                <i class=\"fa fa-gift\"></i>
                            </div>
                            <div class=\"item-details\">
                                <span class=\"item-name\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 54);
                echo "</span>
                                <div class=\"item-quantity-price\">
                                    <span class=\"quantity\">x 1</span>
                                    <span class=\"price\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 57);
                echo "</span>
                                </div>
                            </div>
                            <button type=\"button\" onclick=\"voucher.remove('";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 60);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-remove\">
                                <i class=\"fa fa-trash\"></i>
                            </button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </div>
            </li>
            <li>
                <div class=\"cart-summary\">
                    <div class=\"totals\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 71
                echo "                            <div class=\"total-row ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 71)) {
                    echo "total-final";
                }
                echo "\">
                                <span class=\"total-title\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 72);
                echo "</span>
                                <span class=\"total-value\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 73);
                echo "</span>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    </div>
                    <div class=\"cart-actions\">
                        <a href=\"";
            // line 78
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-cart\">
                            <i class=\"fa fa-shopping-bag\"></i> ";
            // line 79
            echo ($context["text_cart"] ?? null);
            echo "
                        </a>
                        <a href=\"";
            // line 81
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-checkout\">
                            <i class=\"fa fa-credit-card\"></i> ";
            // line 82
            echo ($context["text_checkout"] ?? null);
            echo "
                        </a>
                    </div>
                </div>
            </li>
        ";
        } else {
            // line 88
            echo "            <li>
                <div class=\"empty-cart\">
                    <i class=\"fa fa-shopping-bag\"></i>
                    <p>";
            // line 91
            echo ($context["text_empty"] ?? null);
            echo "</p>
                </div>
            </li>
        ";
        }
        // line 95
        echo "    </ul>
</div>

<style>
    /* Основные стили корзины */
    #cart {
        position: relative;
    }

    .cart-btn {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 25px;
        padding: 8px 15px;
        color: #333;
        transition: all 0.3s ease;
        position: relative;
    }

    .cart-btn:hover {
        border-color: #337ab7;
        background: #f8f9fa;
    }

    .cart-btn .fa-shopping-bag {
        color: #337ab7;
        margin-right: 5px;
    }

    .cart-text {
        font-weight: 500;
    }

    .cart-count-badge {
        background: #e74c3c;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: bold;
        margin-left: 5px;
    }

    /* Выпадающее меню корзины */
    .cart-dropdown {
        width: 320px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        padding: 0;
        margin-top: 10px;
    }

    .cart-header {
        padding: 15px 20px;
        border-bottom: 1px solid #f0f0f0;
        background: #f8f9fa;
        border-radius: 10px 10px 0 0;
    }

    .cart-header h4 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }

    .cart-items-count {
        font-size: 12px;
        color: #666;
    }

    /* Элементы корзины */
    .cart-items {
        max-height: 300px;
        overflow-y: auto;
        padding: 10px 0;
        background: aliceblue;
    }

    .cart-item {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        border-bottom: 1px solid #f5f5f5;
        transition: background 0.2s ease;
    }

    .cart-item:hover {
        background: #f8f9fa;
    }

    .item-image {
        width: 50px;
        height: 50px;
        margin-right: 12px;
        flex-shrink: 0;
    }

    .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 6px;
    }

    .item-image .fa-gift {
        font-size: 24px;
        color: #e74c3c;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .item-details {
        flex-grow: 1;
        min-width: 0;
    }

    .item-name {
        font-weight: 500;
        color: #333;
        text-decoration: none;
        display: block;
        margin-bottom: 4px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .item-name:hover {
        color: #337ab7;
    }

    .item-options,
    .item-recurring {
        margin-bottom: 4px;
    }

    .item-options small,
    .item-recurring small {
        color: #666;
        font-size: 11px;
        display: block;
    }

    .item-quantity-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .quantity {
        color: #666;
        font-size: 13px;
    }

    .price {
        font-weight: 600;
        color: #2c3e50;
    }

    .btn-remove {
        background: none;
        border: none;
        color: #e74c3c;
        cursor: pointer;
        padding: 5px;
        margin-left: 10px;
        opacity: 0.7;
        transition: opacity 0.2s ease;
    }

    .btn-remove:hover {
        opacity: 1;
        background: none;
    }

    /* Итоги */
    .cart-summary {
        padding: 15px 20px;
        background: #f8f9fa;
        border-radius: 0 0 10px 10px;
    }

    .totals {
        margin-bottom: 15px;
    }

    .total-row {
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
        font-size: 14px;
    }

    .total-final {
        border-top: 1px solid #ddd;
        margin-top: 5px;
        padding-top: 10px;
        font-weight: 600;
        font-size: 16px;
        color: #2c3e50;
    }

    .total-title {
        color: #666;
    }

    .total-value {
        font-weight: 500;
    }

    /* Кнопки действий */
    .cart-actions {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .btn-cart,
    .btn-checkout {
        padding: 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 500;
        font-size: 13px;
        transition: all 0.3s ease;
    }

    .btn-cart {
        background: #6c757d;
        color: white;
        border: 1px solid #6c757d;
    }

    .btn-cart:hover {
        background: #5a6268;
        color: white;
    }

    .btn-checkout {
        background: #28a745;
        color: white;
        border: 1px solid #28a745;
    }

    .btn-checkout:hover {
        background: #218838;
        color: white;
    }

    /* Пустая корзина */
    .empty-cart {
        text-align: center;
        padding: 30px 20px;
    }

    .empty-cart .fa-shopping-bag {
        font-size: 48px;
        color: #ddd;
        margin-bottom: 15px;
    }

    .empty-cart p {
        color: #666;
        margin-bottom: 15px;
    }

    .btn-continue {
        background: #337ab7;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 6px;
        text-decoration: none;
    }

    .btn-continue:hover {
        background: #286090;
        color: white;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .cart-dropdown {
            width: 280px;
            right: -50px;
        }

        .cart-actions {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .cart-text {
            display: none;
        }

        .cart-btn {
            padding: 8px 12px;
        }
    }
</style>

<script>
    // Обновление бейджа с количеством товаров
    function updateCartBadge() {
        const cartText = document.getElementById('cart-total').textContent;
        const countMatch = cartText.match(/(\\d+)/);
        if (countMatch) {
            const count = countMatch[1];
            const badge = document.querySelector('.cart-count-badge');
            if (badge) {
                badge.textContent = count;
            } else {
                // Создаем бейдж если его нет
                const badge = document.createElement('span');
                badge.className = 'cart-count-badge';
                badge.textContent = count;
                document.querySelector('#cart-total').appendChild(badge);
            }
        }
    }

    // Инициализация при загрузке
    document.addEventListener('DOMContentLoaded', function() {
        updateCartBadge();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "flowertheme/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 95,  291 => 91,  286 => 88,  277 => 82,  273 => 81,  268 => 79,  264 => 78,  260 => 76,  243 => 73,  239 => 72,  232 => 71,  215 => 70,  208 => 65,  195 => 60,  189 => 57,  183 => 54,  176 => 49,  171 => 48,  158 => 43,  152 => 40,  148 => 39,  145 => 38,  137 => 35,  134 => 34,  131 => 33,  127 => 31,  116 => 29,  112 => 28,  109 => 27,  107 => 26,  101 => 25,  97 => 23,  85 => 21,  83 => 20,  79 => 18,  75 => 17,  67 => 14,  63 => 13,  59 => 11,  57 => 10,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/common/cart.twig", "");
    }
}
