//
// estas funcionalidades dependen de Jquery
//

;(function($){

})(jQuery);


jQuery(document).ready(function($){
    /*
	var wow = new WOW({
			mobile:false
		});
	wow.init();
    */

	$(".more-link").addClass("button red margin_bottom_medium");

	$(".eap__img img").addClass("xs_anima_float");
    
    $( ".xs_content_title" ).append( '<span class="xs_content_title_line animated fadeInUp"></span>' );
    $( ".xs_section_title" ).append( '<span class="xs_section_title_line animated fadeInUp"></span>' );
    
    /*

	$('.xs_menu_horizontal ul.nav.menu').slicknav({
		label:''
	});
	*/
    
    AOS.init();
});


