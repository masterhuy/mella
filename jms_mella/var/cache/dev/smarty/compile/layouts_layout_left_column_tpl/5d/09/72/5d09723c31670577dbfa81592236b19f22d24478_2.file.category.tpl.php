<?php
/* Smarty version 3.1.33, created on 2019-04-01 04:49:52
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1d0b04a4e80_73727580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d09723c31670577dbfa81592236b19f22d24478' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\listing\\category.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1d0b04a4e80_73727580 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}?> 
<?php if ($_smarty_tpl->tpl_vars['jpb_categorylayout']->value) {
$_smarty_tpl->_subTemplateRender("catalog/listing/".((string)$_smarty_tpl->tpl_vars['jpb_categorylayout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php }
}
