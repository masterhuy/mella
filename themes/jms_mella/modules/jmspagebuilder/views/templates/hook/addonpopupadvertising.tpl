{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">	
		{if $popup_title}
		<h2>
			{$popup_title|escape:'htmlall':'UTF-8'}
		</h2>
		{/if}
		<a class="popup-close"></a>
		<div class="flex-middle">
			<div class="image-left">
				<img class="img-popup" src="{$urls.base_url}themes/jms_mella/assets/img/bg-letters.jpg" alt="">
			</div>
			<div class="ct-right">
				<div class="jms-popup-content">
					<img class="img-popup" src="{$urls.base_url}themes/jms_mella/assets/img/logo-newsletter-popup.png" alt="">
					<h2>
						{l s='Fashion that exists in everything' d='Shop.Theme.Global'}
					</h2>
					<p class="text-1">{l s='Delivered everyday to your inbox' d='Shop.Theme.Global'}</p>
					
					{$popup_content nofilter}

					<div class="dontshow">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
						<label>{l s="Don't show this popup again" d='Shop.Theme.Global'}</label>
					</div>		
					<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
					<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
					<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
				</div>
			</div>
		</div>		
	</div>
</div>