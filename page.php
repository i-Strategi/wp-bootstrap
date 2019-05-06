<?php
    
    /*
     * This template includes the default one chosen from the theme settings.
     */
    
    $template = WPBS['layout']['page']['default-template'];

    switch($template){

        case "with-sidebar":
        get_template_part('page-sidebar');
        break;

        case "no-sidebar":
        get_template_part('page-no-sidebar');
        break;

        default:
        get_template_part('page-full-width');

    }