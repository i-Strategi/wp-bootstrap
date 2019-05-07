<?php

/*
 * Contact data shortcodes
 */
 
// Logo (as image)
function wpbs_get_logo()
{
    echo "<img src='" . WPBS['profile']['logo'] . "' class='logo'/>";
}
add_shortcode('logo', 'wpbs_get_logo');

// Logo (path)
function wpbs_get_logo_url()
{
    return WPBS['profile']['logo'];
}
add_shortcode('logo_url', 'wpbs_get_logo_url');

// Phone number
function wpbs_get_phone_number()
{
    return WPBS['profile']['phone'];
}
add_shortcode('phone', 'wpbs_get_phone_number');

// Contact e-mail
function wpbs_get_contact_mail()
{
    return WPBS['profile']['email'];
}
add_shortcode('mail', 'wpbs_get_contact_mail');

// Address (full address)
function wpbs_get_address()
{
    return WPBS['profile']['address'];
}
add_shortcode('address', 'wpbs_get_address');

// Address (street name)
function wpbs_get_address_street()
{
    return WPBS['profile']['address']['street'];
}
add_shortcode('street', 'wpbs_get_address_street');

// Address (postal code)
function wpbs_get_address_postalcode()
{
    return WPBS['profile']['address']['postcode'];
}
add_shortcode('postalcode', 'wpbs_get_address_postalcode');

// Address (city)
function wpbs_get_address_city()
{
    return WPBS['profile']['address']['city'];
}
add_shortcode('city', 'wpbs_get_address_city');

// Address (city)
function wpbs_get_address_country()
{
    return WPBS['profile']['address']['country'];
}
add_shortcode('country', 'wpbs_get_address_country');

// Vat number
function wpbs_get_vat_number()
{
    return WPBS['profile']['vat'];
}
add_shortcode('vat', 'wpbs_get_vat_number');


/*
 *	Social links
 */

// Facebook
function wpbs_get_facebook_url()
{
    return WPBS['profile']['social']['facebook_url'];
}
add_shortcode('facebook_url', 'wpbs_get_facebook_url');

// Twitter
function wpbs_get_twitter_url()
{
    return WPBS['profile']['social']['twitter_url'];
}
add_shortcode('twitter_url', 'wpbs_get_twitter_url');

// YouTube
function wpbs_get_youtube_url()
{
    return WPBS['profile']['social']['youtube_url'];
}
add_shortcode('youtube_url', 'wpbs_get_youtube_url');

// LinkedIn
function wpbs_get_linkedin_url()
{
    return WPBS['profile']['social']['linkedin_url'];
}
add_shortcode('linkedin_url', 'wpbs_get_linkedin_url');

// Instagram
function wpbs_get_instagram_url()
{
    return WPBS['profile']['social']['instagram_url'];
}
add_shortcode('instagram_url', 'wpbs_get_instagram_url');

// Pinterest
function wpbs_get_pinterest_url()
{
    return WPBS['profile']['social']['pinterest_url'];
}
add_shortcode('pinterest_url', 'wpbs_get_pinterest_url');

// Vimeo
function wpbs_get_vimeo_url()
{
    return WPBS['profile']['social']['vimeo_url'];
}
add_shortcode('vimeo_url', 'wpbs_get_vimeo_url');



/*
 *	Widgets / Elements
 */
 
// Get content from other post by ID
function wpbs_get_content_shortcode($atts)
{
    extract(
        shortcode_atts(
        array('id' => '' ),
        $atts
    )
    );
    $content = apply_filters('the_content', get_post_field('post_content', $id));
    return $content;
}
add_shortcode('get-content', 'wpbs_get_content_shortcode');

// Searchform
function wpbs_searchform_shortcode($atts)
{
    get_template_part('searchform');
}
add_shortcode('searchform', 'wpbs_searchform_shortcode');


// Icon
function wpbs_bs_icon_shortcode($atts)
{
    extract(shortcode_atts(array('class' => '', 'id' => '' ), $atts));
    $return = '<i';
    if (!empty($class)) {
        $return .= ' class="'.$class.'"';
    }
    if (!empty($id)) {
        $return .= ' id="'.$id.'"';
    }
    $return .= '></i>';
    return $return;
}
add_shortcode('icon', 'wpbs_bs_icon_shortcode');

// Buttons
function wpbs_button($atts, $content = null)
{
    extract(
        shortcode_atts(
        array(
            'type' => 'default', /* primary, default, info, success, danger, warning, inverse */
            'size' => 'default', /* mini, small, default, large */
            'class'  => '',
            'rel'  => '',
            'url'  => '',
            'text' => '',
        ),
        $atts
    )
    );
    
    if ($type == "default") {
        $type = "";
    } else {
        $type = "btn-" . $type;
    }
    
    if ($size == "default" || $size = "") {
        $size = "";
    } else {
        $size = "btn-" . $size;
    }
    
    $output = '<a href="' . $url . '" class="btn '. $type . ' ' . $size . ' ' . $class . '">';
    $output .= $text;
    $output .= '</a>';
    
    return $output;
}
add_shortcode('button', 'wpbs_button');

// Alert
function wpbs_alert($atts, $content = null)
{
    extract(
        shortcode_atts(
        array(
            'type' => 'alert-info', /* alert-info, alert-success, alert-error */
            'close' => 'false', /* display close link */
            'text' => '',
        ),
        $atts
    )
    );
    
    $output = '<div class="fade in alert alert-'. $type . '">';
    if ($close == 'true') {
        $output .= '<a class="close" data-dismiss="alert">×</a>';
    }
    $output .= $text . '</div>';
    
    return $output;
}

add_shortcode('alert', 'wpbs_alert');
