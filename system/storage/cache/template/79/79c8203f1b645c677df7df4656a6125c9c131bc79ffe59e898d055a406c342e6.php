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

/* default/template/extension/module/category.twig */
class __TwigTemplate_9653f61f6a880db534c1ff9e1aeac7e1679b9ed2ad48bc49ec70fa777ebbc362 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, $context, "column_left", [], "any", true, true, false, 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <div class=\"row sidebar-categories\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "            <div class=\"category-layout col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12\">
                <div class=\"category-thumb sidebar-thumb\">
                    <div class=\"category-image\">
                        <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">
                            <img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" />
                        </a>
                    </div>
                    <div class=\"category-caption\">
                        <h4><a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                echo "</a></h4>

                        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                            <div class=\"category-children\">
                                ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17), 0, 2));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                        echo "\" class=\"child-category\">
                                        <img src=\"";
                        // line 19
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 19);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                        echo "\" class=\"child-image\" />
                                        <span class=\"child-name\">";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                        echo "</span>
                                    </a>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                                ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23)) > 2)) {
                        // line 24
                        echo "                                    <div class=\"more-children\">
                                        <a href=\"";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
                        echo "\">+";
                        echo (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 25)) - 2);
                        echo " more</a>
                                    </div>
                                ";
                    }
                    // line 28
                    echo "                            </div>
                        ";
                }
                // line 30
                echo "                    </div>
                </div>
            </div>

            ";
                // line 35
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35) % 2) == 0)) {
                    // line 36
                    echo "                <div class=\"w-100 d-none d-sm-block d-md-none\"></div>
            ";
                }
                // line 38
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </div>
";
        } else {
            // line 41
            echo "    ";
            // line 42
            echo "    <div class=\"row main-categories\">
    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 44
                echo "        <div class=\"category-layout col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12\">
            <div class=\"category-thumb main-thumb\">
                <div class=\"category-image\">
                    <a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 47);
                echo "\">
                        <img src=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 48);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                echo "\" class=\"img-responsive\" />
                    </a>
                </div>
                <div class=\"category-caption\">
                    <h4><a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                echo "</a></h4>

                    ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "                        <div class=\"category-children\">
                            ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 56), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 57
                        echo "                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 57);
                        echo "\" class=\"child-category\">
                                    <img src=\"";
                        // line 58
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 58);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 58);
                        echo "\" class=\"child-image\" />
                                    <span class=\"child-name\">";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 59);
                        echo "</span>
                                </a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                            ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 62)) > 3)) {
                        // line 63
                        echo "                                <div class=\"more-children\">
                                    <a href=\"";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 64);
                        echo "\">+";
                        echo (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 64)) - 3);
                        echo " more</a>
                                </div>
                            ";
                    }
                    // line 67
                    echo "                        </div>
                    ";
                }
                // line 69
                echo "                </div>
            </div>
        </div>

        ";
                // line 74
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 74) % 3) == 0) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 74))) {
                    // line 75
                    echo "            </div><div class=\"row main-categories\">
        ";
                }
                // line 77
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </div>
";
        }
        // line 80
        echo "
