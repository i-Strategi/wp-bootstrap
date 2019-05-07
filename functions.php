<?php

/**
 *  Includes
 */

// Variables and helper functions
require_once ('includes/variables.php');

// Filters and functions
require_once ('includes/filters.php');

// Template Parts
require_once ('template-parts.php');

// Nav Walkers
require_once ('includes/nav-walkers.php');

// WooCommerce functions
if ( class_exists( 'WooCommerce' ) ) {
    require_once ('includes/woocommerce.php');
}

// Integrations
require_once ('includes/integrations.php');

// PWA (Progressive Web Application) 
require_once ('includes/pwa.php');

// Shortcodes
require_once ('includes/shortcodes.php');

// Theme options
require_once ('includes/theme-options/theme-options.php');

// Theme updater
require ('includes/theme-updater/plugin-update-checker.php');
$updateChecker = Puc_v4_Factory::buildUpdateChecker('https://github.com/i-Strategi/wp-bootstrap/', __FILE__, 'wp-bootstrap');



/**
 *  General theme settings
 */

// Title tag
function wpbs_title_tag($title, $sep)
{
    global $paged, $page;
    
    if (is_feed()) {
        return $title;
    }
    
    // Add the site name.
    $title .= get_bloginfo('name');
    
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    
    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'wpbs'), max($paged, $page));
    }
    
    return $title;
}
add_filter('wp_title', 'wpbs_title_tag', 10, 2);

// Define theme support
function wpbs_theme_support()
{
    add_theme_support('custom-background'); 		// wp custom background
    add_theme_support('automatic-feed-links'); 		// rss
    add_theme_support('menus'); 					// wp menus
    register_nav_menus( 							// wp3+ menus
        array(
        'primary_nav' => 'Primary navigation', 		// main nav in header
        'secondary_nav' => 'Secondary navigation'	// secondary nav in footer
    ));
}
add_action('after_setup_theme', 'wpbs_theme_support');


// Clean up head
function wpbs_head_cleanup()
{
    remove_action('wp_head', 'feed_links_extra', 3); 					// Category Feeds
    remove_action('wp_head', 'feed_links', 2); 							// Post and Comment Feeds
    remove_action('wp_head', 'rsd_link'); 								// EditURI link
    remove_action('wp_head', 'wlwmanifest_link'); 						// Windows Live Writer
    remove_action('wp_head', 'index_rel_link'); 						// index link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); 			// previous link
    remove_action('wp_head', 'start_post_rel_link', 10, 0); 			// start link
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Links for Adjacent Posts
    remove_action('wp_head', 'wp_generator'); 							// WP version for security reasons
    remove_action('wp_head', 'print_emoji_detection_script', 7);		// Remove Emoji's
    remove_action('wp_print_styles', 'print_emoji_styles');				// Remove Emoji's
}
add_action('init', 'wpbs_head_cleanup');

// Remove WP version from RSS - no need to let scrappers and hackers know what version you use..
function wpbs_rss_version()
{
    return false;
}
add_filter('the_generator', 'wpbs_rss_version');

// Set content width
if (!isset($content_width)) {
    $content_width = 1140;
};

// Enable shortcodes in Widgets
add_filter('widget_text', 'do_shortcode');
 

// Credits in backend
function wpbs_backend_footer_credits()
{
    echo '<span id="footer-thankyou">' . __('Developed by', 'wpbs') . '&nbsp;<a href="https://i-strategi.dk" target="_blank">' . __('i-Strategi - Online marketing and webdevelopment', 'wpbs') . '</a></span>';
}
add_filter('admin_footer_text', 'wpbs_backend_footer_credits');


/**
 *  Navigation
 */

// Primary navigation
if (!function_exists("wpbs_primary_nav")) {
    function wpbs_primary_nav()
    {
        wp_nav_menu(array(
            'menu' => 'primary_nav',								// menu name
            'menu_class' => 'nav navbar-nav primary',				// menu class
            'theme_location' => 'primary_nav',						// where in the theme it's assigned
            'container' => 'false',									// container class
            'fallback_cb' => '__return_false',	                    // menu fallback
            'walker' => new Bootstrap_navbar_nav_walker()			// menu walker
        ));
    }
}

