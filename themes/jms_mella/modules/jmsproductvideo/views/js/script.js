jQuery(document).ready(function() {
	jQuery('.popup-active h3').click(function(event) {
		$('.popup-active').addClass('open-video');
	});
		
	jQuery('.popup_close').click(function(event) {
		$('.popup-active').removeClass('open-video');
	});
});  
