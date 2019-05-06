
	<!-- @ Custom scripts -->
	<fieldset class="form-horizontal clearfix">
	
		<legend><?php _e('Custom scripts', 'wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Head scripts', 'wpbs'); ?></label>
			</div>
			<div class="col-sm-8">
				<textarea id="head_scripts" style="width:100%; max-width:100%; resize:none;" name="wpbs_settings[scripts][head]" class="form-control" rows="10"><?php echo get_option('wpbs_settings')['scripts']['head'];?></textarea>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Footer scripts', 'wpbs'); ?></label>
			</div>
			<div class="col-sm-8">
				<textarea id="footer_scripts" style="width:100%; max-width:100%; resize:none;" name="wpbs_settings[scripts][footer]" class="form-control" rows="10"><?php echo get_option('wpbs_settings')['scripts']['footer']; ?></textarea>
			</div>
		</div>
		
	</fieldset>