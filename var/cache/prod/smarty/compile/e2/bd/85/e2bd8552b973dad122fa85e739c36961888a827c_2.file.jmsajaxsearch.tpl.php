<?php
/* Smarty version 3.1.33, created on 2019-03-12 00:39:40
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c87380cb79262_49542394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2bd8552b973dad122fa85e739c36961888a827c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1552365575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c87380cb79262_49542394 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#search-form" class="btn-search" data-toggle="collapse">
		<i class="icon-magnifying-glass"></i>
	</a>
	<div id="search-form" class="search-box collapse">
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search here','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search" />
		</form>
		<div id="search_result"></div>
	</div>	
</div>

<?php }
}
