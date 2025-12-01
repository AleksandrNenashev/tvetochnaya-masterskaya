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

/* flowertheme/template/extension/module/latest.twig */
class __TwigTemplate_4ff41c2bede873a2c96465e5ab8e4bc4c09884e3499153ae7ceb4bca2a7a98bf extends \Twig\Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      <div class=\"row\"> ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "          <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 5);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
            echo "</a></h4>
                <div class=\"price-button\">
                    <div class=\"product-price\">
                        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 11)) {
                // line 12
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                          <span class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 13);
                    echo "</span>
                          ";
                } else {
                    // line 14
                    echo " <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 14);
                    echo "</span> <span class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 14);
                    echo "</span>  ";
                }
                // line 15
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 15)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 15);
                    echo "</span> ";
                }
                // line 16
                echo "                        ";
            }
            // line 17
            echo "                    </div>
                    <div class=\"product-button\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"cart.add('";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
            echo "', '";
            echo ((twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 19)) : (1));
            echo "');\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
                    </div>
                </div>
";
            // line 25
            echo "              </div>
            </div>
           </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "flowertheme/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  114 => 25,  104 => 19,  100 => 17,  97 => 16,  88 => 15,  81 => 14,  75 => 13,  72 => 12,  70 => 11,  62 => 8,  50 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/extension/module/latest.twig", "");
    }
}
