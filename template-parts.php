<?php

/**
 * This file controls what components is shown where.
 * To overwrite, simply create the component in your child theme in the same directory.
 * To customize, layout unhook components and hook your own components in.
 * 
 * 
 * 
 */



/**
 * Add layout-style class to #root
 */

function wpbs_wrapper_classes (){

    if (setting_wrapper_style() == "full") {

        $classes['style'] = 'full';      
        
    } else {
    
        $classes['style'] = 'boxed';
        $classes['container'] = 'container';
        $classes['padding'] = 'px-0';
        
    }
    
    return $classes;
}
add_filter( 'wpbs_root_class','wpbs_wrapper_classes');

/**
 * 
 * Navbar Components
 * 
 */

function wpbs_masthead()
{
    get_template_part('template-parts/masthead');
}

function wpbs_header()
{
    get_template_part('template-parts/header');
}

function wpbs_navbar()
{
    get_template_part('template-parts/navbar');
}

function wpbs_navbar_brand()
{
    get_template_part('template-parts/navbar-brand');
}

function wpbs_navbar_toggler()
{
    get_template_part('template-parts/navbar-toggler');
}

function wpbs_navbar_collapse()
{
    get_template_part('template-parts/navbar-collapse');
}
function wpbs_navbar_search()
{
    if(wpbs_woocommerce_exists()){
        get_template_part( 'woocommerce/product-searchform' );
    }else {
        get_template_part( 'searchform' );
    }
}


/**
 * 
 * Default Bootstrap Navbar
 * 
 */

if (setting_navbar_type() != "header") {

    // Include navbar
    add_action('root_start', 'wpbs_navbar', 50);

    // Navbar brand
    add_action('navbar', 'wpbs_navbar_brand', 20);

    // Navbar toggler
    add_action('navbar', 'wpbs_navbar_toggler', 40);

    // Navbar collapse
    add_action('navbar', 'wpbs_navbar_collapse', 50);

    // Add primary nav to navbar-collapse
    add_action('navbar_collapse', 'wpbs_primary_nav', 10);

    // Navbar collapse
    add_action('navbar_collapse', 'wpbs_navbar_search', 20);

    // Navbar container
    if ( !empty( setting_navbar_container() ) ) {

        add_action(
            'navbar', 
            function () {echo "<div class='container'>";},
            0
        );

        add_action(
            'navbar',
            function () {echo "</div>";}, 
            100
        );

    }

    // Navbar classes
    function wpbs_navbar_classes()
    {
        // Navbar class
        $classes['navbar'] = "navbar";
        
        // Navbar background
        if (!empty(setting_navbar_background())) {
            $classes['navbar_background'] = setting_navbar_background();
        }
        
        // Navbar style
        if (!empty(setting_navbar_style())) {
            $classes['navbar_style'] = setting_navbar_style();
        }
        
        // Navbar expand
        if (!empty(setting_navbar_expand())) {
            $classes['navbar_expand'] = setting_navbar_expand();
        }
        
        // Navbar position
        if (!empty(setting_navbar_position())) {
            $classes['navbar_position'] = setting_navbar_position();
        }
        
        // Navbar margin
        if (!empty(setting_navbar_margin())) {
            $classes['navbar_margin'] = setting_navbar_margin();
        }

        // Navbar container
        if (!empty(setting_navbar_container())) {
            $classes['navbar_padding'] = 'px-0';
        }
        
        return $classes;

    }
    add_filter('wpbs_navbar_class', 'wpbs_navbar_classes', 5);
}


/**
 * 
 * Navigation inside header
 * 
 */

