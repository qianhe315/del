<?php

/* oc01/template/extension/module/category.twig */
class __TwigTemplate_d64f6f16d00d81481d0067eb541726df481ecd453bea6edae1ebd77fae6037b9 extends Twig_Template
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
        echo "<div class=\"sidebar section sidebar_category\">
  <div class=\"section-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"section-block\">
    <ul class=\"left-category\">        
         ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "\t\t";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 7
                echo "         <li data-toggle=\"collapse\" data-target=\"#cat";
                echo twig_replace_filter($this->getAttribute($context["category"], "name", array()), "/[^0-9+]/", "");
                echo "\">
        <a href=\"";
                // line 8
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
        ";
            } else {
                // line 10
                echo "         <li class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#cat";
                echo twig_replace_filter($this->getAttribute($context["category"], "name", array()), "/[^A-Za-z0-9-]/", "");
                echo "\">
        <a href=\"";
                // line 11
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
        ";
            }
            // line 13
            echo "        ";
            if ($this->getAttribute($context["category"], "children", array())) {
                echo " 
        <span><i class=\"fa fa-plus\"></i></span>       
       <ul class=\"collapse\" id=\"cat";
                // line 15
                echo twig_replace_filter($this->getAttribute($context["category"], "name", array()), "/[^A-Za-z0-9-]/", "");
                echo "\">          
           ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 17
                    echo "            ";
                    if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                        // line 18
                        echo "          <li class=\"active\">
            <a href=\"";
                        // line 19
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"active\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>
            ";
                    } else {
                        // line 21
                        echo "           <li>
            <a href=\"";
                        // line 22
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>
            ";
                    }
                    // line 24
                    echo "          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        </ul>
        ";
            }
            // line 28
            echo "      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "oc01/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  107 => 28,  103 => 26,  96 => 24,  89 => 22,  86 => 21,  79 => 19,  76 => 18,  73 => 17,  69 => 16,  65 => 15,  59 => 13,  52 => 11,  47 => 10,  40 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="sidebar section sidebar_category">*/
/*   <div class="section-heading">{{ heading_title }}</div>*/
/*   <div class="section-block">*/
/*     <ul class="left-category">        */
/*          {% for category in categories %}*/
/* 		{% if category.category_id == category_id %}*/
/*          <li data-toggle="collapse" data-target="#cat{{ category.name|replace('/[^0-9+]/', '') }}">*/
/*         <a href="{{ category.href }}" class="active">{{ category.name }}</a>*/
/*         {% else %}*/
/*          <li class="collapsed" data-toggle="collapse" data-target="#cat{{ category.name|replace('/[^A-Za-z0-9\-]/', '') }}">*/
/*         <a href="{{ category.href }}">{{ category.name }}</a>*/
/*         {% endif %}*/
/*         {% if category.children %} */
/*         <span><i class="fa fa-plus"></i></span>       */
/*        <ul class="collapse" id="cat{{ category.name|replace('/[^A-Za-z0-9\-]/', '') }}">          */
/*            {% for child in category.children %}*/
/*             {% if child.category_id == child_id %}*/
/*           <li class="active">*/
/*             <a href="{{ child.href }}" class="active">{{ child.name }}</a>*/
/*             {% else %}*/
/*            <li>*/
/*             <a href="{{ child.href }}">{{ child.name }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* 	</div>*/
/* </div>*/
/* */
