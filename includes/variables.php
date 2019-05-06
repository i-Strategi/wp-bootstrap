<?php

/**
 *
 * Variables and helper functions
 *
 */


// Full theme settings array
define( 'WPBS', get_option('wpbs_settings') );


// Wrapper style
function setting_wrapper_style()
{
    return get_option('wpbs_settings')['layout']['wrapper']['style'];
}

// Navbar style
function setting_navbar_type()
{
    return get_option('wpbs_settings')['layout']['navbar']['type'];
}

// Navbar fixed
function setting_navbar_position()
{
    return get_option('wpbs_settings')['layout']['navbar']['position'];
}

// Navbar expand
function setting_navbar_expand()
{
    return get_option('wpbs_settings')['layout']['navbar']['expand'];
}

// Navbar style
function setting_navbar_style()
{
    return get_option('wpbs_settings')['layout']['navbar']['style'];
}

// Navbar background
function setting_navbar_background()
{
    return get_option('wpbs_settings')['layout']['navbar']['background'];
}

// Navbar container
function setting_navbar_container()
{
    return get_option('wpbs_settings')['layout']['navbar']['container'];
}

// Navbar margin
function setting_navbar_margin()
{
    return get_option('wpbs_settings')['layout']['navbar']['margin'];
}

// Navbar mobile navigation
function setting_navbar_mobile_nav()
{
    return get_option('wpbs_settings')['layout']['navbar']['mobile-nav'];
}

// Navbar btn style
function setting_navbar_btn_style()
{
    return get_option('wpbs_settings')['layout']['navbar']['navbar_btn_style'];
}

// Navbar toggler icon
function setting_navbar_toggler_icon()
{
    return get_option('wpbs_settings')['layout']['navbar']['navbar_toggler_icon'];
}

// Navbar cart icon
function setting_navbar_cart_icon()
{
    return get_option('wpbs_settings')['layout']['navbar']['navbar_cart_icon'];
}

// Footer background
function setting_footer_background()
{
    return get_option('wpbs_settings')['layout']['footer']['background'];
}

// Footer text color
function setting_footer_text_color()
{
    return get_option('wpbs_settings')['layout']['footer']['text'];
}

 
// Check if WooCommerce is installed and active
function wpbs_woocommerce_exists()
{
    if (class_exists('WooCommerce')) {
        return true;
    } else {
        return false;
    }
}

// Check if current page is using the index.php template
function wpbs_is_index()
{
    global $template;
    if (basename($template) == "index.php") {
        return true;
    } else {
        return false;
    }
}

// Check if current template is with sidebar
function wpbs_has_sidebar()
{
    if ( WPBS['layout']['page']['default-template'] == "with-sidebar" && basename(get_page_template()) === 'page.php' || basename(get_page_template()) === 'page-sidebar.php') {
        return true;
    } else {
        return false;
    }
}
