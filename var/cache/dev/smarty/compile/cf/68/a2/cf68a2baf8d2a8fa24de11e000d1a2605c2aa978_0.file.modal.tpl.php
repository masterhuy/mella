<?php
/* Smarty version 3.1.33, created on 2019-04-01 05:53:14
  from 'D:\xamppp\htdocs\jms_mella\modules\ps_mbo\views\templates\admin\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1df8aab44f0_28088039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf68a2baf8d2a8fa24de11e000d1a2605c2aa978' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\modules\\ps_mbo\\views\\templates\\admin\\modal.tpl',
      1 => 1546846074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1df8aab44f0_28088039 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }
}