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
    if($(".category-custom-carousel").length) {		
		var categoryCustomCarousel = $(".category-custom-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categoryCustomCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:6
				},
				991:{
					items:5
				},
				768:{
					items:4
				},
				481:{
					items:3
				},
				361:{
					items:2
				},
				0:{
					items:2
				}
			},
			rtl: rtl,
			margin: 30,
			nav: true,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}
});

jQuery(document).ready(function($) {
	var header = $(".jms-row.header");

	$("#jms-vermegamenu-container").addClass('collapse');

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 300){
			header.addClass("fixed");
    	} else {
			header.removeClass("fixed");
    	}
    });
});