else {
    
    /**
     * Masthead
     */

    // Init masthead
    add_action('root_start', 'wpbs_masthead', 50);

    // Masthead class
    function wpbs_masthead_classes($classes)
    {
        // Expand class
        if( !empty( setting_navbar_expand() ) ) {
            $classes['masthead_position'] = setting_navbar_expand();
        }

        // Margin bottom
        $classes['masthead_margin'] = setting_navbar_margin();
        
        return $classes;
    }
    add_filter('wpbs_masthead_class', 'wpbs_masthead_classes', 5);


    /**
     * Header
     */
    
    // Init header inside masthead
    add_action('masthead', 'wpbs_header', 10);
    
    // Remove navbar components from navbar, that is going to be added to #header
    function wpbs_remove_navbar_components()
    {
        remove_action('navbar', 'wpbs_navbar_brand', 20);
        remove_action('navbar', 'wpbs_navbar_toggler', 40);
        remove_action('navbar_collapse', 'wpbs_navbar_search', 20);
        remove_action('root_start', 'wpbs_navbar', 50);
    }
    add_action('init', 'wpbs_remove_navbar_components', 99);

    // Add navbar-brand to #header
    add_action('header', 'wpbs_navbar_brand', 20);

    // Add navbar-toggler to #header
    add_action('header', 'wpbs_navbar_toggler', 40);
    
    // Add search to #header
    add_action('header', 'wpbs_navbar_search', 50);
    
    // #header container
    if ( !empty( setting_navbar_container() ) ) {
        add_action(
            'header', 
            function () {echo "<div class='container'>";},
            0
        );

        add_action(
            'header',
            function () {echo "</div>";}, 
            1000
        );
    }

    // #header class
    function wpbs_header_classes()
    {
        $classes['navbar'] = "navbar";

        if( !empty( setting_navbar_container() ) ) {
            $classes['navbar_padding'] = "px-0";
        }
        
        return $classes;
    }
    add_filter('wpbs_header_class', 'wpbs_header_classes', 5);


    /**
     * Navbar
     */

    // Init navbar inside header
    add_action('masthead', 'wpbs_navbar', 20);

    // Navbar collapse
    add_action('navbar', 'wpbs_navbar_collapse', 50);

    // Add primary nav to navbar-collapse
    add_action('navbar_collapse', 'wpbs_primary_nav', 10);

    // Navbar search
    add_action('navbar_collapse', 'wpbs_navbar_search', 20); 

    // Navbar classes
    function wpbs_navbar_classes()
    {
        // Navbar class
        $classes['navbar'] = "navbar";
        
        // Navbar background
        if (!empty(setting_navbar_background())) {
            $classes['navbar_background'] = setting_navbar_background();
        }
        
        // Navbar style
        if (!empty(setting_navbar_style())) {
            $classes['navbar_style'] = setting_navbar_style();
        }
        
        // Navbar expand
        if (!empty(setting_navbar_expand())) {
            $classes['navbar_expand'] = setting_navbar_expand();
        }
        
        // Navbar position
        if (!empty(setting_navbar_position())) {
            $classes['navbar_position'] = setting_navbar_position();
        }
        
        // Navbar margin
        if (!empty(setting_navbar_margin())) {
            $classes['navbar_margin'] = setting_navbar_margin();
        }

        // Navbar container
        if (!empty(setting_navbar_container())) {
            $classes['navbar_padding'] = 'px-0';
        }
        
        return $classes;

    }
    add_filter('wpbs_navbar_class', 'wpbs_navbar_classes', 5);

    // Navbar container
    if ( !empty( setting_navbar_container() ) ) {

        add_action(
            'navbar', 
            function () {echo "<div class='container'>";},
            0
        );

        add_action(
            'navbar',
            function () {echo "</div>";}, 
            100
        );

    }

    // Remove top and bottom padding from navbar when collapsed
    /*
    function wpbs_navbar_padding()
    {
        $navbar_expand = setting_navbar_expand();

        switch ($navbar_expand) {
            case "navbar-expand-md":
                $class = "py-0 py-md-2";
                break;
            case "navbar-expand-lg":
                $class = "py-0 py-lg-2";
                break;
            case "navbar-expand-xl":
                $class = "py-0 py-xl-2";
                break;
            default:
                return false;
        }
        echo " " . $class;
    }
    add_action('navbar_class', 'wpbs_navbar_padding', 90);
    */

}



/**
 * 
 * Page/Post titles
 * 
 */
function wpbs_page_title()
{
    if (is_page() && !is_404()) {
        get_template_part('template-parts/page-header-page');
    }
}
add_action('content_start', 'wpbs_page_title', 50);

