{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search">
		<i class="icon-magnifying-glass"></i>
		<span>{l s='Search' d='Modules.JmsAjaxsearch'}</span>
	</a>
	<div id="search-form" class="search-box">
		<div class="close-search"></div>
		<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search products here' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
		</form>
		<div id="search_result"></div>
	</div>	
</div>

