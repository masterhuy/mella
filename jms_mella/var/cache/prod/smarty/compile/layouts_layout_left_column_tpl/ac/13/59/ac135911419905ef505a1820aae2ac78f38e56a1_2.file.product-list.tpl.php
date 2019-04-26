<?php
/* Smarty version 3.1.33, created on 2019-04-10 04:59:59
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadb08f2377e1_96143615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac135911419905ef505a1820aae2ac78f38e56a1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1554109008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5cadb08f2377e1_96143615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6818011195cadb08f223f60_26875929', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_19870350285cadb08f223f62_11912532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_12402408745cadb08f227de8_90227482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="" class="hidden-sm-down">
                    <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                </div>
                <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_16419708185cadb08f22fae7_79858969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_20962327145cadb08f233966_22029587 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_6818011195cadb08f223f60_26875929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6818011195cadb08f223f60_26875929',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_19870350285cadb08f223f62_11912532',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_12402408745cadb08f227de8_90227482',
  ),
  'product_list' => 
  array (
    0 => 'Block_16419708185cadb08f22fae7_79858969',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_20962327145cadb08f233966_22029587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19870350285cadb08f223f62_11912532', 'product_list_top', $this->tplIndex);
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12402408745cadb08f227de8_90227482', 'product_list_active_filters', $this->tplIndex);
?>


                <div id="product_list" class="product_list item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16419708185cadb08f22fae7_79858969', 'product_list', $this->tplIndex);
?>
     
                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20962327145cadb08f233966_22029587', 'product_list_bottom', $this->tplIndex);
?>

                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </section>
    </section>
<?php
}
}
/* {/block 'content'} */
}
