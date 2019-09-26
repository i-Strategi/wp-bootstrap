	<ul id="layoutTabs" class="nav nav-tabs mb-4" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#layoutGeneral" role="tab" aria-controls="general" aria-selected="true">General</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#layoutNavbar" role="tab" aria-controls="navbar" aria-selected="false">Navbar</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#layoutIndex" role="tab" aria-controls="index" aria-selected="false">Index</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#layoutPages" role="tab" aria-controls="pages" aria-selected="false">Pages</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#layoutPosts" role="tab" aria-controls="posts" aria-selected="false">Posts</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#layoutFooter" role="tab" aria-controls="footer" aria-selected="false">Footer</a></li>
	</ul>
	
	<div class="tab-content" id="layoutTabsContent">
	
		<!-- @ General Layout -->
		<div class="tab-pane fade show active" id="layoutGeneral">
			
			<fieldset id="layout-page" class="form-horizontal">	
				
				<legend><?php _e('General layout style', 'wpbs'); ?></legend>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Wrapper style', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][wrapper][style]">
							<option value="full" <?php selected('full', $options['layout']['wrapper']['style']); ?> ><?php _e('Full width', 'wpbs'); ?></option>
							<option value="boxed" <?php selected('boxed', $options['layout']['wrapper']['style']); ?> ><?php _e('Boxed', 'wpbs'); ?></option>
						</select>
					</div>
				</div>
			
			</fieldset>
		
		</div>
		
		<!-- @ Navbar -->
		<div class="tab-pane fade" id="layoutNavbar">
		
		<fieldset id="layout-navbar" class="form-horizontal">
				
				<legend><?php _e('Navbar settings', 'wpbs'); ?></legend>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Navbar type', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][type]">
							<option value="navbar" <?php selected('navbar', $options['layout']['navbar']['type']); ?>><?php _e('Bootstrap Navbar', 'wpbs'); ?></option>
							<option value="header" <?php selected('header', $options['layout']['navbar']['type']); ?>><?php _e('Header + Navbar', 'wpbs'); ?></option>
						</select>	
					</div>
				</div>
			
				<div class="form-row form-group">	
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar position', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][position]">
							<option value="" <?php selected('', $options['layout']['navbar']['position']); ?>><?php _e('Default', 'wpbs'); ?></option>
							<option value="fixed-top" <?php selected('fixed-top', $options['layout']['navbar']['position']); ?>><?php _e('Fixed top', 'wpbs'); ?></option>
							<option value="sticky-top" <?php selected('sticky-top', $options['layout']['navbar']['position']); ?>><?php _e('Sticky top', 'wpbs'); ?></option>
						</select>	
					</div>		
				</div>

				<div class="form-row form-group">	
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar expand', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][expand]">
							<option value="" <?php selected('', $options['layout']['navbar']['expand']); ?>><?php _e('Never', 'wpbs'); ?></option>
							<option value="navbar-expand" <?php selected('navbar-expand', $options['layout']['navbar']['expand']); ?>><?php _e('Always', 'wpbs'); ?></option>
							<option value="navbar-expand-md" <?php selected('navbar-expand-md', $options['layout']['navbar']['expand']); ?>><?php _e('Tablet', 'wpbs'); ?></option>
							<option value="navbar-expand-lg" <?php selected('navbar-expand-lg', $options['layout']['navbar']['expand']); ?>><?php _e('Laptop', 'wpbs'); ?></option>
							<option value="navbar-expand-xl" <?php selected('navbar-expand-xl', $options['layout']['navbar']['expand']); ?>><?php _e('Desktop', 'wpbs'); ?></option>
						</select>				
					</div>	
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar style', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][style]">
							<option value="navbar-light" <?php selected('navbar-light', $options['layout']['navbar']['style']); ?>><?php _e('Navbar light', 'wpbs'); ?></option>
							<option value="navbar-dark" <?php selected('navbar-dark', $options['layout']['navbar']['style']); ?>><?php _e('Navbar dark', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar background', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][background]">
							<option value="" <?php selected('', $options['layout']['navbar']['background']); ?>><?php _e('None', 'wpbs'); ?></option>
							<option value="bg-white" <?php selected('bg-white', $options['layout']['navbar']['background']); ?>><?php _e('Background white', 'wpbs'); ?></option>
							<option value="bg-light" <?php selected('bg-light', $options['layout']['navbar']['background']); ?>><?php _e('Background light', 'wpbs'); ?></option>
							<option value="bg-dark" <?php selected('bg-dark', $options['layout']['navbar']['background']); ?>><?php _e('Background dark', 'wpbs'); ?></option>
							<option value="bg-primary" <?php selected('bg-primary', $options['layout']['navbar']['background']); ?>><?php _e('Background primary', 'wpbs'); ?></option>
							<option value="bg-secondary" <?php selected('bg-secondary', $options['layout']['navbar']['background']); ?>><?php _e('Background secondary', 'wpbs'); ?></option>
							<option value="bg-success" <?php selected('bg-success', $options['layout']['navbar']['background']); ?>><?php _e('Background success', 'wpbs'); ?></option>
							<option value="bg-info" <?php selected('bg-info', $options['layout']['navbar']['background']); ?>><?php _e('Background info', 'wpbs'); ?></option>
							<option value="bg-warning" <?php selected('bg-warning', $options['layout']['navbar']['background']); ?>><?php _e('Background warning', 'wpbs'); ?></option>
							<option value="bg-danger" <?php selected('bg-danger', $options['layout']['navbar']['background']); ?>><?php _e('Background danger', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar container', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[layout][navbar][container]" value="0" />
							<input type="checkbox" name="wpbs_settings[layout][navbar][container]" value="1" <?php checked(1, $options['layout']['navbar']['container'], true); ?> />
							<span class="slider round"></span>
						</label>
					</div>
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar margin', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][margin]">
							<option value="mb-0" <?php selected('mb-0', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 0', 'wpbs'); ?></option>
							<option value="mb-1" <?php selected('mb-1', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 1', 'wpbs'); ?></option>
							<option value="mb-2" <?php selected('mb-2', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 2', 'wpbs'); ?></option>
							<option value="mb-3" <?php selected('mb-3', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 3', 'wpbs'); ?></option>
							<option value="mb-4" <?php selected('mb-4', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 4', 'wpbs'); ?></option>
							<option value="mb-5" <?php selected('mb-5', $options['layout']['navbar']['margin']); ?>><?php _e('Margin bottom 5', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
				
				<div class="form-row form-group">
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Mobile navigation', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][mobile-nav]">
							<option value="collapse" <?php selected('collapse', $options['layout']['navbar']['mobile-nav']); ?>><?php _e('Navbar collapse', 'wpbs'); ?></option>
							<option value="offcanvas" <?php selected('offcanvas', $options['layout']['navbar']['mobile-nav']); ?>><?php _e('Offcanvas', 'wpbs'); ?></option>
						</select>			
					</div>
				</div>
				
			</fieldset>
			
			<fieldset id="layout-navbar-components" class="form-horizontal">
				
				<legend><?php _e('Navbar components', 'wpbs'); ?></legend>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar search', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[layout][navbar][search]" value="0" />
							<input type="checkbox" name="wpbs_settings[layout][navbar][search]" value="1" <?php checked(1, $options['layout']['navbar']['search'], true); ?> />
							<span class="slider round"></span>
						</label>
					</div>
				</div>

				<div class="form-row form-group">	
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar buttons style', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][navbar_btn_style]">
							<optgroup label="Solid">
								<option value="btn-light" <?php selected('btn-light', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Light', 'wpbs'); ?></option>
								<option value="btn-dark" <?php selected('btn-dark', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Dark', 'wpbs'); ?></option>
								<option value="btn-primary" <?php selected('btn-primary', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Primary', 'wpbs'); ?></option>
								<option value="btn-secondary" <?php selected('btn-secondary', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Secondary', 'wpbs'); ?></option>
								<option value="btn-success" <?php selected('btn-success', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Success', 'wpbs'); ?></option>
								<option value="btn-info" <?php selected('btn-info', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Info', 'wpbs'); ?></option>
								<option value="btn-warning" <?php selected('btn-warning', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Warning', 'wpbs'); ?></option>
								<option value="btn-danger" <?php selected('btn-danger', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Danger', 'wpbs'); ?></option>
							</optgroup>
							<optgroup label="Outlined">
								<option value="btn-outline-light" <?php selected('btn-outline-light', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Light', 'wpbs'); ?></option>
								<option value="btn-outline-dark" <?php selected('btn-outline-dark', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Dark', 'wpbs'); ?></option>
								<option value="btn-outline-primary" <?php selected('btn-outline-primary', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Primary', 'wpbs'); ?></option>
								<option value="btn-outline-secondary" <?php selected('btn-outline-secondary', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Secondary', 'wpbs'); ?></option>
								<option value="btn-outline-success" <?php selected('btn-outline-success', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Success', 'wpbs'); ?></option>
								<option value="btn-outline-info" <?php selected('btn-outline-info', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Info', 'wpbs'); ?></option>
								<option value="btn-outline-warning" <?php selected('btn-outline-warning', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Warning', 'wpbs'); ?></option>
								<option value="btn-outline-danger" <?php selected('btn-outline-danger', $options['layout']['navbar']['navbar_btn_style']); ?>><?php _e('Danger', 'wpbs'); ?></option>
							</optgroup>
						</select>				
					</div>	
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar toggle icon', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][navbar_toggler_icon]">
							<option value="fa-bars" <?php selected('fa-bars', $options['layout']['navbar']['navbar_toggler_icon']); ?>><?php _e('Bars', 'wpbs'); ?></option>
							<option value="fa-ellipsis-v" <?php selected('fa-ellipsis-v', $options['layout']['navbar']['navbar_toggler_icon']); ?>><?php _e('Ellipsis vertical', 'wpbs'); ?></option>
							<option value="fa-ellipsis-h" <?php selected('fa-ellipsis-h', $options['layout']['navbar']['navbar_toggler_icon']); ?>><?php _e('Ellipsis horizontal', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
			
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Navbar cart icon', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][navbar][navbar_cart_icon]">
							<option value="fa-shopping-cart" <?php selected('fa-shopping-cart', $options['layout']['navbar']['navbar_cart_icon']); ?>><?php _e('Shopping cart', 'wpbs'); ?></option>
							<option value="fa-shopping-bag" <?php selected('fa-shopping-bag', $options['layout']['navbar']['navbar_cart_icon']); ?>><?php _e('Shopping bag', 'wpbs'); ?></option>
							<option value="fa-shopping-basket" <?php selected('fa-shopping-basket', $options['layout']['navbar']['navbar_cart_icon']); ?>><?php _e('Shopping basket', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
				
			</fieldset>
			
		</div>
		
		<!-- @ Index -->
		<div class="tab-pane fade" id="layoutIndex">
		
			<fieldset id="layout-index-template" class="form-horizontal">	
			
				<legend><?php _e('Index settings', 'wpbs'); ?></legend>
				
				<div class="form-row form-group">
				
					<div class="col-sm-4">
						<label class="control-label"><?php _e('Content size', 'wpbs'); ?></label>
					</div>
					
					<div class="col-sm-8">
						<table class="table table-layout-fixed no-thead">
							<tbody>
								<tr>
									<td>							
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][content-size][col]" value="<?php echo $options['layout']['index']['content-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?> (@ MD)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][content-size][col-md]" value="<?php echo $options['layout']['index']['content-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?> (@ LG)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][content-size][col-lg]" value="<?php echo $options['layout']['index']['content-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?> (@ XL)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][content-size][col-xl]" value="<?php echo $options['layout']['index']['content-size']['col-xl']; ?>" class="form-control"/>
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
										<div class="input-group" title="<?php _e('Mobile', 'wpbs'); ?> (@ All)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-mobile-alt"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][sidebar-size][col]" value="<?php echo $options['layout']['index']['sidebar-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?> (@ SM)" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][sidebar-size][col-md]" value="<?php echo $options['layout']['index']['sidebar-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][sidebar-size][col-lg]" value="<?php echo $options['layout']['index']['sidebar-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span>
											</span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][index][sidebar-size][col-xl]" value="<?php echo $options['layout']['index']['sidebar-size']['col-xl']; ?>" class="form-control"/>
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
						<select class="form-control" name="wpbs_settings[layout][index][sidebar-position]">
							<option value="left" <?php selected('left', $options['layout']['index']['sidebar-position']); ?>><?php _e('Left', 'wpbs'); ?></option>
							<option value="right" <?php selected('right', $options['layout']['index']['sidebar-position']); ?>><?php _e('Right', 'wpbs'); ?></option>
						</select>	
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar visibility', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][index][sidebar-visibility]">
							<option value="all" <?php selected('all', $options['layout']['index']['sidebar-visibility']); ?>><?php _e('Mobile', 'wpbs'); ?> (@ All)</option>
							<option value="md" <?php selected('md', $options['layout']['index']['sidebar-visibility']); ?>><?php _e('Tablet', 'wpbs'); ?> (@ MD)</option>
							<option value="lg" <?php selected('lg', $options['layout']['index']['sidebar-visibility']); ?>><?php _e('Laptop', 'wpbs'); ?> (@ LG)</option>
							<option value="xl" <?php selected('xl', $options['layout']['index']['sidebar-visibility']); ?>><?php _e('Desktop', 'wpbs'); ?> (@ XL)</option>
						</select>
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Disable sidebar', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[layout][index][sidebar-disable]" value="0" />
							<input type="checkbox" name="wpbs_settings[layout][index][sidebar-disable]" value="1" <?php checked(1, $options['layout']['index']['sidebar-disable'], true); ?> />
							<span class="slider round"></span>
						</label>		
					</div>			
				</div>
				
			</fieldset>
			
        </div>		
		
		<!-- @ Pages -->
		<div class="tab-pane fade" id="layoutPages">
			
			<fieldset id="layout-page-template" class="form-horizontal">	
			
				<legend><?php _e('Page settings', 'wpbs'); ?></legend>
				
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
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][content-size][col]" value="<?php echo $options['layout']['page']['content-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][content-size][col-md]" value="<?php echo $options['layout']['page']['content-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][content-size][col-lg]" value="<?php echo $options['layout']['page']['content-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][content-size][col-xl]" value="<?php echo $options['layout']['page']['content-size']['col-xl']; ?>" class="form-control"/>
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
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][sidebar-size][col]" value="<?php echo $options['layout']['page']['sidebar-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][sidebar-size][col-md]" value="<?php echo $options['layout']['page']['sidebar-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][sidebar-size][col-lg]" value="<?php echo $options['layout']['page']['sidebar-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][page][sidebar-size][col-xl]" value="<?php echo $options['layout']['page']['sidebar-size']['col-xl']; ?>" class="form-control"/>
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
						<select class="form-control" name="wpbs_settings[layout][page][sidebar-position]">
							<option value="left" <?php selected('left', $options['layout']['page']['sidebar-position']); ?>><?php _e('Left', 'wpbs'); ?></option>
							<option value="right" <?php selected('right', $options['layout']['page']['sidebar-position']); ?>><?php _e('Right', 'wpbs'); ?></option>
						</select>		
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar visibility', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][page][sidebar-visibility]">
							<option value="all" <?php selected('all', $options['layout']['page']['sidebar-visibility']); ?>><?php _e('Mobile', 'wpbs'); ?> (@ All)</option>
							<option value="md" <?php selected('md', $options['layout']['page']['sidebar-visibility']); ?>><?php _e('Tablet', 'wpbs'); ?> (@ MD)</option>
							<option value="lg" <?php selected('lg', $options['layout']['page']['sidebar-visibility']); ?>><?php _e('Laptop', 'wpbs'); ?> (@ LG)</option>
							<option value="xl" <?php selected('xl', $options['layout']['page']['sidebar-visibility']); ?>><?php _e('Desktop', 'wpbs'); ?> (@ XL)</option>
						</select>
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Default page template', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][page][default-template]">
							<option value="with-sidebar" <?php selected('with-sidebar', $options['layout']['page']['default-template']); ?>><?php _e('With sidebar', 'wpbs'); ?></option>
							<option value="full-width" <?php selected('full-width', $options['layout']['page']['default-template']); ?>><?php _e('Full width', 'wpbs'); ?></option>
							<option value="no-sidebar" <?php selected('no-sidebar', $options['layout']['page']['default-template']); ?>><?php _e('Without sidebar', 'wpbs'); ?></option>
						</select>			
					</div>			
				</div>
				
			</fieldset>
		
		</div>
		
		<!-- @ Posts -->
		<div class="tab-pane fade" id="layoutPosts">
			<fieldset id="layout-post-template" class="form-horizontal">	
			
				<legend><?php _e('Post settings', 'wpbs'); ?></legend>
				
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
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][content-size][col]" value="<?php echo $options['layout']['post']['content-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][content-size][col-md]" value="<?php echo $options['layout']['post']['content-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][content-size][col-lg]" value="<?php echo $options['layout']['post']['content-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][content-size][col-xl]" value="<?php echo $options['layout']['post']['content-size']['col-xl']; ?>" class="form-control"/>
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
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][sidebar-size][col]" value="<?php echo $options['layout']['post']['sidebar-size']['col']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Tablet', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-tablet-alt"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][sidebar-size][col-md]" value="<?php echo $options['layout']['post']['sidebar-size']['col-md']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Laptop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-laptop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][sidebar-size][col-lg]" value="<?php echo $options['layout']['post']['sidebar-size']['col-lg']; ?>" class="form-control"/>
										</div>
									</td>
									<td>							
										<div class="input-group" title="<?php _e('Desktop', 'wpbs'); ?>" data-toggle="tooltip" data-placement="top">
											<span class="input-group-prepend"><span class="input-group-text"><i class="fas fa-fw fa-desktop"></i></span></span>
											<input type="number" min="1" max="12" name="wpbs_settings[layout][post][sidebar-size][col-xl]" value="<?php echo $options['layout']['post']['sidebar-size']['col-xl']; ?>" class="form-control"/>
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
						<select class="form-control" name="wpbs_settings[layout][post][sidebar-position]">
							<option value="left" <?php selected('left', $options['layout']['post']['sidebar-position']); ?>><?php _e('Left', 'wpbs'); ?></option>
							<option value="right" <?php selected('right', $options['layout']['post']['sidebar-position']); ?>><?php _e('Right', 'wpbs'); ?></option>
						</select>	
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Sidebar visibility', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][post][sidebar-visibility]">
							<option value="all" <?php selected('all', $options['layout']['post']['sidebar-visibility']); ?>><?php _e('Mobile', 'wpbs'); ?> (@ All)</option>
							<option value="md" <?php selected('md', $options['layout']['post']['sidebar-visibility']); ?>><?php _e('Tablet', 'wpbs'); ?> (@ MD)</option>
							<option value="lg" <?php selected('lg', $options['layout']['post']['sidebar-visibility']); ?>><?php _e('Laptop', 'wpbs'); ?> (@ LG)</option>
							<option value="xl" <?php selected('xl', $options['layout']['post']['sidebar-visibility']); ?>><?php _e('Desktop', 'wpbs'); ?> (@ XL)</option>
						</select>
					</div>			
				</div>
				
				<div class="form-row form-group">		
					<div class="col-sm-4">				
						<label class="control-label"><?php _e('Disable sidebar', 'wpbs'); ?></label>
					</div>
					<div class="col-sm-8 col-lg-4">
						<label class="switch">
							<input type="hidden" name="wpbs_settings[layout][post][sidebar-disable]" value="0" />
							<input type="checkbox" name="wpbs_settings[layout][post][sidebar-disable]" value="1" <?php checked(1, $options['layout']['post']['sidebar-disable'], true); ?> />
							<span class="slider round"></span>
						</label>		
					</div>			
				</div>
				
			</fieldset>
		</div>
        
		<!-- @ Footer -->
		<div class="tab-pane fade" id="layoutFooter">


            <!-- @ Widget settings -->
            <fieldset id="widget-settings" class="form-horizontal">
            
                <legend><?php _e('Footer Settings','wpbs'); ?></legend>
                
                <div class="form-row form-group">
                    <div class="col-sm-4">
                        <label class="control-label"><?php _e('Footer background','wpbs'); ?></label>
                    </div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][footer][background]">
							<option value="bg-white" <?php selected('bg-white', $options['layout']['footer']['background']); ?>><?php _e('Background white', 'wpbs'); ?></option>
							<option value="bg-light" <?php selected('bg-light', $options['layout']['footer']['background']); ?>><?php _e('Background light', 'wpbs'); ?></option>
							<option value="bg-dark" <?php selected('bg-dark', $options['layout']['footer']['background']); ?>><?php _e('Background dark', 'wpbs'); ?></option>
							<option value="bg-primary" <?php selected('bg-primary', $options['layout']['footer']['background']); ?>><?php _e('Background primary', 'primary'); ?></option>
							<option value="bg-secondary" <?php selected('bg-secondary', $options['layout']['footer']['background']); ?>><?php _e('Background secondary', 'wpbs'); ?></option>
							<option value="bg-success" <?php selected('bg-success', $options['layout']['footer']['background']); ?>><?php _e('Background success', 'wpbs'); ?></option>
							<option value="bg-info" <?php selected('bg-info', $options['layout']['footer']['background']); ?>><?php _e('Background info', 'wpbs'); ?></option>
							<option value="bg-warning" <?php selected('bg-warning', $options['layout']['footer']['background']); ?>><?php _e('Background warning', 'wpbs'); ?></option>
							<option value="bg-danger" <?php selected('bg-danger', $options['layout']['footer']['background']); ?>><?php _e('Background danger', 'wpbs'); ?></option>
						</select>
                    </div>
                </div>
                
                <div class="form-row form-group">
                    <div class="col-sm-4">
                        <label class="control-label"><?php _e('Footer text color','wpbs'); ?></label>
                    </div>
					<div class="col-sm-8 col-lg-4">
						<select class="form-control" name="wpbs_settings[layout][footer][text]">
							<option value="text-white" <?php selected('text-white', $options['layout']['footer']['text']); ?>><?php _e('Text white', 'wpbs'); ?></option>
							<option value="text-light" <?php selected('text-light', $options['layout']['footer']['text']); ?>><?php _e('Text light', 'wpbs'); ?></option>
							<option value="text-dark" <?php selected('text-dark', $options['layout']['footer']['text']); ?>><?php _e('Text dark', 'wpbs'); ?></option>
							<option value="text-primary" <?php selected('text-primary', $options['layout']['footer']['text']); ?>><?php _e('Text primary', 'primary'); ?></option>
							<option value="text-secondary" <?php selected('text-secondary', $options['layout']['footer']['text']); ?>><?php _e('Text secondary', 'wpbs'); ?></option>
							<option value="text-success" <?php selected('text-success', $options['layout']['footer']['text']); ?>><?php _e('Text success', 'wpbs'); ?></option>
							<option value="text-info" <?php selected('text-info', $options['layout']['footer']['text']); ?>><?php _e('Text info', 'wpbs'); ?></option>
							<option value="text-warning" <?php selected('text-warning', $options['layout']['footer']['text']); ?>><?php _e('Text warning', 'wpbs'); ?></option>
							<option value="text-danger" <?php selected('text-danger', $options['layout']['footer']['text']); ?>><?php _e('Text danger', 'wpbs'); ?></option>
						</select>
                    </div>
                </div>

            </fieldset>

            <fieldset id="widget-settings" class="form-horizontal">
            
                <legend><?php _e('Footer widgets','wpbs'); ?></legend>
                
                <div class="form-row form-group">
                    <div class="col-sm-4">
                        <label class="control-label"><?php _e('Footer widgets','wpbs'); ?></label>
                    </div>
                    <div class="col-sm-8">
                        <table class="repeatable-wrap table table-layout-fixed">
                            <thead>
                                <tr>
                                    <th><?php _e('Name','wpbs'); ?></th>
                                    <th width="90">@ All</th>
                                    <th width="90">@ MD</th>
                                    <th width="90">@ LG</th>
                                    <th width="90">@ XL</th>
                                    <th width="110"><?php _e('Remove','wpbs'); ?></th>
                                </tr>
                            </thead>
                            <tbody class="repeatable-fields-list">
                            <?php 
                        
                            if ( !empty( $options['layout']['footer']['widgets'] ) ) 
                            {
                                foreach( $options['layout']['footer']['widgets'] as $option => $key ) 
                                {  
                                ?>
                                    <tr class="repeatable-item">
                                        <td><input type="text" data-id="<?php echo $option;?>" class="form-control unique" name="wpbs_settings[layout][footer][widgets][<?php echo $option; ?>][name]" value="<?php echo $options['layout']['footer']['widgets'][$option]['name']; ?>" /></td>
                                        <td><input type="number" min="1" max="12" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[layout][footer][widgets][<?php echo $option; ?>][col]" value="<?php echo $options['layout']['footer']['widgets'][$option]['col'] ;?>" /></td>
                                        <td><input type="number" min="1" max="12" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[layout][footer][widgets][<?php echo $option; ?>][col-md]" value="<?php echo $options['layout']['footer']['widgets'][$option]['col-md'] ;?>" /></td>
                                        <td><input type="number" min="1" max="12" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[layout][footer][widgets][<?php echo $option; ?>][col-lg]" value="<?php echo $options['layout']['footer']['widgets'][$option]['col-lg']; ?>" /></td>
                                        <td><input type="number" min="1" max="12" data-id="<?php echo $option;?>" class="form-control" name="wpbs_settings[layout][footer][widgets][<?php echo $option; ?>][col-xl]" value="<?php echo $options['layout']['footer']['widgets'][$option]['col-xl']; ?>" /></td>
                                        <td><a class="repeatable-field-remove btn btn-danger text-nowrap" href="#"><i class="fas fa-times"></i> <?php _e('Remove','wpbs'); ?></a></td>
                                    </tr>
                                <?php
                                }
                            } 
                            else 
                            {
                                echo '<tr class="repeatable-item">' .
                                    '<td><input type="text" data-id="0" class="form-control" name="wpbs_settings[layout][footer][widgets][0][name]" value=""  /></td>' .
                                    '<td><input type="number" min="1" max="12" data-id="0" class="form-control" name="wpbs_settings[layout][footer][widgets][0][col]" value=""  /></td>' .
                                    '<td><input type="number" min="1" max="12" data-id="0" class="form-control" name="wpbs_settings[layout][footer][widgets][0][col-md]" value=""  /></td>' .
                                    '<td><input type="number" min="1" max="12" data-id="0" class="form-control" name="wpbs_settings[layout][footer][widgets][0][col-lg]" value=""  /></td>' .
                                    '<td><input type="number" min="1" max="12" data-id="0" class="form-control" name="wpbs_settings[layout][footer][widgets][0][col-xl]" value=""  /></td>' .
                                    '<td><a class="repeatable-field-remove btn btn-danger text-nowrap" href="#"><i class="fas fa-times"></i> '. __('Remove','wpbs') .'</a></td>' .
                                '</tr>';
                            }
                            
                            ?>
                            </tbody>
                        </table>
                        <a class="repeatable-field-add btn btn-primary" href="#"><i class="fa fa-plus"></i> <?php _e('Add new','wpbs');?></a>
                    </div>
                </div>
                
            </fieldset>
        </div>
		
	</div>