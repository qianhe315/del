<?php

/* oc01/template/product/product.twig */
class __TwigTemplate_90ea6f49f914949df833bbeaf23fb729a2d10df64eae6850fef3d74097dc0826 extends Twig_Template
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
<div id=\"product-product\" class=\"container product\">
  <div class=\"row\">";
        // line 10
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"productpage ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-6 left";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "col-sm-6 col-md-5 left";
            // line 23
            echo "        ";
        }
        echo "\t
        <div class=\"";
        // line 24
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
         ";
        // line 25
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 26
            echo "          <div class=\"thumbnails\">
            ";
            // line 27
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 28
                echo "            <div class=\"image\"><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img id=\"zoom\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></div>
             ";
            }
            // line 30
            echo "            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                echo "  
             ";
                // line 31
                $context["sliderFor"] = 5;
                // line 32
                $context["imageCount"] = twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null));
                // line 33
                echo "            <div class=\"product-additional-block swiper-viewport\">
              ";
                // line 34
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    // line 35
                    echo "              ";
                }
                // line 36
                echo "             
\t\t\t  <div class=\"image-additional";
                // line 37
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo " owl-carousel";
                }
                echo "\">
                
\t\t\t\t<div class=\"item\">
                  <div class=\"product-thumb\"> <a href=\"";
                // line 40
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" width=\"126\" height=\"151\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a> </div>
                </div>
               ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 43
                    echo "                <div class=\"item\">
                  <div class=\"product-thumb\"> <a href=\"";
                    // line 44
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" width=\"126\" height=\"151\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a> </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "              </div>\t 
\t\t\t  
            </div>
            ";
            }
            // line 51
            echo "          
\t\t 
           </div>
            ";
        }
        // line 55
        echo "          </div>
         ";
        // line 56
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 57
            echo "        ";
            $context["class"] = "col-sm-6 right";
            // line 58
            echo "        ";
        } else {
            // line 59
            echo "        ";
            $context["class"] = "col-sm-6 col-md-7 right";
            // line 60
            echo "        ";
        }
        echo "\t
        <div class=\"";
        // line 61
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
         <h1 class=\"product-title\">";
        // line 62
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <h3 class=\"product-title\">";
        // line 63
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
         ";
        // line 64
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 65
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 66
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 67
                echo "            <li>
              <h2 class=\"product-price\">";
                // line 68
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 71
                echo "            
            <li>
              <h2 class=\"special-price\">";
                // line 73
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
            </li>
            <li class=\"oldprice\"><span class=\"old-price\" style=\"text-decoration: line-through;\">";
                // line 75
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
            ";
            }
            // line 77
            echo "          </ul>
          ";
        }
        // line 79
        echo "\t\t  <ul class=\"list-unstyled detail\">
            ";
        // line 80
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 81
            echo "            <li class=\"manufacturer\">
              <div class=\"label\">";
            // line 82
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</div>
              <a href=\"";
            // line 83
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 85
        echo "            <li class=\"model\">
              <div class=\"label\">";
        // line 86
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " </div>
              ";
        // line 87
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
            ";
        // line 88
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 89
            echo "            <li class=\"reward\">
              <div class=\"label\">";
            // line 90
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</div>
              ";
            // line 91
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 93
        echo "            <li class=\"stock\">
              <div class=\"label\">";
        // line 94
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " </div>
              ";
        // line 95
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
          </ul>
