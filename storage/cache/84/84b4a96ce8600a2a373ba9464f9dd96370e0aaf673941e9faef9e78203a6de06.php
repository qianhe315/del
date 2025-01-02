<?php

/* oc01/template/extension/module/banner.twig */
class __TwigTemplate_cc348bfa61e6af4dba1d3dcfce68440343f9f065cce0425ec534f3286f021318 extends Twig_Template
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
        $context["bannerslide"] = 1;
        // line 2
        $context["bannercount"] = twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null));
        // line 3
        echo "

<div id=\"banner";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"";
        if (((isset($context["bannercount"]) ? $context["bannercount"] : null) > (isset($context["bannerslide"]) ? $context["bannerslide"] : null))) {
            echo " owl-carousel bannersslider";
        } else {
            echo "singlebanner";
        }
        echo "\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "  <div class=\"item\">
    ";
            // line 8
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 9
                echo "    <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>
    ";
            } else {
                // line 11
                echo "    <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
    ";
            }
            // line 13
            echo "  </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
<script type=\"text/javascript\"><!--
\$('.bannersslider').owlCarousel({
\titems: 1,
\tautoPlay: 3000,
\tsingleItem: true,
\tnavigation: false,
\tpagination: false,
\ttransitionStyle: 'fade'
});
--></script>
 ";
    }

    public function getTemplateName()
    {
        return "oc01/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  64 => 13,  56 => 11,  46 => 9,  44 => 8,  41 => 7,  37 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set bannerslide = 1 %}*/
/* {% set bannercount = banners|length %}*/
/* */
/* */
/* <div id="banner{{ module }}" class="{% if bannercount > bannerslide %} owl-carousel bannersslider{% else %}singlebanner{% endif %}">*/
/*   {% for banner in banners %}*/
/*   <div class="item">*/
/*     {% if banner.link %}*/
/*     <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>*/
/*     {% else %}*/
/*     <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*     {% endif %}*/
/*   </div>*/
/*  {% endfor %}*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('.bannersslider').owlCarousel({*/
/* 	items: 1,*/
/* 	autoPlay: 3000,*/
/* 	singleItem: true,*/
/* 	navigation: false,*/
/* 	pagination: false,*/
/* 	transitionStyle: 'fade'*/
/* });*/
/* --></script>*/
/*  */
