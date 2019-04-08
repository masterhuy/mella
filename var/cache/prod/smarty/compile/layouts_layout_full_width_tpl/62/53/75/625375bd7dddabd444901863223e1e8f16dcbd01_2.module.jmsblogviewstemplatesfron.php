<?php
/* Smarty version 3.1.33, created on 2019-04-08 00:17:16
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caacb4cdd9d69_61470201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '625375bd7dddabd444901863223e1e8f16dcbd01' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1552292666,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caacb4cdd9d69_61470201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15731582045caacb4cd9b550_86795666', "page_content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_15731582045caacb4cd9b550_86795666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_15731582045caacb4cd9b550_86795666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories'),$_smarty_tpl ) );?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value) && $_smarty_tpl->tpl_vars['categories']->value) {?>		
	<div class="categories-list row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>			
			<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['category']->value['alias']));?>				
			<div class="blog-category col-sm-4 col-lg-4 col-md-4 col-xs-12">
				<?php if ($_smarty_tpl->tpl_vars['category']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
					<div class="post-thumb">
						<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" /></a>			 		
					</div>
				<?php }?>
				<div class="category-info">
					<h4 class="category-title"><a class="blog-title" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>	
					<div class="cat-intro">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['introtext'],100,'...' ));?>

					</div>
				</div>			
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php } else { ?>	
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, dont have any category in this section','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

<?php }
}
}
/* {/block "page_content"} */
}
