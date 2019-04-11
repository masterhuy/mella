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
 jQuery(document).ready(function($) {
 	$('.jms-vermegamenu').jmsMegaMenu({    			
		event: jmmm_event,
		duration: jmmm_duration
	});
	$('.jms-megamenu').jmsMegaMenu({    			
		event: jmmm_event,
		duration: jmmm_duration
	});

	$('.menu-item.collection .mega-dropdown-inner').addClass('collection-carousel');

	$('#mobile-vermegamenu').addClass('collapse');
	
	//initiate the plugin and pass the id of the div containing gallery images
	$(".zoom_01").elevateZoom({
		gallery: 'gal1',
		zoomType: "lens",
		lensShape : "round",
		lensSize : 200
	});
	
	// $("#zoom_01").elevateZoom({
	// 	zoomType: "inner",
	// 	cursor: "crosshair"
	//   });
    // $("#zoom_01").elevateZoom({ gallery: 'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true});
    //pass the images to Fancybox
    $(".zoom_01").bind("click", function (e) { var ez = $('.zoom_01').data('elevateZoom'); $.fancybox(ez.getGalleryList()); return false; });

});
$(window).load(function(){
	if($('.slider').length > 0)
	$('.slider').fractionSlider({	
		'slideTransition' : jmsslider_trans,
		'slideEndAnimation' : jmsslider_end_animate,
		'transitionIn' : jmsslider_trans_in,
		'transitionOut' : jmsslider_trans_out,
		'fullWidth' : jmsslider_full_width,
		'delay' : jmsslider_delay,
		'timeout' : jmsslider_duration,
		'speedIn' : jmsslider_speed_in,
		'speedOut' : jmsslider_speed_out,
		'easeIn' : jmsslider_ease_in,
		'easeOut' : jmsslider_ease_out,
		'controls' : jmsslider_navigation,
		'pager' : jmsslider_pagination,
		'autoChange' : jmsslider_autoplay,
		'pauseOnHover' : jmsslider_pausehover,
		'backgroundAnimation' : jmsslider_bg_animate,
		'backgroundEase' : jmsslider_bg_ease,
		'responsive' : jmsslider_responsive,
		'dimensions' : jmsslider_dimensions,
		'fullscreen' : true
	});
});
 
$('body').on('click', '.ajax-add-to-cart', function (event) {	
	event.preventDefault();
	var query = 'id_product=' + $(this).attr('data-id-product') + '&qty='+ $(this).attr('data-minimal-quantity') + '&token=' + $(this).attr('data-token') + '&add=1&action=update';
	var actionURL = prestashop['urls']['base_url'] +  'index.php?controller=cart';		
	$('.ajax-add-to-cart').removeClass('addtocart-selected');
	$(this).addClass('addtocart-selected');
	$(this).removeClass('checked');
	$(this).addClass('checking');
	var callerElement = $(this);
	$.post(actionURL, query, null, 'json').then(function (resp) {		
		if(jpb_addtocart == 'ajax_cartbottom') alert('Add Success');
	    prestashop.emit('updateCart', {
	        reason: {
	          idProduct: resp.id_product,
	          idProductAttribute: resp.id_product_attribute,
	          linkAction: 'add-to-cart'
	        }
	    });
		
		$(callerElement).removeClass('checking');
		$(callerElement).addClass('checked');
		window.setTimeout( function() {$(callerElement).removeClass('checked');}, 3000 );
	}).fail(function (resp) {
	    prestashop.emit('handleError', { eventType: 'addProductToCart', resp: resp });
	});
});


$('body').on('click', '[data-button-action="add-to-cart"]', function (event) {
    $(this).removeClass('addtocart-selected');
    $(this).addClass('addtocart-selected');
    $(this).removeClass('checked');
    $(this).addClass('checking');
});

function view_as() { 
    var viewGrid = $(".view-grid"),
        viewList = $(".view-list"),
        productList = $(".product_list");
		viewGrid.click(function (e) {       
        productList.removeClass("products-list-in-row");
        productList.addClass("products-list-in-column");
        $(this).addClass('active');
        viewList.removeClass("active");
        e.preventDefault()
    });
    viewList.click(function (e) {       
        productList.removeClass("products-list-in-column");
        productList.addClass("products-list-in-row");
        viewGrid.removeClass("active");
        $(this).addClass('active');        
        e.preventDefault()
    })
}
$(document).ready(function () {
 view_as();
 prestashop.on('updateProductList', function (event) {
  view_as();
 });
});

