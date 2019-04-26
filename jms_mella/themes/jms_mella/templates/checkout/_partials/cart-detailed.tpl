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
<div class="cart-overview js-cart" data-refresh-url="{url entity='cart' params=['ajax' => true, 'action' => 'refresh']}">
    <div class="container label-title hidden-xs">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-5">{l s='Products' d='Shop.Theme.Checkout'}</div>
        <div class="col-lg-2 col-md-2 col-sm-2">{l s='Price' d='Shop.Theme.Checkout'}</div>
        <div class="col-lg-2 col-md-2 col-sm-2">{l s='Quantity' d='Shop.Theme.Checkout'}</div>
        <div class="col-lg-2 col-md-2 col-sm-2">{l s='Total' d='Shop.Theme.Checkout'}</div>
    </div>
    {if $cart.products}
        <ul class="cart-items">
            {foreach from=$cart.products item=product}
                <li class="cart-item">{include file='checkout/_partials/cart-detailed-product-line.tpl' product=$product}</li>
                {if $product.customizations|count >1}
                <hr>
                {/if}
            {/foreach}
        </ul>
    {else}
        <span class="no-items">{l s='There are no more items in your cart' d='Shop.Theme.Checkout'}</span>
    {/if}
</div>
