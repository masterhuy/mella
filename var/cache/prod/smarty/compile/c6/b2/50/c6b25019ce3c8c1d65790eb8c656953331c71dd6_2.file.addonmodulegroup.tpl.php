<?php
/* Smarty version 3.1.33, created on 2019-05-10 04:06:04
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\modules\jmspagebuilder\views\templates\hook\addonmodulegroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd530ecc7b933_04032642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b25019ce3c8c1d65790eb8c656953331c71dd6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonmodulegroup.tpl',
      1 => 1553049570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd530ecc7b933_04032642 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group module-group-box">
	<a title="Search" data-toggle="collapse" class="btn-groupmodule" href="#module-group">
		<?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
			<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
			<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
		<?php }?>
	</a>
	<div id="module-group" class="collapse">
		<div class="module-group">
			<?php if ($_smarty_tpl->tpl_vars['module1_content']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['module1_content']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['module2_content']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['module2_content']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['module3_content']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['module3_content']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['module4_content']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['module4_content']->value;?>

			<?php }?>
		</div>
	</div>
</div><?php }
}