jQuery(function ($) {
    "use strict";
    if($(".customs-carousel-product").length) {
		  var customsCarouselProduct = $(".customs-carousel-product");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		customsCarouselProduct.owlCarousel({
			responsiveClass:true,
			responsive:{            
				1199:{
                  	items:3
				},
				991:{
					items:3
				},
				768:{
					items:2
				},
				481:{
					items:2
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: true,
			dots: false,
			autoplay: false,
			slideSpeed: 200,
			loop:true,
		});
	}
    
    if($(".category-custom-carousel").length) {		
		var categoryCustomCarousel = $(".category-custom-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categoryCustomCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:3
				},
				991:{
					items:3
				},
				768:{
					items:2
				},
				481:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 2,
			nav: true,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".category-custom-carousel2").length) {		
		var categoryCustomCarousel2 = $(".category-custom-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categoryCustomCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:8
				},
				991:{
					items:6
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
			margin: 30,
			nav: p_nav,
			dots: p_pag,
			autoplay: auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".product-carousel-col1").length) {		
		var productCarouselCol1 = $(".product-carousel-col1");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarouselCol1.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p1_itemsDesktop
				},
				991:{
					items:p1_itemsDesktopSmall
				},
				768:{
					items:p1_itemsTablet
				},
				481:{
					items:p1_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: p1_nav,
			dots: p1_pag,
			autoplay: p1_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".product-carousel-col6").length) {		
		var productCarouselCol6 = $(".product-carousel-col6");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarouselCol6.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p6_itemsDesktop
				},
				991:{
					items:p6_itemsDesktopSmall
				},
				768:{
					items:p6_itemsTablet
				},
				481:{
					items:p6_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: p6_nav,
			dots: p6_pag,
			autoplay: p6_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".product-carousel-col5").length) {		
		var productCarouselCol5 = $(".product-carousel-col5");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarouselCol5.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p5_itemsDesktop
				},
				991:{
					items:p5_itemsDesktopSmall
				},
				768:{
					items:p5_itemsTablet
				},
				481:{
					items:p5_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: p5_nav,
			dots: p5_pag,
			autoplay: p5_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".product-carousel2").length) {		
		var productCarousel2 = $(".product-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p2_itemsDesktop
				},
				991:{
					items:p2_itemsDesktopSmall
				},
				768:{
					items:p2_itemsTablet
				},
				481:{
					items:p2_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: p2_nav,
			dots: p2_pag,
			autoplay: p2_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".product-carousel2-col3").length) {		
		var productCarousel2c3 = $(".product-carousel2-col3");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel2c3.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p2_c3_itemsDesktop
				},
				991:{
					items:p2_c3_itemsDesktopSmall
				},
				768:{
					items:p2_c3_itemsTablet
				},
				481:{
					items:p2_c3_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: p2_c3_nav,
			dots: p2_c3_pag,
			autoplay: p2_c3_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".producttab-carousel").length) {
		var producttabCarousel = $(".producttab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		producttabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:tab_itemsDesktop
				},
				991:{
					items:tab_itemsDesktopSmall
				},
				768:{
					items:tab_itemsTablet
				},
				481:{
					items:tab_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 30,
			    nav: p_nav_tab,
		        dots: p_pag_tab,
				autoplay: auto_play_tab,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".categorytab-carousel").length) {
		var categorytabCarousel = $(".categorytab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categorytabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cattab_itemsDesktop
				},
				991:{
					items:cattab_itemsDesktopSmall
				},
				768:{
					items:cattab_itemsTablet
				},
				481:{
					items:cattab_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 30,
			    nav: cattab_nav,
		        dots: cattab_pag,
				autoplay: cattab_auto_play_carousel,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".megatab-carousel").length) {
		var megatabCarousel = $(".megatab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		megatabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:megtab_itemsDesktop
				},
				991:{
					items:megtab_itemsDesktopSmall
				},
				768:{
					items:megtab_itemsTablet
				},
				481:{
					items:megtab_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 30,
			    nav: megtab_nav,
		        dots: megtab_pag,
				autoplay: megtab_auto_play_carousel,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".megatab-carousel2").length) {
		var megatabCarousel2 = $(".megatab-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		megatabCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:megtab2_itemsDesktop
				},
				991:{
					items:megtab2_itemsDesktopSmall
				},
				768:{
					items:megtab2_itemsTablet
				},
				481:{
					items:megtab2_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 30,
			    nav: megtab2_nav,
		        dots: megtab2_pag,
				autoplay: megtab2_auto_play_carousel,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".categorytab-carousel2").length) {
		var categorytabCarousel2 = $(".categorytab-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categorytabCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cattab2_itemsDesktop
				},
				991:{
					items:cattab2_itemsDesktopSmall
				},
				768:{
					items:cattab2_itemsTablet
				},
				481:{
					items:cattab2_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 30,
			    nav: cattab2_nav,
		        dots: cattab2_pag,
				autoplay: cattab2_auto_play_carousel,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".categories-carousel2").length) {
		var cateCarousel = $(".categories-carousel2");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		cateCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cs_itemsDesktop
					},
				991:{
					items:cs_itemsDesktopSmall
				},
				768:{
					items:cs_itemsTablet
				},
				481:{
					items:cs_itemsMobile
				},
				0: {
					items:1
				}

			},
			rtl: rtl,
			margin: 30,
			nav: cs_nav,
			dots: cs_pag,
			autoplay: cs_auto_play_carousel,
			slideSpeed: 200,
			loop: true
		});
	}

    if($(".testimonial-carousel").length) {
		var testimonialCarousel = $(".testimonial-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		testimonialCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:testi_itemsDesktop
				},
				991:{
					items:testi_itemsDesktopSmall
				},
				768:{
					items:testi_itemsTablet
				},
				481:{
					items:testi_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin: 0,
				nav: p_nav_testi,
		        dots: p_pag_testi,
				autoplay:auto_play_testi,
				slideSpeed: 800,
				loop: true
		});
	}

    if($(".hotdeal-carousel").length) {		
		var hotdealCarousel = $(".hotdeal-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		hotdealCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:h_itemsDesktop
				},
				991:{
					items:h_itemsDesktopSmall
				},
				768:{
					items:h_itemsTablet
				},
				481:{
					items:h_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 0,
			nav: h_nav,
			dots: h_pag,
			loop:true,
			autoplay: h_auto_play_carousel,
			slideSpeed: 800,
		});
	}

	if($(".blog-carousel").length) {
		var blogCarousel = $(".blog-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		blogCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:blog_itemsDesktop
				},
				991:{
					items:blog_itemsDesktopSmall
				},
				768:{
					items:blog_itemsTablet
				},
				481:{
					items:blog_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin: 30,
				nav: p_nav_blog,
		        dots: p_pag_blog,
				autoplay:auto_play_blog,
				loop: true,
				slideSpeed: 800,	
		});
	}

	if($(".flashsales-carousel").length) {		
		var flashsalesCarousel = $(".flashsales-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		flashsalesCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:5
				},
				991:{
					items:4
				},
				768:{
					items:3
				},
				481:{
					items:2
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:0,
			nav: true,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".flashsales-tab-carousel").length) {		
		var flashsalesTabCarousel = $(".flashsales-tab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		flashsalesTabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:4
				},
				991:{
					items:3
				},
				768:{
					items:2
				},
				481:{
					items:2
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:0,
			nav: false,
			dots: false,
			autoplay: false,
			loop: true,
			multipleRow: true,
			row: 2,
			slideSpeed: 800,
		});
	}

	if($(".flashsales-tab-carousel2").length) {		
		var flashsalesTabCarousel2 = $(".flashsales-tab-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		flashsalesTabCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:1
				},
				991:{
					items:1
				},
				768:{
					items:1
				},
				481:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:0,
			nav: false,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".brand-carousel").length) {
		var brandCarousel = $(".brand-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		brandCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:brand_itemsDesktop
				},
				991:{
					items:brand_itemsDesktopSmall
				},
				768:{
					items:brand_itemsTablet
				},
				481:{
					items:brand_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin: 0,
				nav: p_nav_brand,
		        dots: p_pag_brand,
				autoplay:auto_play_brand,
				loop: true,
				slideSpeed: 200,	
		});
	}

	if($(".instagram-carousel").length) {
		var instagramCarousel = $(".instagram-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		instagramCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:8
					},
				991:{
					items:5
				},
				768:{
					items:3
				},
			
				318:{
					items:2
				}
			},
			rtl: rtl,
			margin: 0,
			nav: false,
			dots: false,
			autoplay: true,
			slideSpeed: 200,
			loop: true
		});
	}

	if($(".collection-carousel").length) {
		var collectionCarousel = $(".collection-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		collectionCarousel.owlCarousel({
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
					items:2
				}
			},
			rtl: rtl,
			margin: 0,
			nav: false,
			dots: true,
			autoplay: false,
			slideSpeed: 200,
			loop: true
		});
	}

	if($(".image-layout-carousel").length) {
		var imageLayoutCarousel = $(".image-layout-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		imageLayoutCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:3
					},
				991:{
					items:3
				},
				768:{
					items:2
				},
				481:{
					items:2
				}
			},
			rtl: rtl,
			margin: 30,
			nav: true,
			dots: false,
			autoplay: false,
			slideSpeed: 200,
			loop: true
		});
	}

	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
	$('.thumbnail-slick').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        rows: 1,
        rtl: rtl,
        responsive: [
		    {
		      breakpoint: 1199,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		      }
		    },
		    {
		      breakpoint: 768,
		      row: 1,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        row: 1,
		      }
		    }
		]
    });
	
});

