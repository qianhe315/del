$(document).ready(function () {
    	
	 //*-----------------------Parallax------------------------ *//

    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
    if(!isMobile) {
		if($(".cms_parallax").length){  $(".cms_parallax").sitManParallex({  invert: false });};
	}else{
		$(".cms_parallax").sitManParallex({  invert: true });

	}

	//*--------------------------------------------------- *//  
	
	$('#tabs a').tabs();
    $('#content h1').prependTo('ul.breadcrumb');
    $($('.left-category li:not(.collapsed) ul')).addClass('in');
	
	
	$(".left-category span").click(function(){
		$(".left-category li ul").slideToggle();
	});

});


$(window).scroll(function(){
  if ($(window).scrollTop() > 160) {
    $('header').addClass('fixed');
   }
   else {
    $('header').removeClass('fixed');
   }
});

/* JS is for Responsive header */

/* JS for Top button */
$(document).ready(function(){
$("body").append("<a id='scrollup' title='Back To Top' href=''></a>");

(function($) {
    $(document).ready(function(){

        //When distance from top = 250px fade button in/out
        $(window).scroll(function(){
            if ($(this).scrollTop() > 0) {
                $('#scrollup').fadeIn(300);
            } else {
                $('#scrollup').fadeOut(300);
            }
        });

        //On click scroll to top of page t = 1000ms
        $('#scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });

    });
})(jQuery);
});
