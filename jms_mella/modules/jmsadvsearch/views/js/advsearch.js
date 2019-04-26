/**
* 2007-2017 PrestaShop
*
* Jms Adv Search
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
$(document).ready(function() {
	$('#selector_cat').on('change', function(){
		var id_cat_search = $(this).val();		
		var search_key = $( "#ajax_advsearch" ).val();
		get_search_ajax(search_key, id_cat_search);
	});
	var timer;
	$( "#ajax_advsearch" ).keyup(function() {
		var id_cat_search = $('#selector_cat').val();		
		//alert(id_cat_search);
		var search_key = $( "#ajax_advsearch" ).val();		
		clearTimeout(timer);
		timer = setTimeout(function() {					
			get_search_ajax(search_key, id_cat_search);
		}, 1000);
	})	
	$('html').click(function() {
		$( "#advsearch_result" ).html('');
	});

	$('#advsearch_result').click(function(event){
		event.stopPropagation();
	});

});

function get_search_ajax (key_word, cat_id) {
	$.ajax({
		type: 'GET',
		url: prestashop.urls.base_url + 'modules/jmsadvsearch/ajax_search.php',
		headers: { "cache-control": "no-cache" },
		async: true,
		data: 'search_key=' + key_word + '&id_category=' + cat_id,
		success: function(data)
		{		
			$('#advsearch_result').html(data);
		}
	}) .done(function( msg ) {
		$( "#advsearch_result" ).html(msg);
	});
}