\t\t  ";
        // line 97
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 98
            echo "          <ul class=\"list-unstyled price2\">
            ";
            // line 99
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 100
                echo "            <li class=\"tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo "<span>";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</span></li>
            ";
            }
            // line 102
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 103
                echo "            <li class=\"point\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 105
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 106
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 107
                    echo "            <li class=\"discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "            ";
            }
            // line 110
            echo "          </ul>
          ";
        }
        // line 112
        echo "          
         
          <div id=\"product\"> ";
        // line 114
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 115
            echo "            <hr>
            <h3 class=\"product-option\">";
            // line 116
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 118
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 119
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 120
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 121
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 122
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 124
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 125
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 126
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 127
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "              </select>
            </div>
            ";
                }
                // line 132
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 133
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 134
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 135
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 136
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 138
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 139
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 140
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 141
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 142
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 143
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo " </div>
            </div>
            ";
                }
                // line 148
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 149
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 150
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 151
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 152
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 154
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 155
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 156
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 157
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 158
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 159
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo " </div>
            </div>
            ";
                }
                // line 164
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 165
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 170
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 171
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 172
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 173
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 176
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 177
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 178
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 179
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 180
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 183
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 184
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 185
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 187
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 193
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 194
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 195
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 203
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 204
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 207
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 213
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "            ";
        }
        // line 215
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 216
            echo "            <hr>
            <h3>";
            // line 217
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 220
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 222
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 228
        echo "           <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 229
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 230
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 231
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 232
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
              <br/>
              <div class=\"btn-group\">
                <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"  class=\"btn btn-default wishlist\" title=\"";
        // line 235
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i>";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</button>
                <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"  class=\"btn btn-default compare\" title=\"";
        // line 236
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i>";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</button>
              </div>
            </div>
            ";
        // line 239
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 240
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 241
        echo "</div>
          ";
        // line 242
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 243
            echo "          <div class=\"rating\">
            <p>";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 245
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x blank\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t  </span>";
                }
                // line 247
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>  <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\').trigger('click'); return false;\"> <i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 250
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 254
        echo " </div>
     
\t  
        ";
        // line 257
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 258
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 259
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 260
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 261
            echo "        ";
        } else {
            // line 262
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 263
            echo "        ";
        }
        // line 264
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t  <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 266
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 267
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 268
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 270
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 271
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 273
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 275
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 276
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 277
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 280
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 282
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 286
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 287
                    echo "                <tr>
                  <td>";
                    // line 288
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 289
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "              </table>
            </div>
            ";
        }
        // line 297
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 298
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 301
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 302
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 303
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 305
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 306
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 311
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 313
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 318
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 319
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 329
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 331
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 334
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 338
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 340
            echo "              </form>
            </div>
            ";
        }
        // line 342
        echo "</div>
        </div>
\t\t </div>
\t\t
      ";
        // line 346
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 347
            echo "   <div class=\"section\">
        <div class=\"section-heading\">";
            // line 348
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
        <div class=\"section-block\">
          <div class=\"related-products\">           
\t\t\t  ";
            // line 351
            $context["sliderFor"] = 5;
            // line 352
            echo "\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            // line 353
            echo "            
            <div class=\"section-product ";
            // line 354
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel owl-carousel ";
            } else {
                echo "grid";
            }
            echo "\">             
\t\t\t   ";
            // line 355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 356
                echo "              <div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "item";
                } else {
                    echo "product-items col-xs-4 col-sm-4 col-md-3";
                }
                echo "\">
                <div class=\"product-thumb transition\">
                  <div class=\"image\">
                    ";
                // line 359
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 360
                    echo "          <div class=\"first_image\"> <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /> </a> </div>
          <div class=\"swap_image\"> <a href=\"";
                    // line 361
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /> </a></div>
          ";
                } else {
                    // line 363
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
                // line 365
                echo "                    ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 366
                    echo "                    ";
                } else {
                    // line 367
                    echo "                    <div class=\"saleback\"> <span class=\"sale\">Sale</span> </div>
                    ";
                }
                // line 369
                echo "                    
                  <div class=\"product-details\">
                  <div class=\"button-group\">
                      <button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" data-placement=\"right\"  title=\"";
                // line 372
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                      <button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" data-placement=\"right\"  title=\"";
                // line 373
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                      
                      <a class=\"quickview\" href=\"";
                // line 375
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\"><i class=\"fa fa-eye\"></i></a> 
                      <button type=\"button\" class=\"addtocart\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                // line 376
                echo (isset($context["button_addtocart"]) ? $context["button_addtocart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
                  </div>
                  </div>
                    <div class=\"caption\">
                      <div class=\"rating\">
                       ";
                // line 381
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 382
                    echo "                        ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                        // line 383
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x blank\"></i></span>
                        ";
                    } else {
                        // line 385
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        ";
                    }
                    // line 387
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 388
                echo "                      </div>
                      <h4><a href=\"";
                // line 389
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>                      
                      ";
                // line 390
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 391
                    echo "                      <p class=\"price\">
                        ";
                    // line 392
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 393
                        echo "                        ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 395
                        echo "                        <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span><span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                        ";
                    }
                    // line 397
                    echo "                        ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 398
                        echo "                        <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                        ";
                    }
                    // line 400
                    echo "                      </p>
                      ";
                }
                // line 402
                echo "                      
                    </div>
                  </div>
                </div>
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            echo "             
            </div>
          </div>
        </div>
      </div>
