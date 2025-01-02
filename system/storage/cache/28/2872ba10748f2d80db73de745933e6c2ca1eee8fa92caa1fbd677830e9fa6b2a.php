<?php

/* oc01/template/common/header.twig */
class __TwigTemplate_b4728da3d5f382a5b4664b48185b10b6d0ab4145c56244bbaf72e7d85744669c extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 13
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 14
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" /> ";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "  <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" /> ";
        }
        echo " ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 16
            echo "  <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" /> ";
        }
        // line 17
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,500,700,800\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Righteous:400,700,900\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Sarina\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/";
        // line 24
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/";
        // line 25
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/";
        // line 26
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/jquery.fancybox.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 27
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/live_search.css\" />
  ";
        // line 28
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 29
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
            echo "/stylesheet/rtl.css\">
";
        }
        // line 31
        echo "  <link href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\" /> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 32
            echo "  <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" /> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "  <script src=\"";
            echo $context["script"];
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  <script src=\"catalog/view/javascript/common.js\"></script>
  <script src=\"catalog/view/javascript/jquery.elevatezoom.min.js\"></script>
  <script src=\"catalog/view/javascript/tabs.js\"></script>
  <script src=\"catalog/view/javascript/parallax.js\"></script>
  <script src=\"catalog/view/javascript/template_js/template.js\"></script>
  <script src=\"catalog/view/javascript/template_js/jquery.firstVisitPopup.js\"></script>
  <script src=\"catalog/view/javascript/simpleswap.js\"></script>
  <script src=\"catalog/view/javascript/jquery.fancybox.js\"></script>
  <script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.js\"></script>
  <script>
  \$(function() {
    \$('#subscribe-me').firstVisitPopup({
      cookieName: 'opc3themini1',
      showAgainSelector: '#show-message'
    });
  });
  </script>
  <script>
  \$(document).ready(function() {
    \$(\".quickview\").fancybox({
      type: 'iframe'
    });

    \$(\".fancybox\").fancybox();


  });
  </script>
  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 64
            echo "  <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" /> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " ";
            echo $context["analytic"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</head>
";
        // line 66
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " ";
            $context["layoutclass"] = "layout-3";
            echo " ";
        } elseif ((isset($context["column_left"]) ? $context["column_left"] : null)) {
            echo " ";
            $context["layoutclass"] = "layout-2 left-col";
            echo " ";
        } elseif ((isset($context["column_right"]) ? $context["column_right"] : null)) {
            echo " ";
            $context["layoutclass"] = "layout-2 right-col";
            echo " ";
        } else {
            echo " ";
            $context["layoutclass"] = "layout-1";
            echo " ";
        }
        // line 67
        echo "
<body class=\"";
        // line 68
        echo (isset($context["body_class"]) ? $context["body_class"] : null);
        echo " ";
        echo (isset($context["layoutclass"]) ? $context["layoutclass"] : null);
        echo "\">
  <nav id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
      </div>
    </div>
  </nav>
  <header class=\"containar-fluid\">
    <div class=\"row header-top\">
      <div class=\"header-top-left col-sm-4 col-xs-12\">
        <div class=\"free-shipping\">
          <a href=\"#\">Free Shipping</a> <span class=\"hidden-xs hidden-sm hidden-md\">Over \$150 worldwide</span>
        </div>
      </div>
      <div class=\"header-logo col-sm-4 col-xs-12\">
          <div id=\"logo\">";
        // line 83
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 84
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1> ";
        }
        echo "</div>
      </div>
      <div class=\"header-top-right col-sm-4 col-xs-12\">
        <div class=\"header_menu_dropdown\">
          <div id=\"top-links\" class=\"nav pull-right\">
                <ul class=\"list-inline\">
                  <li class=\"dropdown myaccount\"><a href=\"";
        // line 90
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <span class=\"hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span><i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
                      ";
        // line 92
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 93
            echo "                      <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                      <li><a href=\"";
            // line 94
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                      <li><a href=\"";
            // line 95
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                      <li><a href=\"";
            // line 96
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                      <li><a href=\"";
            // line 97
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                      ";
        } else {
            // line 99
            echo "                      <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                      <li><a href=\"";
            // line 100
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                      ";
        }
        // line 102
        echo "                      <li class=\"wishlist\"><a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
                      <li class=\"checkout\"><a href=\"";
        // line 103
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
                  </ul>
                  </li>
                </ul>
                    
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class=\"row\">
      <div class=\"header-left col-md-2 col-sm-4 col-xs-12 \">
        <div class=\"header-search \">";
        // line 115
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      </div>
      <div class=\"header col-md-8 col-sm-4 col-xs-12 \">
        <div class=\"header-menu\">
          <span class=\"responsive-bar collapsed \" data-target=\"#responsive-menu\" data-toggle=\"collapse\"><i class=\"fa fa-bars\"></i></span> ";
        // line 119
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
        </div>

      </div>
      <div class=\"header-right col-md-2 col-sm-4 col-xs-12 \">
                  
        
        ";
        // line 126
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
                 ";
        // line 127
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
        <div class=\"header-cart\">";
        // line 128
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>

      </div> 
    </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "oc01/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 128,  362 => 127,  358 => 126,  348 => 119,  341 => 115,  322 => 103,  313 => 102,  306 => 100,  299 => 99,  292 => 97,  286 => 96,  280 => 95,  274 => 94,  267 => 93,  265 => 92,  256 => 90,  242 => 84,  230 => 83,  210 => 68,  207 => 67,  189 => 66,  186 => 65,  165 => 64,  161 => 63,  131 => 35,  122 => 33,  106 => 32,  101 => 31,  95 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  68 => 17,  63 => 16,  56 => 15,  52 => 14,  48 => 13,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* */
