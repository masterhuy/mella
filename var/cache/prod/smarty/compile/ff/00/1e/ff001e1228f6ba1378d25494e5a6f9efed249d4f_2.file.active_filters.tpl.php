<?php
/* Smarty version 3.1.33, created on 2019-03-21 00:30:33
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\catalog\_partials\active_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c931369bdb023_15147717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff001e1228f6ba1378d25494e5a6f9efed249d4f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\catalog\\_partials\\active_filters.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c931369bdb023_15147717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20004524825c931369bb3f25_31557682', 'active_filters_title');
?>


  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17535084605c931369bdb022_01253374', 'active_filters_item');
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</section>
<?php }
/* {block 'active_filters_title'} */
class Block_20004524825c931369bb3f25_31557682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_20004524825c931369bb3f25_31557682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3 class=" active-filter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_17535084605c931369bdb022_01253374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_17535084605c931369bdb022_01253374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="filter-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