\t  ";
        }
        // line 413
        echo "        ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 414
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 415
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 416
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 417
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 418
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 420
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 421
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb-outer').after('<div class=\"alert alert-success alert-dismissible container \">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"shippingcart\"></span><span id=\"cart-total\"> ' + json['total'] + '</span><span class=\"res_cart_total\"> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 499
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 504
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 510
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 577
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 581
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
if (\$(window).width() > 767) {
\t\t\$(\"#zoom\").elevateZoom({

\t\t\t\tgallery:'product-additional-block',
\t\t\t\t//inner zoom

\t\t\t\tzoomType : \"window\",
\t\t\t\tcursor: \"crosshair\"




\t\t\t});
\t\tvar z_index = 0;

     \t\t\t    \t\t\$(document).on('click', '.thumbnail', function () {
     \t\t\t    \t\t  \$('.thumbnails').magnificPopup('open', z_index);
     \t\t\t    \t\t  return false;
     \t\t\t    \t\t});

     \t\t\t    \t\t\$('.product-additional-block a').click(function() {
     \t\t\t    \t\t\tvar smallImage = \$(this).attr('data-image');
     \t\t\t    \t\t\tvar largeImage = \$(this).attr('data-zoom-image');
     \t\t\t    \t\t\tvar ez =   \$('#zoom').data('elevateZoom');
     \t\t\t    \t\t\t\$('.thumbnail').attr('href', largeImage);
     \t\t\t    \t\t\tez.swaptheimage(smallImage, largeImage);
     \t\t\t    \t\t\tz_index = \$(this).index('.product-additional-block a');
     \t\t\t    \t\t\treturn false;
     \t\t\t    \t\t});

\t}else{
\t\t\$(document).on('click', '.thumbnail', function () {
\t\t\$('.thumbnails').magnificPopup('open', 0);
\t\treturn false;
\t\t});
\t}
});
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\tdelegate: 'a.elevatezoom-gallery',
\t\ttype: 'image',
\t\ttLoading: 'Loading image #%curr%...',
\t\tmainClass: 'mfp-with-zoom',
\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true,
\t\t\tpreload: [0,1] // Will preload 0 - before current, and 1 after the current image
\t\t},
\t\timage: {
\t\t\ttError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
\t\t\ttitleSrc: function(item) {
\t\t\t\treturn item.el.attr('title');
\t\t\t}
\t\t}
\t});
\t
\t  \$('.image-additional').owlCarousel({

    items: 4,

    navigation: true,

    pagination: false,

    itemsDesktop : [1199, 3],

    itemsDesktopSmall : [991, 3],

    itemsTablet : [767, 3],

    itemsTabletSmall : [479, 2],

    itemsMobile : [320, 1]

  });

\$('.product-carousel').owlCarousel({
\t\titems: 4,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,
\t\tpagination: false,
\t\titemsDesktop : [1199,3],
\t\titemsDesktopSmall :\t[991,3],
\t\titemsTablet : [650,2],
\t\titemsMobile : [479,1]
\t});


\t
\t
});

