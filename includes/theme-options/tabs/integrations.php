<?php
	// $optionsSettings = get_option('wpbs_settings')['settings'];
?>

	<fieldset class="form-horizontal" id="sectionIntegrationsGoogle">
	
		<legend>Google</legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label">Google Analytics</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="wpbs_settings[integrations][google][google_analytics]" id="google_analytics" value="<?php echo $options['integrations']['google']['google_analytics']; ?>" placeholder="UA-XXXXXX-X"/>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label">Google Tag Manager</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="wpbs_settings[integrations][google][google_tag_manager]" id="google_tag_manager" value="<?php echo $options['integrations']['google']['google_tag_manager']; ?>" placeholder="GTM-XXXX"/>
			</div>
		</div>
		
	</fieldset>

	<fieldset class="form-horizontal" id="sectionIntegrationsFacebook">
	
		<legend>Facebook</legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label">Facebook Pixel</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="wpbs_settings[integrations][facebook][facebook_pixel]" id="facebook_pixel" value="<?php echo $options['integrations']['facebook']['facebook_pixel']; ?>" placeholder="XXXXXXXXXXXXXXXX"/>
			</div>
		</div>
		
	</fieldset>

	<fieldset class="form-horizontal" id="sectionIntegrationsFacebook">
	
		<legend>Hotjar</legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label">Hotjar Tracking</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="wpbs_settings[integrations][hotjar][hotjar_tracking]" id="hotjar_tracking" value="<?php echo $options['integrations']['hotjar']['hotjar_tracking']; ?>" placeholder="XXXXXXX"/>
			</div>
		</div>
		
	</fieldset>
	
	