<?php
/* Smarty version 3.1.33, created on 2019-04-01 04:50:41
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1d0e17922d6_65423769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b955053269390f26f31eed8bf1fab79a0efadf' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1554103881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5ca1d0e17922d6_65423769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode left clearfix">
			<label class="sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View as','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</label>
			<div class="button">
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<i class="fa fa-th-large"></i>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<i class="fa fa-th-list"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 right">
			<div class="view-mode ">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13963446575ca1d0e178a5d7_89706663', 'sort_by');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_13963446575ca1d0e178a5d7_89706663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_13963446575ca1d0e178a5d7_89706663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
			<?php
}
}
/* {/block 'sort_by'} */
}
