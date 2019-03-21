<?php
/* Smarty version 3.1.33, created on 2019-03-21 00:30:34
  from 'module:pscategorytreeviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93136a412d21_28092338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:pscategorytreeviewstempla',
      1 => 1552292667,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c93136a412d21_28092338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'D:\\xamppp\\htdocs\\jms_mella\\var\\cache\\prod\\smarty\\compile\\89\\21\\00\\8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.pscategorytreeviewstempla.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_14005687655c93136a3ebc21_96145103',
  ),
));
?>

<div class="block-categories hidden-sm-down">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		<div class="title-block">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.CategoryTree'),$_smarty_tpl ) );?>
</h3>
		</div>
	<?php }?>
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>

</div>
<?php }
/* smarty_template_function_categories_14005687655c93136a3ebc21_96145103 */
if (!function_exists('smarty_template_function_categories_14005687655c93136a3ebc21_96145103')) {
function smarty_template_function_categories_14005687655c93136a3ebc21_96145103(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" class="cat-item"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add"></i></span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="sub-list collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add"></i></span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_14005687655c93136a3ebc21_96145103 */
}