function wpbs_post_title()
{
    if (is_single()) {
        get_template_part('template-parts/page-header-post');
    }
}
add_action('content_start', 'wpbs_post_title', 50);



/**
 * 
 * Content Layout
 * 
 */

// Content classes
function wpbs_content_classes($classes)
{
    if (is_page() && wpbs_has_sidebar()) {

        $sizes = WPBS['layout']['page'];

        foreach ($sizes['content-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }

    }
    if (is_single()) {

        $sizes = WPBS['layout']['post'];

        foreach ($sizes['content-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }

    }
    if (wpbs_is_index()) {

        $sizes = WPBS['layout']['index'];

        foreach ($sizes['content-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }

    }

    return $classes;
}
add_filter('wpbs_content_class', 'wpbs_content_classes', 0);


// Sidebar classes
function wpbs_sidebar_classes($classes)
{
    if (is_page() && wpbs_has_sidebar()) {

        $settings = WPBS['layout']['page'];
        
        foreach ($settings['sidebar-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }

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

    if (is_single()) {

        $settings = WPBS['layout']['post'];

        foreach ($settings['sidebar-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }
        
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

    if (wpbs_is_index()) {

        $settings = WPBS['layout']['index'];

        foreach ($settings['sidebar-size'] as $key => $value){
            if(!empty($value)) $classes[$key] = $key.'-'.$value;
        }
        
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
add_filter('wpbs_sidebar_class', 'wpbs_sidebar_classes',0);



/**
 * 
 * Footer
 * 
 */

// Add footer markup to hook root_end
function wpbs_footer()
{
    get_template_part('template-parts/footer');
}
add_action('root_end', 'wpbs_footer', 50);


// Footer class
function wpbs_footer_class()
{
    $class = array();
    
    // Navbar background
    if (!empty(setting_footer_background())) {
        $class[] = setting_footer_background();
    }
    // Navbar Text
    if (!empty(setting_footer_text_color())) {
        $class[] = setting_footer_text_color();
    }
    
    echo implode(" ", $class);
}
add_filter('footer_class', 'wpbs_footer_class', 5);

// Add footer widgets to hook footer
function wpbs_footer_widgets()
{
    echo "<section id='footer-widgets'><div class='container'><div class='row'>";

    if (!empty(WPBS['layout']['footer']['widgets'])) {
        foreach (WPBS['layout']['footer']['widgets'] as $widget) {

            $id = sanitize_title($widget['name']);

            $classes = array();

            foreach($widget as $key => $value ) {
                if($key != "name") {
                    $classes[] = $key .'-'. $value;                
                }
            }

            $classes = implode(" ", $classes);

            echo "<div id='$id' class='$classes'>" . dynamic_sidebar($widget['name']) . "</div>";

        };
    }

    echo "</div></div></section>";
}
add_action('footer', 'wpbs_footer_widgets', 50);

// Add footer widgets to hook footer
function wpbs_footer_info()
{
    echo "
    <section id='footer-info'>
        <div class='container'>
            <div class='row'>
                <div class='col-12 col-md-7 text-center text-md-left'>&copy ".date('Y')." ".get_bloginfo('name')."</div>
                <div class='col-12 col-md-5 text-center text-md-right'><a href='https://i-strategi.dk' target='_blank'>". __('Developed by i-Strategi ApS.', 'wpbs')."</a></div>
            </div>
        </div>
    </section>
    ";
}
add_action('footer', 'wpbs_footer_info', 60);


/**
 * 
 * Offcanvas menu
 * 
 */

// Include offcanvas menu template part
function wpbs_offcanvas_menu()
{
    if(setting_navbar_mobile_nav() == "offcanvas"){

        get_template_part('template-parts/offcanvas-menu');

    }
}
add_action('root_end', 'wpbs_offcanvas_menu', 99);

// Add widget area to the offcanvas menu
function wpbs_offcanvas_widgets()
{
    dynamic_sidebar("offcanvas_menu");
}
add_action('offcanvas_menu', 'wpbs_offcanvas_widgets', 50);
