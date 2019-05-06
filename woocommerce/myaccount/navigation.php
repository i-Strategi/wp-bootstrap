<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if (! defined('ABSPATH')) {
    exit;
}

function wpbs_wc_my_account_navigation_menu_active_class($value)
{
    if (strpos($value, 'is-active')) {
        echo " active";
    }
}

do_action('woocommerce_before_account_navigation');
?>
<div class="row clearfix">
    <div class="col-lg-3">
        <nav class="woocommerce-MyAccount-navigation">
            <div class="d-none d-lg-block">
                <ul class="nav flex-column">
                    <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
                        <?php $itemClasses = wc_get_account_menu_item_classes($endpoint); ?>
                        <li class="nav-item <?php echo $itemClasses; ?>">
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" class="nav-link <?php wpbs_wc_my_account_navigation_menu_active_class($itemClasses);?>"><?php echo esc_html($label); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="d-block d-lg-none">
                <ul class="nav nav-tabs mb-3">
                    <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
                        <?php $itemClasses = wc_get_account_menu_item_classes($endpoint); ?>
                        <li class="nav-item <?php echo $itemClasses; ?>">
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" class="nav-link <?php wpbs_wc_my_account_navigation_menu_active_class($itemClasses);?>"><?php echo esc_html($label); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
    <?php do_action('woocommerce_after_account_navigation'); ?>