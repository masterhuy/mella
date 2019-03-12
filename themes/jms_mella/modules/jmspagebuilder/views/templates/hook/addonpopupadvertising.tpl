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
	<div class="jms-popup" class="fadeInUp animated">		
		{if $popup_title}
		<h2>
			{$popup_title|escape:'htmlall':'UTF-8'}
		</h2>
		{/if}
		<div class="jms-popup-content">
			<img class="img-popup" src="{$urls.base_url}themes/jms_extron/assets/img/icon/mail.png" alt="">
			<h2>
				{l s='SUBSCRIBE & GET' d='Shop.Theme.Global'}
				<span>20%</span>
				{l s=' DISCOUNT!' d='Shop.Theme.Global'}
			</h2>
			<p class="text-1">{l s='Get the first offers and events from our store' d='Shop.Theme.Global'}</p>
			
			{$popup_content nofilter}

			<p class="text-2">
				{l s='We respect your privacy. We will never share or sell your information.' d='Shop.Theme.Global'}
			</p>
		</div>			
		<div class="dontshow">
			<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
			<label>{l s="Don't show this popup again" d='Shop.Theme.Global'}</label>
		</div>		
		<a class="popup-close"></a>
		<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
		<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
		<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
		
		<div id="social_block">
			<h3>{l s='MORE WAYS TO STAY CONNECTED:' d='Shop.Theme.Global'}</h3>
			<ul class="find-us">
		        <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a>      
		        <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a>                     
		        <li class="divider"><a href="#" class="gplus"><span class="fa fa-google"></span></a>		   
		        <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a>            
				<li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a> 
			</ul>
		</div>	
	</div>
</div>