//--></script> 
";
        // line 704
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "oc01/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1673 => 704,  1547 => 581,  1540 => 577,  1470 => 510,  1461 => 504,  1453 => 499,  1372 => 421,  1367 => 420,  1358 => 418,  1351 => 417,  1341 => 416,  1337 => 415,  1332 => 414,  1329 => 413,  1321 => 407,  1310 => 402,  1306 => 400,  1298 => 398,  1295 => 397,  1287 => 395,  1281 => 393,  1279 => 392,  1276 => 391,  1274 => 390,  1268 => 389,  1265 => 388,  1259 => 387,  1255 => 385,  1251 => 383,  1248 => 382,  1244 => 381,  1232 => 376,  1228 => 375,  1221 => 373,  1215 => 372,  1210 => 369,  1206 => 367,  1203 => 366,  1200 => 365,  1188 => 363,  1177 => 361,  1166 => 360,  1164 => 359,  1153 => 356,  1149 => 355,  1141 => 354,  1138 => 353,  1135 => 352,  1133 => 351,  1127 => 348,  1124 => 347,  1122 => 346,  1116 => 342,  1111 => 340,  1105 => 338,  1096 => 334,  1090 => 331,  1085 => 329,  1072 => 319,  1068 => 318,  1060 => 313,  1055 => 311,  1047 => 306,  1043 => 305,  1039 => 303,  1037 => 302,  1033 => 301,  1028 => 298,  1025 => 297,  1020 => 294,  1013 => 292,  1004 => 289,  1000 => 288,  997 => 287,  993 => 286,  986 => 282,  982 => 280,  978 => 279,  974 => 277,  972 => 276,  968 => 275,  964 => 273,  958 => 271,  955 => 270,  949 => 268,  947 => 267,  943 => 266,  937 => 264,  934 => 263,  931 => 262,  928 => 261,  925 => 260,  922 => 259,  919 => 258,  917 => 257,  912 => 254,  904 => 250,  890 => 247,  882 => 245,  878 => 244,  875 => 243,  873 => 242,  870 => 241,  864 => 240,  862 => 239,  852 => 236,  844 => 235,  836 => 232,  832 => 231,  828 => 230,  824 => 229,  821 => 228,  815 => 224,  804 => 222,  800 => 221,  796 => 220,  790 => 217,  787 => 216,  784 => 215,  781 => 214,  775 => 213,  762 => 207,  755 => 205,  748 => 204,  745 => 203,  732 => 197,  725 => 195,  718 => 194,  715 => 193,  702 => 187,  695 => 185,  688 => 184,  685 => 183,  677 => 180,  669 => 179,  665 => 178,  658 => 177,  655 => 176,  643 => 173,  637 => 172,  630 => 171,  627 => 170,  615 => 167,  609 => 166,  602 => 165,  599 => 164,  594 => 161,  586 => 159,  579 => 158,  577 => 157,  572 => 156,  556 => 155,  550 => 154,  546 => 152,  540 => 151,  536 => 150,  529 => 149,  526 => 148,  521 => 145,  513 => 143,  506 => 142,  504 => 141,  500 => 140,  482 => 139,  476 => 138,  472 => 136,  466 => 135,  462 => 134,  455 => 133,  452 => 132,  447 => 129,  440 => 127,  433 => 126,  431 => 125,  424 => 124,  420 => 123,  416 => 122,  410 => 121,  404 => 120,  397 => 119,  394 => 118,  390 => 117,  386 => 116,  383 => 115,  381 => 114,  377 => 112,  373 => 110,  370 => 109,  359 => 107,  354 => 106,  351 => 105,  343 => 103,  340 => 102,  332 => 100,  330 => 99,  327 => 98,  325 => 97,  320 => 95,  316 => 94,  313 => 93,  308 => 91,  304 => 90,  301 => 89,  299 => 88,  295 => 87,  291 => 86,  288 => 85,  281 => 83,  277 => 82,  274 => 81,  272 => 80,  269 => 79,  265 => 77,  260 => 75,  255 => 73,  251 => 71,  245 => 68,  242 => 67,  240 => 66,  237 => 65,  235 => 64,  231 => 63,  227 => 62,  223 => 61,  218 => 60,  215 => 59,  212 => 58,  209 => 57,  207 => 56,  204 => 55,  198 => 51,  192 => 47,  171 => 44,  168 => 43,  164 => 42,  147 => 40,  139 => 37,  136 => 36,  133 => 35,  131 => 34,  128 => 33,  126 => 32,  124 => 31,  119 => 30,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  92 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/* <div id="product-product" class="container product">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="productpage {{ class }}">{{ content_top }}*/
/*       <div class="row">{% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 left' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6 col-md-5 left' %}*/
/*         {% endif %}	*/
/*         <div class="{{ class }}">*/
/*          {% if thumb or images %}*/
/*           <div class="thumbnails">*/
/*             {% if thumb %}*/
/*             <div class="image"><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img id="zoom" src="{{ thumb }}" data-zoom-image="{{ popup }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></div>*/
/*              {% endif %}*/
/*             {% if images %}  */
/*              {% set sliderFor = 5 %}*/
/* {% set imageCount = images|length %}*/
/*             <div class="product-additional-block swiper-viewport">*/
/*               {% if imageCount >= sliderFor %}*/
/*               {% endif %}*/
/*              */
/* 			  <div class="image-additional{% if imageCount >= sliderFor %} owl-carousel{% endif %}">*/
/*                 */
/* 				<div class="item">*/
/*                   <div class="product-thumb"> <a href="{{ popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ thumb }}" data-zoom-image="{{ popup }}"><img src="{{ thumb }}" width="126" height="151" title="{{ heading_title }}" alt="{{ heading_title }}" /></a> </div>*/
/*                 </div>*/
/*                {% for image in images %}*/
/*                 <div class="item">*/
/*                   <div class="product-thumb"> <a href="{{ image.popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ image.thumb }}" data-zoom-image="{{ image.popup }}"><img src="{{ image.thumb }}" width="126" height="151" title="{{ heading_title }}" alt="{{ heading_title }}" /></a> </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>	 */
/* 			  */
/*             </div>*/
/*             {% endif %}*/
/*           */
/* 		 */
/*            </div>*/
/*             {% endif %}*/
/*           </div>*/
/*          {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 right' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6 col-md-7 right' %}*/
/*         {% endif %}	*/
/*         <div class="{{ class }}">*/
/*          <h1 class="product-title">{{ heading_title }}</h1>*/
/*           <h3 class="product-title">{{ heading_title }}</h3>*/
/*          {% if price %}*/
/*           <ul class="list-unstyled price">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h2 class="product-price">{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/*             */
/*             <li>*/
/*               <h2 class="special-price">{{ special }}</h2>*/
/*             </li>*/
/*             <li class="oldprice"><span class="old-price" style="text-decoration: line-through;">{{ price }}</span></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/* 		  <ul class="list-unstyled detail">*/
/*             {% if manufacturer %}*/
/*             <li class="manufacturer">*/
/*               <div class="label">{{ text_manufacturer }}</div>*/
/*               <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li class="model">*/
/*               <div class="label">{{ text_model }} </div>*/
/*               {{ model }}</li>*/
/*             {% if reward %}*/
/*             <li class="reward">*/
/*               <div class="label">{{ text_reward }}</div>*/
/*               {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li class="stock">*/
/*               <div class="label">{{ text_stock }} </div>*/
/*               {{ stock }}</li>*/
/*           </ul>*/
/* 		  {% if price %}*/
/*           <ul class="list-unstyled price2">*/
/*             {% if tax %}*/
/*             <li class="tax">{{ text_tax }}<span>{{ tax }}</span></li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li class="point">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             {% for discount in discounts %}*/
/*             <li class="discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           */
/*          */
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <h3 class="product-option">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*            <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*               <br/>*/
/*               <div class="btn-group">*/
/*                 <button type="button" data-toggle="tooltip" data-placement="right"  class="btn btn-default wishlist" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i>{{ button_wishlist }}</button>*/
/*                 <button type="button" data-toggle="tooltip" data-placement="right"  class="btn btn-default compare" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i>{{ button_compare }}</button>*/
/*               </div>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}</div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/*             <p>{% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x blank"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>*/
/* 			  </span>{% endif %}*/
/*               {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\').trigger('click'); return false;">{{ reviews }}</a>  <a href="" onclick="$('a[href=\'#tab-review\').trigger('click'); return false;"> <i class="fa fa-pencil"></i> {{ text_write }}</a></p>*/
/*             <hr>*/
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/*           </div>*/
/*           {% endif %} </div>*/
/*      */
/* 	  */
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-12' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/* 	  <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/*         </div>*/
/* 		 </div>*/
/* 		*/
/*       {% if products %}*/
/*    <div class="section">*/
/*         <div class="section-heading">{{ text_related }}</div>*/
/*         <div class="section-block">*/
/*           <div class="related-products">           */
/* 			  {% set sliderFor = 5 %}*/
/* 			{% set productCount = products|length %}*/
/*             */
/*             <div class="section-product {% if productCount >= sliderFor %}product-carousel owl-carousel {% else %}grid{% endif %}">             */
/* 			   {% for product in products %}*/
/*               <div class="{% if productCount >= sliderFor %}item{% else %}product-items col-xs-4 col-sm-4 col-md-3{% endif %}">*/
/*                 <div class="product-thumb transition">*/
/*                   <div class="image">*/
/*                     {% if product.thumb_swap %}*/
/*           <div class="first_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /> </a> </div>*/
/*           <div class="swap_image"> <a href="{{ product.href }}"> <img src="{{ product.thumb_swap }}" alt="{{ product.name }}" title="{{ product.name }}" /> </a></div>*/
/*           {% else %}*/
/*           <a href="{{ product.href }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /> </a>*/
/*           {% endif %}*/
/*                     {% if not product.special %}*/
/*                     {% else %}*/
/*                     <div class="saleback"> <span class="sale">Sale</span> </div>*/
/*                     {% endif %}*/
/*                     */
/*                   <div class="product-details">*/
/*                   <div class="button-group">*/
/*                       <button type="button" class="wishlist" data-toggle="tooltip" data-placement="right"  title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*                       <button type="button" class="compare" data-toggle="tooltip" data-placement="right"  title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                       */
/*                       <a class="quickview" href="{{ product.quick }}"><i class="fa fa-eye"></i></a> */
/*                       <button type="button" class="addtocart" data-toggle="tooltip" data-placement="right" title="{{ button_addtocart }}" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*                   </div>*/
/*                   </div>*/
/*                     <div class="caption">*/
/*                       <div class="rating">*/
/*                        {% for j in 1..5 %}*/
/*                         {% if product.rating < j %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x blank"></i></span>*/
/*                         {% else %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                       <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>                      */
/*                       {% if product.price %}*/
/*                       <p class="price">*/
/*                         {% if not product.special %}*/
/*                         {{ product.price }}*/
/*                         {% else %}*/
/*                         <span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>*/
/*                         {% endif %}*/
/*                         {% if product.tax %}*/
/*                         <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                         {% endif %}*/
/*                       </p>*/
/*                       {% endif %}*/
/*                       */
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endfor %}             */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* 	  {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb-outer').after('<div class="alert alert-success alert-dismissible container ">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<span id="shippingcart"></span><span id="cart-total"> ' + json['total'] + '</span><span class="res_cart_total"> ' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* if ($(window).width() > 767) {*/
/* 		$("#zoom").elevateZoom({*/
/* */
/* 				gallery:'product-additional-block',*/
/* 				//inner zoom*/
/* */
/* 				zoomType : "window",*/
/* 				cursor: "crosshair"*/
/* */
/* */
/* */
/* */
/* 			});*/
/* 		var z_index = 0;*/
/* */
/*      			    		$(document).on('click', '.thumbnail', function () {*/
/*      			    		  $('.thumbnails').magnificPopup('open', z_index);*/
/*      			    		  return false;*/
/*      			    		});*/
/* */
/*      			    		$('.product-additional-block a').click(function() {*/
/*      			    			var smallImage = $(this).attr('data-image');*/
/*      			    			var largeImage = $(this).attr('data-zoom-image');*/
/*      			    			var ez =   $('#zoom').data('elevateZoom');*/
/*      			    			$('.thumbnail').attr('href', largeImage);*/
/*      			    			ez.swaptheimage(smallImage, largeImage);*/
/*      			    			z_index = $(this).index('.product-additional-block a');*/
/*      			    			return false;*/
/*      			    		});*/
/* */
/* 	}else{*/
/* 		$(document).on('click', '.thumbnail', function () {*/
/* 		$('.thumbnails').magnificPopup('open', 0);*/
/* 		return false;*/
/* 		});*/
/* 	}*/
/* });*/
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		delegate: 'a.elevatezoom-gallery',*/
/* 		type: 'image',*/
/* 		tLoading: 'Loading image #%curr%...',*/
/* 		mainClass: 'mfp-with-zoom',*/
/* 		gallery: {*/
/* 			enabled: true,*/
/* 			navigateByImgClick: true,*/
/* 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image*/
/* 		},*/
/* 		image: {*/
/* 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',*/
/* 			titleSrc: function(item) {*/
/* 				return item.el.attr('title');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	  $('.image-additional').owlCarousel({*/
/* */
/*     items: 4,*/
/* */
/*     navigation: true,*/
/* */
/*     pagination: false,*/
/* */
/*     itemsDesktop : [1199, 3],*/
/* */
/*     itemsDesktopSmall : [991, 3],*/
/* */
/*     itemsTablet : [767, 3],*/
/* */
/*     itemsTabletSmall : [479, 2],*/
/* */
/*     itemsMobile : [320, 1]*/
/* */
/*   });*/
/* */
/* $('.product-carousel').owlCarousel({*/
/* 		items: 4,*/
/* 		autoPlay: false,*/
/* 		singleItem: false,*/
/* 		navigation: true,*/
/* 		pagination: false,*/
/* 		itemsDesktop : [1199,3],*/
/* 		itemsDesktopSmall :	[991,3],*/
/* 		itemsTablet : [650,2],*/
/* 		itemsMobile : [479,1]*/
/* 	});*/
/* */
/* */
/* 	*/
/* 	*/
/* });*/
/* */
/* //--></script> */
/* {{ footer }} */
/* */