<style>
    /*
    =============================================
    СТИЛИ ДЛЯ ГЛАВНОЙ СТРАНИЦЫ (3 в ряд)
    =============================================
    */
    .main-categories {
        margin-left: -15px;
        margin-right: -15px;
    }

    .main-categories .category-layout {
        padding-left: 15px;
        padding-right: 15px;
        margin-bottom: 30px;
    }

    .main-categories .category-thumb {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
        background: #fff;
        display: block;
    }

    .main-categories .category-thumb:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        transform: translateY(-5px);
        border-color: #337ab7;
    }

    .main-categories .category-image {
        margin-bottom: 15px;
    }

    .main-categories .category-image img {
        border-radius: 8px;
        height: 180px;
        object-fit: contain;
        width: 100%;
        padding: 10px;
        background: #f8f9fa;
    }

    .main-categories .category-caption h4 {
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
    }

    .main-categories .category-caption h4 a {
        color: #333;
        text-decoration: none;
    }

    .main-categories .category-caption h4 a:hover {
        color: #337ab7;
    }

    .main-categories .category-children {
        margin-bottom: 15px;
        text-align: left;
    }

    .main-categories .child-category {
        display: flex;
        align-items: center;
        padding: 8px 0;
        text-decoration: none;
        color: #666;
        border-bottom: 1px solid #f5f5f5;
    }

    .main-categories .child-category:hover {
        color: #337ab7;
        background-color: #f9f9f9;
    }

    .main-categories .child-image {
        width: 25px;
        height: 25px;
        object-fit: contain;
        border-radius: 4px;
        margin-right: 10px;
        flex-shrink: 0;
        background: #fff;
        padding: 2px;
        border: 1px solid #eee;
    }

    .main-categories .child-name {
        font-size: 14px;
        line-height: 1.3;
        flex-grow: 1;
    }

    .main-categories .more-children {
        text-align: center;
        padding: 10px 0;
    }

    .main-categories .more-children a {
        color: #999;
        font-size: 13px;
        text-decoration: none;
    }

    /* Адаптивность главной */
    @media (min-width: 992px) {
        .main-categories .category-layout {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    @media (max-width: 991px) and (min-width: 768px) {
        .main-categories .category-layout {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .main-categories .category-image img {
            height: 150px;
        }
    }

    @media (max-width: 767px) and (min-width: 576px) {
        .main-categories .category-layout {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .main-categories .category-thumb {
            padding: 15px;
        }
        .main-categories .category-image img {
            height: 120px;
        }
    }

    @media (max-width: 575px) {
        .main-categories .category-layout {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .main-categories .category-thumb {
            display: flex;
            align-items: flex-start;
            padding: 15px;
        }
        .main-categories .category-image {
            margin-bottom: 0;
            margin-right: 15px;
            width: 80px;
            flex-shrink: 0;
        }
        .main-categories .category-image img {
            height: 80px;
            padding: 0;
        }
        .main-categories .category-caption {
            flex-grow: 1;
        }
    }

    @media (max-width: 380px) {
        .main-categories .category-image {
            width: 60px;
            margin-right: 12px;
        }
        .main-categories .category-image img {
            height: 60px;
        }
    }

    /*
    =============================================
    СТИЛИ ДЛЯ САЙДБАРА (компактный)
    =============================================
    */
    .sidebar-categories {
        margin-left: -10px;
        margin-right: -10px;
    }

    .sidebar-categories .category-layout {
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 15px;
    }

    .sidebar-categories .category-thumb {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 12px;
        display: flex;
        align-items: flex-start;
        text-align: left;
        transition: all 0.3s ease;
        background: #fff;
        width: 100%;
        height: 100%;
    }

    .sidebar-categories .category-thumb:hover {
        border-color: #337ab7;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .sidebar-categories .category-image {
        margin-right: 12px;
        flex-shrink: 0;
        width: 40px;
    }

    .sidebar-categories .category-image img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        border-radius: 4px;
        background: #f8f9fa;
        padding: 2px;
    }

    .sidebar-categories .category-caption {
        flex-grow: 1;
        min-width: 0;
    }

    .sidebar-categories .category-caption h4 {
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: bold;
    }

    .sidebar-categories .category-caption h4 a {
        color: #333;
        text-decoration: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
    }

    .sidebar-categories .category-caption h4 a:hover {
        color: #337ab7;
    }

    .sidebar-categories .category-children {
        margin-bottom: 0;
    }

    .sidebar-categories .child-category {
        display: flex;
        align-items: center;
        padding: 4px 0;
        text-decoration: none;
        color: #666;
        font-size: 12px;
        transition: all 0.2s ease;
    }

    .sidebar-categories .child-category:hover {
        color: #337ab7;
        background-color: #f9f9f9;
        padding-left: 5px;
        padding-right: 5px;
        margin: 0 -5px;
        border-radius: 3px;
    }

    .sidebar-categories .child-image {
        width: 16px;
        height: 16px;
        object-fit: contain;
        margin-right: 6px;
        flex-shrink: 0;
        background: #fff;
        padding: 1px;
        border: 1px solid #eee;
        border-radius: 2px;
    }

    .sidebar-categories .child-name {
        font-size: 11px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        flex-grow: 1;
    }

    .sidebar-categories .more-children {
        padding-top: 4px;
    }

    .sidebar-categories .more-children a {
        color: #999;
        font-size: 10px;
        text-decoration: none;
        font-style: italic;
    }

    .sidebar-categories .more-children a:hover {
        color: #337ab7;
    }

    /* Адаптивность сайдбара */
    @media (min-width: 768px) {
        .sidebar-categories .category-layout {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 991px) and (min-width: 768px) {
        .sidebar-categories .category-layout {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .sidebar-categories .category-thumb {
            flex-direction: column;
            text-align: center;
            padding: 15px;
        }
        .sidebar-categories .category-image {
            margin-right: 0;
            margin-bottom: 10px;
            width: 50px;
        }
        .sidebar-categories .category-image img {
            width: 50px;
            height: 50px;
        }
        .sidebar-categories .category-caption h4 {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .sidebar-categories .category-children {
            text-align: center;
        }
        .sidebar-categories .child-category {
            justify-content: center;
            padding: 6px 0;
        }
    }

    @media (max-width: 767px) and (min-width: 576px) {
        .sidebar-categories .category-layout {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .sidebar-categories .category-thumb {
            padding: 10px;
        }
        .sidebar-categories .category-image {
            width: 35px;
            margin-right: 10px;
        }
        .sidebar-categories .category-image img {
            width: 35px;
            height: 35px;
        }
        .sidebar-categories .category-caption h4 {
            font-size: 13px;
        }
    }

    @media (max-width: 575px) {
        .sidebar-categories .category-layout {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .sidebar-categories .category-thumb {
            padding: 10px;
        }
        .sidebar-categories .category-image {
            width: 35px;
            margin-right: 10px;
        }
        .sidebar-categories .category-image img {
            width: 35px;
            height: 35px;
        }
        .sidebar-categories .category-caption h4 {
            font-size: 13px;
        }
        .sidebar-categories .child-category {
            padding: 3px 0;
            font-size: 11px;
        }
    }

    @media (max-width: 380px) {
        .sidebar-categories .category-thumb {
            padding: 8px;
        }
        .sidebar-categories .category-image {
            width: 30px;
            margin-right: 8px;
        }
        .sidebar-categories .category-image img {
            width: 30px;
            height: 30px;
        }
        .sidebar-categories .category-caption h4 {
            font-size: 12px;
        }
        .sidebar-categories .child-category {
            padding: 2px 0;
            font-size: 10px;
        }
        .sidebar-categories .child-image {
            width: 14px;
            height: 14px;
            margin-right: 4px;
        }
    }

    /* Активные категории */
    .main-categories .category-thumb.active,
    .sidebar-categories .category-thumb.active {
        border-color: #337ab7;
        background-color: #f8fbff;
        box-shadow: 0 0 0 2px rgba(51, 122, 183, 0.2);
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 80,  289 => 78,  275 => 77,  271 => 75,  268 => 74,  262 => 69,  258 => 67,  250 => 64,  247 => 63,  244 => 62,  235 => 59,  229 => 58,  224 => 57,  220 => 56,  217 => 55,  215 => 54,  208 => 52,  197 => 48,  193 => 47,  188 => 44,  171 => 43,  168 => 42,  166 => 41,  162 => 39,  148 => 38,  144 => 36,  141 => 35,  135 => 30,  131 => 28,  123 => 25,  120 => 24,  117 => 23,  108 => 20,  102 => 19,  97 => 18,  93 => 17,  90 => 16,  88 => 15,  81 => 13,  70 => 9,  66 => 8,  61 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category.twig", "");
    }
}