// Secondary navigation
if (!function_exists("wpbs_secondary_nav")) {
    function wpbs_secondary_nav()
    {
        wp_nav_menu(array(
            'menu' => 'secondary_nav',								// menu name
            'menu_class' => 'nav navbar-nav secondary',				// menu class
            'theme_location' => 'secondary_nav',					// where in the theme it's assigned
            'container' => 'false',									// container class
            'fallback_cb' => '__return_false',                   	// menu fallback
            'walker' => new Bootstrap_navbar_nav_walker()			// menu walker
        ));
    }
}

// Add walker to menu widgets
function wpbs_nav_walker ($args)
{
    return array_merge($args, array(
        'menu_class' => 'nav',
        'walker' => new Bootstrap_walker(),
        // another setting go here ...
    ));
}
// add_filter( 'wp_nav_menu_args', 'wpbs_nav_walker' );


/**
 * Widget areas
 */
 
// Widget areas
function wpbs_register_widget_areas()
{
    register_sidebar(array(
        'id' => 'sidebar_page',
        'name' => __('Sidebar - Page', 'wpbs'),
        'description' => __('Active on pages that uses the sidebar template', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    
    register_sidebar(array(
        'id' => 'sidebar_post',
        'name' => __('Sidebar - Post', 'wpbs'),
        'description' => __('Active on posts if it uses the sidebar template', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    
    register_sidebar(array(
        'id' => 'sidebar_index',
        'name' => __('Sidebar - Index', 'wpbs'),
        'description' => __('Active on index if it uses the sidebar template', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    
    register_sidebar(array(
        'id' => 'offcanvas_menu',
        'name' => __('Offcanvas menu', 'wpbs'),
        'description' => __('Content in the offcanvas menu (Must be enabled from theme settings page)', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wpbs_register_widget_areas', 0);
 

// Custom footer widget areas
function wpbs_register_custom_widget_areas()
{
    $widgets = WPBS['layout']['footer']['widgets'];

    if (!empty($widgets)) {
        foreach ($widgets as $widget) {
            if (!empty($widget['name'])) {
                register_sidebar(array(
                    'id' => sanitize_title($widget['name']),
                    'name' => __($widget['name'], 'wpbs'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h4 class="widgettitle">',
                    'after_title' => '</h4>'
                ));
            }
        }
    }
}
add_action('widgets_init', 'wpbs_register_custom_widget_areas', 10);


/**
 *  Media
 */
 
// Add custom image sizes from theme
if (!empty(WPBS['settings']['image_sizes'])) {
    foreach (WPBS['settings']['image_sizes'] as $image) {
        if (!empty($image['crop'])) {
            $crop = true;
        } else {
            $crop = false;
        };        
        add_image_size(sanitize_title($image['name']), $image['width'], $image['height'], $crop);
    }
}

// Add image sizes to image size selector in WP media modal
function wpbs_post_image_sizes($sizes)
{
    $custom_sizes = array();
    
    if (!empty(WPBS['settings']['image_sizes'])) {
        foreach (WPBS['settings']['image_sizes'] as $image) {
            if (!empty($image['name'])) {
                $name = $image['name'];
                $id = sanitize_title($name);
                $custom_sizes[$id] = $name;
            }
        }
    }
    
    return array_merge($sizes, $custom_sizes);
}
add_filter('image_size_names_choose', 'wpbs_post_image_sizes', 11);


// Wrap embedded media in Media Responsive
function wpbs_embed_responsive($html)
{
    if (preg_match('/(youtube.com)/', $html)) { // if youtube video
        return str_replace('<iframe', '<div class="embed-responsive embed-responsive-16by9 video-youtube"><iframe class="embed-youtube embed-responsive-item"', $html);
        return str_replace('</iframe>', '</iframe></div>', $html);
    } elseif (preg_match('/(vimeo.com)/', $html)) { // if vimeo video
        return str_replace('<iframe', '<div class="embed-responsive embed-responsive-16by9 video-vimeo"><iframe class="embed-vimeo embed-responsive-item"', $html);
        return str_replace('</iframe>', '</iframe></div>', $html);
    } else {
        return $html;
    }
}
add_filter('embed_oembed_html', 'wpbs_embed_responsive', 99, 4);


/**
 * Browser color
 */
function wpbs_browser_settings() {

    if (!empty(WPBS['profile']['browser_color'])) {
        echo '<meta name="theme-color" content="'.WPBS['profile']['browser_color'].'" />';
        echo '<meta name="msapplication-navbutton-color" content="'.WPBS['profile']['browser_color'].'" />';
        echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />';
    }
    if (!empty(WPBS['profile']['icon'])) {
    
        echo '<link rel="icon" sizes="192x192" href="'.WPBS['profile']['icon'].'" />';
        echo '<link rel="msapplication-square192x192logo" href="'.WPBS['profile']['icon'].'" />';
        echo '<link rel="apple-touch-icon" sizes="192x192" href="'.WPBS['profile']['icon'].'" />';
        echo '<link rel="apple-touch-startup-image" href="'.WPBS['profile']['icon'].'" />';
    }
    
    echo '<meta name="apple-mobile-web-app-capable" content="yes" />';
    echo '<meta name="mobile-web-app-capable" content="yes">';
}
add_action('wp_head', 'wpbs_browser_settings', 1);

/**
 * Head scripts
 */
 
function wpbs_head_scripts()
{
    
    // Bootstrap CSS
    switch (WPBS['bootstrap_css']) {
        case "default":
            wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
            break;
        case "custom":
            wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
            break;
        default:
            wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
    }
    wp_enqueue_style('bootstrap');
    
    // Flexslider CSS
    if (!empty(WPBS['extensions']['flexslider'])) {
        wp_register_style('flexslider', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.min.css', array(), '2.7.1', 'all');
        wp_enqueue_style('flexslider');
    };
    
    // Slick CSS
    if (!empty(WPBS['extensions']['slick'])) {
        wp_register_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css', array(), '1.8.1', 'all');
        wp_enqueue_style('slick');
    };
    
    // Font Awesome CSS
    if (!empty(WPBS['extensions']['fontawesome'])) {
        wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css', array(), '5.7.1', 'all');
        wp_enqueue_style('fontawesome');
    };
    
    // Contact Form 7
    if (class_exists('WPCF7')) {
        // Remove default WPCF7 CSS (new way)
        wp_deregister_style('contact-form-7');

        wp_register_style('wpcf7-bootstrap', get_template_directory_uri() . '/assets/css/contact-form-7.css', array(), '1.0', 'all');
        wp_enqueue_style('wpcf7-bootstrap');
    }
    
    // Master theme CSS
    wp_register_style('wpbs', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('wpbs');


    // Child theme CSS
    if (get_template_directory_uri() != get_stylesheet_directory_uri()) {
        $childtheme = wp_get_theme();
        $childtheme = sanitize_title($childtheme);
        wp_register_style($childtheme, get_stylesheet_directory_uri() . '/style.css', array(), $css_cache_version, 'all');
        wp_enqueue_style($childtheme);
    }
}
add_action('wp_enqueue_scripts', 'wpbs_head_scripts');


/**
 * Footer Scripts
 */

function wpbs_footer_scripts()
{

    // Popper.js (required for Bootstrap 4)
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3');
    wp_enqueue_script('popper');

    // Bootstrap JS
    switch (WPBS['bootstrap_js']) {
        case "default":
            wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '4.3.1');
            break;
        case "custom":
            wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '4.3.1');
            break;
        default:
            wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1');
    }
    wp_enqueue_script('bootstrap');
    
    // Flexslider JS
    if (!empty(WPBS['extensions']['flexslider'])) {
        wp_register_script('flexslider', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider-min.js', array('jquery'), '2.7.1');
        wp_enqueue_script('flexslider');
    }

    // Slick JS
    if (!empty(WPBS['extensions']['slick'])) {
        wp_register_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css', array('jquery'), '1.8.1');
        wp_enqueue_script('slick');
    }
    
    // Contact Form 7
    if (class_exists('WPCF7')) {
        wp_register_script('wpcf7-bootstrap', get_template_directory_uri() . '/assets/js/contact-form-7.js', array('jquery'), '1.2');
        wp_enqueue_script('wpcf7-bootstrap');
    }
    
    // Prefixfree JS
    if (!empty(WPBS['extensions']['prefixfree'])) {
        wp_register_script('prefixfree', 'https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js', array('jquery'), '1.7');
        wp_enqueue_script('prefixfree');
    }
    
    // Master Theme JS
    wp_register_script('wpbs', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0');
    wp_enqueue_script('wpbs');
}
add_action('wp_footer', 'wpbs_footer_scripts');



/**
 *  Custom scripts
 */

// Custom head scripts
function wpbs_custom_head_scripts()
{
    echo get_option('wpbs_settings')['scripts']['head'];
}
add_filter('wp_head', 'wpbs_custom_head_scripts', 99);

// Custom footer scripts
function wpbs_custom_footer_scripts()
{
    echo get_option('wpbs_settings')['scripts']['footer'];
}
add_filter('wp_footer', 'wpbs_custom_footer_scripts', 99);


/**
 *  Force SSL
 */
 
if (!empty(WPBS['settings']['force_ssl'])) {
    function wpbs_force_https()
    {
        if (!is_ssl()) {
            wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
            exit();
        }
    }
    add_action('template_redirect', 'wpbs_force_https', 1);
}


/**
 * Page settings
 */

// Return current page settings
function wpbs_page_settings()
{
    return get_post_meta(get_the_ID(), 'wpbs_page_settings', true);
}


function wpbs_page_settings_metabox()
{
    $screens = ['page', 'wporg_cpt'];
    foreach ($screens as $screen) {
        add_meta_box(
            'wpbs_page_settings', // $id
            __('Page settings', 'wpbs'), // $title
            'wpbs_page_settings_markup', // $callback
            $screen, // $screen
            'side', // $context
            'low' // $priority
        );
    }
}
add_action('add_meta_boxes', 'wpbs_page_settings_metabox');

function wpbs_page_settings_markup()
{
    global $post;
    if (!empty(get_post_meta($post->ID, 'wpbs_page_settings', true))) {
        $meta = get_post_meta($post->ID, 'wpbs_page_settings', true);
    }
    ?>

	<input type="hidden" name="wpbs_page_settings_nonce" value="<?php echo wp_create_nonce(basename(__FILE__)); ?>">

	<p class="wpbs-page-settings">
		<label  for="wpbs_page_settings[hide_title]">
            <input type="checkbox" name="wpbs_page_settings[hide_title]" value="1" <?php if (!empty($meta['hide_title'])){echo 'checked';} ?> />
            <?php _e('Hide page title', 'wpbs'); ?>
        </label>
        <br>
		<label  for="wpbs_page_settings[hide_image]">
            <input type="checkbox" name="wpbs_page_settings[hide_image]" value="1" <?php if (!empty($meta['hide_image'])){echo 'checked';} ?> />
            <?php _e('Hide featured image', 'wpbs'); ?>
        </label>
	</p>
	
    <?php
}
    
function page_settings_save_fields_meta($post_id)
{
    // verify nonce
    if (!wp_verify_nonce($_POST['wpbs_page_settings_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }
    
    $old = get_post_meta($post_id, 'wpbs_page_settings', true);
    $new = $_POST['wpbs_page_settings'];

    // if ( $new && $new !== $old ) {
    if ($new !== $old || $new && $new !== $old) {
        update_post_meta($post_id, 'wpbs_page_settings', $new);
    } elseif ('' === $new && $old) {
        delete_post_meta($post_id, 'wpbs_page_settings', $old);
    }
}
add_action('save_post', 'page_settings_save_fields_meta');



/**
 * Password protected posts
 */

function wpbs_custom_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form class="protected-post-form clearfix" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
	<p>' . __("This post is password protected. To view it please enter your password below:", 'wpbs') . '</p>
	<div class="input-append form-inline">
	    <input name="post_password" placeholder="' . esc_attr__("Password", 'wpbs') . '" id="' . $label . '" type="password" size="20" class="form-control" />
	    <input type="submit" name="Submit" class="btn btn-primary ml-2" value="' . esc_attr__("Submit", 'wpbs') . '" />
	</div>
	</form>
	';
    return $o;
}
add_filter('the_password_form', 'wpbs_custom_password_form');


?>