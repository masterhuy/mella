<?php
/* Smarty version 3.1.33, created on 2019-04-01 04:50:41
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1d0e19b12d1_27740583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1553049507,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1d0e19b12d1_27740583 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_languageselector/ps_languageselector.tpl --><!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="btn-group compact-hidden languages-info type-1">
		<a href="#languages-1" class="btn-xs" data-toggle="collapse">
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_language']->value['name_simple'],3,'' )), ENT_QUOTES, 'UTF-8');?>
 <i class="fa fa-caret-down" aria-hidden="true"></i>
		</a>
		<div id="languages-1" class="collapse">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="collapse-item">
							<img class="flag" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/l/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" width="16" height="11"/>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			</ul>
		</div>
	</div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="btn-group compact-hidden languages-info type-2">
		<p class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Language','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
		<a href="#languages-2" class="btn-xs" data-toggle="collapse">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
 <i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
		<div id="languages-2" class="collapse">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="collapse-item">
							<img class="flag" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/l/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" width="16" height="11"/>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			</ul>
		</div>
	</div>
<?php }?>
<!-- /Block languages module -->



<!-- end D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_languageselector/ps_languageselector.tpl --><?php }
}
