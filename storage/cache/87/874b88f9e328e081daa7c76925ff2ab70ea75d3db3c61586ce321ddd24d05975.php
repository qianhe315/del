<?php

/* oc01/template/common/home.twig */
class __TwigTemplate_cb4105226a61cb444ee1adc6392f9701245b725e1af6ebe858f74a9340088dc5 extends Twig_Template
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
";
        // line 2
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
<div id=\"common-home\">
  <div class=\"row\">";
        // line 4
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 5
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 13
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 15
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
<script type=\"text/javascript\">
\$(document).ready(function(){
\$('.product-carousel').owlCarousel({
\t\titems: 4,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,\t\t
\t\tpagination: false,
\t\titemsDesktop : [1199,3],
\t\titemsDesktopSmall :\t[991,3],
\t\titemsTablet : [650,2],
\t\titemsMobile : [479,1]
\t});\t
});\t



</script>
";
    }

    public function getTemplateName()
    {
        return "oc01/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ content_top }}*/
/* <div id="common-home">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/* $('.product-carousel').owlCarousel({*/
/* 		items: 4,*/
/* 		autoPlay: false,*/
/* 		singleItem: false,*/
/* 		navigation: true,		*/
/* 		pagination: false,*/
/* 		itemsDesktop : [1199,3],*/
/* 		itemsDesktopSmall :	[991,3],*/
/* 		itemsTablet : [650,2],*/
/* 		itemsMobile : [479,1]*/
/* 	});	*/
/* });	*/
/* */
/* */
/* */
/* </script>*/
/* */
