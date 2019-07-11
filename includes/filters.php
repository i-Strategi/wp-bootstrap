<?php

/**
 * Filters & functions
 */

// Root classes
function wpbs_get_root_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_root_class', $classes);
    return array_unique($classes);
}

function wpbs_root_class() {
    echo implode(" ", wpbs_get_root_class() );
}

// Header classes
function wpbs_get_masthead_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_masthead_class', $classes);
    return array_unique($classes);
}
function wpbs_masthead_class() {
    echo implode(" ", wpbs_get_masthead_class() );
}

// Header classes
function wpbs_get_header_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_header_class', $classes);
    return array_unique($classes);
}
function wpbs_header_class() {
    echo implode(" ", wpbs_get_header_class() );
}

// Navbar classes
function wpbs_get_navbar_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_navbar_class', $classes);
    return array_unique($classes);
}

function wpbs_navbar_class() {
    echo implode(" ", wpbs_get_navbar_class() );
}

// Content classes
function wpbs_get_content_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_content_class', $classes);
    return array_unique($classes);
}

function wpbs_content_class() {
    echo implode(" ", wpbs_get_content_class() );
}

// Sidebar classes
function wpbs_get_sidebar_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_sidebar_class', $classes);
    return array_unique($classes);
}

function wpbs_sidebar_class() {
    echo implode(" ", wpbs_get_sidebar_class() );
}

// Footer classes
function wpbs_get_footer_class(){
    $classes = array(); 
    $classes = apply_filters( 'wpbs_footer_class', $classes);
    return array_unique($classes);
}

function wpbs_footer_class() {
    echo implode(" ", wpbs_get_footer_class() );
}

// Navbar cart classes
function wpbs_get_navbar_cart_class(){
    
    $classes = array(); 

    /**
     * Variables
     */
     $navbar_expand = setting_navbar_expand();

    // Variable to hide cart depending on navbar-expand
    switch ($navbar_expand) {
        case "navbar-expand-sm":
            $classes['visibility'] = "d-none d-sm-block";
            break;
        case "navbar-expand-md":
            $classes['visibility'] = "d-none d-md-block";
            break;
        case "navbar-expand-lg":
            $classes['visibility'] = "d-none d-lg-block";
            break;
        case "navbar-expand-xl":
            $classes['visibility'] = "d-none d-xl-block";
            break;
        default:
            $classes['visibility'] = "d-block";
    }

    $classes['margin'] = "ml-auto";

    $classes = apply_filters( 'wpbs_navbar_cart_class', $classes);

    return array_unique($classes);
}

function wpbs_navbar_cart_class() {
    echo implode(" ", wpbs_get_navbar_cart_class() );
}

// Navbar cart btn classes
function wpbs_get_navbar_cart_btn_class(){
    
    $classes = array(); 

    /**
     * Variables
     */

    $classes['btn_class'] = 'btn ' . setting_navbar_btn_style();

    $classes = apply_filters( 'wpbs_navbar_cart_btn_class', $classes);

    return array_unique($classes);
}

function wpbs_navbar_cart_btn_class() {
    echo implode(" ", wpbs_get_navbar_cart_btn_class() );
}
