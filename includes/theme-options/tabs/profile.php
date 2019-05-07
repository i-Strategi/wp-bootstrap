
	<!-- @ Branding -->	
	<fieldset class="form-horizontal" id="brandingSettings">
	
		<legend><?php _e('Branding','wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Logo','wpbs'); ?></label></div>
			<div class="col-sm-8 form-inline uploader">
				<input type="text" class="form-control media-value mr-3" name="wpbs_settings[profile][logo]" id="logo" value="<?php echo $options['profile']['logo']; ?>" />
				<button id="logo_upload_button" class="media_upload_btn btn btn-primary <?php if (!empty($options['profile']['logo'])) {echo 'd-none';}; ?>" name="logo_upload_button" type="button" ><?php _e('Upload new','wpbs'); ?></button>
				<button id="logo_reset_button" class="media_reset_btn btn btn-danger <?php if (empty($options['profile']['logo'])) {echo 'd-none';}; ?>" name="logo_reset_button" type="button" value="<?php _e('Remove','wpbs'); ?>" ><?php _e('Remove','wpbs'); ?></button>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Browser icon','wpbs'); ?></label></div>
			<div class="col-sm-8 form-inline uploader">
				<input type="text" class="form-control media-value mr-3" name="wpbs_settings[profile][icon]" id="icon" value="<?php echo $options['profile']['icon']; ?>" />
				<button id="logo_upload_button" class="media_upload_btn btn btn-primary <?php if (!empty($options['profile']['icon'])) {echo 'd-none';}; ?>" name="logo_upload_button" type="button" ><?php _e('Upload new','wpbs'); ?></button>
				<button id="logo_reset_button" class="media_reset_btn btn btn-danger <?php if (empty($options['profile']['icon'])) {echo 'd-none';}; ?>" name="logo_reset_button" type="button" value="<?php _e('Remove','wpbs'); ?>" ><?php _e('Remove','wpbs'); ?></button>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Browser color','wpbs'); ?></label></div>
			<div class="col-sm-8 form-inline">
				<input type="text" class="form-control color-picker mr-3" name="wpbs_settings[profile][browser_color]" id="browser_color" value="<?php echo $options['profile']['browser_color']; ?>" autocomplete="off"/>
				<button type="button" class="btn btn-danger colorpicker-reset"><?php _e('Reset','wpbs'); ?></button>
			</div>
		</div>
		
	</fieldset>
	
	<!-- @ Contact information -->	
	<fieldset class="form-horizontal" id="contactInformationSettings">
	
		<legend><?php _e('Contact information','wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Company name','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[profile][company_name]" id="company_name" value="<?php echo $options['profile']['company_name']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Telephone number','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[profile][phone]" id="phone" value="<?php echo $options['profile']['phone']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('E-mail address','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[profile][email]" id="email" value="<?php echo $options['profile']['email']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('Address','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<p>
					<input type="text" class="form-control" name="wpbs_settings[profile][address][street]" id="address" value="<?php echo $options['profile']['address']['street']; ?>" placeholder="<?php _e('Street','wpbs'); ?>" />
				</p>
				<div class="form-row clearfix form-group">
					<div class="col-5">
						<input type="text" class="form-control" name="wpbs_settings[profile][address][postcode]" id="postcode" value="<?php echo $options['profile']['address']['postcode']; ?>" placeholder="<?php _e('Postcode','wpbs'); ?>" />
					</div>
					<div class="col-7">
						<input type="text" class="form-control" name="wpbs_settings[profile][address][city]" id="city" value="<?php echo $options['profile']['address']['city']; ?>" placeholder="<?php _e('City','wpbs'); ?>" />
					</div>
				</div>
				<p>
					<input type="text" class="form-control" name="wpbs_settings[profile][address][country]" id="country" value="<?php echo $options['profile']['address']['country']; ?>" placeholder="<?php _e('Country','wpbs'); ?>" />
				</p>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><?php _e('VAT number','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="text" class="form-control" name="wpbs_settings[profile][vat]" id="vat" value="<?php echo $options['profile']['vat']; ?>" />
			</div>
		</div>
		
	</fieldset>
	
	
	<!-- @ Social Media -->	
	<fieldset class="form-horizontal" id="contactInformationSettings">
	
		<legend><?php _e('Social media links','wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-twitter"></i> <?php _e('Twitter','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][twitter_url]" id="twitter_url" value="<?php echo $options['profile']['social']['twitter_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-facebook"></i> <?php _e('Facebook','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][facebook_url]" id="facebook_url" value="<?php echo $options['profile']['social']['facebook_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-youtube"></i> <?php _e('YouTube','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][youtube_url]" id="youtube_url" value="<?php echo $options['profile']['social']['youtube_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-linkedin"></i> <?php _e('LinkedIn','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][linkedin_url]" id="linkedin_url" value="<?php echo $options['profile']['social']['linkedin_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-snapchat"></i> <?php _e('Snapchat','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][snapchat_url]" id="snapchat_url" value="<?php echo $options['profile']['social']['snapchat_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-instagram"></i> <?php _e('Instagram','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][instagram_url]" id="instagram_url" value="<?php echo $options['profile']['social']['instagram_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-vimeo"></i> <?php _e('Vimeo','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][vimeo_url]" id="vimeo_url" value="<?php echo $options['profile']['social']['vimeo_url']; ?>" />
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4"><label class="control-label"><i class="fab fa-fw fa-pinterest"></i> <?php _e('Pinterest','wpbs'); ?></label></div>
			<div class="col-sm-8 col-lg-5">
				<input type="url" class="form-control" name="wpbs_settings[profile][social][pinterest_url]" id="pinterest_url" value="<?php echo $options['profile']['social']['pinterest_url']; ?>" />
			</div>
		</div>
		
	</fieldset>
	