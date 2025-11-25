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

/* setting/setting.twig */
class __TwigTemplate_0172a8cb0b14166d474ae22f57e0d75f193e36282322823308eb6a853b754476 extends \Twig\Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_seopro"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if (($context["error_name"] ?? null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_owner"] ?? null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 127
        if (($context["error_address"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_email"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if (($context["error_telephone"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if (($context["locations"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182), ($context["config_location"] ?? null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 184);
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 186);
                    echo "\" />
                      ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 187);
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200) == ($context["config_country_id"] ?? null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 206);
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 222
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 226
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 226) == ($context["config_timezone"] ?? null))) {
                // line 227
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 227);
                echo "</option>
                      ";
            } else {
                // line 229
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 229);
                echo "</option>
                      ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 236
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 241
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 241) == ($context["config_language"] ?? null))) {
                // line 242
                echo "                    
                    <option value=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 243);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 243);
                echo "</option>
                    
                    ";
            } else {
                // line 246
                echo "                    
                    <option value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
                echo "</option>
                    
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 256
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 261
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261) == ($context["config_admin_language"] ?? null))) {
                // line 262
                echo "                    
                    <option value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 263);
                echo "</option>
                    
                    ";
            } else {
                // line 266
                echo "                    
                    <option value=\"";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 267);
                echo "</option>
                    
                    ";
            }
            // line 270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 276
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 281
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 281) == ($context["config_currency"] ?? null))) {
                // line 282
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 283);
                echo "</option>
                    
                    ";
            } else {
                // line 286
                echo "                    
                    <option value=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 287);
                echo "</option>
                    
                    ";
            }
            // line 290
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">

          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Выводится модулем autocalc_price_option в карточке товара\">Дополнительная валюта <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <select name=\"config_currency2\" id=\"input-currency\" class=\"form-control\">
              <option value=\"\">";
        // line 300
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 302
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 302) == ($context["config_currency2"] ?? null))) {
                // line 303
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 303);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 303);
                echo "</option>
                ";
            } else {
                // line 305
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 305);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 305);
                echo "</option>
                ";
            }
            // line 307
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Акция на опции пропорционально акции на товар (autocalc_price_option)\">Акция на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\"> 
              ";
        // line 315
        if (($context["config_autocalc_option_special"] ?? null)) {
            // line 316
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" checked=\"checked\" />
              ";
            // line 317
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 319
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" />
              ";
            // line 320
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 322
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 324
        if ( !($context["config_autocalc_option_special"] ?? null)) {
            // line 325
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" checked=\"checked\" />
              ";
            // line 326
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 328
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" />
              ";
            // line 329
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 331
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скидка на опции пропорционально скидке на товар (autocalc_price_option)\">Скидка на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 338
        if (($context["config_autocalc_option_discount"] ?? null)) {
            // line 339
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" checked=\"checked\" />
              ";
            // line 340
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 342
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" />
              ";
            // line 343
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 345
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 347
        if ( !($context["config_autocalc_option_discount"] ?? null)) {
            // line 348
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" checked=\"checked\" />
              ";
            // line 349
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 351
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" />
              ";
            // line 352
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 354
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Отключении функции умножения на количество (autocalc_price_option)\">Не умножать на количество <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 361
        if (($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 362
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" checked=\"checked\" />
              ";
            // line 363
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 365
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" />
              ";
            // line 366
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 367
        echo " </label>
            <label class=\"radio-inline\">
              ";
        // line 369
        if ( !($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 370
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" checked=\"checked\" />
              ";
            // line 371
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 373
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" />
              ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 376
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Автоматический выбор первой опции (radio,select). (autocalc_price_option)\">Выбор первой опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 383
        if (($context["config_autocalc_select_first"] ?? null)) {
            // line 384
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" checked=\"checked\" />
              ";
            // line 385
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 387
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" />
              ";
            // line 388
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 390
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 392
        if ( !($context["config_autocalc_select_first"] ?? null)) {
            // line 393
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" checked=\"checked\" />
              ";
            // line 394
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 396
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" />
              ";
            // line 397
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 399
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скрыть вывод наценки для опции. (autocalc_price_option)\">Не показывать цену опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 406
        if (($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 407
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" checked=\"checked\" />
              ";
            // line 408
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 410
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" />
              ";
            // line 411
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 413
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 415
        if ( !($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 416
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" checked=\"checked\" />
              ";
            // line 417
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 419
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" />
              ";
            // line 420
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 422
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Добавлять выбранные опции в хеш (#) url. (autocalc_price_option)\">Выбранные опции в URL <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 429
        if (($context["config_autocalc_hash_url"] ?? null)) {
            // line 430
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"1\" checked=\"checked\" />
              ";
            // line 431
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 433
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"1\" />
              ";
            // line 434
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 436
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 438
        if ( !($context["config_autocalc_hash_url"] ?? null)) {
            // line 439
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"0\" checked=\"checked\" />
              ";
            // line 440
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 442
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"0\" />
              ";
            // line 443
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 445
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
      
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 450
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 452
        if (($context["config_currency_auto"] ?? null)) {
            // line 453
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 454
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 456
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 457
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 458
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 459
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 460
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 461
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 463
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 464
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 465
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 469
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 472
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 473
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 473) == ($context["config_currency_engine"] ?? null))) {
                // line 474
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 474);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 474);
                echo "</option>
                    ";
            } else {
                // line 476
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 476);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 476);
                echo "</option>
                    ";
            }
            // line 478
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 483
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 488
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 488) == ($context["config_length_class_id"] ?? null))) {
                // line 489
                echo "                    
                    <option value=\"";
                // line 490
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 490);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 490);
                echo "</option>
                    
                    ";
            } else {
                // line 493
                echo "                    
                    <option value=\"";
                // line 494
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 494);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 494);
                echo "</option>
                    
                    ";
            }
            // line 497
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 503
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 508
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 508) == ($context["config_weight_class_id"] ?? null))) {
                // line 509
                echo "                    
                    <option value=\"";
                // line 510
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 510);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 510);
                echo "</option>
                    
                    ";
            } else {
                // line 513
                echo "                    
                    <option value=\"";
                // line 514
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 514);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 514);
                echo "</option>
                    
                    ";
            }
            // line 517
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 525
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 527
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 529
        if (($context["config_product_count"] ?? null)) {
            // line 530
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 531
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 533
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 534
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 535
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 536
        if ( !($context["config_product_count"] ?? null)) {
            // line 537
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 538
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 540
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 541
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 542
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 546
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 548
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 549
        if (($context["error_limit_admin"] ?? null)) {
            // line 550
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 551
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 554
        echo ($context["help_limit_autocomplete"] ?? null);
        echo "\">";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"";
        // line 556
        echo ($context["config_limit_autocomplete"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    ";
        // line 557
        if (($context["error_limit_autocomplete"] ?? null)) {
            // line 558
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_autocomplete"] ?? null);
            echo "</div>
                    ";
        }
        // line 559
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 563
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 565
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 567
        if (($context["config_review_status"] ?? null)) {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 569
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 572
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 573
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 574
        if ( !($context["config_review_status"] ?? null)) {
            // line 575
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 576
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 578
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 579
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 580
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 584
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 586
        if (($context["config_review_guest"] ?? null)) {
            // line 587
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 588
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 590
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 591
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 592
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 593
        if ( !($context["config_review_guest"] ?? null)) {
            // line 594
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 595
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 597
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 598
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 599
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 604
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 606
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 608
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 609
        if (($context["error_voucher_min"] ?? null)) {
            // line 610
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 611
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 614
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 616
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 617
        if (($context["error_voucher_max"] ?? null)) {
            // line 618
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 619
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 623
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 625
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 627
        if (($context["config_tax"] ?? null)) {
            // line 628
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 629
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 631
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 632
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 633
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 634
        if ( !($context["config_tax"] ?? null)) {
            // line 635
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 636
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 638
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 639
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 640
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 644
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 647
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 649
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 650
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 651
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 654
            echo "                      
                      <option value=\"shipping\">";
            // line 655
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 658
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 659
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 660
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 663
            echo "                      
                      <option value=\"payment\">";
            // line 664
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 667
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 672
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 675
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 677
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 678
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 679
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 682
            echo "                      
                      <option value=\"shipping\">";
            // line 683
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 686
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 687
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 688
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 691
            echo "                      
                      <option value=\"payment\">";
            // line 692
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 695
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 701
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 703
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 705
        if (($context["config_customer_online"] ?? null)) {
            // line 706
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 707
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 709
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 710
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 711
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 712
        if ( !($context["config_customer_online"] ?? null)) {
            // line 713
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 714
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 716
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 717
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 718
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 722
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 724
        if (($context["config_customer_activity"] ?? null)) {
            // line 725
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 726
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 728
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 729
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 730
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 731
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 732
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 733
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 735
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 736
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 737
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 741
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 743
        if (($context["config_customer_search"] ?? null)) {
            // line 744
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 745
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 747
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 748
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 749
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 750
        if ( !($context["config_customer_search"] ?? null)) {
            // line 751
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 752
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 754
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 755
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 756
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 760
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 765
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 765) == ($context["config_customer_group_id"] ?? null))) {
                // line 766
                echo "                      
                      <option value=\"";
                // line 767
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 767);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 767);
                echo "</option>
                      
                      ";
            } else {
                // line 770
                echo "                      
                      <option value=\"";
                // line 771
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 771);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 771);
                echo "</option>
                      
                      ";
            }
            // line 774
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 780
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 782
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 783
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 783), ($context["config_customer_group_display"] ?? null))) {
                // line 784
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 784);
                echo "\" checked=\"checked\" />
                        ";
                // line 785
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 785);
                echo "
                        ";
            } else {
                // line 787
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 787);
                echo "\" />
                        ";
                // line 788
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 788);
                echo "
                        ";
            }
            // line 789
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 793
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 794
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 797
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 799
        if (($context["config_customer_price"] ?? null)) {
            // line 800
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 801
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 803
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 804
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 805
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 806
        if ( !($context["config_customer_price"] ?? null)) {
            // line 807
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 808
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 810
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 811
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 812
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 816
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 818
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 819
        if (($context["error_login_attempts"] ?? null)) {
            // line 820
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 821
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 824
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 827
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 829
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 830
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 830) == ($context["config_account_id"] ?? null))) {
                // line 831
                echo "                      
                      <option value=\"";
                // line 832
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 832);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 832);
                echo "</option>
                      
                      ";
            } else {
                // line 835
                echo "                      
                      <option value=\"";
                // line 836
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 836);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 836);
                echo "</option>
                      
                      ";
            }
            // line 839
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 840
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 846
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 848
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 850
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 854
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 856
        if (($context["config_cart_weight"] ?? null)) {
            // line 857
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 858
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 860
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 861
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 862
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 863
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 864
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 865
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 867
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 868
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 869
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 873
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 875
        if (($context["config_checkout_guest"] ?? null)) {
            // line 876
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 877
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 879
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 880
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 881
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 882
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 883
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 884
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 886
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 887
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 888
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 892
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 895
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 897
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 898
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 898) == ($context["config_checkout_id"] ?? null))) {
                // line 899
                echo "                      
                      <option value=\"";
                // line 900
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 900);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 900);
                echo "</option>
                      
                      ";
            } else {
                // line 903
                echo "                      
                      <option value=\"";
                // line 904
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 904);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 904);
                echo "</option>
                      
                      ";
            }
            // line 907
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 908
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 913
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 918
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 918) == ($context["config_order_status_id"] ?? null))) {
                // line 919
                echo "                      
                      <option value=\"";
                // line 920
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 920);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 920);
                echo "</option>
                      
                      ";
            } else {
                // line 923
                echo "                      
                      <option value=\"";
                // line 924
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 924);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 924);
                echo "</option>
                      
                      ";
            }
            // line 927
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 933
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 935
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 936
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 937
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 937), ($context["config_processing_status"] ?? null))) {
                // line 938
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 938);
                echo "\" checked=\"checked\" />
                          ";
                // line 939
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 939);
                echo "
                          ";
            } else {
                // line 941
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 941);
                echo "\" />
                          ";
                // line 942
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 942);
                echo "
                          ";
            }
            // line 943
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 945
        echo " </div>
                    ";
        // line 946
        if (($context["error_processing_status"] ?? null)) {
            // line 947
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 948
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 951
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 953
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 954
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 955
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 955), ($context["config_complete_status"] ?? null))) {
                // line 956
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 956);
                echo "\" checked=\"checked\" />
                          ";
                // line 957
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 957);
                echo "
                          ";
            } else {
                // line 959
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 959);
                echo "\" />
                          ";
                // line 960
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 960);
                echo "
                          ";
            }
            // line 961
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        echo " </div>
                    ";
        // line 964
        if (($context["error_complete_status"] ?? null)) {
            // line 965
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 966
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 969
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 973
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 974
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 974) == ($context["config_fraud_status_id"] ?? null))) {
                // line 975
                echo "                      
                      <option value=\"";
                // line 976
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 976);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 976);
                echo "</option>
                      
                      ";
            } else {
                // line 979
                echo "                      
                      <option value=\"";
                // line 980
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 980);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 980);
                echo "</option>
                      
                      ";
            }
            // line 983
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 989
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 992
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 994
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 995
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 995) == ($context["config_api_id"] ?? null))) {
                // line 996
                echo "                      
                      <option value=\"";
                // line 997
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 997);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 997);
                echo "</option>
                      
                      ";
            } else {
                // line 1000
                echo "                      
                      <option value=\"";
                // line 1001
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 1001);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 1001);
                echo "</option>
                      
                      ";
            }
            // line 1004
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1005
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1011
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1013
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1015
        if (($context["config_stock_display"] ?? null)) {
            // line 1016
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1017
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1019
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 1020
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1021
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1022
        if ( !($context["config_stock_display"] ?? null)) {
            // line 1023
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1024
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1026
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 1027
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1028
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1032
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1034
        if (($context["config_stock_warning"] ?? null)) {
            // line 1035
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1036
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1038
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 1039
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1040
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1041
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 1042
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1043
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1045
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 1046
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1047
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1051
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1053
        if (($context["config_stock_checkout"] ?? null)) {
            // line 1054
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1055
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1057
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 1058
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1059
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1060
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 1061
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1062
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1064
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 1065
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1066
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1071
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 1073
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 1077
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1078
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1078) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 1079
                echo "                      
                      <option value=\"";
                // line 1080
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1080);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1080);
                echo "</option>
                      
                      ";
            } else {
                // line 1083
                echo "                      
                      <option value=\"";
                // line 1084
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1084);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1084);
                echo "</option>
                      
                      ";
            }
            // line 1087
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1088
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1093
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1095
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 1096
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1097
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1099
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 1100
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1101
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1102
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 1103
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1104
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1106
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 1107
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1108
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1112
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1114
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1115
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1116
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1118
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 1119
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1120
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1121
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1122
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1123
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1125
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 1126
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1127
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1131
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1133
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1137
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1140
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1143
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1143) == ($context["config_affiliate_id"] ?? null))) {
                // line 1144
                echo "                      
                      <option value=\"";
                // line 1145
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1145);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1145);
                echo "</option>
                      
                      ";
            } else {
                // line 1148
                echo "                      
                      <option value=\"";
                // line 1149
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1149);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1149);
                echo "</option>
                      
                      ";
            }
            // line 1152
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1153
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1159
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1161
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1164
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1167
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1167) == ($context["config_return_id"] ?? null))) {
                // line 1168
                echo "                      
                      <option value=\"";
                // line 1169
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1169);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1169);
                echo "</option>
                      
                      ";
            } else {
                // line 1172
                echo "                      
                      <option value=\"";
                // line 1173
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1173);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1173);
                echo "</option>
                      
                      ";
            }
            // line 1176
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1177
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1182
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1187
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1187) == ($context["config_return_status_id"] ?? null))) {
                // line 1188
                echo "                      
                      <option value=\"";
                // line 1189
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1189);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1189);
                echo "</option>
                      
                      ";
            } else {
                // line 1192
                echo "                      
                      <option value=\"";
                // line 1193
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1193);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1193);
                echo "</option>
                      
                      ";
            }
            // line 1196
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1197
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1203
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1205
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1208
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1211
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1211) == ($context["config_captcha"] ?? null))) {
                // line 1212
                echo "                      
                      <option value=\"";
                // line 1213
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1213);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1213);
                echo "</option>
                      
                      ";
            } else {
                // line 1216
                echo "                      
                      <option value=\"";
                // line 1217
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1217);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1217);
                echo "</option>
                      
                      ";
            }
            // line 1220
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1221
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1226
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1229
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1230
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1230), ($context["config_captcha_page"] ?? null))) {
                // line 1231
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1231);
                echo "\" checked=\"checked\" />
                          ";
                // line 1232
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1232);
                echo "
                          ";
            } else {
                // line 1234
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1234);
                echo "\" />
                          ";
                // line 1235
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1235);
                echo "
                          ";
            }
            // line 1236
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1238
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1245
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1246
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1247
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1251
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1252
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1253
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1259
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1261
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1265
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1266
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1267
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1270
            echo "                      
                      <option value=\"mail\">";
            // line 1271
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1274
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1275
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1276
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1279
            echo "                      
                      <option value=\"smtp\">";
            // line 1280
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1283
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1288
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1290
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1294
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1296
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1300
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1302
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1306
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1308
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1312
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1314
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1318
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1320
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1325
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1327
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1330
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1331
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1331), ($context["config_mail_alert"] ?? null))) {
                // line 1332
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1332);
                echo "\" checked=\"checked\" />
                          ";
                // line 1333
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1333);
                echo "
                          ";
            } else {
                // line 1335
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1335);
                echo "\" />
                          ";
                // line 1336
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1336);
                echo "
                          ";
            }
            // line 1337
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1339
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1343
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1345
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1352
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1354
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1356
        if (($context["config_maintenance"] ?? null)) {
            // line 1357
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1358
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1360
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1361
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1362
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1363
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1364
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1365
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1367
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1368
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1369
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1373
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1375
        if (($context["config_seo_url"] ?? null)) {
            // line 1376
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1377
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1379
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1380
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1381
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1382
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1383
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1384
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1386
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1387
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1388
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1392
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1394
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1398
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1400
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1405
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1407
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1409
        if (($context["config_secure"] ?? null)) {
            // line 1410
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1411
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1413
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1414
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1415
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1416
        if ( !($context["config_secure"] ?? null)) {
            // line 1417
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1418
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1420
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1421
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1422
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1426
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1428
        if (($context["config_password"] ?? null)) {
            // line 1429
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1430
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1432
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1433
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1434
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1435
        if ( !($context["config_password"] ?? null)) {
            // line 1436
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1437
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1439
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1440
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1441
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1445
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1447
        if (($context["config_shared"] ?? null)) {
            // line 1448
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1449
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1451
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1452
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1453
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1454
        if ( !($context["config_shared"] ?? null)) {
            // line 1455
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1456
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1458
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1459
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1460
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1464
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1466
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1467
        if (($context["error_encryption"] ?? null)) {
            // line 1468
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1469
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1473
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1475
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1477
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1481
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1483
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1487
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1489
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1494
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1496
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1498
        if (($context["config_error_display"] ?? null)) {
            // line 1499
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1500
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1502
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1503
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1504
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1505
        if ( !($context["config_error_display"] ?? null)) {
            // line 1506
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1507
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1509
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1510
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1511
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1515
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1517
        if (($context["config_error_log"] ?? null)) {
            // line 1518
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1519
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1521
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1522
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1523
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1524
        if ( !($context["config_error_log"] ?? null)) {
            // line 1525
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1526
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1528
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1529
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1530
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1534
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1536
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1537
        if (($context["error_log"] ?? null)) {
            // line 1538
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1539
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1547
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1549
        echo ($context["help_seo_pro"] ?? null);
        echo "\">";
        echo ($context["entry_seo_pro"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1551
        if (($context["config_seo_pro"] ?? null)) {
            // line 1552
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1553
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1555
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1556
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1557
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1558
        if ( !($context["config_seo_pro"] ?? null)) {
            // line 1559
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1560
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1562
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1563
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1564
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1568
        echo ($context["help_config_seo_url_include_path"] ?? null);
        echo "\">";
        echo ($context["entry_config_seo_url_include_path"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1570
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1571
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1572
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1574
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1575
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1576
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1577
        if ( !($context["config_seo_url_include_path"] ?? null)) {
            // line 1578
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1579
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1581
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1582
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1583
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1587
        echo ($context["entry_config_seo_url_cache"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1589
        if (($context["config_seo_url_cache"] ?? null)) {
            // line 1590
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1591
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1593
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1594
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1595
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1596
        if ( !($context["config_seo_url_cache"] ?? null)) {
            // line 1597
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1598
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1600
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1601
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1602
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1606
        echo ($context["entry_seopro_addslash"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1608
        if (($context["config_seopro_addslash"] ?? null)) {
            // line 1609
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1610
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1612
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1613
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1614
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1615
        if ( !($context["config_seopro_addslash"] ?? null)) {
            // line 1616
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1617
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1619
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1620
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1621
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1625
        echo ($context["entry_seopro_lowercase"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1627
        if (($context["config_seopro_lowercase"] ?? null)) {
            // line 1628
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1629
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1631
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1632
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1633
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1634
        if ( !($context["config_seopro_lowercase"] ?? null)) {
            // line 1635
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1636
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1638
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1639
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1640
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1644
        echo ($context["entry_page_postfix"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1646
        echo ($context["config_page_postfix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_page_postfix"] ?? null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1650
        echo ($context["help_config_valide_param_flag"] ?? null);
        echo "\">";
        echo ($context["entry_config_valide_param_flag"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1652
        if (($context["config_valide_param_flag"] ?? null)) {
            // line 1653
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1654
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1656
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1657
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1658
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1659
        if ( !($context["config_valide_param_flag"] ?? null)) {
            // line 1660
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1661
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1663
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1664
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1665
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1669
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_valide_params"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1671
        echo ($context["entry_valide_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_valide_params"] ?? null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1675
        echo ($context["entry_canonical_method_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_method"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1677
        if (($context["config_canonical_method"] ?? null)) {
            // line 1678
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1680
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  ";
            // line 1684
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1687
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  ";
            // line 1689
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1693
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1696
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1699
        echo ($context["entry_canonical_self_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_self"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1701
        if (($context["config_canonical_self"] ?? null)) {
            // line 1702
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1704
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  ";
            // line 1708
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1711
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  ";
            // line 1713
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1717
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1720
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1723
        echo ($context["entry_add_prevnext_help"] ?? null);
        echo "\">";
        echo ($context["entry_add_prevnext"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1725
        if (($context["config_add_prevnext"] ?? null)) {
            // line 1726
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1728
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  ";
            // line 1732
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1735
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  ";
            // line 1737
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1741
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1744
        echo "              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 1747
        echo ($context["entry_noindex_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 1749
        if (($context["config_noindex_status"] ?? null)) {
            // line 1750
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                ";
            // line 1752
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                ";
            // line 1756
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 1759
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                ";
            // line 1761
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                ";
            // line 1765
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        }
        // line 1768
        echo "            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1771
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"";
        // line 1773
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_noindex_disallow_params"] ?? null);
        echo "</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1788
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1810
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1819
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1825
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1832
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1847
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4687 => 1847,  4669 => 1832,  4659 => 1825,  4650 => 1819,  4638 => 1810,  4613 => 1788,  4593 => 1773,  4586 => 1771,  4581 => 1768,  4575 => 1765,  4568 => 1761,  4564 => 1759,  4558 => 1756,  4551 => 1752,  4547 => 1750,  4545 => 1749,  4540 => 1747,  4535 => 1744,  4529 => 1741,  4522 => 1737,  4518 => 1735,  4512 => 1732,  4505 => 1728,  4501 => 1726,  4499 => 1725,  4492 => 1723,  4487 => 1720,  4481 => 1717,  4474 => 1713,  4470 => 1711,  4464 => 1708,  4457 => 1704,  4453 => 1702,  4451 => 1701,  4444 => 1699,  4439 => 1696,  4433 => 1693,  4426 => 1689,  4422 => 1687,  4416 => 1684,  4409 => 1680,  4405 => 1678,  4403 => 1677,  4396 => 1675,  4387 => 1671,  4380 => 1669,  4374 => 1665,  4369 => 1664,  4366 => 1663,  4361 => 1661,  4358 => 1660,  4356 => 1659,  4353 => 1658,  4348 => 1657,  4345 => 1656,  4340 => 1654,  4337 => 1653,  4335 => 1652,  4328 => 1650,  4319 => 1646,  4314 => 1644,  4308 => 1640,  4303 => 1639,  4300 => 1638,  4295 => 1636,  4292 => 1635,  4290 => 1634,  4287 => 1633,  4282 => 1632,  4279 => 1631,  4274 => 1629,  4271 => 1628,  4269 => 1627,  4264 => 1625,  4258 => 1621,  4253 => 1620,  4250 => 1619,  4245 => 1617,  4242 => 1616,  4240 => 1615,  4237 => 1614,  4232 => 1613,  4229 => 1612,  4224 => 1610,  4221 => 1609,  4219 => 1608,  4214 => 1606,  4208 => 1602,  4203 => 1601,  4200 => 1600,  4195 => 1598,  4192 => 1597,  4190 => 1596,  4187 => 1595,  4182 => 1594,  4179 => 1593,  4174 => 1591,  4171 => 1590,  4169 => 1589,  4164 => 1587,  4158 => 1583,  4153 => 1582,  4150 => 1581,  4145 => 1579,  4142 => 1578,  4140 => 1577,  4137 => 1576,  4132 => 1575,  4129 => 1574,  4124 => 1572,  4121 => 1571,  4119 => 1570,  4112 => 1568,  4106 => 1564,  4101 => 1563,  4098 => 1562,  4093 => 1560,  4090 => 1559,  4088 => 1558,  4085 => 1557,  4080 => 1556,  4077 => 1555,  4072 => 1553,  4069 => 1552,  4067 => 1551,  4060 => 1549,  4055 => 1547,  4045 => 1539,  4039 => 1538,  4037 => 1537,  4031 => 1536,  4026 => 1534,  4020 => 1530,  4015 => 1529,  4012 => 1528,  4007 => 1526,  4004 => 1525,  4002 => 1524,  3999 => 1523,  3994 => 1522,  3991 => 1521,  3986 => 1519,  3983 => 1518,  3981 => 1517,  3976 => 1515,  3970 => 1511,  3965 => 1510,  3962 => 1509,  3957 => 1507,  3954 => 1506,  3952 => 1505,  3949 => 1504,  3944 => 1503,  3941 => 1502,  3936 => 1500,  3933 => 1499,  3931 => 1498,  3926 => 1496,  3921 => 1494,  3911 => 1489,  3904 => 1487,  3895 => 1483,  3888 => 1481,  3879 => 1477,  3872 => 1475,  3867 => 1473,  3861 => 1469,  3855 => 1468,  3853 => 1467,  3847 => 1466,  3840 => 1464,  3834 => 1460,  3829 => 1459,  3826 => 1458,  3821 => 1456,  3818 => 1455,  3816 => 1454,  3813 => 1453,  3808 => 1452,  3805 => 1451,  3800 => 1449,  3797 => 1448,  3795 => 1447,  3788 => 1445,  3782 => 1441,  3777 => 1440,  3774 => 1439,  3769 => 1437,  3766 => 1436,  3764 => 1435,  3761 => 1434,  3756 => 1433,  3753 => 1432,  3748 => 1430,  3745 => 1429,  3743 => 1428,  3736 => 1426,  3730 => 1422,  3725 => 1421,  3722 => 1420,  3717 => 1418,  3714 => 1417,  3712 => 1416,  3709 => 1415,  3704 => 1414,  3701 => 1413,  3696 => 1411,  3693 => 1410,  3691 => 1409,  3684 => 1407,  3679 => 1405,  3669 => 1400,  3662 => 1398,  3653 => 1394,  3646 => 1392,  3640 => 1388,  3635 => 1387,  3632 => 1386,  3627 => 1384,  3624 => 1383,  3622 => 1382,  3619 => 1381,  3614 => 1380,  3611 => 1379,  3606 => 1377,  3603 => 1376,  3601 => 1375,  3594 => 1373,  3588 => 1369,  3583 => 1368,  3580 => 1367,  3575 => 1365,  3572 => 1364,  3570 => 1363,  3567 => 1362,  3562 => 1361,  3559 => 1360,  3554 => 1358,  3551 => 1357,  3549 => 1356,  3542 => 1354,  3537 => 1352,  3525 => 1345,  3518 => 1343,  3512 => 1339,  3504 => 1337,  3499 => 1336,  3494 => 1335,  3489 => 1333,  3484 => 1332,  3482 => 1331,  3479 => 1330,  3475 => 1329,  3468 => 1327,  3463 => 1325,  3453 => 1320,  3448 => 1318,  3439 => 1314,  3434 => 1312,  3425 => 1308,  3418 => 1306,  3409 => 1302,  3404 => 1300,  3395 => 1296,  3388 => 1294,  3379 => 1290,  3372 => 1288,  3365 => 1283,  3359 => 1280,  3356 => 1279,  3350 => 1276,  3347 => 1275,  3344 => 1274,  3338 => 1271,  3335 => 1270,  3329 => 1267,  3326 => 1266,  3324 => 1265,  3315 => 1261,  3310 => 1259,  3301 => 1253,  3295 => 1252,  3289 => 1251,  3282 => 1247,  3276 => 1246,  3272 => 1245,  3263 => 1238,  3255 => 1236,  3250 => 1235,  3245 => 1234,  3240 => 1232,  3235 => 1231,  3233 => 1230,  3230 => 1229,  3226 => 1228,  3221 => 1226,  3214 => 1221,  3208 => 1220,  3200 => 1217,  3197 => 1216,  3189 => 1213,  3186 => 1212,  3183 => 1211,  3179 => 1210,  3174 => 1208,  3166 => 1205,  3161 => 1203,  3153 => 1197,  3147 => 1196,  3139 => 1193,  3136 => 1192,  3128 => 1189,  3125 => 1188,  3122 => 1187,  3118 => 1186,  3109 => 1182,  3102 => 1177,  3096 => 1176,  3088 => 1173,  3085 => 1172,  3077 => 1169,  3074 => 1168,  3071 => 1167,  3067 => 1166,  3062 => 1164,  3054 => 1161,  3049 => 1159,  3041 => 1153,  3035 => 1152,  3027 => 1149,  3024 => 1148,  3016 => 1145,  3013 => 1144,  3010 => 1143,  3006 => 1142,  3001 => 1140,  2993 => 1137,  2984 => 1133,  2977 => 1131,  2971 => 1127,  2966 => 1126,  2963 => 1125,  2958 => 1123,  2955 => 1122,  2953 => 1121,  2950 => 1120,  2945 => 1119,  2942 => 1118,  2937 => 1116,  2934 => 1115,  2932 => 1114,  2925 => 1112,  2919 => 1108,  2914 => 1107,  2911 => 1106,  2906 => 1104,  2903 => 1103,  2901 => 1102,  2898 => 1101,  2893 => 1100,  2890 => 1099,  2885 => 1097,  2882 => 1096,  2880 => 1095,  2873 => 1093,  2866 => 1088,  2860 => 1087,  2852 => 1084,  2849 => 1083,  2841 => 1080,  2838 => 1079,  2835 => 1078,  2831 => 1077,  2824 => 1073,  2819 => 1071,  2812 => 1066,  2807 => 1065,  2804 => 1064,  2799 => 1062,  2796 => 1061,  2794 => 1060,  2791 => 1059,  2786 => 1058,  2783 => 1057,  2778 => 1055,  2775 => 1054,  2773 => 1053,  2766 => 1051,  2760 => 1047,  2755 => 1046,  2752 => 1045,  2747 => 1043,  2744 => 1042,  2742 => 1041,  2739 => 1040,  2734 => 1039,  2731 => 1038,  2726 => 1036,  2723 => 1035,  2721 => 1034,  2714 => 1032,  2708 => 1028,  2703 => 1027,  2700 => 1026,  2695 => 1024,  2692 => 1023,  2690 => 1022,  2687 => 1021,  2682 => 1020,  2679 => 1019,  2674 => 1017,  2671 => 1016,  2669 => 1015,  2662 => 1013,  2657 => 1011,  2649 => 1005,  2643 => 1004,  2635 => 1001,  2632 => 1000,  2624 => 997,  2621 => 996,  2618 => 995,  2614 => 994,  2609 => 992,  2601 => 989,  2594 => 984,  2588 => 983,  2580 => 980,  2577 => 979,  2569 => 976,  2566 => 975,  2563 => 974,  2559 => 973,  2550 => 969,  2545 => 966,  2539 => 965,  2537 => 964,  2534 => 963,  2526 => 961,  2521 => 960,  2516 => 959,  2511 => 957,  2506 => 956,  2504 => 955,  2501 => 954,  2497 => 953,  2490 => 951,  2485 => 948,  2479 => 947,  2477 => 946,  2474 => 945,  2466 => 943,  2461 => 942,  2456 => 941,  2451 => 939,  2446 => 938,  2444 => 937,  2441 => 936,  2437 => 935,  2430 => 933,  2423 => 928,  2417 => 927,  2409 => 924,  2406 => 923,  2398 => 920,  2395 => 919,  2392 => 918,  2388 => 917,  2379 => 913,  2372 => 908,  2366 => 907,  2358 => 904,  2355 => 903,  2347 => 900,  2344 => 899,  2341 => 898,  2337 => 897,  2332 => 895,  2324 => 892,  2318 => 888,  2313 => 887,  2310 => 886,  2305 => 884,  2302 => 883,  2300 => 882,  2297 => 881,  2292 => 880,  2289 => 879,  2284 => 877,  2281 => 876,  2279 => 875,  2272 => 873,  2266 => 869,  2261 => 868,  2258 => 867,  2253 => 865,  2250 => 864,  2248 => 863,  2245 => 862,  2240 => 861,  2237 => 860,  2232 => 858,  2229 => 857,  2227 => 856,  2220 => 854,  2211 => 850,  2204 => 848,  2199 => 846,  2191 => 840,  2185 => 839,  2177 => 836,  2174 => 835,  2166 => 832,  2163 => 831,  2160 => 830,  2156 => 829,  2151 => 827,  2143 => 824,  2138 => 821,  2132 => 820,  2130 => 819,  2124 => 818,  2117 => 816,  2111 => 812,  2106 => 811,  2103 => 810,  2098 => 808,  2095 => 807,  2093 => 806,  2090 => 805,  2085 => 804,  2082 => 803,  2077 => 801,  2074 => 800,  2072 => 799,  2065 => 797,  2060 => 794,  2054 => 793,  2051 => 792,  2043 => 789,  2038 => 788,  2033 => 787,  2028 => 785,  2023 => 784,  2021 => 783,  2018 => 782,  2014 => 781,  2008 => 780,  2001 => 775,  1995 => 774,  1987 => 771,  1984 => 770,  1976 => 767,  1973 => 766,  1970 => 765,  1966 => 764,  1957 => 760,  1951 => 756,  1946 => 755,  1943 => 754,  1938 => 752,  1935 => 751,  1933 => 750,  1930 => 749,  1925 => 748,  1922 => 747,  1917 => 745,  1914 => 744,  1912 => 743,  1907 => 741,  1901 => 737,  1896 => 736,  1893 => 735,  1888 => 733,  1885 => 732,  1883 => 731,  1880 => 730,  1875 => 729,  1872 => 728,  1867 => 726,  1864 => 725,  1862 => 724,  1855 => 722,  1849 => 718,  1844 => 717,  1841 => 716,  1836 => 714,  1833 => 713,  1831 => 712,  1828 => 711,  1823 => 710,  1820 => 709,  1815 => 707,  1812 => 706,  1810 => 705,  1803 => 703,  1798 => 701,  1790 => 695,  1784 => 692,  1781 => 691,  1775 => 688,  1772 => 687,  1769 => 686,  1763 => 683,  1760 => 682,  1754 => 679,  1751 => 678,  1749 => 677,  1744 => 675,  1736 => 672,  1729 => 667,  1723 => 664,  1720 => 663,  1714 => 660,  1711 => 659,  1708 => 658,  1702 => 655,  1699 => 654,  1693 => 651,  1690 => 650,  1688 => 649,  1683 => 647,  1675 => 644,  1669 => 640,  1664 => 639,  1661 => 638,  1656 => 636,  1653 => 635,  1651 => 634,  1648 => 633,  1643 => 632,  1640 => 631,  1635 => 629,  1632 => 628,  1630 => 627,  1625 => 625,  1620 => 623,  1614 => 619,  1608 => 618,  1606 => 617,  1600 => 616,  1593 => 614,  1588 => 611,  1582 => 610,  1580 => 609,  1574 => 608,  1567 => 606,  1562 => 604,  1555 => 599,  1550 => 598,  1547 => 597,  1542 => 595,  1539 => 594,  1537 => 593,  1534 => 592,  1529 => 591,  1526 => 590,  1521 => 588,  1518 => 587,  1516 => 586,  1509 => 584,  1503 => 580,  1498 => 579,  1495 => 578,  1490 => 576,  1487 => 575,  1485 => 574,  1482 => 573,  1477 => 572,  1474 => 571,  1469 => 569,  1466 => 568,  1464 => 567,  1457 => 565,  1452 => 563,  1446 => 559,  1440 => 558,  1438 => 557,  1432 => 556,  1425 => 554,  1420 => 551,  1414 => 550,  1412 => 549,  1406 => 548,  1399 => 546,  1393 => 542,  1388 => 541,  1385 => 540,  1380 => 538,  1377 => 537,  1375 => 536,  1372 => 535,  1367 => 534,  1364 => 533,  1359 => 531,  1356 => 530,  1354 => 529,  1347 => 527,  1342 => 525,  1333 => 518,  1327 => 517,  1319 => 514,  1316 => 513,  1308 => 510,  1305 => 509,  1302 => 508,  1298 => 507,  1291 => 503,  1284 => 498,  1278 => 497,  1270 => 494,  1267 => 493,  1259 => 490,  1256 => 489,  1253 => 488,  1249 => 487,  1242 => 483,  1236 => 479,  1230 => 478,  1222 => 476,  1214 => 474,  1211 => 473,  1207 => 472,  1201 => 469,  1195 => 465,  1190 => 464,  1187 => 463,  1182 => 461,  1179 => 460,  1177 => 459,  1174 => 458,  1169 => 457,  1166 => 456,  1161 => 454,  1158 => 453,  1156 => 452,  1149 => 450,  1142 => 445,  1137 => 443,  1134 => 442,  1129 => 440,  1126 => 439,  1124 => 438,  1120 => 436,  1115 => 434,  1112 => 433,  1107 => 431,  1104 => 430,  1102 => 429,  1093 => 422,  1088 => 420,  1085 => 419,  1080 => 417,  1077 => 416,  1075 => 415,  1071 => 413,  1066 => 411,  1063 => 410,  1058 => 408,  1055 => 407,  1053 => 406,  1044 => 399,  1039 => 397,  1036 => 396,  1031 => 394,  1028 => 393,  1026 => 392,  1022 => 390,  1017 => 388,  1014 => 387,  1009 => 385,  1006 => 384,  1004 => 383,  995 => 376,  990 => 374,  987 => 373,  982 => 371,  979 => 370,  977 => 369,  973 => 367,  968 => 366,  965 => 365,  960 => 363,  957 => 362,  955 => 361,  946 => 354,  941 => 352,  938 => 351,  933 => 349,  930 => 348,  928 => 347,  924 => 345,  919 => 343,  916 => 342,  911 => 340,  908 => 339,  906 => 338,  897 => 331,  892 => 329,  889 => 328,  884 => 326,  881 => 325,  879 => 324,  875 => 322,  870 => 320,  867 => 319,  862 => 317,  859 => 316,  857 => 315,  848 => 308,  842 => 307,  834 => 305,  826 => 303,  823 => 302,  819 => 301,  815 => 300,  804 => 291,  798 => 290,  790 => 287,  787 => 286,  779 => 283,  776 => 282,  773 => 281,  769 => 280,  760 => 276,  753 => 271,  747 => 270,  739 => 267,  736 => 266,  728 => 263,  725 => 262,  722 => 261,  718 => 260,  711 => 256,  704 => 251,  698 => 250,  690 => 247,  687 => 246,  679 => 243,  676 => 242,  673 => 241,  669 => 240,  662 => 236,  656 => 232,  650 => 231,  642 => 229,  634 => 227,  631 => 226,  627 => 225,  621 => 222,  611 => 215,  604 => 210,  598 => 209,  590 => 206,  587 => 205,  579 => 202,  576 => 201,  573 => 200,  569 => 199,  562 => 195,  557 => 192,  552 => 190,  544 => 188,  539 => 187,  534 => 186,  529 => 184,  524 => 183,  522 => 182,  519 => 181,  515 => 180,  509 => 179,  506 => 178,  504 => 177,  496 => 174,  489 => 172,  480 => 168,  473 => 166,  466 => 162,  460 => 161,  456 => 160,  447 => 156,  442 => 154,  437 => 151,  431 => 150,  429 => 149,  423 => 148,  418 => 146,  413 => 143,  407 => 142,  405 => 141,  399 => 140,  394 => 138,  385 => 134,  378 => 132,  373 => 129,  367 => 128,  365 => 127,  359 => 126,  354 => 124,  349 => 121,  343 => 120,  341 => 119,  335 => 118,  330 => 116,  325 => 113,  319 => 112,  317 => 111,  311 => 110,  306 => 108,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