function back_to_top() {   
    $('#back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    })
}
jQuery(function ($) {
    "use strict";
    $(window).scroll(function () {
		if ($(window).scrollTop() >= 50) {
			$("#back-to-top").addClass('show');
		} else if ($(window).scrollTop() < 50) {
			$("#back-to-top").removeClass('show');
		}
    });
});

$(window).load(function () {     
    back_to_top(); 
});

var initialLoad = true;
$(document).ready(function() {
	var header1 = $(".jms-row.header-type-1");
	var header2 = $(".jms-row.header-type-2");
	var header3 = $(".jms-row.header-type-3");
	var headerCenter = $(".jms-row.header-center");

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 300){
			header1.addClass("fixed");
			header2.addClass("fixed");
			header3.addClass("fixed");
			headerCenter.addClass("fixed");
    	} else {
			header1.removeClass("fixed");
			header2.removeClass("fixed");
			header3.removeClass("fixed");
			headerCenter.removeClass("fixed");
    	}
    });

	if(initialLoad){
		setTimeout(function() {
			jQuery('.preloader').fadeOut();
		}, 3000);		
		initialLoad = false;
	}

	$('.shoppingcart-bottom .tab-title').click(function() {
		$('.shoppingcart-bottom').toggleClass('open');
	});

	if ($("#product .product-detail").hasClass("carousel")){
		$("#product").addClass("product-layout-carousel");
	}

	$('.jms-addon.jms-video').click(function() {
		$('.jms-row.video').addClass('show-video');
		$('#wrapper > .container').css('position','unset');
	});

	

	$('.mega_menu').click(function(event) {
		$('.main-site').toggleClass('open-sidebar1');
	});

	$('#jms_ajax_search .btn-search').click(function(event) {
		$("#search-form").addClass('open');
	});

	$('#jms_ajax_search .close-search').click(function(event) {
		$("#search-form").removeClass('open');
	});

	$('.jms-popup').addClass('collapse');
	setTimeout( function(){
    	$('.jms-popup').addClass('flipInX animated in');
	},800);
	
	$(".faq-left-column li a").attr("data-toggle","tab");
});

jQuery(function ($) {
    "use strict";
    
    var bodyEl = $("body"),
		content = $('.close_menuu'),
		openbtn = $('.mega_menuu'),
		closebtn = $('.close_menuu' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.click(function(e) {		
			toggleMenu();
			e.stopPropagation();
		});
		if( closebtn ) {
			closebtn.click(function() {		
				toggleMenu();
			});
		}
		content.click(function(e) {		
			var target = e.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		});		
	}
	function toggleMenu() {		
		if( isOpen ) {
			bodyEl.removeClass('st-open');
		}
		else {
			bodyEl.addClass('st-open');
		}
		isOpen = !isOpen;
	}
	init();
});
jQuery(function ($) {
    "use strict";
	$('.team-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:1
	        }
	    }
	})
});
