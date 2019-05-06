<?php

/**
 * PWA (Progressive Web Application) functions
 */

function wpbs_pwa_manifest()
{
    $manifest = array(
        "short_name" => 'Hello',
        "name" => "hello from the other side",
        "icons" => array(
            "src" => "/images/something.png"
        ),
        "start_url" => "index.php",
        "background_color" => "#00ff00",
        "display" => "standalone",
        "scope" => "",
        "theme_color" => "#ff00ff"
    );

    $output = json_encode($manifest, JSON_UNESCAPED_SLASHES);

    //print  $output;

    return get_option('wpbs_settings')['pwa'];
}

add_action('rest_api_init', function () {
    register_rest_route('app', '/manifest.json', array(
        'methods' => 'GET',
        'callback' => 'wpbs_pwa_manifest',
    ));
});
