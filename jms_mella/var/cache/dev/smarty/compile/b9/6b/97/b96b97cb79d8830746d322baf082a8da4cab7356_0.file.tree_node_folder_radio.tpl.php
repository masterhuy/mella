<?php
/* Smarty version 3.1.33, created on 2019-04-08 05:55:12
  from 'D:\xamppp\htdocs\jms_mella\admin538senhgh\themes\default\template\helpers\tree\tree_node_folder_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab1a800e4734_94947989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b96b97cb79d8830746d322baf082a8da4cab7356' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\admin538senhgh\\themes\\default\\template\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab1a800e4734_94947989 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category'] != $_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</label>
	</span>
	<ul class="tree">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value,'UTF-8' ));?>

	</ul>
</li>
<?php }
}
