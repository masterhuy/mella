/**
* 2007-2018 PrestaShop
*
* Joommasters Theme
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

jQuery(function ($) {
    "use strict";
    if($(".product-carousel").length) {		
		var productCarousel = $(".product-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p_itemsDesktop
				},
				991:{
					items:p_itemsDesktopSmall
				},
				768:{
					items:p_itemsTablet
				},
				481:{
					items:p_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 6,
			nav: p_nav,
			dots: p_pag,
			autoplay: auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}
});
	
jQuery(document).ready(function($) {
	var menu = $(".jms-row.menu");

	$("#jms-vermegamenu-container").addClass('collapse');
	$(".page-index #jms-vermegamenu-container").addClass('collapse in');

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 300){
			menu.addClass("fixed");
			$(".page-index #jms-vermegamenu-container").removeClass('in');

    	} else {
			menu.removeClass("fixed");
			$(".page-index #jms-vermegamenu-container").addClass('in');
    	}
    });
});