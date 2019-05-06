<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
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
 * @version 3.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

?>

<?php

$order_status = $order->get_status();
$alert_status = "";

switch ($order_status) {
    case "pending":
        $alert_status = "info";
        break;
    case "processing":
        $alert_status = "warning";
        break;
    case "on-hold":
        $alert_status = "warning";
        break;
    case "completed":
        $alert_status = "success";
        break;
    case "cancelled":
        $alert_status = "danger";
        break;
    case "refunded":
        $alert_status = "info";
        break;
    case "failed":
        $alert_status = "danger";
        break;
    default:
        $alert_status = "info";
}

?>

<p class="alert alert-<?php echo $alert_status; ?> mt-4 mb-4"><?php
    /* translators: 1: order number 2: order date 3: order status */
    printf(
        __('Order #%1$s was placed on %2$s and is currently %3$s.', 'woocommerce'),
        '<strong class="order-number">' . $order->get_order_number() . '</strong>',
        '<strong class="order-date">' . wc_format_datetime($order->get_date_created()) . '</strong>',
        '<strong class="order-status">' . wc_get_order_status_name($order->get_status()) . '</strong>'
    );
?></p>

<?php if ($notes = $order->get_customer_order_notes()) : ?>
	<h2><?php _e('Order updates', 'woocommerce'); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ($notes as $note) : ?>
		<li class="woocommerce-OrderUpdate comment note">
			<div class="woocommerce-OrderUpdate-inner comment_container">
				<div class="woocommerce-OrderUpdate-text comment-text">
					<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n(__('l jS \o\f F Y, h:ia', 'woocommerce'), strtotime($note->comment_date)); ?></p>
					<div class="woocommerce-OrderUpdate-description description">
						<?php echo wpautop(wptexturize($note->comment_content)); ?>
					</div>
	  				<div class="clear"></div>
	  			</div>
				<div class="clear"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<div class="d-flex flex-column-reverse">
<?php do_action('woocommerce_view_order', $order_id); ?>
</div>