<?php

    // Redirect to settings page on install	
	function wpbs_theme_activation () {
        wp_redirect(admin_url("options-general.php?page=wpbs_settings#initial"));
	}
	add_action('after_switch_theme', 'wpbs_theme_activation');
    
    // Add menu page
    function wpbs_sampleoptions_add_page()
    {
        add_options_page('WP Bootstrap 4', 'WP Bootstrap 4', 'manage_options', 'wpbs_settings', 'wpbs_options_do_page');
    }
    add_action('admin_menu', 'wpbs_sampleoptions_add_page');

    
    /**
     * Scripts and styles
     */
    
    function wpbs_theme_options_init()
    {  
		// If theme-options page.
		if (is_admin() && isset($_GET['page']) && $_GET['page'] == 'wpbs_settings') {
			
			// Remove default Wordpress admin styles
			wp_deregister_style('wp-admin');
			
			// Load jQuery-form for AJAX submit
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-form');

			// Enqueue the media uploader scripts.
			wp_enqueue_media();

			// We need more icons for administration than Bootstrap offers - so we use FontAwesome.
			wp_enqueue_style('fontawesome-settings', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');

			// Bootstrap for the theme options.
			wp_enqueue_style('wpbs-bootstrap-settings', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
			wp_enqueue_script('wpbs-popper-settings', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
			wp_enqueue_script('wpbs-bootstrap-settings', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');
			
			// Bootstrap Colorpicker
			wp_enqueue_style('wpbs-bootstrap-colorpicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.0.0-beta.3/css/bootstrap-colorpicker.min.css');
			wp_enqueue_script('wpbs-bootstrap-colorpicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.0.0-beta.3/js/bootstrap-colorpicker.min.js');

			// Custom scripts
			wp_enqueue_style('wpbs-settings', get_template_directory_uri() . '/includes/theme-options/assets/css/theme-options.css');
			wp_enqueue_script('wpbs-settings', get_template_directory_uri() . '/includes/theme-options/assets/js/theme-options.js');
		};

		
    	// Init theme options to white list our options
		register_setting('wpbs_theme_options', 'wpbs_settings', 'wpbs_settings_validate');
		
    }
    add_action('admin_init', 'wpbs_theme_options_init', 999);

    

    // The option page markup
    function wpbs_options_do_page()
    {
        ?>
		
	<script type="text/javascript">
		if (localStorage.getItem("theme_settings_sidebar") == "closed") {
			document.body.classList.add("sidebar-closed");
		}
	</script>

	<div id="mainContainer" class="wpbs">
		
		<form method="post" action="options.php" id="themeOptionsForm">
			<?php

			settings_fields('wpbs_theme_options');
			$options = get_option('wpbs_settings');
			$hello = "hello"; ?>
			
			<header id="navbar" class="navbar bg-light navbar-light fixed-top pl-0 pr-0 pt-3 pb-3">
				<div class="col-4 text-left">
					<button id="toggleSidebar" class="btn btn-light" type="button"><i class="fas fa-bars"></i></button>
				</div>
				<div class="col-4 text-center">
					<div class="navbar-brand ml-auto mr-auto">
						<?php _e('WordPress Bootstrap 4', 'wpbs'); ?>
						<small class="badge badge-pill badge-primary d-none"><?php echo wp_get_theme()->get('Version'); ?></small>
					</div>
				</div>
				<div class="col-4 text-right">
					<a class="btn btn-transparent mr-3" href="<?php echo get_admin_url(); ?>"><?php _e('Return to dashboard', 'wpbs'); ?></a>
					<button type="submit" class="btn btn-outline-success" id="submit"><span class="fas fa-save"></span> <span class="d-none d-xl-inline-block"><?php _e('Save settings', 'wpbs'); ?></span></button>
				</div>
			</header>
				
			<aside id="sidebar">
				<ul class="nav flex-column" role="tablist">
				
					<li class="nav-item" role="presentation">
						<a href="#profileTab" aria-controls="profileTab" role="tab" data-toggle="tab" class="nav-link active"><span class="fas fa-user fa-fw"></span> <?php _e('Profile', 'wpbs'); ?></a>
					</li>
				
					<li class="nav-item" role="presentation">
						<a href="#layoutTab" aria-controls="layoutTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-columns fa-fw"></span> <?php _e('Layout', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#bootstrapTab" aria-controls="bootstrapTab" role="tab" data-toggle="tab" class="nav-link"><span class="fab fa-twitter fa-fw"></span> <?php _e('Bootstrap settings', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#woocommerceTab" aria-controls="woocommerceTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-shopping-cart fa-fw"></span> <?php _e('WooCommerce', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#pwaTab" aria-controls="pwaTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-mobile-alt fa-fw"></span> <?php _e('Web Application', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#integrationsTab" aria-controls="extensionsTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-plug fa-fw"></span> <?php _e('Integrations', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#extensionsTab" aria-controls="extensionsTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-puzzle-piece fa-fw"></span> <?php _e('Extensions', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#scriptsTab" aria-controls="scriptsTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-code fa-fw"></span> <?php _e('Scripts', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#settingsTab" aria-controls="settingsTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-cogs fa-fw"></span> <?php _e('Settings', 'wpbs'); ?></a>
					</li>
					
					<li class="nav-item" role="presentation">
						<a href="#migrationTab" aria-controls="migrationTab" role="tab" data-toggle="tab" class="nav-link"><span class="fas fa-exchange-alt fa-fw"></span> <?php _e('Migration', 'wpbs'); ?></a>
					</li>
					
				</ul>
			</aside>
	
			<main id="main">
				
				<div class="tab-content">
				
					<div role="tabpanel" class="tab-pane fade show active" id="profileTab">
						<header class="tab-header">
							<h1><?php _e('Profile', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/profile.php'); ?>
						</div>
					</div>
				
					<div role="tabpanel" class="tab-pane fade" id="layoutTab">
						<header class="tab-header">
							<h1><?php _e('Layout', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/layout.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="bootstrapTab">
						<header class="tab-header">
							 <h1><?php _e('Bootstrap settings', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/bootstrap.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="woocommerceTab">
						<header class="tab-header">
							 <h1><?php _e('WooCommerce', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/woocommerce.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="pwaTab">
						<header class="tab-header">
							 <h1><?php _e('Web Application', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/webapplication.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="integrationsTab">
						<header class="tab-header">
							 <h1><?php _e('Integrations', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/integrations.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="extensionsTab">
						<header class="tab-header">
							 <h1><?php _e('Extensions', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/extensions.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="scriptsTab">
						<header class="tab-header">
							 <h1><?php _e('Scripts', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/scripts.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="settingsTab">
						<header class="tab-header">
							 <h1><?php _e('Settings', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/settings.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="migrationTab">
						<header class="tab-header">
							 <h1><?php _e('Migration', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/migration.php'); ?>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="documentationTab">
						<header class="tab-header">
							 <h1><?php _e('Documentation', 'wpbs'); ?></h1>
						</header>
						<div class="col-12 col-lg-6 ml-auto mr-auto">
							<?php include('tabs/documentation.php'); ?>
						</div>
					</div>
						
				</div><!-- / TAB CONTENT -->
			</main>
			
			<div id="statusMessage"></div>
			
		</form>
	</div>
	
	
	
	
	<!-- INLINE JAVASCRIPT -->
	<script type="text/javascript">
	
		jQuery(document).ready(function($) {

			jQuery('#toggleSidebar').on('click', function () {
				if (localStorage.getItem("theme_settings_sidebar") === null || localStorage.getItem("theme_settings_sidebar") == "open") {
					localStorage.setItem("theme_settings_sidebar", "closed");
					console.log(localStorage.getItem("theme_settings_sidebar"));
					jQuery('body').toggleClass('sidebar-closed');
				} else {
					localStorage.setItem("theme_settings_sidebar", "open");
					console.log(localStorage.getItem("theme_settings_sidebar"));
					jQuery('body').toggleClass('sidebar-closed');
				}
			})

			// Ajax form submit
			jQuery('#themeOptionsForm').submit(function() { 
				jQuery(this).ajaxSubmit({
					success: function(){					
						jQuery('#statusMessage').prepend('<div class="toast fade show" role="alert">'+
						'<div class="toast-header">'+
							'<strong class="mr-auto">Wordpress Bootstrap 4</strong>'+
							'<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">'+
							'<span aria-hidden="true">&times;</span>'+
							'</button>'+
						'</div>'+
						'<div class="toast-body text-success">'+
							'<?php _e('Whoo! Settings was saved', 'wpbs'); ?>'+
						'</div>'+
						'</div>').show();

						// Init the Toast function
						$('.toast').toast();
					}, 
					fail: function(){					
						jQuery('#statusMessage').prepend('<div class="toast fade show" role="alert">'+
						'<div class="toast-header">'+
							'<strong class="mr-auto">Wordpress Bootstrap 4</strong>'+
							'<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">'+
							'<span aria-hidden="true">&times;</span>'+
							'</button>'+
						'</div>'+
						'<div class="toast-body text-danger">'+
							'<?php _e('Whoo! Settings was saved', 'wpbs'); ?>'+
						'</div>'+
						'</div>').show();
						
						// Init the Toast function
						$('.toast').toast();
					}, 
					timeout: 8000
				}); 
				setTimeout("jQuery('#statusMessage .toast').toast('hide');", 8000);
				return false; 
			});
			
			$('.toast').toast();
			
			// Activate Bootstrap Tooltip
			jQuery(function () {
			  jQuery('[data-toggle="tooltip"]').tooltip()
			});
			
			// Wordpress Colorpicker
			jQuery('.color-picker').colorpicker({
				format: "hex"
			});

			// Color Picker reset
			jQuery('.colorpicker-reset').each(function () {
				jQuery(this).on('click',function () {
					jQuery(this).siblings('.colorpicker-element').val('');
				});
			});
			
			//The themeOptions function..
			$.fn.themeOptions = function(options) {

				jQuery('.uploader').each(function () {
					
					var thisUploader = this;
					
					// Default settings.
					var settings = $.extend({
						txtChooseImage: "<?php _e('Choose image', 'wpbs'); ?>",
						txtNoLogo: "<?php _e('No logo uploaded', 'wpbs'); ?>"
					}, options);


					/*
					 * Media Upload Handler
					 */
					
					var mediaUploader;
					var uploadButton = jQuery(this).find('.media_upload_btn');
					var resetButton = jQuery(this).find('.media_reset_btn');

					/* 
					 * Events for Upload button
					 */
					
					uploadButton.click(function(e) {
						
						e.preventDefault();
						// If the uploader object has already been created, reopen the dialog
						if (mediaUploader) {
							mediaUploader.open();
							return;
						}
						// Extend the wp.media object
						mediaUploader = wp.media.frames.file_frame = wp.media({
							title: settings.txtChooseImage,
							button: {
								text: settings.txtChooseImage
							},
							multiple: false
						});

						// When a file is selected, grab the URL and set it as the text field's value
						mediaUploader.on('select', function() {
							
							attachment = mediaUploader.state().get('selection').first().toJSON();
							$(thisUploader).find('input').val(attachment.url),
							uploadButton.addClass('d-none'),
							resetButton.removeClass('d-none');
							
						});
						
						// Open the uploader dialog
						mediaUploader.open();
					});

					/* 
					 * Events for Reset button
					 */
					resetButton.on("click", function() {
						
						$(thisUploader).find('.media-value').removeAttr('value'),
						$(thisUploader).find('.media-left img').remove();
						uploadButton.removeClass('d-none');
						resetButton.addClass('d-none');
						
					});
					
				});
			};
			
			/*
			 * Set theme options 
			 */
			
			jQuery('body').themeOptions({
				txtNoLogo: '<?php _e('No logo uploaded', 'wpbs'); ?>',
				txtPath: '<?php _e('Path', 'wpbs'); ?>',
				txtChooseImage: '<?php _e('Choose image', 'wpbs'); ?>'
			});	

		});	
		
	</script>

	<?php
    } // End "wpbs_options_do_page".
	?>