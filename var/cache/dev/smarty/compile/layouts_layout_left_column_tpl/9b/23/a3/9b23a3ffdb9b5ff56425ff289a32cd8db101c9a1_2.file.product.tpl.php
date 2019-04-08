<?php
/* Smarty version 3.1.33, created on 2019-04-08 05:05:20
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab0ed047c3c2_22219581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b23a3ffdb9b5ff56425ff289a32cd8db101c9a1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\product.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab0ed047c3c2_22219581 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}
if ($_smarty_tpl->tpl_vars['jpb_productlayout']->value) {
$_smarty_tpl->_subTemplateRender("catalog/".((string)$_smarty_tpl->tpl_vars['jpb_productlayout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-585b980bd32999fe"><?php echo '</script'; ?>
><?php }
}
