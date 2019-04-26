<?php
/* Smarty version 3.1.33, created on 2019-04-01 04:49:52
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1d0b0de8226_30308987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1552292667,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1d0b0de8226_30308987 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<!-- end D:\xamppp\htdocs\jms_mella/themes/jms_mella/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
