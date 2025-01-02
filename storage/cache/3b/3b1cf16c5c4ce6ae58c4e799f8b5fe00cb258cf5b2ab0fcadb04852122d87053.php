<?php

/* oc01/template/common/menu.twig */
class __TwigTemplate_f39f8aefbb757fec291fa7f4c9f14f9554e0463e897c31e279401d153f1fc0ba extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<nav id=\"menu\" class=\"navbar\">
<div class=\"navbar-header\"> <span id=\"category\" class=\"visible-xs\">";
            // line 3
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
  <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
</div>
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
  <ul class=\"nav navbar-nav main-navigation\">
    <li class=\"main_cat\"> <a href=\"";
            // line 8
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["text_home"]) ? $context["text_home"] : null);
            echo "</a></li> 
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "    ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 11
                    echo "    <li class=\"main_cat dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
      <div class=\"dropdown-menu megamenu column";
                    // line 12
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\"> 
       <div class=\"dropdown-inner\">
        ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        echo "        <ul class=\"list-unstyled childs_1\">
          ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo " 
          <!-- 2 Level Sub Categories START --> 
          
          ";
                            // line 19
                            if ($this->getAttribute($context["child"], "childs", array())) {
                                // line 20
                                echo "          <li class=\"dropdown\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>
            <div class=\"dropdown-menu\">
              <div class=\"dropdown-inner\">
              ";
                                // line 23
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 24
                                    echo "                <ul class=\"list-unstyled childs_2\">
                  ";
                                    // line 25
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 26
                                        echo "                  <li><a href=\"";
                                        echo $this->getAttribute($context["childs_2"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["childs_2"], "name", array());
                                        echo "</a></li>
                  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 28
                                    echo "                </ul>
                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 29
                                echo " 
              </div>
         </div>
            </li>
          ";
                            } else {
                                // line 34
                                echo "          <li class=\"main_cat\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
          ";
                            }
                            // line 35
                            echo " 
          <!-- 2 Level Sub Categories END --> 
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "        </ul>
\t\t
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "        
         </div>
       ";
                    // line 43
                    if ($this->getAttribute($context["category"], "thumb", array())) {
                        echo "<div class=\"menu_image\">   <img src=\"";
                        echo $this->getAttribute($context["category"], "thumb", array());
                        echo "\" alt=\"\" title=\"\" class=\"img-thumbnail\" /> </div>  ";
                    }
                    // line 44
                    echo "         </div>
    </li>
\t
    ";
                } else {
                    // line 48
                    echo "    <li class=\"main_cat\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo " </a>      
    </li>

    ";
                }
                // line 52
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t<li>  <a href=\"index.php?route=information/blogger/blogs\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a>
  </ul>
  </div>
</nav> 

<div id=\"responsive-menu\" class=\"nav-container1 nav-responsive navbar collapse\">

    <div class=\"navbar-collapse navbar-ex1-collapse collapse in\">
              <ul class=\"nav navbar-nav\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 63
                echo "\t\t\t\t";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 64
                    echo "\t\t\t\t<li class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
\t\t\t\t 
\t\t\t\t <span><i class=\"fa fa-plus\"></i></span>
\t\t\t\t  <ul class=\"menu-dropdown collapse\" id=\"";
                    // line 67
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\">
\t\t\t\t\t ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 69
                        echo "\t\t\t\t\t 
\t\t\t\t\t\t";
                        // line 70
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 71
                            echo "\t\t\t\t\t\t<li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "\t\t\t\t\t  
\t\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 79
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
                 <li> <a href=\"index.php?route=information/blogger/blogs\">";
            // line 82
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a></li>
              </ul>
            </div></div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "oc01/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 82,  253 => 81,  245 => 79,  240 => 76,  233 => 74,  221 => 71,  217 => 70,  214 => 69,  210 => 68,  206 => 67,  195 => 64,  192 => 63,  188 => 62,  175 => 53,  169 => 52,  159 => 48,  153 => 44,  147 => 43,  143 => 41,  135 => 38,  127 => 35,  119 => 34,  112 => 29,  105 => 28,  94 => 26,  90 => 25,  87 => 24,  83 => 23,  74 => 20,  72 => 19,  64 => 16,  61 => 15,  57 => 14,  52 => 12,  45 => 11,  42 => 10,  38 => 9,  32 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <nav id="menu" class="navbar">*/
