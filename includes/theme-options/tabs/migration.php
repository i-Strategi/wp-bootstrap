	<div class="alert alert-warning">
		<?php _e('<strong>Heads up!</strong> This function is still in development and may not work the way it is intended to work', 'wpbs'); ?>
	</div>

	<!-- @ Data migration -->
	<fieldset class="form-horizontal">
	
		<legend><?php _e('Migrate data', 'wpbs'); ?></legend>
	
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Export data', 'wpbs'); ?></label>
			</div>
			<div class="col-sm-8">
				<textarea id="export_data" disabled style="width:100%; max-width:100%; resize:none;" class="form-control" rows="15"><?php echo maybe_serialize(get_option('wpbs_settings'));?></textarea>
			</div>
		</div>
	
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Import data', 'wpbs'); ?></label>
			</div>
			<div class="col-sm-8">
				<textarea id="import_data" style="width:100%; max-width:100%; resize:none;" class="form-control" rows="15"></textarea>
			</div>
		</div>
		
	</fieldset>