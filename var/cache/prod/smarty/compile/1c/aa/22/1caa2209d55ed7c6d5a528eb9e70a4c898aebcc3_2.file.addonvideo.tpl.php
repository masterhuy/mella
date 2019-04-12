<?php
/* Smarty version 3.1.33, created on 2019-04-11 21:44:41
  from 'D:\xamppp\htdocs\jms_mella\modules\jmspagebuilder\views\templates\hook\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cafed89cefb30_55290143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1caa2209d55ed7c6d5a528eb9e70a4c898aebcc3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideo.tpl',
      1 => 1555033477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cafed89cefb30_55290143 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-video">
    <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
        <div class="addon-title">
            <h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
        <p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
    <?php }?>
    <div class="jms-addon jms-video">
        zzzz
        <?php if ($_smarty_tpl->tpl_vars['src']->value) {?>
            <iframe width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <?php }?>
    </div>
</div><?php }
}
