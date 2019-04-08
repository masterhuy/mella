<?php
/* Smarty version 3.1.33, created on 2019-04-08 05:17:05
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab1191aa3cf0_44762412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1554692153,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab1191aa3cf0_44762412 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="textnews_h1 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keep Updated & Get','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unlimited','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Discount','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter to receive updates and exclusive offers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</div>
		<div class="textnews_h5 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
		</div>
		<div class="textnews_h8 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get Discount','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <span>40%</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Off','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe with us the newsletter and get hot discount','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <span>40%</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</div>
		<div class="news_content">
        	<div  class="block_c_right">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>" >
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email address here','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" />
						<button type="submit" name="submitNewsletter" class="newsletter-btn btn-text btn-active">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</button>
						<button type="submit" name="submitNewsletter" class="btn-underline">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</button>
						<button type="submit" name="submitNewsletter" class="newsletter-btn btn-icon btn-popup">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</button>
						<input type="hidden" name="action" value="0" />
					</div>
					<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			    		<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			        		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			   			</div>
					<?php }?>
				</form>
			</div>
      	</div>
	</div>
</div>





<!-- end D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
