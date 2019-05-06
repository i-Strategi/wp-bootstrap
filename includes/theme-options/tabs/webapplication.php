	<div class="alert alert-warning">
		<?php _e('<strong>Heads up!</strong> This function is still in development and may not work the way it is intended to work', 'wpbs'); ?>
	</div>

	<!-- @ Web Application -->	
	<fieldset class="form-horizontal" id="pwaSettings">

		<legend><?php _e('Manifest settings', 'wpbs'); ?></legend>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Short name', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][short_name]" id="pwa_short_name" value="<?php echo $options['pwa']['short_name']; ?>" />
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Name', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][name]" id="pwa_name" value="<?php echo $options['pwa']['name']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Small icon', 'wpbs'); ?></label></div>
			<div class="col-sm-8 form-inline uploader">
				<input type="text" class="form-control media-value mr-3" name="wpbs_settings[pwa][icon][0]" id="pwa_icon_0" value="<?php echo $options['pwa']['icon'][0]; ?>" />
				<button id="logo_upload_button" class="media_upload_btn btn btn-primary <?php if (!empty($options['pwa']['icon'][0])) {echo 'd-none';}; ?>" name="logo_upload_button" type="button" ><?php _e('Upload new', 'wpbs'); ?></button>
				<button id="logo_reset_button" class="media_reset_btn btn btn-danger <?php if (empty($options['pwa']['icon'][0])) {echo 'd-none';}; ?>" name="logo_reset_button" type="button" value="<?php _e('Remove', 'wpbs'); ?>" ><?php _e('Remove', 'wpbs'); ?></button>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Large icon', 'wpbs'); ?></label></div>
			<div class="col-sm-8 form-inline uploader">
				<input type="text" class="form-control media-value mr-3" name="wpbs_settings[pwa][icon][1]" id="pwa_icon_1" value="<?php echo $options['pwa']['icon'][1]; ?>" />
				<button id="logo_upload_button" class="media_upload_btn btn btn-primary <?php if (!empty($options['pwa']['icon'][1])) {echo 'd-none';}; ?>" name="logo_upload_button" type="button" ><?php _e('Upload new', 'wpbs'); ?></button>
				<button id="logo_reset_button" class="media_reset_btn btn btn-danger <?php if (empty($options['pwa']['icon'][1])) {echo 'd-none';}; ?>" name="logo_reset_button" type="button" value="<?php _e('Remove', 'wpbs'); ?>" ><?php _e('Remove', 'wpbs'); ?></button>
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Start URL', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][start_url]" id="pwa_start_url" value="<?php echo $options['pwa']['start_url']; ?>" />
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Background color', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][background_color]" id="pwa_bg_color" value="<?php echo $options['pwa']['background_color']; ?>" />
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Display', 'wpbs'); ?></label>
			</div>
			<div class="col-sm-8 col-lg-5">
				<select class="form-control" name="wpbs_settings[pwa][display]">
					<option value="standalone" <?php selected('standalone', $options['pwa']['display']); ?> ><?php _e('Standalone', 'wpbs'); ?></option>
					<option value="fullscreen" <?php selected('fullscreen', $options['pwa']['display']); ?> ><?php _e('Fullscreen', 'wpbs'); ?></option>
					<option value="minimal-ui" <?php selected('minimal-ui', $options['pwa']['display']); ?> ><?php _e('Minimal UI', 'wpbs'); ?></option>
					<option value="browser" <?php selected('browser', $options['pwa']['display']); ?> ><?php _e('Browser', 'wpbs'); ?></option>
				</select>
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Scope', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][scope]" id="pwa_scope" value="<?php echo $options['pwa']['scope']; ?>" />
			</div>
		</div>

		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Background color', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[pwa][theme_color]" id="pwa_theme_color" value="<?php echo $options['pwa']['theme_color']; ?>" />
			</div>
		</div>
		
		
	</fieldset>
