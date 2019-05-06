<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

echo '<a href="' . esc_url(wc_get_checkout_url()) . '" class="checkout-button button alt wc-forward btn btn-success btn-lg btn-block">' . __('Proceed to checkout', 'woocommerce') . '</a>';
