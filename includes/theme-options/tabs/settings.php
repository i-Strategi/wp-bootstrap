<?php
	$optionsSettings = get_option('wpbs_settings')['settings'];
?>

	<!-- @ SSL settings -->
	<fieldset id="general-settings" class="form-horizontal">
	
		<legend><?php _e('General settings','wpbs'); ?></legend>
		
		<div class="form-row form-group">
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Force SSL','wpbs'); ?></label>	
			</div>
			<div class="col-sm-8">
				<label class="switch">
					<input type="hidden" name="wpbs_settings[settings][force_ssl]" value="0" />
					<input type="checkbox" name="wpbs_settings[settings][force_ssl]" value="1" <?php checked(1, $optionsSettings['force_ssl'], true); ?> />
					<div class="slider round"></div>
				</label>
			</div>
		</div>
	
	</fieldset>

	<!-- @ Image settings -->
	<fieldset id="image-settings" class="form-horizontal">
	
		<legend><?php _e('Image sizes','wpbs'); ?></legend>
		
		<div class="form-row form-group">
		
			<div class="col-sm-4">
				<label class="control-label"><?php _e('Image sizes','wpbs'); ?></label>
			</div>
			<div class="col-sm-8">
				<table class="repeatable-wrap table table-layout-fixed">
					<thead>
						<tr>
							<th><?php _e('Name','wpbs'); ?></th>
							<th width="100"><?php _e('Width','wpbs'); ?></th>
							<th width="100"><?php _e('Height','wpbs'); ?></th>
							<th width="100"><?php _e('Crop','wpbs'); ?></th>
							<th width="110"><?php _e('Remove','wpbs'); ?></th>
						</tr>
					</thead>
					<tbody class="repeatable-fields-list">
					<?php 
				
					if ( !empty( $options['settings']['image_sizes'] ) ) 
					{
						
						foreach( $options['settings']['image_sizes'] as $option => $key ) 
						{  
						?>
							<tr class="repeatable-item">
								<td>
									<input type="text" data-id="<?php echo $option;?>" class="form-control unique" name="wpbs_settings[settings][image_sizes][<?php echo $option; ?>][name]" value="<?php echo $optionsSettings['image_sizes'][$option]['name']; ?>" /></td>
								<td>
									<input type="number" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[settings][image_sizes][<?php echo $option; ?>][width]" value="<?php echo $optionsSettings['image_sizes'][$option]['width'] ;?>" /></td>
								<td>
									<input type="number" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[settings][image_sizes][<?php echo $option; ?>][height]" value="<?php echo $optionsSettings['image_sizes'][$option]['height']; ?>" /></td>
								<td>
									<label class="switch">
										<input type="hidden" name="wpbs_settings[settings][image_sizes][<?php echo $option; ?>][crop]" value="0" />
											<input type="checkbox" data-id="<?php echo $option;?>" name="wpbs_settings[settings][image_sizes][<?php echo $option; ?>][crop]" <?php checked(1, $optionsSettings['image_sizes'][$option]['crop']); ?> value="1" />
											<div class="slider round"></div>
										</label>
								</td>
								<td>
									<a class="repeatable-field-remove btn btn-danger text-nowrap" href="#"><i class="fas fa-times"></i> <?php _e('Remove','wpbs'); ?></a>
								</td>
							</tr>
						<?php
						}
					} 
					else 
					{
						echo '<tr class="repeatable-item">' .
							'<td><input type="text" data-id="1" class="form-control" name="wpbs_settings[settings][image_sizes][0][name]" value=""  /></td>' .
							'<td><input type="number" data-id="1" class="form-control" name="wpbs_settings[settings][image_sizes][0][width]" value=""  /></td>' .
							'<td><input type="number" data-id="1" class="form-control" name="wpbs_settings[settings][image_sizes][0][height]" value=""  /></td>' .
							'<td><label class="switch"><input type="checkbox" data-id="1" name="wpbs_settings[settings][image_sizes][0][crop]" value="1"  /><div class="slider round"></div></label></td>' .
							'<td><a class="repeatable-field-remove btn btn-danger text-nowrap" href="#"><i class="fas fa-times"></i> '. __('Remove','wpbs') .'</a></td>' .
						'</tr>';
					}
					
					?>
					</tbody>
				</table>
				<a class="repeatable-field-add btn btn-primary" href="#"><i class="fas fa-plus"></i> <?php _e('Add new','wpbs');?></a>
			</div>
		</div>

	</fieldset>
	

		
<script>


	// Javascript to enable link to tab
	var hash = document.location.hash;
	var prefix = "tab_";
	if (hash) {
		$('#sidebar .nav a[href="'+hash.replace(prefix,"")+'"]').tab('show');
	} 

	// Change hash for page-reload
	$('#sidebar .nav a').on('shown', function (e) {
		window.location.hash = e.target.hash.replace("#", "#" + prefix);
	});
	
	/* =============================== */

	
	jQuery('.repeatable-wrap').each(function() {
		
		// The table variable
		var repeatableSection = this;
		
		// Remove repeatable field
		function removeField(){
			
			jQuery('.repeatable-field-remove').on('click', function(){
				
				// Remove repeatable item
				jQuery(this).parentsUntil('.repeatable-item').parent().remove();
				
				return false;
			});	

		}removeField();
		
		// Declare default item.
		var fieldTemplate = jQuery(repeatableSection).find('.repeatable-item:first').clone(true);
	
		// Action when clicking the "Add" button
		jQuery(repeatableSection).siblings('.repeatable-field-add').on('click', function() {
			
			// If no repeatable-fields left, create new one from the template and set index to 1.
			if( jQuery(repeatableSection).find('.repeatable-item').length == 0 ) {
				
				jQuery('input, textarea', fieldTemplate).each(function () {
					jQuery(this).attr('value','');
					jQuery(this).attr('data-id','0');
					jQuery(this).attr('name', function(index, name) {
						return name.replace(/\[\d\]/, function(fullMatch, n) {
							return '[0]' ;
						});
					});
				})
				jQuery(fieldTemplate).appendTo(jQuery(this).siblings('.repeatable-wrap').find('.repeatable-fields-list'));
				
				// Recall the delete function so it registers the new field
				removeField();
				
			} else {
				
				var theField = jQuery(repeatableSection).find('.repeatable-item:last').clone(true);
				var theLocation = jQuery(repeatableSection).find('.repeatable-item:last');
				
				// Take each li and manipulate it before inserting it again
				jQuery('input, textarea', theField).each(function (){
					
					// Increase the data-id count
					var dataId = parseInt(jQuery(this).attr('data-id'));						
					dataId++;
					
					// Reset the value attribute
					jQuery(this).attr('value','');
					
					jQuery(this).attr('checked',false);
					
					// Set the new data-id
					jQuery(this).attr('data-id',dataId);
					
					// Replace the index in the inserted value
					jQuery(this).attr('name', function(index, name) {
						
						return name.replace(/\[\d\]/, function(fullMatch, n) {
							return '['+ dataId +']' ;
						});
						
					});
				})
				
				// Insert the new field-group
				theField.insertAfter(theLocation);
			}
			
			
			return false;
		});
		
	});
	

</script>