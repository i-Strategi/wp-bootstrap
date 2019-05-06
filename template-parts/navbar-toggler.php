<?php

    /**
     * Variables
     */
    $navbar_expand = setting_navbar_expand();

    // Variable to hide cart depending on navbar-expand
    switch ($navbar_expand) {
        case "navbar-expand-sm":
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

<button class="navbar-toggle btn <?php echo setting_navbar_btn_style() ." ". $visibility;?>" type="button" data-toggle="<?php echo setting_navbar_mobile_nav(); ?>" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-fw <?php echo setting_navbar_toggler_icon();?>"></i>
</button>