<?php

/* oc01/template/extension/module/featured.twig */
class __TwigTemplate_7f74f37c0754eed9e4487e0e563e460423ffe60998c7e642b9566ab4c405b259 extends Twig_Template
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
        echo "<div class=\"section featured container\">
<h3 class=\"section-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
";
        // line 3
        $context["sliderFor"] = 5;
        // line 4
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 5
        echo "
 <div class=\"section-block\">
    <div class=\"section-product ";
        // line 7
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "section-product product-carousel";
        } else {
            echo " grid ";
        }
        echo "\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "
  <div class=\"";
            // line 10
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo " slider-item ";
            } else {
                echo " product-items col-xs-4 col-sm-4 col-md-3 ";
            }
            echo "\">     
    <div class=\"product-thumb transition\">
    <div class=\"image\">
                     
      ";
            // line 14
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 15
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
                // line 16
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
                // line 18
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
            // line 20
            echo "          ";
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
                          ";
            } else {
                // line 22
                echo "                          <div class=\"saleback\">
                          <span class=\"sale\">Sale</span>         
                          </div>
                          ";
            }
            // line 25
            echo " 
       </div>
 
      <div class=\"product-details\">
      <div class=\"button-group\">
        
        <button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 31
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" class=\"compare\"  data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 32
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      <a class=\"quickview\" href=\"";
            // line 33
            echo $this->getAttribute($context["product"], "quick", array());
            echo "\"><i class=\"fa fa-eye\"></i></a>
      <button type=\"button\" class=\"addtocart\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 34
            echo (isset($context["button_addtocart"]) ? $context["button_addtocart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
      </div>\t   
\t  <div class=\"caption\">
        <div class=\"rating\">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                echo "          ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    echo " <span class=\"fa fa-stack\">
          <i class=\"fa fa-star fa-stack-2x blank\"></i></span>
           ";
                } else {
                    // line 41
                    echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span> ";
                }
                // line 42
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
        <h4><a href=\"";
            // line 43
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>    
        
        ";
            // line 45
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 46
                echo "        <p class=\"price\">
          ";
                // line 47
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 48
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 50
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 52
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 53
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 55
                echo "        </p>
        ";
            }
            // line 57
            echo "      </div>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>
</div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "oc01/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 62,  208 => 57,  204 => 55,  196 => 53,  193 => 52,  185 => 50,  179 => 48,  177 => 47,  174 => 46,  172 => 45,  165 => 43,  157 => 42,  154 => 41,  147 => 39,  143 => 38,  132 => 34,  128 => 33,  122 => 32,  116 => 31,  108 => 25,  102 => 22,  96 => 20,  84 => 18,  73 => 16,  62 => 15,  60 => 14,  49 => 10,  46 => 9,  42 => 8,  34 => 7,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="section featured container">*/
/* <h3 class="section-heading">{{ heading_title }}</h3>*/
/* {% set sliderFor = 5 %}*/
/* {% set productCount = products|length %}*/
/* */
/*  <div class="section-block">*/
/*     <div class="section-product {% if productCount >= sliderFor %}section-product product-carousel{% else %} grid {% endif %}">*/
/*       {% for product in products %}*/
/* */
/*   <div class="{% if productCount >= sliderFor %} slider-item {% else %} product-items col-xs-4 col-sm-4 col-md-3 {% endif %}">     */
/*     <div class="product-thumb transition">*/
/*     <div class="image">*/
/*                      */
/*       {% if product.thumb_swap %}*/
/*           <div class="first_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /> </a> </div>*/
/*           <div class="swap_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb_swap }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"  /> </a></div>*/
/*           {% else %}*/
/*           <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /> </a>*/
/*           {% endif %}*/
/*           {% if not product.special %}        */
/*                           {% else %}*/
/*                           <div class="saleback">*/
/*                           <span class="sale">Sale</span>         */
/*                           </div>*/
/*                           {% endif %} */
/*        </div>*/
/*  */
/*       <div class="product-details">*/
/*       <div class="button-group">*/
/*         */
/*         <button type="button" class="wishlist" data-toggle="tooltip" data-placement="right" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" class="compare"  data-toggle="tooltip" data-placement="right" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       <a class="quickview" href="{{ product.quick }}"><i class="fa fa-eye"></i></a>*/
/*       <button type="button" class="addtocart" data-toggle="tooltip" data-placement="right" title="{{ button_addtocart }}" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*       </div>	   */
/* 	  <div class="caption">*/
/*         <div class="rating">*/
/*         {% for i in 1..5 %}*/
/*           {% if product.rating < i %} <span class="fa fa-stack">*/
/*           <i class="fa fa-star fa-stack-2x blank"></i></span>*/
/*            {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> {% endif %}*/
/*           {% endfor %}</div>*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>    */
/*         */
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/*   </div>*/
/* */
/* */
