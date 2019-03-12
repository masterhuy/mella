<?php
/* Smarty version 3.1.33, created on 2019-03-11 06:19:57
  from 'D:\xamppp\htdocs\jms_mella\modules\jmsslider\views\templates\hook\listlayers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c86364d9d9d93_37605142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc8006f48acc025e959c8732d3ff8f41a8a0d10' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\modules\\jmsslider\\views\\templates\\hook\\listlayers.tpl',
      1 => 1550743145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c86364d9d9d93_37605142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_mella\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

<form id="layer_form" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&layer=1" method="post">
<?php echo '<script'; ?>
>
$(function() {
                var $myLayers = $("#layers");
                $myLayers.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateLayersOrdering";
                        $.post("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/ajax_jmsslider.php?" + order + '&secure_key=' + '<?php echo $_smarty_tpl->tpl_vars['secure_key']->value;?>
');
                        var temp = $(this).sortable("serialize").substring(9,200);
                        var layerids = temp.split("&layers[]=");
                        var i = 1;
                        jQuery.each(layerids, function(index, value) {
                            $("#caption_" + value).css("z-index",i);
                            i++;
                        });
                    }
                });
                $myLayers.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
<?php echo '</script'; ?>
>
<div class="panel area-display">
	<h3>
	<span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
		<i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers list of','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

	</span>
	<div class="list-title-slides">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_slides']->value, 'eve_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eve_slide']->value) {
?>
		<a <?php if ($_smarty_tpl->tpl_vars['eve_slide']->value['id_slide'] == $_smarty_tpl->tpl_vars['slides']->value['id_slide']) {?>class="btn-info"<?php } else { ?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here go to ','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['eve_slide']->value['title'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&layers=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['eve_slide']->value['id_slide'];?>
"><?php echo $_smarty_tpl->tpl_vars['eve_slide']->value['title'];?>
</a>&nbsp;&nbsp;
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
	</h3>
	<div class="panel-body ">
		<div class="wrap-slider">
			<div  class="slider" style="width:<?php echo $_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_WIDTH'];?>
px;height:<?php echo $_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_HEIGHT'];?>
px">
				<div id="frame_layer" class="slide" style="<?php if ($_smarty_tpl->tpl_vars['slides']->value['bg_type'] == 1) {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/views/img/slides/<?php echo $_smarty_tpl->tpl_vars['slides']->value['bg_image'];?>
);<?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['slides']->value['bg_color'];
}?>;background-size:100% 100%;position:relative;width:100%;height:100%">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layers']->value, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
						<?php echo smarty_function_math(array('assign'=>"data_x",'equation'=>'(x/y)*100','x'=>$_smarty_tpl->tpl_vars['layer']->value['data_x'],'y'=>$_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_WIDTH']),$_smarty_tpl);?>

						<?php echo smarty_function_math(array('assign'=>"data_y",'equation'=>'(w/z)*100','w'=>$_smarty_tpl->tpl_vars['layer']->value['data_y'],'z'=>$_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_HEIGHT']),$_smarty_tpl);?>

						<div id="caption_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="tp-caption layer <?php echo $_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'];?>
" style="position:absolute; <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>top:0; left:0;width:100%;height:100%;<?php } else { ?>top:<?php echo $_smarty_tpl->tpl_vars['data_y']->value;?>
%; left:<?php echo $_smarty_tpl->tpl_vars['data_x']->value;?>
%;<?php }?>font-size:<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_font_size'];?>
px; color: <?php echo $_smarty_tpl->tpl_vars['layer']->value['data_color'];?>
; font-style:<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_style'];?>
;<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_line_height']) {?>line-height:<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_line_height'];?>
px;<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == "text") {?>
							<span><?php echo $_smarty_tpl->tpl_vars['layer']->value['data_html'];?>
</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == "image") {?>
							<img width="100%" height="100%" id="image_layer_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/layers/<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_image'];?>
">
						<?php } else { ?>
							<i class="icon-arrows move-toolbar" title="Keep mouse to move" ></i>
							<?php if ($_smarty_tpl->tpl_vars['layer']->value['videotype'] == 'youtube') {?>
							<iframe width="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_width'];?>
px;" height="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_height'];?>
px;" src="http://www.youtube.com/embed/<?php echo substr($_smarty_tpl->tpl_vars['layer']->value['data_video'],(strpos($_smarty_tpl->tpl_vars['layer']->value['data_video'],'?v=')+3));?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'];?>
&controls=<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video_controls'];?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video_loop'];?>
" allowfullscreen frameborder="0">
							 </iframe>
							 <?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['videotype'] == 'vimeo') {?>
							 <?php $_smarty_tpl->_assignInScope('vimeo_link', (explode("/",$_smarty_tpl->tpl_vars['layer']->value['data_video'])));?>
							 <iframe width="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_width'];?>
px;" height="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_height'];?>
px;" src="https://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['vimeo_link']->value[count($_smarty_tpl->tpl_vars['vimeo_link']->value)-1];?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'];?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video_loop'];?>
" allowfullscreen frameborder="0">
							 </iframe>
							 <?php }?>
						<?php }?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div> <!-- END SLIDE -->
		</div>
		<div id="layer-tools" class="btn-group-action clearfix" style="margin-bottom:30px;">
			<a class="btn btn-default" id="add-text"><i class="icon-file-text-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Text Layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
			<a class="btn btn-default"  id="add-image"><i class="icon-file-image-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Image Layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
			<a class="btn btn-default"  id="add-video"><i class="icon-file-movie-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Video','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
			<a class="btn btn-success pull-right"  id="tips"><i class="icon-check-square"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tips','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
		</div> <!-- END ACTIONS  -->
		<div class="row content area-display" style="margin-bottom:30px;">
			<div id="layerConfig" class="col-xs-12 col-sm-7 col-md-7 col-cmd-12 form-horizontal">
				<div class="panel panel-default panel-layers">
					<div class="panel-heading">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layer Config','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

					</div>
					<?php if (count($_smarty_tpl->tpl_vars['layers']->value) > 0) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layers']->value, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
					<input type="hidden" name="layer_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" />
					<div id="form_layer_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="form-layer panel-bodyclearfix" style="display:none">
						<div class="form-group">
							<label class="control-label col-lg-2">
								<span title="" data-html="true" data-toggle="tooltip" class="label-tooltip" data-original-title="Title of slide not show front end"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-4">
								<input type="text"  name="data_title_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_title'];?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Class suffix','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<input type="text" name="data_class_suffix_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'];?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layer fixed','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch fixed-width-lg">
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed'] == 1) {?>checked="checked"<?php }?> value="1" id="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on" name="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on">Yes</label>
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed'] == 0) {?>checked="checked"<?php }?> value="0" id="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off" name="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off">No</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start Moving In','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<div class="input-group">
								<input type="text" id="data_delay" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_delay'];?>
" name="data_delay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<span class="input-group-addon">ms</span>
								</div>
							</div>
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stop Moving In','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<div class="input-group">
								<input type="text" id="data_time" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_time'];?>
" name="data_time_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<span class="input-group-addon">ms</span>
								</div>
							</div>
						</div>
						<div class="form-group">

							<label class="control-label col-lg-2">
							<span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data X','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" id="data_x_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-x" name="data_x_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_x'];?>
" title="Typing 'center' to center">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
							<label class="control-label col-lg-2">
							<span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Y','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" id="data_y_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-y" name="data_y_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_y'];?>
" title="Typing 'center' to center">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-2">
								<span data-original-title="Typing 'full' to full width, 'half' to a half width and 'quarter' to a quarter width" class="label-tooltip" data-toggle="tooltip" data-html="true" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" id="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-width" name="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_width'];?>
"
									title="Typing 'full' to full width, 'half' to a half width and 'quarter' to a quarter width ">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
							<label class="control-label col-lg-2">
								<span data-original-title="Typing 'full' to full height, 'half' to a half height and 'quarter' to a quarter height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" id="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-height" name="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_height'];?>
" title="Typing 'full' to full height, 'half' to a half height and 'quarter' to a quarter height">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transiton In','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<select name="data_in_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_in">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transitions']->value, 'trans');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['trans']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_in'] == $_smarty_tpl->tpl_vars['trans']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transition Out','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<select name="data_out_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_out">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transitions']->value, 'trans');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['trans']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_out'] == $_smarty_tpl->tpl_vars['trans']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['trans']->value['name'];?>

										</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ease In','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<select name="data_ease_in_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_ease_in">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eases']->value, 'ease');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ease']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'] == $_smarty_tpl->tpl_vars['ease']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ease']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ease']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ease Out','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<select name="data_ease_out_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_ease_out">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eases']->value, 'ease');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ease']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'] == $_smarty_tpl->tpl_vars['ease']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ease']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ease']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4" >
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_step'];?>
" name="data_step_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
							</div>

						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data special','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4" >
								<select name="data_special_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_special">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_specials']->value, 'data_special');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data_special']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_special'] == $_smarty_tpl->tpl_vars['data_special']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['data_special']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data_special']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == 'text') {?>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font Size','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-2">
								<div class="input-group">
									<input type="text" id="data_font_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" name="data_font_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_font_size'];?>
" class="data-font-size">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Line Height','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-2">
								<div class="input-group">
									<input type="text" id="data_line_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" name="data_line_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_line_height'];?>
" class="data-line-height">
									<span class="input-group-addon">pixel</span>
								</div>
							</div>
							<label class="control-label col-lg-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Style','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-1">
								<div class="input-group">
									<select   class="data-style" name="data_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_style'] == 'normal') {?>selected<?php }?> value="normal">Normal</option>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_style'] == 'bold') {?>selected<?php }?> value="bold">Bold</option>
										<option <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_style'] == 'italic') {?>selected<?php }?> value="italic">Italic</option>
									</select>
								</div>
							</div>
							<label class="control-label col-lg-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Color','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-1">
									<div class="row">
										<div class="input-group">
											 <input type="color"  class="data-color btn color mColorPickerInput" name="data_color_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_color_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_color'];?>
">
										</div>
									</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Html or Text','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-10">
								<textarea name="data_html_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_html_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-html" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['layer']->value['data_html'];?>
</textarea>
							</div>
						</div>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == 'image') {?>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4" >
			            		<select name="data_image_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_image_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-image">
			            			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
			            				<option <?php ob_start();
echo $_smarty_tpl->tpl_vars['image']->value['id'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['layer']->value['data_image'] == $_prefixVariable1) {?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
</option>
			            			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			            		</select>
			            	</div>
		            	</div>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == 'video') {?>
						<div class="form-group">
							<label class="control-label col-lg-2">
							<span data-original-title="Video Url" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Url','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-lg-10">
								<textarea name="data_video_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" id="data_video_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data-video" cols="30" rows="3"><?php echo $_smarty_tpl->tpl_vars['layer']->value['data_video'];?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Autoplay','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch">
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'] == 1) {?>checked="checked"<?php }?> value="1" id="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on" name="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on">Yes</label>
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'] == 0) {?>checked="checked"<?php }?> value="0" id="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off" name="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off">No</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Controls','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch">
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_controls'] == 1) {?>checked="checked"<?php }?> value="1" id="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on" name="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on">Yes</label>
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_controls'] == 0) {?>checked="checked"<?php }?> value="0" id="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off" name="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off">No</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loop','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch">
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'] == 1) {?>checked="checked"<?php }?> value="1" id="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on" name="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on">Yes</label>
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'] == 0) {?>checked="checked"<?php }?> value="0" id="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off" name="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off">No</label>
									<a class="slide-button btn"></a>
								</span>
							</div>

						</div>
						<div class="form-group">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-10">
								<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg'] == 1) {?>checked<?php }?> value="1" id="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="data_video_bg" name="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
								<label for="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set this video for slide background','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>
						<?php }?>
						<div class="form-group">
							<label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch fixed-width-lg">
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_status'] == 1) {?>checked="checked"<?php }?> value="1" id="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on" name="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_on">Yes</label>
									<input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_status'] == 0) {?>checked="checked"<?php }?> value="0" id="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off" name="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<label for="data_status_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
_off">No</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>

					</div>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php }?>
				</div>
			</div>
			<div id="layerContent" class="col-xs-12 col-sm-5 col-md-5 col-cmd-12 form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

					</div>
					<div class="panel-body clearfix">
						<div id="layers">
							<?php if (count($_smarty_tpl->tpl_vars['layers']->value) > 0) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layers']->value, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
								<div id="layers_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
" class="panel layer layers-<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
">
									<div class="row">
										<div class="col-lg-1">
											<span><i class="icon-arrows "></i></span>
										</div>
										<div class="col-md-6">
											<?php echo $_smarty_tpl->tpl_vars['layer']->value['data_title'];?>

										</div>
										<div class="col-md-5">
											<div class="btn-group-action pull-right">
												<div class="btn btn-default show-hide-layer" title="Click to display/hide layer"><i class="icon-eye"></i><i class="icon-eye-slash" style="display:none"></i></div>
												<div class="btn btn-default disabled" title="format"><i <?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == "text") {?>class="icon-file-text-o" <?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['data_type'] == "image") {?> class="icon-file-image-o" <?php } else { ?>class="icon-file-movie-o"<?php }?>></i></div>

												<a title="Delete" id='delete_<?php echo $_smarty_tpl->tpl_vars['layer']->value['id_layer'];?>
' class="delete_layer btn btn-danger"
												>
													<i class="icon-trash"></i>
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
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-default pull-right btn-success" name="submitLayer" id="module_form_submit_btn" value="1" type="submit">
			<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

		</button>
		<a class="btn btn-default btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Slides List','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
"><i class="process-icon-back"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
	</div>

	<input type="hidden" name="slide_id" id="id_slide" value="<?php echo $_smarty_tpl->tpl_vars['slides']->value['id_slide'];?>
" />
	<input type="hidden" name="layer_id" id="id_layer" value="<?php if (count($_smarty_tpl->tpl_vars['layers']->value) > 0) {
echo $_smarty_tpl->tpl_vars['layers']->value[0]['id_layer'];
}?>" />
	<input type="hidden" name="site_url" id="site_url" value="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" />
	<input type="hidden" name="id_slide" value="<?php echo $_smarty_tpl->tpl_vars['slides']->value['id_slide'];?>
">
  <input type="hidden" name="secure_key" id="secure_key" value="<?php echo $_smarty_tpl->tpl_vars['secure_key']->value;?>
">
<div id="modal_add_text" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add text or html','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><input type="text" id="title_text_new" name="title_text_new"></p>
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text or HTML','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><textarea name="data_html" id="text_layer_new" cols="30" rows="10"></textarea></p>
            </div>
        	<p id='loading' class="loading loading-text" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitLayerText" name="submitLayer">Save</button>
            </div>
        </div>

    </div>
</div>
<div id="modal_add_video" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add video (Youtube or Vimeo)','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><input type="text" id="title_video_new" name="title_video_new"></p>
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Url','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><textarea name="data_video_new" id="data_video_new" cols="30" rows="3"></textarea></p>
            	<p class="help-block">Eg: https://www.youtube.com/watch?v=2PEG82Udb90 or https://vimeo.com/23259282</p>
            </div>
        	<p id='loading' class="loading loading-text" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitLayerVideo" name="submitLayer">Save</button>
            </div>
        </div>
    </div>
</div> <!-- end modal video -->
<div id="modal_tips" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TIPS','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
	            <ul style="list-style-type:decimal">
	            	<li class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To set background for slide, click on layer video then set delay = 0, check in box "Set this video for slide background"-->Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To mute video, click on volume video youtube, then click Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Typing "center" in data X or data Y to center align for layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li class="text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Typing "full/half/quarter" in width or data height to set size (full/half/quarter slide) quickly for layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Using show/hide layer function (icon eye) to easly working.','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- end first form  -->
<form id="form_add_layer" action="" method="post" enctype="multipart/form-data">
<div id="modal_add_image" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Image','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
	            </div>
	            <div class="modal-body">
	            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            		<p><input type="text" id="title_image_new" name="title_image_new"></p>
	            	<div id="image_action" class="form-group clearfix" >
	            		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type Action','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-9">
							<span class="switch prestashop-switch fixed-width-lg">
								<input type="radio" value="select" id="data_image_action_select" checked name="data_image_action">
								<label for="data_image_action_select"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
								<input type="radio" value="upload" id="data_image_action_upload" name="data_image_action">
								<label for="data_image_action_upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
								<a class="slide-button btn"></a>
							</span>
						</div>
	            	</div>
	            	<div id="form_upload_image" class="form-group clearfix">
						<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload file','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-9">
							<input type="file" class="hide" name="data_image" id="data_image">
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input type="text" readonly="" name="filename" id="data_image-name">
								<span class="input-group-btn">
									<button class="btn btn-default" name="submitAddAttachments" type="button" id="data_image-selectbutton">
										<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

									</button>
								</span>
							</div>
						</div>
					</div>
	            	<div id="form_select_image" class="form-group  clearfix">
	            		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
	            		<select class="col-lg-9" name="data_s_image" id="data_s_image">
	            			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	            				<option  value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
</option>
	            			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            		</select>
	            	</div>
	            	<div class="show-error" style="color:#ff0000"></div>

	            	<p id='loading' class="loading loading-image" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
	            </div>
	            <div class="modal-footer clearfix">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary" id="submitLayerImage" name="submitLayer">Save</button>
	            </div>
        </div>
    </div>
</div> <!-- end modal add image -->
</form>
<?php }
}
