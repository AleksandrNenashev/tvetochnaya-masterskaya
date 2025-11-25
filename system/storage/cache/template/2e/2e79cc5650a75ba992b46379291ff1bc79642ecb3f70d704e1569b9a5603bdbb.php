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
class __TwigTemplate_88203f623485d7a837253f38f1f05a9f6a68c4566509ef1f816eac53307ffb9c extends \Twig\Template
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
            echo "<div id=\"menu-full\">
<div class=\"container\">
    <nav id=\"menu\" class=\"navbar\">
        <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 5
            echo ($context["text_category"] ?? null);
            echo "</span>
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
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                    <li class=\"dropdown\"><a href=\"";
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
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 16
                            echo "                                \t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "subchildren", [], "any", false, false, false, 16)) {
                                // line 17
                                echo "                                \t    <ul class=\"childsub list-unstyled\">
                                    \t\t<li class=\"childsub\"><a href=\"";
                                // line 18
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                                echo "</a>
                                    \t\t\t<ul class=\"list-unstyled\">
                                    \t\t\t\t";
                                // line 20
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "subchildren", [], "any", false, false, false, 20));
                                foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                    // line 21
                                    echo "                                                    \t<li class=\"subchild hidden-xs\"><a href=\"";
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
                                echo "                                    \t\t\t</ul>
                                    \t\t</li>
                                \t\t</ul>
                                \t";
                            } else {
                                // line 27
                                echo "                                \t    <ul class=\"child list-unstyled\">
                                \t\t    <li class=\"child\"><a href=\"";
                                // line 28
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 28);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 28);
                                echo "</a></li>
                                \t\t</ul>
                                \t";
                            }
                            // line 31
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                            </div>
                        </div>
                    </li>
                    ";
                } else {
                    // line 37
                    echo "                    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    echo "</a></li>
                    ";
                }
                // line 39
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
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
        return array (  153 => 40,  147 => 39,  139 => 37,  133 => 33,  127 => 32,  121 => 31,  113 => 28,  110 => 27,  104 => 23,  93 => 21,  89 => 20,  82 => 18,  79 => 17,  76 => 16,  71 => 15,  67 => 14,  59 => 12,  56 => 11,  52 => 10,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/common/menu.twig", "");
    }
}
