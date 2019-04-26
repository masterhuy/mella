<?php
/* Smarty version 3.1.33, created on 2019-04-03 06:12:20
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca487043e1704_83211742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a2acdc5e7d55e0535e9f5bebcb92df15c9b454' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca487043e1704_83211742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }
}
