<?php
/* Smarty version 3.1.33, created on 2019-04-09 03:09:58
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\_partials\product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac4546aca317_68599195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '803d5fa1b608363fadb55692048f0bc55026e309' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\_partials\\product-prices.tpl',
      1 => 1554280445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac4546aca317_68599195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-prices content_price">
        <div class="top-info">
            <p class="category">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
				    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                </a>
            </p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6682764065cac4546a9f387_19138958', 'product_availability');
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5422888115cac4546aa7086_03374761', 'product_discount');
?>


	    <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18447772245cac4546aaed85_83327523', 'product_price');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6764030655cac4546ab2c02_30371025', 'product_without_taxes');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18544829735cac4546ab6a80_85905497', 'product_pack_price');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_985253775cac4546aba913_30199874', 'product_ecotax');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>

  </div>
<?php }
}
/* {block 'product_availability'} */
class Block_6682764065cac4546a9f387_19138958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_6682764065cac4546a9f387_19138958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                <span id="product-availability">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/jms_mella/assets/img/icon/available.png" alt="">
                        <span style="color:#5b9d21;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                        <i class="material-icons product-last-items">&#xE002;</i>
                    <?php } else { ?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/jms_mella/assets/img/icon/outofstock.png" alt="">
                        <span style="color:#ce2c2c;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </span>
                <?php }?>
            <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_discount'} */
class Block_5422888115cac4546aa7086_03374761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_5422888115cac4546aa7086_03374761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                <span class="price old"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
        <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_20645058335cac4546aaed82_18156668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
                        <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
                    <?php }?>
                <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_18447772245cac4546aaed85_83327523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_18447772245cac4546aaed85_83327523',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_20645058335cac4546aaed82_18156668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div
                class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
                itemprop="offers"
                itemscope
                itemtype="https://schema.org/Offer"
            >
                <link itemprop="availability" href="https://schema.org/InStock"/>
                <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20645058335cac4546aaed82_18156668', 'product_unit_price', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_6764030655cac4546ab2c02_30371025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_6764030655cac4546ab2c02_30371025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
                <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
            <?php }?>
        <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_18544829735cac4546ab6a80_85905497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_18544829735cac4546ab6a80_85905497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
                <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
            <?php }?>
        <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_985253775cac4546aba913_30199874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_985253775cac4546aba913_30199874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
                <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    <?php }?>
                </p>
            <?php }?>
        <?php
}
}
/* {/block 'product_ecotax'} */
}
