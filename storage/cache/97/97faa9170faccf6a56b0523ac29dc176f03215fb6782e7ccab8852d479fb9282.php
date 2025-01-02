<?php

/* oc01/template/common/footer.twig */
class __TwigTemplate_a935442b9d3e9f6f98340375bcd5b8d31d6583caabd6e48ba4abbbc11e810647 extends Twig_Template
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
        echo "<footer>
  <div id=\"footer\" class=\"footer_top\">
  <div class=\"container\">
    <div class=\"row footer_block\"> 

    \t<div class=\"footer-left col-xs-12 col-sm-12 col-md-3 column\">";
        // line 6
        echo (isset($context["footer_left"]) ? $context["footer_left"] : null);
        echo " </div>
    \t
\t\t      
\t\t";
        // line 9
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 10
            echo "\t\t<div class=\"col-xs-12 col-sm-12 col-md-3 column information\">
\t\t<h4>";
            // line 11
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h4>
\t\t<h5 class=\"collapsed\" data-target=\"#dropdown-information\" data-toggle=\"collapse\">";
            // line 12
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "
\t\t<span class=\"icon\"></span></h5>        
\t\t\t<ul class=\"list-unstyled collapse\" id=\"dropdown-information\">
\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 16
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t       
\t\t<div class=\"col-xs-12 col-sm-12 col-md-3 column\">
\t\t\t<h4>";
        // line 24
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h4>
\t\t\t<h5 class=\"collapsed\" data-target=\"#dropdown-service\" data-toggle=\"collapse\">";
        // line 25
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "
\t\t\t<span class=\"icon\"></span></h5>  
\t\t\t\t<ul class=\"list-unstyled collapse\" id=\"dropdown-service\">
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 31
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 32
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t</div>
      \t<div class=\"footer-right col-xs-12 col-sm-12 col-md-3 column\">";
        // line 35
        echo (isset($context["footer_right"]) ? $context["footer_right"] : null);
        echo " </div>
    </div> 
    </div>

    </div>
    <div class=\"footer_bottom_container container\">
      
    <div class=\"Footer-bottom row\">
      
\t\t<div class=\"copy-right footer-bottom-left col-md-6 col-xs-12\">
\t\t\t<div id=\"powered\">";
        // line 45
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</div>
\t\t</div>
\t\t<div class=\"footer-bottom-right col-xs-12 col-md-6 pull-right\">";
        // line 47
        echo (isset($context["footer_bottom"]) ? $context["footer_bottom"] : null);
        echo " </div>
    </div>
    <div class=\"bottom-footer col-sm-12\">
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 51
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        
        <li><a href=\"";
        // line 53
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 54
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 55
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 56
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        <li class=\"contact\"><a href=\"";
        // line 57
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
      </ul>
    </div>
    </div>
</footer>