/* <div class="navbar-header"> <span id="category" class="visible-xs">{{ text_category }}</span>*/
/*   <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/* </div>*/
/* <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*   <ul class="nav navbar-nav main-navigation">*/
/*     <li class="main_cat"> <a href="{{ home }}">{{ text_home }}</a></li> */
/*     {% for category in categories %}*/
/*     {% if category.children %}*/
/*     <li class="main_cat dropdown"><a href="{{ category.href }}">{{ category.name }}</a>*/
/*       <div class="dropdown-menu megamenu column{{ category.column }}"> */
/*        <div class="dropdown-inner">*/
/*         {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*         <ul class="list-unstyled childs_1">*/
/*           {% for child in children %} */
/*           <!-- 2 Level Sub Categories START --> */
/*           */
/*           {% if child.childs %}*/
/*           <li class="dropdown"><a href="{{ child.href }}">{{ child.name }}</a>*/
/*             <div class="dropdown-menu">*/
/*               <div class="dropdown-inner">*/
/*               {% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/*                 <ul class="list-unstyled childs_2">*/
/*                   {% for childs_2 in childs_col %}*/
/*                   <li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/*                   {% endfor %}*/
/*                 </ul>*/
/*                 {% endfor %} */
/*               </div>*/
/*          </div>*/
/*             </li>*/
/*           {% else %}*/
/*           <li class="main_cat"><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*           {% endif %} */
/*           <!-- 2 Level Sub Categories END --> */
/*           {% endfor %}*/
/*         </ul>*/
/* 		*/
/*         {% endfor %}*/
/*         */
/*          </div>*/
/*        {% if category.thumb %}<div class="menu_image">   <img src="{{ category.thumb }}" alt="" title="" class="img-thumbnail" /> </div>  {% endif %}*/
/*          </div>*/
/*     </li>*/
/* 	*/
/*     {% else %}*/
/*     <li class="main_cat"><a href="{{ category.href }}">{{ category.name }} </a>      */
/*     </li>*/
/* */
/*     {% endif %}*/
/*     {% endfor %}*/
/* 	<li>  <a href="index.php?route=information/blogger/blogs">{{ text_blog }}</a>*/
/*   </ul>*/
/*   </div>*/
/* </nav> */
/* */
/* <div id="responsive-menu" class="nav-container1 nav-responsive navbar collapse">*/
/* */
/*     <div class="navbar-collapse navbar-ex1-collapse collapse in">*/
/*               <ul class="nav navbar-nav">*/
/*                 {% for category in categories %}*/
/* 				{% if category.children %}*/
/* 				<li class="collapsed" data-toggle="collapse" data-target="#{{ category.name }}"><a href="{{ category.href }}">{{ category.name }}</a>*/
/* 				 */
/* 				 <span><i class="fa fa-plus"></i></span>*/
/* 				  <ul class="menu-dropdown collapse" id="{{ category.name }}">*/
/* 					 {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 					 */
/* 						{% for child in children %}*/
/* 						<li><a href="{{ child.href }}">{{ child.name }}</a>					*/
/* 						</li>*/
/* 						{% endfor %}*/
/* 					  */
/* 					  {% endfor %}*/
/* 					</ul>*/
/* 				</li>*/
/* 				{% else %}*/
/* 				<li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* 				{% endif %}*/
/* 				{% endfor %}  */
/*                  <li> <a href="index.php?route=information/blogger/blogs">{{ text_blog }}</a></li>*/
/*               </ul>*/
/*             </div></div>*/
/*  {% endif %}*/
