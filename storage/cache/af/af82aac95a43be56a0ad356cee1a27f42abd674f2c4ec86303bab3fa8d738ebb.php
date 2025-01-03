<?php

/* oc01/template/account/return_form.twig */
class __TwigTemplate_4bcdef082ed2f4a3e8968962cf5e3b30ebfc69a9a5599f491f3f173f896671fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"breadcrumb-outer\">  
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
</div>
<div id=\"account-return\" class=\"container\">
  ";
        // line 10
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 11
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 13
        echo "  <div class=\"row\"> ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 23
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
      <form action=\"";
        // line 24
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 26
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 28
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 30
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 31
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 38
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 39
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 40
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 41
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 44
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 46
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 47
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 48
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 49
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 52
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 54
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 55
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 56
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
              ";
        }
        // line 57
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 60
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 62
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 63
        if ((isset($context["error_order_id"]) ? $context["error_order_id"] : null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_order_id"]) ? $context["error_order_id"] : null);
            echo "</div>
              ";
        }
        // line 65
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 68
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 71
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 79
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 81
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 83
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 84
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            // line 85
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "</div>
              ";
        }
        // line 86
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 89
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 91
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 92
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 93
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
              ";
        }
        // line 94
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 97
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 99
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 103
        echo (isset($context["entry_reason"]) ? $context["entry_reason"] : null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_reasons"]) ? $context["return_reasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 105
            echo "              ";
            if (($this->getAttribute($context["return_reason"], "return_reason_id", array()) == (isset($context["return_reason_id"]) ? $context["return_reason_id"] : null))) {
                // line 106
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 108
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" checked=\"checked\" />
                  ";
                // line 109
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            } else {
                // line 112
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 114
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" />
                  ";
                // line 115
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            }
            // line 118
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "              ";
        if ((isset($context["error_reason"]) ? $context["error_reason"] : null)) {
            // line 120
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_reason"]) ? $context["error_reason"] : null);
            echo "</div>
              ";
        }
        // line 121
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 124
        echo (isset($context["entry_opened"]) ? $context["entry_opened"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 126
        if ((isset($context["opened"]) ? $context["opened"] : null)) {
            // line 127
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 129
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 131
        echo "                ";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 132
        if ( !(isset($context["opened"]) ? $context["opened"] : null)) {
            // line 133
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 135
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 137
        echo "                ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 141
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 143
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 146
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        ";
        // line 148
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 149
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 150
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-danger\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 151
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 152
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 153
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 155
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 157
            echo "            <input type=\"submit\" value=\"";
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 161
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 162
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 164
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 168
        echo "      </form>
      ";
        // line 169
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 170
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 174
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 178
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "oc01/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 178,  488 => 174,  481 => 170,  477 => 169,  474 => 168,  467 => 164,  460 => 162,  457 => 161,  449 => 157,  445 => 155,  441 => 153,  439 => 152,  435 => 151,  429 => 150,  426 => 149,  424 => 148,  419 => 146,  411 => 143,  406 => 141,  398 => 137,  394 => 135,  390 => 133,  388 => 132,  383 => 131,  379 => 129,  375 => 127,  373 => 126,  368 => 124,  363 => 121,  357 => 120,  354 => 119,  348 => 118,  342 => 115,  338 => 114,  334 => 112,  328 => 109,  324 => 108,  320 => 106,  317 => 105,  313 => 104,  309 => 103,  300 => 99,  295 => 97,  290 => 94,  284 => 93,  282 => 92,  276 => 91,  271 => 89,  266 => 86,  260 => 85,  258 => 84,  252 => 83,  247 => 81,  242 => 79,  229 => 71,  223 => 68,  218 => 65,  212 => 64,  210 => 63,  204 => 62,  199 => 60,  194 => 57,  188 => 56,  186 => 55,  180 => 54,  175 => 52,  170 => 49,  164 => 48,  162 => 47,  156 => 46,  151 => 44,  146 => 41,  140 => 40,  138 => 39,  132 => 38,  127 => 36,  122 => 33,  116 => 32,  114 => 31,  108 => 30,  103 => 28,  98 => 26,  93 => 24,  89 => 23,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  47 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="breadcrumb-outer">  */
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* <div id="account-return" class="container">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row"> {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}"> {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_order }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="order_id" value="{{ order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*               {% if error_order_id %}*/
/*               <div class="text-danger">{{ error_order_id }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-date-ordered">{{ entry_date_ordered }}</label>*/
/*             <div class="col-sm-3">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="date_ordered" value="{{ date_ordered }}" placeholder="{{ entry_date_ordered }}" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_product }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product" value="{{ product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               {% if error_product %}*/
/*               <div class="text-danger">{{ error_product }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*               {% if error_model %}*/
/*               <div class="text-danger">{{ error_model }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_reason }}</label>*/
/*             <div class="col-sm-10"> {% for return_reason in return_reasons %}*/
/*               {% if return_reason.return_reason_id == return_reason_id %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" checked="checked" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               {% if error_reason %}*/
/*               <div class="text-danger">{{ error_reason }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_opened }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if opened %}*/
/*                 <input type="radio" name="opened" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="1" />*/
/*                 {% endif %}*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline"> {% if not opened %}*/
/*                 <input type="radio" name="opened" value="0" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="0" />*/
/*                 {% endif %}*/
/*                 {{ text_no }}</label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-comment">{{ entry_fault_detail }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="comment" rows="10" placeholder="{{ entry_fault_detail }}" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         {% if text_agree %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-danger">{{ button_back }}</a></div>*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             <input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* {{ footer }} */