\t\t";
        // line 64
        if ((isset($context["module_live_search_status"]) ? $context["module_live_search_status"] : null)) {
            // line 65
            echo "\t\t\t
\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\tvar live_search = {
\t\t\t\t\tselector: '#search input[name=\\'search\\']',
\t\t\t\t\ttext_no_matches: '";
            // line 69
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "',
\t\t\t\t\theight: '50px'
\t\t\t\t}

\t\t\t\t\$(document).ready(function() {
\t\t\t\t\tvar html = '';
\t\t\t\t\thtml += '<div class=\"live-search\">';
\t\t\t\t\thtml += '\t<ul>';
\t\t\t\t\thtml += '\t</ul>';
\t\t\t\t\thtml += '<div class=\"result-text\"></div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t//\$(live_search.selector).parent().closest('div').after(html);
\t\t\t\t\t\$(live_search.selector).after(html);

\t\t\t\t\t\$(live_search.selector).autocomplete({
\t\t\t\t\t\t'source': function(request, response) {
\t\t\t\t\t\t\tvar filter_name = \$(live_search.selector).val();
\t\t\t\t\t\t\tvar cat_id = 0;
\t\t\t\t\t\t\tvar module_live_search_min_length = '";
            // line 88
            echo abs((isset($context["module_live_search_min_length"]) ? $context["module_live_search_min_length"] : null));
            echo "';
\t\t\t\t\t\t\tif (filter_name.length < module_live_search_min_length) {
\t\t\t\t\t\t\t\t\$('.live-search').css('display','none');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse{
\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\thtml +=\t'<img class=\"loading\" src=\"catalog/view/theme/oc01/image/loading.gif\" />';
\t\t\t\t\t\t\t\thtml +=\t'</li>';
\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');

\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/live_search&filter_name=' +  encodeURIComponent(filter_name),
\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\tsuccess: function(result) {
\t\t\t\t\t\t\t\t\t\tvar products = result.products;
\t\t\t\t\t\t\t\t\t\t\$('.live-search ul li').remove();
\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('');
\t\t\t\t\t\t\t\t\t\tif (!\$.isEmptyObject(products)) {
\t\t\t\t\t\t\t\t\t\t\tvar show_image = ";
            // line 108
            echo abs((isset($context["module_live_search_show_image"]) ? $context["module_live_search_show_image"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_price = ";
            // line 109
            echo abs((isset($context["module_live_search_show_price"]) ? $context["module_live_search_show_price"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_description = ";
            // line 110
            echo abs((isset($context["module_live_search_show_description"]) ? $context["module_live_search_show_description"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('<a href=\"";
            // line 111
            echo (isset($context["module_live_search_href"]) ? $context["module_live_search_href"] : null);
            echo "'+filter_name+'\" class=\"view-all-results\">";
            echo twig_escape_filter($this->env, (isset($context["text_view_all_results"]) ? $context["text_view_all_results"] : null));
            echo " ('+result.total+')</a>');

\t\t\t\t\t\t\t\t\t\t\t\$.each(products, function(index,product) {
\t\t\t\t\t\t\t\t\t\t\t\tvar html = '';

\t\t\t\t\t\t\t\t\t\t\t\thtml += '<li>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\t\t\t\t\t\t\tif(product.image && show_image){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-name\">' + product.name ;
\t\t\t\t\t\t\t\t\t\t\t\tif(show_description){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<p>' + product.extra_info + '</p>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\tif(show_price){
\t\t\t\t\t\t\t\t\t\t\t\t\tif (product.special) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<span style=\"clear:both\"></span>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').append(html);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\t\t\t\thtml +=\tlive_search.text_no_matches;
\t\t\t\t\t\t\t\t\t\t\thtml +=\t'</li>';

\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t'select': function(product) {
\t\t\t\t\t\t\t\$(live_search.selector).val(product.name);
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t\$(document).bind( \"mouseup touchend\", function(e){
\t\t\t\t\t  var container = \$('.live-search');
\t\t\t\t\t  if (!container.is(e.target) && container.has(e.target).length === 0)
\t\t\t\t\t  {
\t\t\t\t\t    container.hide();
\t\t\t\t\t  }
\t\t\t\t\t});
\t\t\t\t});
\t\t\t//--></script>
\t\t";
        }
        // line 167
        echo "            
";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 169
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.transitions.css\" />

<script>
\$(document).ready(function(){
 \$('.testimonial').owlCarousel({
\t\titems: 1,
\t\tautoPlay: true,
\t\tsingleItem: true,
\t\tnavigation: false,\t
\t\tpagination: true,
\t\titemsDesktop : [1199,3],
\t\titemsDesktopSmall :\t[991,3],
\t\titemsTablet : [650,2],
\t\titemsMobile : [479,1]
\t});
});
</script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "oc01/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 171,  319 => 169,  315 => 168,  312 => 167,  251 => 111,  247 => 110,  243 => 109,  239 => 108,  216 => 88,  194 => 69,  188 => 65,  186 => 64,  174 => 57,  168 => 56,  162 => 55,  156 => 54,  150 => 53,  143 => 51,  136 => 47,  131 => 45,  118 => 35,  110 => 32,  104 => 31,  98 => 30,  92 => 29,  86 => 28,  80 => 25,  76 => 24,  72 => 22,  62 => 18,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  34 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <footer>*/
/*   <div id="footer" class="footer_top">*/
/*   <div class="container">*/
/*     <div class="row footer_block"> */
/* */
/*     	<div class="footer-left col-xs-12 col-sm-12 col-md-3 column">{{ footer_left }} </div>*/
/*     	*/
/* 		      */
/* 		{% if informations %}*/
/* 		<div class="col-xs-12 col-sm-12 col-md-3 column information">*/
/* 		<h4>{{ text_information }}</h4>*/
/* 		<h5 class="collapsed" data-target="#dropdown-information" data-toggle="collapse">{{ text_information }}*/
/* 		<span class="icon"></span></h5>        */
/* 			<ul class="list-unstyled collapse" id="dropdown-information">*/
/* 			{% for information in informations %}*/
/* 				<li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 				{% endfor %}*/
/* 				<li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		       */
/* 		<div class="col-xs-12 col-sm-12 col-md-3 column">*/
/* 			<h4>{{ text_service }}</h4>*/
/* 			<h5 class="collapsed" data-target="#dropdown-service" data-toggle="collapse">{{ text_service }}*/
/* 			<span class="icon"></span></h5>  */
/* 				<ul class="list-unstyled collapse" id="dropdown-service">*/
/* 					<li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 					<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 					<li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* 					<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 					<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 				</ul>*/
/* 		</div>*/
/*       	<div class="footer-right col-xs-12 col-sm-12 col-md-3 column">{{ footer_right }} </div>*/
/*     </div> */
/*     </div>*/
/* */
/*     </div>*/
/*     <div class="footer_bottom_container container">*/
/*       */
/*     <div class="Footer-bottom row">*/
/*       */
/* 		<div class="copy-right footer-bottom-left col-md-6 col-xs-12">*/
/* 			<div id="powered">{{ powered }}</div>*/
/* 		</div>*/
/* 		<div class="footer-bottom-right col-xs-12 col-md-6 pull-right">{{ footer_bottom }} </div>*/
/*     </div>*/
/*     <div class="bottom-footer col-sm-12">*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         */
/*         <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*         <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*         <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*         <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         <li class="contact"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*       </ul>*/
/*     </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/* 		{% if module_live_search_status %}*/
/* 			*/
/* 			<script type="text/javascript"><!--*/
/* 				var live_search = {*/
/* 					selector: '#search input[name=\'search\']',*/
/* 					text_no_matches: '{{ text_empty }}',*/
/* 					height: '50px'*/
/* 				}*/
/* */
/* 				$(document).ready(function() {*/
/* 					var html = '';*/
/* 					html += '<div class="live-search">';*/
/* 					html += '	<ul>';*/
/* 					html += '	</ul>';*/
/* 					html += '<div class="result-text"></div>';*/
/* 					html += '</div>';*/
/* */
/* 					//$(live_search.selector).parent().closest('div').after(html);*/
/* 					$(live_search.selector).after(html);*/
/* */
/* 					$(live_search.selector).autocomplete({*/
/* 						'source': function(request, response) {*/
/* 							var filter_name = $(live_search.selector).val();*/
/* 							var cat_id = 0;*/
/* 							var module_live_search_min_length = '{{ module_live_search_min_length|abs }}';*/
/* 							if (filter_name.length < module_live_search_min_length) {*/
/* 								$('.live-search').css('display','none');*/
/* 							}*/
/* 							else{*/
/* 								var html = '';*/
/* 								html += '<li style="text-align: center;height:10px;">';*/
/* 								html +=	'<img class="loading" src="catalog/view/theme/oc01/image/loading.gif" />';*/
/* 								html +=	'</li>';*/
/* 								$('.live-search ul').html(html);*/
/* 								$('.live-search').css('display','block');*/
/* */
/* 								$.ajax({*/
/* 									url: 'index.php?route=extension/module/live_search&filter_name=' +  encodeURIComponent(filter_name),*/
/* 									dataType: 'json',*/
/* 									success: function(result) {*/
/* 										var products = result.products;*/
/* 										$('.live-search ul li').remove();*/
/* 										$('.result-text').html('');*/
/* 										if (!$.isEmptyObject(products)) {*/
/* 											var show_image = {{ module_live_search_show_image|abs }};*/
/* 											var show_price = {{ module_live_search_show_price|abs }};*/
/* 											var show_description = {{ module_live_search_show_description|abs }};*/
/* 											$('.result-text').html('<a href="{{ module_live_search_href }}'+filter_name+'" class="view-all-results">{{ text_view_all_results|e }} ('+result.total+')</a>');*/
/* */
/* 											$.each(products, function(index,product) {*/
/* 												var html = '';*/
/* */
/* 												html += '<li>';*/
/* 												html += '<a href="' + product.url + '" title="' + product.name + '">';*/
/* 												if(product.image && show_image){*/
/* 													html += '	<div class="product-image"><img alt="' + product.name + '" src="' + product.image + '"></div>';*/
/* 												}*/
/* 												html += '	<div class="product-name">' + product.name ;*/
/* 												if(show_description){*/
/* 													html += '<p>' + product.extra_info + '</p>';*/
/* 												}*/
/* 												html += '</div>';*/
/* 												if(show_price){*/
/* 													if (product.special) {*/
/* 														html += '	<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';*/
/* 													} else {*/
/* 														html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';*/
/* 													}*/
/* 												}*/
/* 												html += '<span style="clear:both"></span>';*/
/* 												html += '</a>';*/
/* 												html += '</li>';*/
/* 												$('.live-search ul').append(html);*/
/* 											});*/
/* 										} else {*/
/* 											var html = '';*/
/* 											html += '<li style="text-align: center;height:10px;">';*/
/* 											html +=	live_search.text_no_matches;*/
/* 											html +=	'</li>';*/
/* */
/* 											$('.live-search ul').html(html);*/
/* 										}*/
/* 										$('.live-search').css('display','block');*/
/* 										return false;*/
/* 									}*/
/* 								});*/
/* 							}*/
/* 						},*/
/* 						'select': function(product) {*/
/* 							$(live_search.selector).val(product.name);*/
/* 						}*/
/* 					});*/
/* */
/* 					$(document).bind( "mouseup touchend", function(e){*/
/* 					  var container = $('.live-search');*/
/* 					  if (!container.is(e.target) && container.has(e.target).length === 0)*/
/* 					  {*/
/* 					    container.hide();*/
/* 					  }*/
/* 					});*/
/* 				});*/
/* 			//--></script>*/
/* 		{% endif %}*/
/*             */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/owl-carousel/owl.transitions.css" />*/
/* */
/* <script>*/
/* $(document).ready(function(){*/
/*  $('.testimonial').owlCarousel({*/
/* 		items: 1,*/
/* 		autoPlay: true,*/
/* 		singleItem: true,*/
/* 		navigation: false,	*/
/* 		pagination: true,*/
/* 		itemsDesktop : [1199,3],*/
/* 		itemsDesktopSmall :	[991,3],*/
/* 		itemsTablet : [650,2],*/
/* 		itemsMobile : [479,1]*/
/* 	});*/
/* });*/
/* </script>*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
