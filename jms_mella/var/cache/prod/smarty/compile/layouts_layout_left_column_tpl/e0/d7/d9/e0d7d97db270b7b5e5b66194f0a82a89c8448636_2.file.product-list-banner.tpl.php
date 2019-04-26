<?php
/* Smarty version 3.1.33, created on 2019-04-10 22:01:00
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\listing\product-list-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae9fdcda8515_90261454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d7d97db270b7b5e5b66194f0a82a89c8448636' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\listing\\product-list-banner.tpl',
      1 => 1552292667,
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
function content_5cae9fdcda8515_90261454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8404934755cae9fdcd5a318_14555690', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_20525204395cae9fdcd81417_52871035 extends Smarty_Internal_Block
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
class Block_16461534345cae9fdcd81414_57120549 extends Smarty_Internal_Block
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
class Block_1289164855cae9fdcd81416_47594660 extends Smarty_Internal_Block
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
class Block_18006495295cae9fdcd81418_02110133 extends Smarty_Internal_Block
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
class Block_8404934755cae9fdcd5a318_14555690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8404934755cae9fdcd5a318_14555690',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_20525204395cae9fdcd81417_52871035',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_16461534345cae9fdcd81414_57120549',
  ),
  'product_list' => 
  array (
    0 => 'Block_1289164855cae9fdcd81416_47594660',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_18006495295cae9fdcd81418_02110133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
				<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) && $_prefixVariable1 != '') {?>
					
          <div class="image-banner-category">
            <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="">
          </div>
				<?php }?>
			<?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20525204395cae9fdcd81417_52871035', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16461534345cae9fdcd81414_57120549', 'product_list_active_filters', $this->tplIndex);
?>


          <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1289164855cae9fdcd81416_47594660', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18006495295cae9fdcd81418_02110133', 'product_list_bottom', $this->tplIndex);
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
