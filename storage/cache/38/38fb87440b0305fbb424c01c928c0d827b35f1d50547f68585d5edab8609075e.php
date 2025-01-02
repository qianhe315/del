<?php

/* oc01/template/account/login.twig */
class __TwigTemplate_6ce19319561dba71f08224ede23ef51bdfbd9edc715d501c07603f16b673ad3c extends Twig_Template
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
<div id=\"account-login\" class=\"container\">
  ";
        // line 10
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 11
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 16
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 28
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 29
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</strong></p>
            <p>";
        // line 30
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            <a href=\"";
        // line 31
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 35
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 36
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
            <form action=\"";
        // line 37
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 43
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 45
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 46
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 47
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 48
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 50
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 54
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 55
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 57
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "oc01/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  181 => 55,  177 => 54,  171 => 50,  165 => 48,  163 => 47,  159 => 46,  153 => 45,  147 => 44,  143 => 43,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  67 => 17,  62 => 16,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/* <div id="account-login" class="container">*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <div class="well">*/
/*             <h2>{{ text_new_customer }}</h2>*/
/*             <p><strong>{{ text_register }}</strong></p>*/
/*             <p>{{ text_register_account }}</p>*/
/*             <a href="{{ register }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <div class="well">*/
/*             <h2>{{ text_returning_customer }}</h2>*/
/*             <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                 <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*               <input type="submit" value="{{ button_login }}" class="btn btn-primary" />*/
/*               {% if redirect %}*/
/*               <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
