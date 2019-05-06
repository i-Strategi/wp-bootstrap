
	<!-- Extensions -->
	<fieldset class="form-horizontal">
		
		<legend><?php _e('Third party plugins', 'wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">		
				<label class="control-label">Font Awesome</label>
			</div>
			<div class="col-sm-8">
				<label class="switch">
					<input type="hidden" name="wpbs_settings[extensions][fontawesome]" value="0" />
					<input type="checkbox" id="fontawesome" name="wpbs_settings[extensions][fontawesome]" value="1" <?php checked(1, $options['extensions']['fontawesome'], true); ?> />
					<div class="slider round"></div>
				</label>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4">		
				<label class="control-label">Prefixfree</label>
			</div>
			<div class="col-sm-8">
				<label class="switch">
					<input type="hidden" name="wpbs_settings[extensions][prefixfree]" value="0" />
					<input type="checkbox" id="fontawesome" name="wpbs_settings[extensions][prefixfree]" value="1" <?php checked(1, $options['extensions']['prefixfree'], true); ?> />
					<div class="slider round"></div>
				</label>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4">		
				<label class="control-label">Flexslider</label>
			</div>
			<div class="col-sm-8">
				<label class="switch">
					<input type="hidden" name="wpbs_settings[extensions][flexslider]" value="0" />
					<input type="checkbox" id="flexslider" name="wpbs_settings[extensions][flexslider]" value="1" <?php checked(1, $options['extensions']['flexslider'], true); ?> />
					<div class="slider round"></div>
				</label>
			</div>
		</div>
		
		<div class="form-row form-group">
			<div class="col-sm-4">		
				<label class="control-label">Slick</label>
			</div>
			<div class="col-sm-8">
				<label class="switch">
					<input type="hidden" name="wpbs_settings[extensions][slick]" value="0" />
					<input type="checkbox" id="slick" name="wpbs_settings[extensions][slick]" value="1" <?php checked(1, $options['extensions']['slick'], true); ?> />
					<div class="slider round"></div>
				</label>
			</div>
		</div>
	
	</fieldset>