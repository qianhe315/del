<?php

/* oc01/template/product/category.twig */
class __TwigTemplate_04326e25adfd414ae0b32ca1cb73a669e32a7f56bfc303fb0125f90f96feb629 extends Twig_Template
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
<div id=\"product-category\" class=\"container category\">

  <div class=\"row\">";
        // line 11
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 21
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 22
            echo "      <div class=\"row category_thumb\"> ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 23
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 25
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 26
                echo "        <div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 27
            echo "</div>
      
      ";
        }
        // line 30
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 31
            echo "     <div class=\"subcateory\">\t  
\t  <h3>";
            // line 32
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      ";
            // line 33
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 34
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 38
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 44
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 45
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 48
                        echo "            <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "</div>
      <br />
      ";
            }
            // line 55
            echo "      </div>
\t  ";
        }
        // line 57
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 58
            echo "      <div class=\"filter-product\">
        <div class=\"btn-grid-list\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 61
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
        <div class=\"compare-total\"><a href=\"";
            // line 65
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
        <div class=\"filter-product-right text-right\">
          <div class=\"sort-filter\">
            <div class=\"col-xs-4 col-sm-4 col-md-4 text-right\">
              <label class=\"control-label\" for=\"input-sort\">";
            // line 69
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            </div>
            <div class=\"col-xs-8 col-sm-8 col-md-8 text-right\">
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 74
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 75
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 77
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 79
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "              </select>
            </div>
          </div>
          <div class=\"show-filter\">
            <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
              <label class=\"control-label\" for=\"input-limit\">";
            // line 85
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            </div>
            <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 90
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 91
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
               ";
                } else {
                    // line 93
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 95
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "              </select>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row product-layoutrow\"> ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"> ";
                // line 104
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 105
                    echo "          <div class=\"first_image\"> <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" /> </a> </div>
          <div class=\"swap_image\"> <a href=\"";
                    // line 106
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"  /> </a></div>
          ";
                } else {
                    // line 108
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /> </a>
          ";
                }
                // line 109
                echo "</div>

            <div class=\"product-details\">
                        <div class=\"button-group\">
                
                <button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" data-placement=\"right\"  title=\"";
                // line 114
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" data-placement=\"right\"  title=\"";
                // line 115
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              <a class=\"quickview\" href=\"";
                // line 116
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\"><i class=\"fa fa-eye\"></i>quickview</a>
              <button type=\"button\" class=\"addtocart\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                // line 117
                echo (isset($context["button_addtocart"]) ? $context["button_addtocart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
        </div>
              <div class=\"caption\">
                 <div class=\"rating\">
        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 122
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\">
          <i class=\"fa fa-star fa-stack-2x blank\"></i></span>
           ";
                    } else {
                        // line 124
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span> ";
                    }
                    // line 125
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
\t\t\t\t<h4><a href=\"";
                // line 126
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>                 
                ";
                // line 127
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 128
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 129
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 130
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 131
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 133
                echo "\t\t\t\t<p class=\"desc\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                 
                 
                 </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 142
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 143
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 146
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 147
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 149
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 152
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 153
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 155
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "oc01/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 155,  489 => 153,  484 => 152,  476 => 149,  470 => 147,  467 => 146,  461 => 143,  457 => 142,  453 => 140,  438 => 133,  426 => 131,  419 => 130,  413 => 129,  410 => 128,  408 => 127,  402 => 126,  394 => 125,  391 => 124,  384 => 122,  380 => 121,  369 => 117,  365 => 116,  359 => 115,  353 => 114,  346 => 109,  334 => 108,  323 => 106,  312 => 105,  310 => 104,  306 => 102,  302 => 101,  295 => 96,  289 => 95,  281 => 93,  273 => 91,  270 => 90,  266 => 89,  259 => 85,  252 => 80,  246 => 79,  238 => 77,  230 => 75,  227 => 74,  223 => 73,  216 => 69,  207 => 65,  201 => 62,  197 => 61,  192 => 58,  189 => 57,  185 => 55,  180 => 52,  172 => 50,  161 => 48,  157 => 47,  153 => 45,  148 => 44,  142 => 40,  131 => 38,  127 => 37,  122 => 34,  120 => 33,  116 => 32,  113 => 31,  110 => 30,  105 => 27,  99 => 26,  96 => 25,  86 => 23,  83 => 22,  81 => 21,  77 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 11,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="breadcrumb-outer">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* <div id="product-category" class="container category">*/
/* */
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if thumb or description %}*/
/*       <div class="row category_thumb"> {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*       */
/*       {% endif %}*/
/*       {% if categories %}*/
/*      <div class="subcateory">	  */
/* 	  <h3>{{ text_refine }}</h3>*/
/*       {% if categories|length <= 5 %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <div class="row">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for child in category %}*/
/*             <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endfor %}</div>*/
/*       <br />*/
/*       {% endif %}*/
/*       </div>*/
/* 	  {% endif %}*/
/*       {% if products %}*/
/*       <div class="filter-product">*/
/*         <div class="btn-grid-list">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="compare-total"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*         <div class="filter-product-right text-right">*/
/*           <div class="sort-filter">*/
/*             <div class="col-xs-4 col-sm-4 col-md-4 text-right">*/
/*               <label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/*             </div>*/
/*             <div class="col-xs-8 col-sm-8 col-md-8 text-right">*/
/*               <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                 {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="show-filter">*/
/*             <div class="col-xs-6 col-sm-6 col-md-6 text-right">*/
/*               <label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/*             </div>*/
/*             <div class="col-xs-6 col-sm-6 col-md-6 text-right">*/
/*               <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                 {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*                 <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                {% else %}*/
/*                 <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row product-layoutrow"> {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/*             <div class="image"> {% if product.thumb_swap %}*/
/*           <div class="first_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /> </a> </div>*/
/*           <div class="swap_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb_swap }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"  /> </a></div>*/
/*           {% else %}*/
/*           <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /> </a>*/
/*           {% endif %}</div>*/
/* */
/*             <div class="product-details">*/
/*                         <div class="button-group">*/
/*                 */
/*                 <button type="button" class="wishlist" data-toggle="tooltip" data-placement="right"  title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" class="compare" data-toggle="tooltip" data-placement="right"  title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               <a class="quickview" href="{{ product.quick }}"><i class="fa fa-eye"></i>quickview</a>*/
/*               <button type="button" class="addtocart" data-toggle="tooltip" data-placement="right" title="{{ button_addtocart }}" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*         </div>*/
/*               <div class="caption">*/
/*                  <div class="rating">*/
/*         {% for i in 1..5 %}*/
/*           {% if product.rating < i %} <span class="fa fa-stack">*/
/*           <i class="fa fa-star fa-stack-2x blank"></i></span>*/
/*            {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> {% endif %}*/
/*           {% endfor %}</div>*/
/* 				<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>                 */
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/* 				<p class="desc">{{ product.description }}</p>*/
/*                  */
/*                  */
/*                  </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
