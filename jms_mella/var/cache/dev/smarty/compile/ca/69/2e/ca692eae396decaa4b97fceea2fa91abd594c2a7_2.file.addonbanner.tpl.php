<?php
/* Smarty version 3.1.33, created on 2019-04-01 05:37:14
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1dbcad85722_08844505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca692eae396decaa4b97fceea2fa91abd594c2a7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1552292666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1dbcad85722_08844505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
	
		<a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"<?php }?>>
			<img class="img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		</a>

<?php }
if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
	<div class="banner-content">
		<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

	</div>
<?php }?>
</div>	
<?php }
}
