<?php
/* Smarty version 3.1.33, created on 2019-04-08 05:55:12
  from 'D:\xamppp\htdocs\jms_mella\admin538senhgh\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab1a80009b00_13755965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fec361161edf34d720710c99e456472f35f06d09' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\admin538senhgh\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab1a80009b00_13755965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
