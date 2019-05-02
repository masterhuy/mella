<?php
/* Smarty version 3.1.33, created on 2019-05-02 02:45:06
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cca91f2a3e2d4_32942960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e45f8280f64179e4dc53f8bde9fb3fa0f88999' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1554265906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5cca91f2a3e2d4_32942960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>


<form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

  <section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890471485cca91f2a22d59_02256860', 'form_fields');
?>

    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

      </a>
	  <?php if (isset($_smarty_tpl->tpl_vars['fb_on']->value) && $_smarty_tpl->tpl_vars['fb_on']->value) {?>
		  <br />
      <div class="fb-login-button" data-max-rows="1" data-size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_BUTTON_SIZE']->value, ENT_QUOTES, 'UTF-8');?>
" data-button-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_BUTTON_TEXT']->value, ENT_QUOTES, 'UTF-8');?>
" data-show-faces="<?php if ($_smarty_tpl->tpl_vars['JMSFB_SHOW_FRIENDS']->value) {?>true<?php } else { ?>false<?php }?>" data-auto-logout-link="<?php if ($_smarty_tpl->tpl_vars['JMSFB_LOGOUT_BUTTON']->value) {?>true<?php } else { ?>false<?php }?>" data-use-continue-as="<?php if ($_smarty_tpl->tpl_vars['JMSFB_PROFILE_INCLUDED']->value) {?>true<?php } else { ?>false<?php }?>"></div>
	  <?php }?>
    </div>	
  </section>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3864884175cca91f2a3a451_66050736', 'form_buttons');
?>

  </footer>
</form>
<?php }
/* {block 'form_field'} */
class Block_10155187395cca91f2a2aa56_59155760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_1890471485cca91f2a22d59_02256860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_1890471485cca91f2a22d59_02256860',
  ),
  'form_field' => 
  array (
    0 => 'Block_10155187395cca91f2a2aa56_59155760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10155187395cca91f2a2aa56_59155760', 'form_field', $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_3864884175cca91f2a3a451_66050736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_3864884175cca91f2a3a451_66050736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <button class="btn btn-default active" data-link-action="sign-in" type="submit" class="form-control-submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login now','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    <?php
}
}
/* {/block 'form_buttons'} */
}
