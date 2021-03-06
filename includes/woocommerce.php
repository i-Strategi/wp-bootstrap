<?php

/**
 *
 * Declare WooCommerce Support
 *
 */

function wpbs_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'wpbs_woocommerce_support');



/**
 *
 * WooCommerce Widgetarea
 *
 */

function wpbs_register_woocommerce_widget_areas()
{
    register_sidebar(array(
        'id' => 'sidebar_shop',
        'name' => __('Sidebar - Shop index', 'wpbs'),
        'description' => __('Active on shop page and categories', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'sidebar_product',
        'name' => __('Sidebar - Product', 'wpbs'),
        'description' => __('Active on product pages', 'wpbs'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'wpbs_register_woocommerce_widget_areas', 5);



/**
 *
 * Scripts & Styles
 *
 */

// Remove Default WooCommerce CSS
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Remove Select 2 from country on checkout
function wpbs_wc_remove_select()
{
    if (class_exists('woocommerce')) {
        wp_dequeue_style('select2');
        wp_deregister_style('select2');

        wp_dequeue_script('select2');
        wp_deregister_script('select2');
    }
}
add_action('wp_enqueue_scripts', 'wpbs_wc_remove_select', 100);

// Add custom WooCommerce CSS
function wpbs_wc_styles()
{
    wp_register_style('woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.css', array(), '1.0', 'all');
    wp_enqueue_style('woocommerce');

    // Add WooCommerce Star font for reviews.
    $font_path   = WC()->plugin_url() . '/assets/fonts/';
    $font_css = '@font-face {
        font-family: "star";
        src: url("' . $font_path . 'star.eot");
        src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
        url("' . $font_path . 'star.woff") format("woff"),
        url("' . $font_path . 'star.ttf") format("truetype"),
        url("' . $font_path . 'star.svg#star") format("svg");
        font-weight: normal;
        font-style: normal;
    }';
    wp_add_inline_style('woocommerce', $font_css);
}
add_action('wp_enqueue_scripts', 'wpbs_wc_styles', 90);

 

/**
 *
 * Navbar / Header
 *
 */


// Navbar cart (mobile)
function wpbs_navbar_cart_mobile()
{
    get_template_part('template-parts/navbar-cart-mobile');
}

// Navbar cart
function wpbs_navbar_cart()
{
    get_template_part('template-parts/navbar-cart');
}

if (setting_navbar_type() == "navbar") {
    add_action('navbar', 'wpbs_navbar_cart_mobile', 30);
    add_action('navbar', 'wpbs_navbar_cart', 90);
} else {
    add_action('header', 'wpbs_navbar_cart_mobile', 30);
    add_action('header', 'wpbs_navbar_cart', 90);
}


/**
 *
 * Products
 *
 */

function wpbs_wc_remove_product_header()
{
    if (is_product()) {
        // Remove post header from products
        remove_action('content_start', 'wpbs_post_title', 50);
    }
}
add_action('wp_head', 'wpbs_wc_remove_product_header', 50);


// Content classes
function wpbs_wc_content_classes($classes)
{
    if (is_shop() || is_product_taxonomy()) {
        $sizes = WPBS['woocommerce']['index'];

        foreach ($sizes['content-size'] as $key => $value) {
            if (!empty($value)) {
                $classes[$key] = $key.'-'.$value;
            }
        }
    }
    if (is_product()) {
        $sizes = WPBS['woocommerce']['product'];

        foreach ($sizes['content-size'] as $key => $value) {
            if (!empty($value)) {
                $classes[$key] = $key.'-'.$value;
            }
        }
    }

    return $classes;
}
add_filter('wpbs_content_class', 'wpbs_wc_content_classes', 10);


// Sidebar classes
function wpbs_wc_sidebar_classes($classes)
{
    if (is_shop() || is_product_taxonomy()) {
        $settings = WPBS['woocommerce']['index'];

        // Sidebar size
        foreach ($settings['sidebar-size'] as $key => $value) {
            $classes[$key] = $key.'-'.$value;
        }
        
        // Sidebar visibility
        switch ($settings['sidebar-visibility']) {
            case "md":
                $classes['sidebar-visibility'] = "d-none d-md-block";
                break;
            case "lg":
                $classes['sidebar-visibility'] = "d-none d-lg-block";
                break;
            case "xl":
                $classes['sidebar-visibility'] = "d-none d-xl-block";
                break;
            default:
                $classes['sidebar-visibility'] = 'd-block';
        }
    }

    // Single sidebar
    if (is_product()) {
        $settings = WPBS['woocommerce']['product'];

        // Sidebar size
        foreach ($settings['sidebar-size'] as $key => $value) {
            $classes[$key] = $key.'-'.$value;
        }
        
        // Sidebar visibility
        switch ($settings['sidebar-visibility']) {
            case "md":
                $classes['sidebar-visibility'] = "d-none d-md-block";
                break;
            case "lg":
                $classes['sidebar-visibility'] = "d-none d-lg-block";
                break;
            case "xl":
                $classes['sidebar-visibility'] = "d-none d-xl-block";
                break;
            default:
                $classes['sidebar-visibility'] = 'd-block';
        }
    }

    return $classes;
}
add_filter('wpbs_sidebar_class', 'wpbs_wc_sidebar_classes', 10);

/**
 *
 * Checkout
 *
 */

// Customize checkout fields
function wpbs_wc_remove_checkout_fields($fields)
{
    // Remove address 2
    unset($fields['billing']['billing_address_2']);
    unset($fields['shipping']['shipping_address_2']);

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'wpbs_wc_remove_checkout_fields', 0);


// Add Bootstrap classes to checkout fields
function wpbs_wc_checkout_form_control($fields)
{
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {

            // Field wrapper class
            $field['class'][] = 'form-group col';

            // Input class
            $field['input_class'][] = 'form-control';
        }
    }
    
    return $fields;
}
add_filter('woocommerce_checkout_fields', 'wpbs_wc_checkout_form_control', 0);


/**
 * Add custom coupon form to checkout
 */

function wpbs_wc_custom_checkout_coupon()
{
    if (wc_coupons_enabled()) {
        get_template_part('woocommerce/checkout/custom-coupon');
    }
}
add_action('woocommerce_review_order_after_order_total', 'wpbs_wc_custom_checkout_coupon');


/**
 *
 * Disable shipping calculation on cart page
 *
 */

if (!empty(WPBS['woocommerce']['cart']['hide-shipping'])) {
    function wpbs_wc_disable_shipping_on_cart($show_shipping)
    {
        if (is_cart()) {
            return false;
        }
        return $show_shipping;
    }
    add_filter('woocommerce_cart_ready_to_calc_shipping', 'wpbs_wc_disable_shipping_on_cart', 99);
    
    function disable_shipping_calc_on_cart( $show_shipping ) {
        if( is_cart() ) {
            return false;
        }
        return $show_shipping;
    }
    add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );    
}


/**
 *
 * Show "Free" text if shipping is free
 *
 */
   
function wpbs_wc_free_shipping_price($label, $method)
{
 
    // if shipping rate is 0, concatenate ": $0.00" to the label
    if (! ($method->cost > 0)) {

        // Returns formatted price 0
        $label .= ': ' . wc_price(0);
    }
    
    // return original or edited shipping label
    return $label;
}
add_filter('woocommerce_cart_shipping_method_full_label', 'wpbs_wc_free_shipping_price', 10, 2);

/**
 *
 * Terms & Conditions modal
 *
 */
function wpbs_wc_terms_modal()
{

    // Somehow if terms page is not set from WooCommerce settings, it will return -1 instead of just being empty.
    if (wc_get_page_id('terms') != "-1") {
        $terms_page_id = wc_get_page_id('terms');
        $post = get_post($terms_page_id);
        $content = $post->post_content;
        
        if (is_checkout()) {
            echo '
            <!-- Modal -->
            <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel">'. __('terms and conditions', 'woocommerce').'</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            '.$content.'
            </div>
            </div>
            </div>
            </div>    
            ';
        }
    }
}
add_action('wp_footer', 'wpbs_wc_terms_modal', 0);

/**
 *
 * Breadcrumbs
 *
 */

function wpbs_wc_breadcrumbs()
{
    return array(
        'delimiter' => '</li><li class="breadcrumb-item">',
        'wrap_before' => '<nav id="breadcrumbs" class="woocommerce-breadcrumb breadcrumb" itemprop="breadcrumb"><li class="breadcrumb-item">',
        'wrap_after' => '</li></nav>',
        'before' => '',
        'after' => '',
        'home' => _x('Home', 'breadcrumb', 'woocommerce'),
    );
}
add_filter('woocommerce_breadcrumb_defaults', 'wpbs_wc_breadcrumbs', 6);
add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/**
 *
 * Pagination
 *
 */
function wpbs_wc_pagination()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => __('«'),
        'next_text' => __('»'),
    ));
    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            $page = str_replace('page-numbers', 'page-numbers page-link', $page);

            $parent_class = "";

            if (strpos($page, 'dots')) {
                $parent_class = ' disabled';
            }

            if (strpos($page, 'current')) {
                $parent_class = ' active';
            }

            //$page = preg_replace("/page-numbers/", "page-numbers page-link", $page);
            echo "<li class='page-item$parent_class'>$page</li>";
        }
        echo '</ul>';
    }
}
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
add_action('woocommerce_after_shop_loop', 'wpbs_wc_pagination', 10);

