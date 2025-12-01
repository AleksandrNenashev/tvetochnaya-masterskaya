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

/* flowertheme/template/common/menu.twig */
class __TwigTemplate_9c12499621f62caffaeaed719fc3521040edb6936aab74f7b51fb4d48cef8ebb extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "    <div id=\"menu-full\">
        <div class=\"container\">
            <nav id=\"menu\" class=\"navbar\">
                <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">Категории</span>
                    <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                </div>
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                                <li class=\"dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    echo "<i class=\"fa fa-plus visible-xs\"></i></a>
                                    <div class=\"dropdown-menu\">
                                        <div class=\"dropdown-inner\"> ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 14), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 16
                            echo "                                                    ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "subchildren", [], "any", false, false, false, 16)) {
                                // line 17
                                echo "                                                        <ul class=\"childsub list-unstyled\">
                                                            <li class=\"childsub\"><a href=\"";
                                // line 18
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                                echo "</a>
                                                                <ul class=\"list-unstyled\">
                                                                    ";
                                // line 20
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "subchildren", [], "any", false, false, false, 20));
                                foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                    // line 21
                                    echo "                                                                        <li class=\"subchild hidden-xs\"><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 21);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 21);
                                    echo "</a></li>
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 23
                                echo "                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    ";
                            } else {
                                // line 27
                                echo "                                                        <ul class=\"child list-unstyled\">
                                                            <li class=\"child\"><a href=\"";
                                // line 28
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 28);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 28);
                                echo "</a></li>
                                                        </ul>
                                                    ";
                            }
                            // line 31
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                        </div>
                                    </div>
                                </li>
                            ";
                } else {
                    // line 37
                    echo "                                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    echo "</a></li>
                            ";
                }
                // line 39
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        <li><a href=\"/about_us/\">О нас</a></li>
                        <li><a href=\"/delivery/\">Доставка и оплата</a></li>
                        <li><a href=\"contact-us/\">Контакты</a></li>
                    </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "flowertheme/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  136 => 37,  130 => 33,  124 => 32,  118 => 31,  110 => 28,  107 => 27,  101 => 23,  90 => 21,  86 => 20,  79 => 18,  76 => 17,  73 => 16,  68 => 15,  64 => 14,  56 => 12,  53 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/common/menu.twig", "");
    }
}
