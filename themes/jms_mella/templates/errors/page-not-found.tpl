{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left">
            <img src="{$urls.base_url}themes/jms_mella/assets/img/error.png">
            <p class="text-1">{l s='This page not be found' d='Shop.Theme'}</p>
            <p class="text-2">
                {l s='We are really sorry, but the page you requested is missing..
                Perhaps searching again can help. Or back to' d='Shop.Theme'}
                <a class="back-to-home" href="{$urls.base_url}">{l s='home page' d='Shop.Theme'}</a>
            </p>
            
            {block name='search'}
                {hook h='displaySearch'}
            {/block}
        
            {block name='hook_not_found'}
                {hook h='displayNotFound'}
            {/block}
        </div>
        <div class="layout-column col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
    </div>
</section>