/**
 *
 *  Navbar-cart AJAX
 *
 */

function wpbs_ajax_navbar_cart($fragments)
{
    global $woocommerce;

    ob_start();

    get_template_part('template-parts/navbar-cart');

    $fragments['.navbar-cart'] = ob_get_clean();
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'wpbs_ajax_navbar_cart');


/**
 *  Mini-cart
 */

// Custom Cart button
function wpbs_navbar_cart_view_button()
{
    echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="button wc-forward btn btn-primary">' . esc_html__('View cart', 'woocommerce') . '</a>';
}

// Custom Checkout button
function wpbs_navbar_cart_checkout_button()
{
    echo '<a href="' . esc_url(wc_get_checkout_url()) . '" class="button checkout wc-forward btn btn-primary">' . esc_html__('Checkout', 'woocommerce') . '</a>';
}

// Remove navbar cart buttons
remove_action('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10);
remove_action('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20);

// Adding customized Buttons
add_action('woocommerce_widget_shopping_cart_buttons', 'wpbs_navbar_cart_view_button', 10);
add_action('woocommerce_widget_shopping_cart_buttons', 'wpbs_navbar_cart_checkout_button', 20);


/**
 * Single Product
 */

// Add custom textbox to single product
if (!empty(WPBS['woocommerce']['product']['general_text'])) {
    function wpbs_wc_general_text()
    {
        echo '<div class="general-text">' . WPBS['woocommerce']['product']['general_text'] . '</div>';
    }
    add_filter('woocommerce_single_product_summary', 'wpbs_wc_general_text', 35);
}

// Add social share buttons to single product
if (!empty(WPBS['woocommerce']['product']['share'])) {
    function wpbs_wc_share()
    {
        echo '<ul class="product-share list-inline">';
        //Facebook
        if (!empty(WPBS['woocommerce']['product']['share']['facebook'])) {
            echo '<li class="list-inline-item"><a href="https://www.facebook.com/sharer.php?u=' . get_post_permalink() . '" target="_blank" class="share-link facebook" title="' . __('Share on Facebook', 'wpbs') . '" data-toggle="tooltip" data-placement="top" ><span class="fab fa-facebook-f"></span></a></li>';
        }
        //Twitter
        if (!empty(WPBS['woocommerce']['product']['share']['twitter'])) {
            echo '<li class="list-inline-item"><a href="https://twitter.com/share?url=' . get_post_permalink() . '" target="_blank" class="share-link twitter" title="' . __('Share on Twitter', 'wpbs') . '" data-toggle="tooltip" data-placement="top" ><span class="fab fa-twitter"></span></a></li>';
        }
        //Linkedin+
        if (!empty(WPBS['woocommerce']['product']['share']['linkedin'])) {
            echo '<li class="list-inline-item"><a href="https://www.linkedin.com/sharing/share-offsite/?url=' . get_post_permalink() . '" target="_blank" class="share-link linkedin" title="' . __('Share on LinkedIn', 'wpbs') . '" data-toggle="tooltip" data-placement="top" ><span class="fab fa-linkedin-in"></span></a></li>';
        }
        //Google+
        if (!empty(WPBS['woocommerce']['product']['share']['email'])) {
            echo '<li class="list-inline-item"><a href="mailto:?body=' . get_post_permalink() . '" class="share-link email" title="' . __('Send in e-mail', 'wpbs') . '" data-toggle="tooltip" data-placement="top" ><span class="fas fa-envelope"></span></a></li>';
        }
        echo '</ul>';
    }

    add_filter('woocommerce_single_product_summary', 'wpbs_wc_share', 36);
}

// Add Bootstrap classes to variation selector
if (!function_exists('wc_dropdown_variation_attribute_options')) {
    function wc_dropdown_variation_attribute_options($args = array())
    {
        $args = wp_parse_args(apply_filters('woocommerce_dropdown_variation_attribute_options_args', $args), array(
            'options' => false,
            'attribute' => false,
            'product' => false,
            'selected' => false,
            'name' => '',
            'id' => '',
            'class' => '',
            'show_option_none' => __('Choose an option', 'woocommerce'),
        ));

        $options = $args['options'];
        $product = $args['product'];
        $attribute = $args['attribute'];
        $name = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title($attribute);
        $id = $args['id'] ? $args['id'] : sanitize_title($attribute);
        $class = $args['class'];

        if (empty($options) && !empty($product) && !empty($attribute)) {
            $attributes = $product->get_variation_attributes();
            $options = $attributes[$attribute];
        }

        echo '<select id="' . esc_attr($id) . '" class="form-control ' . esc_attr($class) . '" name="' . esc_attr($name) . '" data-attribute_name="attribute_' . esc_attr(sanitize_title($attribute)) . '">';

        if ($args['show_option_none']) {
            echo '<option value="">' . esc_html($args['show_option_none']) . '</option>';
        }

        if (!empty($options)) {
            if ($product && taxonomy_exists($attribute)) {
                // Get terms if this is a taxonomy - ordered. We need the names too.
                $terms = wc_get_product_terms($product->id, $attribute, array('fields' => 'all'));

                foreach ($terms as $term) {
                    if (in_array($term->slug, $options)) {
                        echo '<option value="' . esc_attr($term->slug) . '" ' . selected(sanitize_title($args['selected']), $term->slug, false) . '>' . apply_filters('woocommerce_variation_option_name', $term->name) . '</option>';
                    }
                }
            } else {
                foreach ($options as $option) {
                    // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
                    $selected = sanitize_title($args['selected']) === $args['selected'] ? selected($args['selected'], sanitize_title($option), false) : selected($args['selected'], $option, false);
                    echo '<option value="' . esc_attr($option) . '" ' . $selected . '>' . esc_html(apply_filters('woocommerce_variation_option_name', $option)) . '</option>';
                }
            }
        }

        echo '</select>';
    }
}

/**
 * 
 * Remove colon from shipping method name
 * 
 */
function ace_hide_shipping_title( $label ) {
    $label = str_replace(':','',$label);
	return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label', 'ace_hide_shipping_title' );


/**
 * 
 * Unhooks
 * 
 */

// Remove Cart Collaterals
remove_action('woocommerce_cart_collaterals','woocommerce_cart_totals',10);

//Remove WooCommerce Extensions Advertisement menu link in admin
function wpbs_remove_extensions_link()
{
    remove_submenu_page('woocommerce', 'wc-addons');
}
add_action('admin_menu', 'wpbs_remove_extensions_link', 999);

//Remove Connect to WooCommerce message
add_filter('woocommerce_helper_suppress_admin_notices', '__return_true');


// Remove WooThemes Updater notification
remove_action('admin_notices', 'woothemes_updater_notice');




/**
 *
 *  DEVELOPMENT
 *
 */

/**
 * Product Rich Snippets
 */
function wpbs_wc_rich_snippets()
{
    if (is_product()) {
        global $product;
        
        echo $product->get_date_on_sale_to();
        
        $schema = array();
        
        $schema[] = array(
            "@context" => "https://schema.org/",
            "@type" => "Product",
            "name" => $product->get_name(),
            "image" => get_the_post_thumbnail_url($product->get_id(), 'full'),
            "description" => $product->get_description(),
            "sku" => $product->get_sku(),
        );
        
        $schema[] = array(
            "aggregateRating" => array(
                "@type" => "AggregateRating",
                "ratingValue" => $product->get_average_rating(),
                "reviewCount" => $product->get_review_count()
                )
        );
        
        $offers = array(
         "offers" => array(
            "@type" => "Offer",
            "priceCurrency" => get_woocommerce_currency_symbol(),
            "price" => $product->get_price()
            )
        );
            
        echo "<pre>";
        print_r($offers);
        echo "</pre>";
    }
}
//add_action('wp_head','wpbs_wc_rich_snippets',55);