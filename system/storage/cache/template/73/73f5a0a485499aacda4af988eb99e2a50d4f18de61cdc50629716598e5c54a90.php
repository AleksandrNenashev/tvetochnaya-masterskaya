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

/* flowertheme/template/common/header.twig */
class __TwigTemplate_c0bffd1dac3133733dedfb1ca43dd0f13bc74bc343a9d6b775406dd22f94aa72 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/flowertheme/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 39);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 39);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"catalog/view/javascript/common.js\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 46);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
  <div class=\"top-links nav pull-left\">
    <ul class=\"list-inline\">
    <li>
\t\t<div class=\"logo hidden-sm hidden-md hidden-lg\">
          ";
        // line 59
        if (($context["logo"] ?? null)) {
            // line 60
            echo "            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 61
                echo "              <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
            ";
            } else {
                // line 63
                echo "              <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 65
            echo "          ";
        } else {
            // line 66
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 68
        echo "\t\t</div>
    </li>
    <li><a href=\"";
        // line 70
        echo ($context["contact"] ?? null);
        echo "\"><span class=\"hidden-xs\">";
        echo ($context["address"] ?? null);
        echo "</span></a></li>
\t</ul>
\t</div>
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 75
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-map-marker hidden-lg hidden-sm visible-xs\"></i> <span class=\"hidden\">";
        echo ($context["address"] ?? null);
        echo "</span></a></li>
        <li class=\"dropdown\"><a href=\"";
        // line 76
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user-circle-o hidden-sm hidden-md hidden-lg\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 78
        if (($context["logged"] ?? null)) {
            // line 79
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 80
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 81
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 82
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 83
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 85
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 86
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 88
        echo "          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"hidden-xs col-sm-3 col-md-3 col-lg-3\">
\t\t<div id=\"logo\">
          ";
        // line 99
        if (($context["logo"] ?? null)) {
            // line 100
            echo "            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 101
                echo "              <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
            ";
            } else {
                // line 103
                echo "              <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 105
            echo "          ";
        } else {
            // line 106
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 108
        echo "\t\t</div>
      </div>
        <div class=\"top-phone-open col-xs-8 col-sm-3 col-md-3 col-lg-3\">
            <div class=\"top-phone\"><a href=\"tel:";
        // line 111
        echo ($context["telephone"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i>";
        echo ($context["telephone"] ?? null);
        echo "</a></div>
            <div class=\"top-open\">с 80-00 до 21-00</div>
            <div class=\"top-open\"><a href=\"";
        // line 113
        echo ($context["contact"] ?? null);
        echo "\">г. Отрадный, ул. Пионерская 10 (цветочный киоск)</a></div>
            <!-- <div class=\"top-links nav pull-left\"><a href=\"http://flower.loc/index.php?route=information/contact\"><span class=\"hidden-xs\">г. Отрадный, ул. Пионерская 10 (цветочный киоск)</span></a></div> -->
        </div>
      <div class=\"col-xs-4 col-sm-2 col-md-2 col-lg-2\">";
        // line 116
        echo ($context["cart"] ?? null);
        echo "</div>
      <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">";
        // line 117
        echo ($context["search"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 121
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "flowertheme/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 121,  391 => 117,  387 => 116,  381 => 113,  374 => 111,  369 => 108,  361 => 106,  358 => 105,  346 => 103,  336 => 101,  333 => 100,  331 => 99,  318 => 88,  311 => 86,  304 => 85,  297 => 83,  291 => 82,  285 => 81,  279 => 80,  272 => 79,  270 => 78,  261 => 76,  255 => 75,  245 => 70,  241 => 68,  233 => 66,  230 => 65,  218 => 63,  208 => 61,  205 => 60,  203 => 59,  193 => 51,  185 => 49,  181 => 48,  170 => 46,  166 => 45,  163 => 44,  154 => 42,  150 => 41,  137 => 39,  133 => 38,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/common/header.twig", "");
    }
}
