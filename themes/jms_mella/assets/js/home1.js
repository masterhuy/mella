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
	var menu = $(".jms-row.menu");

	$("#jms-vermegamenu-container").addClass('collapse');

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 300){
			menu.addClass("fixed");
    	} else {
			menu.removeClass("fixed");
    	}
    });
});
