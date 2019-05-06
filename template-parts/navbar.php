<?php
// If default Bootstrap navbar
if (setting_navbar_type() == "navbar") {
    $tag = "header";
    $role = "banner";
}
// If navbar is inside header
else {
    $tag = "nav";
    $role = "navigation";
}
?>
<<?php echo $tag; ?> id="navbar" class="<?php wpbs_navbar_class(); ?>" role="<?php echo $role;?>">
    <?php do_action('navbar'); // @hook navbar ?>
</<?php echo $tag; ?>>