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

/* extension/module/lightcode.twig */
class __TwigTemplate_4a51d3bd5c8f365ad91a82c588dceff8512422e9c24dd9788e315561a52dce55 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
\t<div id=\"content\">
\t   <div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t  <div class=\"pull-right\">
\t\t\t<button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t  <h1>";
        // line 8
        echo ($context["heading_title_title"] ?? null);
        echo "</h1>
\t\t  <ul class=\"breadcrumb\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t  </ul>
\t\t</div>
\t  </div>
\t  <div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t<div class=\"panel panel-default\">
\t\t  <div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t  </div>
\t\t  <div class=\"panel-body\">
\t\t  <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 34
        echo ($context["protection"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-key\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"module_lightcheckout_code\" value=\"";
        // line 40
        if (($context["module_lightcheckout_code"] ?? null)) {
            echo ($context["module_lightcheckout_code"] ?? null);
        }
        echo "\" size=\"30\" placeholder=\"";
        echo ($context["text_protection_help"] ?? null);
        echo "\" style=\"height: 37px !important;\" />
\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"module_lightcheckout_status\">
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<br /><span style=\"font-size: 10px;\">";
        // line 48
        echo ($context["help_cod_protection"] ?? null);
        echo "</span><br /><br />
\t\t\t\t\t<span style=\"font-weight: normal;\">";
        // line 49
        echo ($context["help_protection"] ?? null);
        echo "</span>
\t\t\t\t\t<br /><span style=\"font-size: 10px;\">* ";
        // line 50
        echo ($context["text_help_code"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t  </form>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
  ";
        // line 58
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/lightcode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  150 => 50,  146 => 49,  142 => 48,  127 => 40,  118 => 34,  113 => 32,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/lightcode.twig", "");
    }
}
