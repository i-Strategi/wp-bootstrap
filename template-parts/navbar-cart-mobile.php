<?php

    /**
     * Variables
     */
    $navbar_expand = setting_navbar_expand();
    
    // Variable to hide cart depending on navbar-expand
    switch ($navbar_expand) {
        case "navbar-expand":
            $visibility = "d-block d-sm-none";
            break;
        case "navbar-expand-md":
            $visibility = "d-block d-md-none";
            break;
        case "navbar-expand-lg":
            $visibility = "d-block d-lg-none";
            break;
        case "navbar-expand-xl":
            $visibility = "d-block d-xl-none";
            break;
        default:
            $visibility = "d-block";
    }
    
?>

<a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id'));?>" class="navbar-cart-mobile btn <?php echo setting_navbar_btn_style() . " " . $visibility;?>">
	<i class="fas fa-fw <?php echo setting_navbar_cart_icon(); ?>"></i>
</a>