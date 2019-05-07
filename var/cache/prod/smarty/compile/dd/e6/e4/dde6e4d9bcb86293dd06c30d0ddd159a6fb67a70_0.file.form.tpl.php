<?php
/* Smarty version 3.1.33, created on 2019-05-06 23:38:23
  from 'D:\xamppp\htdocs\jms_mella\modules\jmsslider\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0fdaf6a7a38_28090446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dde6e4d9bcb86293dd06c30d0ddd159a6fb67a70' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\modules\\jmsslider\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd0fdaf6a7a38_28090446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10531486535cd0fdaf680929_85824095', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_10531486535cd0fdaf680929_85824095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_10531486535cd0fdaf680929_85824095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'img') {?>	
		<div class="col-sm-9">				
			<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" class="hide" />
			<div class="dummyfile input-group">
				<span class="input-group-addon"><i class="icon-file"></i></span>
				<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-name" type="text" name="filename" readonly />
				<span class="input-group-btn">
					<button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
						<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

					</button>
				</span>
			</div>		
			<div id="slide-preview">
			<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'bg_image' && isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['old_image']) && strlen($_smarty_tpl->tpl_vars['fields']->value[0]['form']['old_image']) > 0) {?>
			<p class="help-block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['pdesc'],'html','UTF-8' ));?>
</p>			
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value[0]['form']['old_image'],'html','UTF-8' ));?>
" class="img-thumbnail" />
			<input type="hidden" name="old_image" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value[0]['form']['old_image'],'html','UTF-8' ));?>
" />
			<?php }?>			
			</div>
		</div>
		<?php echo '<script'; ?>
>
			$(document).ready(function(){
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-selectbutton').click(function(e){					
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').trigger('click');
				});
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').change(function(e){
					var val = $(this).val();
					var file = val.split(/[\\/]/);
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-name').val(file[file.length-1]);
				});
				$('.mColorPickerInput').change(function(e){
					var val = $(this).val();					
					$('#slide-preview').css("background-color", val);				
	
				});
			});
		<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'layer_img') {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['file_list'],'html','UTF-8' ));?>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'check_home') {?>
		<div class="col-lg-9 ">
			<div class="checkbox">
				<label for="home_slide">
					<input type="checkbox" class="" id="home_slide" name="home_slide[]">
					sdfsdf
				</label>
			</div>
		</div>

	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