/* <head>*/
/*   <meta charset="UTF-8" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}" /> {% if description %}*/
/*   <meta name="description" content="{{ description }}" /> {% endif %} {% if keywords %}*/
/*   <meta name="keywords" content="{{ keywords }}" /> {% endif %}*/
/*   <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/*   <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/*   <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*   <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/*   <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">*/
/*   <link href="https://fonts.googleapis.com/css?family=Righteous:400,700,900" rel="stylesheet">*/
/*   <link href="https://fonts.googleapis.com/css?family=Sarina" rel="stylesheet">*/
/*   <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/stylesheet.css" rel="stylesheet">*/
/*   <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/bootstrap.min.css" rel="stylesheet">*/
/*   <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/jquery.fancybox.css" rel="stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/live_search.css" />*/
/*   {% if direction=='rtl' %}*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/rtl.css">*/
/* {% endif %}*/
/*   <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" /> {% for style in styles %}*/
/*   <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" /> {% endfor %} {% for script in scripts %}*/
/*   <script src="{{ script }}"></script>*/
/*   {% endfor %}*/
/*   <script src="catalog/view/javascript/common.js"></script>*/
/*   <script src="catalog/view/javascript/jquery.elevatezoom.min.js"></script>*/
/*   <script src="catalog/view/javascript/tabs.js"></script>*/
/*   <script src="catalog/view/javascript/parallax.js"></script>*/
/*   <script src="catalog/view/javascript/template_js/template.js"></script>*/
/*   <script src="catalog/view/javascript/template_js/jquery.firstVisitPopup.js"></script>*/
/*   <script src="catalog/view/javascript/simpleswap.js"></script>*/
/*   <script src="catalog/view/javascript/jquery.fancybox.js"></script>*/
/*   <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.js"></script>*/
/*   <script>*/
/*   $(function() {*/
/*     $('#subscribe-me').firstVisitPopup({*/
/*       cookieName: 'opc3themini1',*/
/*       showAgainSelector: '#show-message'*/
/*     });*/
/*   });*/
/*   </script>*/
/*   <script>*/
/*   $(document).ready(function() {*/
/*     $(".quickview").fancybox({*/
/*       type: 'iframe'*/
/*     });*/
/* */
/*     $(".fancybox").fancybox();*/
/* */
/* */
/*   });*/
/*   </script>*/
/*   {% for link in links %}*/
/*   <link href="{{ link.href }}" rel="{{ link.rel }}" /> {% endfor %} {% for analytic in analytics %} {{ analytic }} {% endfor %}*/
/* </head>*/
/* {% if column_left and column_right %} {% set layoutclass = 'layout-3' %} {% elseif column_left %} {% set layoutclass = 'layout-2 left-col' %} {% elseif column_right %} {% set layoutclass = 'layout-2 right-col' %} {% else %} {% set layoutclass = 'layout-1' %} {% endif %}*/
/* */
/* <body class="{{ body_class }} {{ layoutclass }}">*/
/*   <nav id="top">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*   <header class="containar-fluid">*/
/*     <div class="row header-top">*/
/*       <div class="header-top-left col-sm-4 col-xs-12">*/
/*         <div class="free-shipping">*/
/*           <a href="#">Free Shipping</a> <span class="hidden-xs hidden-sm hidden-md">Over $150 worldwide</span>*/
/*         </div>*/
/*       </div>*/
/*       <div class="header-logo col-sm-4 col-xs-12">*/
/*           <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1> {% endif %}</div>*/
/*       </div>*/
/*       <div class="header-top-right col-sm-4 col-xs-12">*/
/*         <div class="header_menu_dropdown">*/
/*           <div id="top-links" class="nav pull-right">*/
/*                 <ul class="list-inline">*/
/*                   <li class="dropdown myaccount"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-sm hidden-md">{{ text_account }}</span><i class="fa fa-angle-down"></i></a>*/
/*                     <ul class="dropdown-menu dropdown-menu-right myaccount-menu">*/
/*                       {% if logged %}*/
/*                       <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                       <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                       <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                       <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                       <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                       {% else %}*/
/*                       <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                       <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                       {% endif %}*/
/*                       <li class="wishlist"><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*                       <li class="checkout"><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*                   </ul>*/
/*                   </li>*/
/*                 </ul>*/
/*                     */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <div class="row">*/
/*       <div class="header-left col-md-2 col-sm-4 col-xs-12 ">*/
/*         <div class="header-search ">{{ search }}</div>*/
/*       </div>*/
/*       <div class="header col-md-8 col-sm-4 col-xs-12 ">*/
/*         <div class="header-menu">*/
/*           <span class="responsive-bar collapsed " data-target="#responsive-menu" data-toggle="collapse"><i class="fa fa-bars"></i></span> {{ menu }}*/
/*         </div>*/
/* */
/*       </div>*/
/*       <div class="header-right col-md-2 col-sm-4 col-xs-12 ">*/
/*                   */
/*         */
/*         {{ language }}*/
/*                  {{ currency }}*/
/*         <div class="header-cart">{{ cart }}</div>*/
/* */
/*       </div> */
/*     </div>*/
/*   </header>*/
