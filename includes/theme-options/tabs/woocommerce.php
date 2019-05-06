
	<ul id="woocommerceTabs" class="nav nav-tabs mb-4" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#woocommerceIndex" role="tab" aria-controls="woocommerceIndex" aria-selected="true">Index</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#woocommerceSingle" role="tab" aria-controls="woocommerceSingle" aria-selected="false">Single product</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#woocommerceCart" role="tab" aria-controls="woocommerceCart" aria-selected="false">Shopping Cart</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#woocommerceCheckout" role="tab" aria-controls="woocommerceCheckout" aria-selected="false">Checkout</a></li>
	</ul>
	
	<div class="tab-content" id="woocommerceTabsContent">
		
		<!-- @ Product archive --> 	

		<div class="tab-pane fade show active" id="woocommerceIndex">
			<fieldset class="form-horizontal">
			
				<legend><?php _e('Index settings','wpbs'); ?></legend>
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Content size', 'wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][content-size][col]" value="<?php echo $options['woocommerce']['index']['content-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][content-size][col-md]" value="<?php echo $options['woocommerce']['index']['content-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][content-size][col-lg]" value="<?php echo $options['woocommerce']['index']['content-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][content-size][col-xl]" value="<?php echo $options['woocommerce']['index']['content-size']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>		
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Sidebar size', 'wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][sidebar-size][col]" value="<?php echo $options['woocommerce']['index']['sidebar-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][sidebar-size][col-md]" value="<?php echo $options['woocommerce']['index']['sidebar-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][sidebar-size][col-lg]" value="<?php echo $options['woocommerce']['index']['sidebar-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][sidebar-size][col-xl]" value="<?php echo $options['woocommerce']['index']['sidebar-size']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar position', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[woocommerce][index][sidebar-position]">
							<option value="left" <?php selected('left', $options['woocommerce']['index']['sidebar-position']); ?>><?php _e('Left', 'wpbs'); ?></option>
							<option value="right" <?php selected('right', $options['woocommerce']['index']['sidebar-position']); ?>><?php _e('Right', 'wpbs'); ?></option>
						</select>		
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar visibility', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[woocommerce][index][sidebar-visibility]">
							<option value="all" <?php selected('all', $options['woocommerce']['index']['sidebar-visibility']); ?>><?php _e('Mobile', 'wpbs'); ?> (@ All)</option>
							<option value="md" <?php selected('md', $options['woocommerce']['index']['sidebar-visibility']); ?>><?php _e('Tablet', 'wpbs'); ?> (@ MD)</option>
							<option value="lg" <?php selected('lg', $options['woocommerce']['index']['sidebar-visibility']); ?>><?php _e('Laptop', 'wpbs'); ?> (@ LG)</option>
							<option value="xl" <?php selected('xl', $options['woocommerce']['index']['sidebar-visibility']); ?>><?php _e('Desktop', 'wpbs'); ?> (@ XL)</option>
						</select>
					</div>			
				</div>
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Product columns sizes','wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][product-size][col]" value="<?php echo $options['woocommerce']['index']['product-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][product-size][col-md]" value="<?php echo $options['woocommerce']['index']['product-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][product-size][col-lg]" value="<?php echo $options['woocommerce']['index']['product-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][index][product-size][col-xl]" value="<?php echo $options['woocommerce']['index']['product-size']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</fieldset>
		</div>
		
		<!-- @ Single product -->
		
		<div class="tab-pane fade" id="woocommerceSingle">
			<fieldset class="form-horizontal">	
				
				<legend><?php _e('Single product settings','wpbs'); ?></legend>
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Content size', 'wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][content-size][col]" value="<?php echo $options['woocommerce']['product']['content-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][content-size][col-md]" value="<?php echo $options['woocommerce']['product']['content-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][content-size][col-lg]" value="<?php echo $options['woocommerce']['product']['content-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][content-size][col-xl]" value="<?php echo $options['woocommerce']['product']['content-size']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>		
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Sidebar size', 'wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][sidebar-size][col]" value="<?php echo $options['woocommerce']['product']['sidebar-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][sidebar-size][col-md]" value="<?php echo $options['woocommerce']['product']['sidebar-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][sidebar-size][col-lg]" value="<?php echo $options['woocommerce']['product']['sidebar-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][sidebar-size][col-xl]" value="<?php echo $options['woocommerce']['product']['sidebar-size']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar position', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[woocommerce][product][sidebar-position]">
							<option value="left" <?php selected('left', $options['woocommerce']['product']['sidebar-position']); ?>><?php _e('Left', 'wpbs'); ?></option>
							<option value="right" <?php selected('right', $options['woocommerce']['product']['sidebar-position']); ?>><?php _e('Right', 'wpbs'); ?></option>
						</select>		
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar visibility', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[woocommerce][product][sidebar-visibility]">
							<option value="all" <?php selected('all', $options['woocommerce']['product']['sidebar-visibility']); ?>><?php _e('Mobile', 'wpbs'); ?> (@ All)</option>
							<option value="md" <?php selected('md', $options['woocommerce']['product']['sidebar-visibility']); ?>><?php _e('Tablet', 'wpbs'); ?> (@ MD)</option>
							<option value="lg" <?php selected('lg', $options['woocommerce']['product']['sidebar-visibility']); ?>><?php _e('Laptop', 'wpbs'); ?> (@ LG)</option>
							<option value="xl" <?php selected('xl', $options['woocommerce']['product']['sidebar-visibility']); ?>><?php _e('Desktop', 'wpbs'); ?> (@ XL)</option>
						</select>
					</div>			
				</div>
				
				<div class="form-row form-group">		
					
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Product images','wpbs'); ?></label>
					</div>
				
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][left][col]" value="<?php echo $options['woocommerce']['product']['left']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][left][col-md]" value="<?php echo $options['woocommerce']['product']['left']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][left][col-lg]" value="<?php echo $options['woocommerce']['product']['left']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][left][col-xl]" value="<?php echo $options['woocommerce']['product']['left']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
				
				<div class="form-row form-group">		
					
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Product information','wpbs'); ?></label>
					</div>
				
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][right][col]" value="<?php echo $options['woocommerce']['product']['right']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][right][col-md]" value="<?php echo $options['woocommerce']['product']['right']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][right][col-lg]" value="<?php echo $options['woocommerce']['product']['right']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
										<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][product][right][col-xl]" value="<?php echo $options['woocommerce']['product']['right']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
				
			</fieldset>
				
			<fieldset class="form-horizontal">
			
				<legend><?php _e('General information','wpbs'); ?></legend>
				
				<div class="form-row form-group">
			
					<div class="col-sm-4">
						<label class="control-label"><?php _e('General information','wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<textarea name="wpbs_settings[woocommerce][product][general_text]" class="form-control" resize="none" rows="7"><?php echo $options['woocommerce']['product']['general_text']; ?></textarea>
						<?php 
							/*
							* Removed editor for now, sticking to pure HTML.
							*/
							
							// wp_editor( 'HELLO', 'theEditor', $settings = array() );
						?> 
					</div>
					
				</div>
				
			</fieldset>
				
			<fieldset class="form-horizontal">
			
				<legend><?php _e('Social share buttons','wpbs'); ?></legend>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">
						<label class="control-label"><i class="fab fa-fw fa-facebook"></i> Facebook</label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][product][share][facebook]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][product][share][facebook]" value="1" <?php checked($options['woocommerce']['product']['share']['facebook'],1); ?> />
							<div class="slider round"></div>
						</label>
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">
						<label class="control-label"><i class="fab fa-fw fa-twitter"></i> Twitter</label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][product][share][twitter]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][product][share][twitter]" value="1" <?php checked($options['woocommerce']['product']['share']['twitter'], 1); ?> />
							<div class="slider round"></div>
						</label>
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">
						<label class="control-label"><i class="fab fa-fw fa-linkedin"></i> LinkedIn</label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][product][share][linkedin]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][product][share][linkedin]" value="1" <?php checked($options['woocommerce']['product']['share']['linkedin'], 1); ?> />
							<div class="slider round"></div>
						</label>
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">
						<label class="control-label"><i class="fas fa-fw fa-envelope"></i> E-mail</label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][product][share][e_mail]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][product][share][e_mail]" value="1" <?php checked($options['woocommerce']['product']['share']['e_mail'], 1); ?> />
							<div class="slider round"></div>
						</label>
					</div>			
				</div>
				
			</fieldset>
		
		</div>


		<!-- @ Shopping cart -->			
		<div class="tab-pane fade" id="woocommerceCart">
			<fieldset class="form-horizontal">
			
				<legend><?php _e('Shopping cart settings','wpbs'); ?></legend>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Cart content','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][left][col]" value="<?php echo $options['woocommerce']['cart']['left']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][left][col-md]" value="<?php echo $options['woocommerce']['cart']['left']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][left][col-lg]" value="<?php echo $options['woocommerce']['cart']['left']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][left][col-xl]" value="<?php echo $options['woocommerce']['cart']['left']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Cart summary','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][right][col]" value="<?php echo $options['woocommerce']['cart']['right']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][right][col-md]" value="<?php echo $options['woocommerce']['cart']['right']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][right][col-lg]" value="<?php echo $options['woocommerce']['cart']['right']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][cart][right][col-xl]" value="<?php echo $options['woocommerce']['cart']['right']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Fix cart table header','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][cart][fix-header]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][cart][fix-header]" value="1" <?php checked(1, $options['woocommerce']['cart']['fix-header']); ?> />
							<div class="slider round"></div>
						</label>
					</div>
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Pull cart totals right','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][cart][totals-right]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][cart][totals-right]" value="1" <?php checked(1, $options['woocommerce']['cart']['totals-right']); ?> />
							<div class="slider round"></div>
						</label>
					</div>
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Hide shipping in cart','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[woocommerce][cart][hide-shipping]" value="0" />
							<input type="checkbox" name="wpbs_settings[woocommerce][cart][hide-shipping]" value="1" <?php checked(1, $options['woocommerce']['cart']['hide-shipping']); ?> />
							<div class="slider round"></div>
						</label>
					</div>
				</div>
				
			</fieldset>
		</div>
		
		
		<!-- @ Checkout -->
		

		<div class="tab-pane fade" id="woocommerceCheckout">
		
			<fieldset class="form-horizontal">
			
				<legend><?php _e('Checkout settings','wpbs'); ?></legend>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Billing and shipping information','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">											
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][left][col]" value="<?php echo $options['woocommerce']['checkout']['left']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][left][col-md]" value="<?php echo $options['woocommerce']['checkout']['left']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][left][col-lg]" value="<?php echo $options['woocommerce']['checkout']['left']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][left][col-xl]" value="<?php echo $options['woocommerce']['checkout']['left']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Summary and payment','wpbs'); ?></label>
					</div>
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>
										<div class="input-group" title="<?php _e('Mobile','wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][right][col]" value="<?php echo $options['woocommerce']['checkout']['right']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Tablet','wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][right][col-md]" value="<?php echo $options['woocommerce']['checkout']['right']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Laptop','wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][right][col-lg]" value="<?php echo $options['woocommerce']['checkout']['right']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>
										<div class="input-group" title="<?php _e('Desktop','wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[woocommerce][checkout][right][col-xl]" value="<?php echo $options['woocommerce']['checkout']['right']['col-xl']; ?>" class="form-control"/>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</fieldset>
		</div>

</div>