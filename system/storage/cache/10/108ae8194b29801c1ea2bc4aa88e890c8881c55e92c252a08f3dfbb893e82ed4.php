<?php

/* extension/theme/oc01.twig */
class __TwigTemplate_e9681da503829ba0400bc6c2d3ddd33a651d52f8fb9c11479be3e01aa1b61d37 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
         <input type='hidden' name='theme_oc01_status' value=\"1\" />
\t\t  <fieldset>
            <legend>";
        // line 30
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\" title=\"";
        // line 32
        echo (isset($context["help_directory"]) ? $context["help_directory"] : null);
        echo "\">";
        echo (isset($context["entry_directory"]) ? $context["entry_directory"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"theme_oc01_directory\" id=\"input-directory\" class=\"form-control\">
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directories"]) ? $context["directories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 36
            echo "                  ";
            if (($context["directory"] == (isset($context["theme_oc01_directory"]) ? $context["theme_oc01_directory"] : null))) {
                // line 37
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
                  ";
            } else {
                // line 39
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
                  ";
            }
            // line 41
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 46
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_oc01_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 49
        if ((isset($context["theme_oc01_status"]) ? $context["theme_oc01_status"] : null)) {
            // line 50
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 51
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 54
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 56
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 61
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 63
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_oc01_product_limit\" value=\"";
        // line 65
        echo (isset($context["theme_oc01_product_limit"]) ? $context["theme_oc01_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
                ";
        // line 66
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 67
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
                ";
        }
        // line 69
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_oc01_product_description_length\" value=\"";
        // line 74
        echo (isset($context["theme_oc01_product_description_length"]) ? $context["theme_oc01_product_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
                ";
        // line 75
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 76
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
                ";
        }
        // line 78
        echo "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 82
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 84
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_category_width\" value=\"";
        // line 88
        echo (isset($context["theme_oc01_image_category_width"]) ? $context["theme_oc01_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_category_height\" value=\"";
        // line 91
        echo (isset($context["theme_oc01_image_category_height"]) ? $context["theme_oc01_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 94
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 95
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
                ";
        }
        // line 97
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 100
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_thumb_width\" value=\"";
        // line 104
        echo (isset($context["theme_oc01_image_thumb_width"]) ? $context["theme_oc01_image_thumb_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_thumb_height\" value=\"";
        // line 107
        echo (isset($context["theme_oc01_image_thumb_height"]) ? $context["theme_oc01_image_thumb_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 110
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 111
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
                ";
        }
        // line 113
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 116
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_popup_width\" value=\"";
        // line 120
        echo (isset($context["theme_oc01_image_popup_width"]) ? $context["theme_oc01_image_popup_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_popup_height\" value=\"";
        // line 123
        echo (isset($context["theme_oc01_image_popup_height"]) ? $context["theme_oc01_image_popup_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 126
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 127
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
                ";
        }
        // line 129
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 132
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_product_width\" value=\"";
        // line 136
        echo (isset($context["theme_oc01_image_product_width"]) ? $context["theme_oc01_image_product_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_product_height\" value=\"";
        // line 139
        echo (isset($context["theme_oc01_image_product_height"]) ? $context["theme_oc01_image_product_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 142
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 143
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
                ";
        }
        // line 145
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 148
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_additional_width\" value=\"";
        // line 152
        echo (isset($context["theme_oc01_image_additional_width"]) ? $context["theme_oc01_image_additional_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_additional_height\" value=\"";
        // line 155
        echo (isset($context["theme_oc01_image_additional_height"]) ? $context["theme_oc01_image_additional_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 158
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 159
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
                ";
        }
        // line 161
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 164
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_related_width\" value=\"";
        // line 168
        echo (isset($context["theme_oc01_image_related_width"]) ? $context["theme_oc01_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_related_height\" value=\"";
        // line 171
        echo (isset($context["theme_oc01_image_related_height"]) ? $context["theme_oc01_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 174
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 175
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
                ";
        }
        // line 177
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 180
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_compare_width\" value=\"";
        // line 184
        echo (isset($context["theme_oc01_image_compare_width"]) ? $context["theme_oc01_image_compare_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_compare_height\" value=\"";
        // line 187
        echo (isset($context["theme_oc01_image_compare_height"]) ? $context["theme_oc01_image_compare_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 190
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 191
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
                ";
        }
        // line 193
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 196
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_wishlist_width\" value=\"";
        // line 200
        echo (isset($context["theme_oc01_image_wishlist_width"]) ? $context["theme_oc01_image_wishlist_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_wishlist_height\" value=\"";
        // line 203
        echo (isset($context["theme_oc01_image_wishlist_height"]) ? $context["theme_oc01_image_wishlist_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 206
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 207
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
                ";
        }
        // line 209
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 212
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_cart_width\" value=\"";
        // line 216
        echo (isset($context["theme_oc01_image_cart_width"]) ? $context["theme_oc01_image_cart_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_cart_height\" value=\"";
        // line 219
        echo (isset($context["theme_oc01_image_cart_height"]) ? $context["theme_oc01_image_cart_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 222
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 223
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
                ";
        }
        // line 225
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 228
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_location_width\" value=\"";
        // line 232
        echo (isset($context["theme_oc01_image_location_width"]) ? $context["theme_oc01_image_location_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_oc01_image_location_height\" value=\"";
        // line 235
        echo (isset($context["theme_oc01_image_location_height"]) ? $context["theme_oc01_image_location_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 238
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 239
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
                ";
        }
        // line 241
        echo "              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 249
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/oc01.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 249,  591 => 241,  585 => 239,  583 => 238,  575 => 235,  567 => 232,  560 => 228,  555 => 225,  549 => 223,  547 => 222,  539 => 219,  531 => 216,  524 => 212,  519 => 209,  513 => 207,  511 => 206,  503 => 203,  495 => 200,  488 => 196,  483 => 193,  477 => 191,  475 => 190,  467 => 187,  459 => 184,  452 => 180,  447 => 177,  441 => 175,  439 => 174,  431 => 171,  423 => 168,  416 => 164,  411 => 161,  405 => 159,  403 => 158,  395 => 155,  387 => 152,  380 => 148,  375 => 145,  369 => 143,  367 => 142,  359 => 139,  351 => 136,  344 => 132,  339 => 129,  333 => 127,  331 => 126,  323 => 123,  315 => 120,  308 => 116,  303 => 113,  297 => 111,  295 => 110,  287 => 107,  279 => 104,  272 => 100,  267 => 97,  261 => 95,  259 => 94,  251 => 91,  243 => 88,  236 => 84,  231 => 82,  225 => 78,  219 => 76,  217 => 75,  211 => 74,  204 => 72,  199 => 69,  193 => 67,  191 => 66,  185 => 65,  178 => 63,  173 => 61,  166 => 56,  161 => 54,  156 => 53,  151 => 51,  146 => 50,  144 => 49,  138 => 46,  132 => 42,  126 => 41,  118 => 39,  110 => 37,  107 => 36,  103 => 35,  95 => 32,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-theme" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-theme" class="form-horizontal">*/
/*          <input type='hidden' name='theme_oc01_status' value="1" />*/
/* 		  <fieldset>*/
/*             <legend>{{ text_general }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-directory"><span data-toggle="tooltip" title="{{ help_directory }}">{{ entry_directory }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_oc01_directory" id="input-directory" class="form-control">*/
/*                   {% for directory in directories %}*/
/*                   {% if directory == theme_oc01_directory %}*/
/*                   <option value="{{ directory }}" selected="selected">{{ directory }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ directory }}">{{ directory }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_oc01_status" id="input-status" class="form-control">*/
/*                   {% if theme_oc01_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_product }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="{{ help_product_limit }}">{{ entry_product_limit }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_oc01_product_limit" value="{{ theme_oc01_product_limit }}" placeholder="{{ entry_product_limit }}" id="input-catalog-limit" class="form-control" />*/
/*                 {% if error_product_limit %}*/
/*                 <div class="text-danger">{{ error_product_limit }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-description-limit"><span data-toggle="tooltip" title="{{ help_product_description_length }}">{{ entry_product_description_length }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_oc01_product_description_length" value="{{ theme_oc01_product_description_length }}" placeholder="{{ entry_product_description_length }}" id="input-description-limit" class="form-control" />*/
/*                 {% if error_product_description_length %}*/
/*                 <div class="text-danger">{{ error_product_description_length }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_image }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-category-width">{{ entry_image_category }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_category_width" value="{{ theme_oc01_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_category_height" value="{{ theme_oc01_image_category_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_category %}*/
/*                 <div class="text-danger">{{ error_image_category }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-thumb-width">{{ entry_image_thumb }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_thumb_width" value="{{ theme_oc01_image_thumb_width }}" placeholder="{{ entry_width }}" id="input-image-thumb-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_thumb_height" value="{{ theme_oc01_image_thumb_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_thumb %}*/
/*                 <div class="text-danger">{{ error_image_thumb }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-popup-width">{{ entry_image_popup }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_popup_width" value="{{ theme_oc01_image_popup_width }}" placeholder="{{ entry_width }}" id="input-image-popup-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_popup_height" value="{{ theme_oc01_image_popup_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_popup %}*/
/*                 <div class="text-danger">{{ error_image_popup }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-product-width">{{ entry_image_product }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_product_width" value="{{ theme_oc01_image_product_width }}" placeholder="{{ entry_width }}" id="input-image-product-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_product_height" value="{{ theme_oc01_image_product_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_product %}*/
/*                 <div class="text-danger">{{ error_image_product }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-additional-width">{{ entry_image_additional }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_additional_width" value="{{ theme_oc01_image_additional_width }}" placeholder="{{ entry_width }}" id="input-image-additional-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_additional_height" value="{{ theme_oc01_image_additional_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_additional %}*/
/*                 <div class="text-danger">{{ error_image_additional }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-related">{{ entry_image_related }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_related_width" value="{{ theme_oc01_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_related_height" value="{{ theme_oc01_image_related_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_related %}*/
/*                 <div class="text-danger">{{ error_image_related }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-compare">{{ entry_image_compare }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_compare_width" value="{{ theme_oc01_image_compare_width }}" placeholder="{{ entry_width }}" id="input-image-compare" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_compare_height" value="{{ theme_oc01_image_compare_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_compare %}*/
/*                 <div class="text-danger">{{ error_image_compare }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-wishlist">{{ entry_image_wishlist }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_wishlist_width" value="{{ theme_oc01_image_wishlist_width }}" placeholder="{{ entry_width }}" id="input-image-wishlist" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_wishlist_height" value="{{ theme_oc01_image_wishlist_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_wishlist %}*/
/*                 <div class="text-danger">{{ error_image_wishlist }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-cart">{{ entry_image_cart }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_cart_width" value="{{ theme_oc01_image_cart_width }}" placeholder="{{ entry_width }}" id="input-image-cart" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_cart_height" value="{{ theme_oc01_image_cart_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_cart %}*/
/*                 <div class="text-danger">{{ error_image_cart }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-location">{{ entry_image_location }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_location_width" value="{{ theme_oc01_image_location_width }}" placeholder="{{ entry_width }}" id="input-image-location" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_oc01_image_location_height" value="{{ theme_oc01_image_location_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_location %}*/
/*                 <div class="text-danger">{{ error_image_location }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
