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
