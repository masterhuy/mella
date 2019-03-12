<?php
/* Smarty version 3.1.33, created on 2019-03-11 06:17:29
  from 'D:\xamppp\htdocs\jms_mella\modules\jmsslider\views\templates\hook\listslides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8635b91f07a6_35011316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7827912cac67272f463699b4c2587b7450c731' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\modules\\jmsslider\\views\\templates\\hook\\listslides.tpl',
      1 => 1550743145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8635b91f07a6_35011316 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering";
                        $.post("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/ajax_jmsslider.php?" + order + '&secure_key=' + '<?php echo $_smarty_tpl->tpl_vars['secure_key']->value;?>
');
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
<?php echo '</script'; ?>
>
<div class="panel">
	<h3>
	<span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
		<i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slides list','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

	</span>

	<span class="panel-heading-action">
		<a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&addSlide=1" class="btn btn-default btn-success" id="addSlide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Slide','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
">
			<i class="icon-plus"></i>
		</a>

	</span>
	</h3>
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		$('.toogle').click(function(e){
			$('#slidesContent').toggle(200);
		});
	});

	<?php echo '</script'; ?>
>
	<div id="slidesContent">
		<div id="slides">
			<?php if (count($_smarty_tpl->tpl_vars['slides']->value) > 0) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
			<div id="slides_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" class="panel">
				<div class="row">
					<div class="col-lg-1">
						<span><i class="icon-arrows "></i></span>
					</div>
					<div class="col-md-2">
						#<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
 - <?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>

					</div>
					<div class="col-md-2">
						<?php if ($_smarty_tpl->tpl_vars['slide']->value['iso_lang']) {?>
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</strong> : <i><?php echo $_smarty_tpl->tpl_vars['slide']->value['iso_lang'];?>
</i>
						<?php } else { ?>
						<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Language','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</i>
						<?php }?>
					</div>
					<div class="col-md-2">
						<div class="btn-group-action pull-right">
							<a class="btn btn-default"
								href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&layers=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
								<i class="icon-edit"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers Manager','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="btn-group-action pull-right">

							<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&copySlide=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
								<i class="icon-copy"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

							</a>
							<a class="btn <?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
								href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&changeStatus&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>Enabled<?php } else { ?>Disabled<?php }?>
							</a>
							<a class="btn btn-default"
								href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&editSlide=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
								<i class="icon-edit"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

							</a>
							<a class="btn btn-default" onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&delete_id_slide=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'],'htmlall' ));?>
'; } else { return true;}"
								>
								<i class="icon-trash"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no slide','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

			<?php }?>
		</div>
	</div>
</div>
<?php }
}
