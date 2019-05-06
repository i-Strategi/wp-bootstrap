	<fieldset class="form-horizontal" id="bootstrapCssPanel">
		<legend><?php _e('Bootstrap CSS', 'wpbs'); ?></legend>
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Bootstrap CSS version', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<select class="form-control" name="wpbs_settings[bootstrap_css]">
					<option <?php selected('default', $options['bootstrap_css']); ?> value="default"><?php _e('Master theme', 'wpbs'); ?> (4.3.1)</option>
					<option <?php selected('custom', $options['bootstrap_css']); ?> value="custom"><?php _e('Child theme', 'wpbs'); ?></option>
					<option <?php selected('cdn', $options['bootstrap_css']); ?> value="cdn"><?php _e('Bootstrap CDN', 'wpbs'); ?> (4.3.1)</option>
				</select>
			</div>
		</div>
	</fieldset>
	
	<fieldset class="form-horizontal" id="bootstrapJsPanel">
		<legend><?php _e('Bootstrap JS', 'wpbs'); ?></legend>
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Bootstrap JS version', 'wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<select class="form-control" name="wpbs_settings[bootstrap_js]">
					<option <?php selected('default', $options['bootstrap_js']); ?> value="default"><?php _e('Master theme', 'wpbs'); ?> (4.3.1)</option>
					<option <?php selected('custom', $options['bootstrap_js']); ?> value="custom"><?php _e('Child theme', 'wpbs'); ?></option>
					<option <?php selected('cdn', $options['bootstrap_js']); ?> value="cdn"><?php _e('Bootstrap CDN', 'wpbs'); ?> (4.3.1)</option>
				</select>
			</div>
		</div>
	</fieldset>	