<?php
/* Smarty version 3.1.33, created on 2019-04-01 04:49:52
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1d0b0d058f1_20168774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1553051361,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1d0b0d058f1_20168774 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-1">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
			<a href="#login-1" class="account" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="collapse">      
				<i class="icon-user-1"></i>
		  	</a>
			<div id="login-1" class="collapse">
				<ul>
					<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</li>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php } else { ?>   
			<a href="#login" class="account" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="collapse">
				<i class="icon-user-1"></i>
			</a>
			<div id="login" class="collapse">
				<ul>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php }?>
	</div>
</div>

<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-2">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
			<a href="#login-2" class="account" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="collapse">      
				<i class="fa fa-user"></i>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

		  	</a>
			<div id="login-2" class="collapse">
				<ul>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php } else { ?>   
			<a href="#login-2" class="account" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="collapse">
				<i class="fa fa-user"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</a>
			<div id="login-2" class="collapse">
				<ul>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php }?>
	</div>
</div>

<!-- end D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
