<?php

/* oc01/template/extension/module/carousel.twig */
class __TwigTemplate_b6822176e9808ab31759d65228b7427632225587fc3c2aaaf48dd4562ea8a724 extends Twig_Template
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
        echo "<div class=\"section brand container\">
   <div class=\"section-heading\">";
        // line 2
        echo (isset($context["brand_heading_title"]) ? $context["brand_heading_title"] : null);
        echo "</div>
  <div id=\"carousel";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"manufacture-slider owl-carousel\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"item text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </div>
  </div> 
<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\$('.manufacture-slider').owlCarousel({
\t\titems: 5,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: false,\t\t
\t\tpagination: false,
\t\titemsDesktop : [1199,4],
\t\titemsDesktopSmall :\t[991,3],
\t\titemsTablet : [767,3],
\t\titemsTabletSmall : [479,2],
\t\titemsMobile : [360,2]
\t});
\t
});\t
--></script>
";
    }

    public function getTemplateName()
    {
        return "oc01/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="section brand container">*/
/*    <div class="section-heading">{{ brand_heading_title }}</div>*/
/*   <div id="carousel{{ module }}" class="manufacture-slider owl-carousel">*/
/*   {% for banner in banners %}*/
/*       <div class="item text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*   </div>*/
/*   </div> */
/* <script type="text/javascript"><!--*/
/* */
/* $(document).ready(function(){*/
/* $('.manufacture-slider').owlCarousel({*/
/* 		items: 5,*/
/* 		autoPlay: false,*/
/* 		singleItem: false,*/
/* 		navigation: false,		*/
/* 		pagination: false,*/
/* 		itemsDesktop : [1199,4],*/
/* 		itemsDesktopSmall :	[991,3],*/
/* 		itemsTablet : [767,3],*/
/* 		itemsTabletSmall : [479,2],*/
/* 		itemsMobile : [360,2]*/
/* 	});*/
/* 	*/
/* });	*/
/* --></script>*/
/* */
