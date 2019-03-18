<div class="btn-group compact-hidden blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} dropdown {if isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartbottom'}shoppingcart-bottom{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#cart-cl" class="cart-icon type1" data-toggle="collapse">
		<i class="icon-bag"></i>
		<span class="ajax_cart_quantity">{$cart.products_count}</span>
	</a>
	<div class="text-custom">
		<span class="cart_block_total ajax_block_cart_total">{$cart.totals.total.value}</span>
	</div>
	<a href="#cart-cl" class="btn-xs tab-title" data-toggle="collapse">		 
		<span><span class="box-cart ajax_cart_quantity"> {$cart.products_count}</span> {l s='item(s) in your cart' mod='blockcart'}<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
	</a>
	<div id="cart-cl" class="collapse">
		<div class="shoppingcart-box">
			<div class="shoppingcart-content">
				<span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
				<ul class="list products cart_block_list">
					{foreach from=$cart.products item=product}
						<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
					{/foreach}
				</ul>
			</div>
			<div class="cart-prices">
				<div class="checkout-info">
					{foreach from=$cart.subtotals item="subtotal"}
						<div class="{$subtotal.type} cart-prices-line">
							<span class="label">{$subtotal.label}</span>
							<span class="value">{$subtotal.value}</span>
						</div>
					{/foreach}
				</div>
				<div class="cart-button">
					<a class="button_order_cart btn-active" href="{$cart_url}" title="{l s='Check out' d='Shop.Theme'}" rel="nofollow">
						{l s='View cart' d='Shop.Theme'}
					</a>
					<a class="button_order_cart btn-black" href="{$urls.pages.order}" title="{l s='Check out' d='Shop.Theme'}" rel="nofollow">
						{l s='Checkout' d='Shop.Theme'}
					</a> 
				</div>
			</div>
		</div>
	</div>
</div>
