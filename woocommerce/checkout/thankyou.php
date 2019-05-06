<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<div class="woocommerce-order">

	<?php if ($order) : ?>

		<?php if ($order->has_status('failed')) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed alert alert-danger  mt-md-5 mb-md-"><?php _e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="button pay btn btn-success"><?php _e('Pay', 'woocommerce') ?></a>
				<?php if (is_user_logged_in()) : ?>
					<a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="button pay btn btn-primary"><?php _e('My account', 'woocommerce'); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received alert alert-success mt-md-5 mb-md-5"><?php echo apply_filters('woocommerce_thankyou_order_received_text', __('Thank you. Your order has been received.', 'woocommerce'), $order); ?></p>

			<div class="row justify-content-between">
				<div class="col-12 col-lg-5 col-xl-4 order-lg-1">
					<div class="p-3 bg-light mb-4">
						<table class="woocommerce-order-overview woocommerce-thankyou-order-details order_details table table-borderless table-sm mb-0">
							<tr class="woocommerce-order-overview__order order">
								<th><?php _e('Order number:', 'woocommerce'); ?></th>
								<td><?php echo $order->get_order_number(); ?></td>
							</tr>

							<tr class="woocommerce-order-overview__date date">
								<th><?php _e('Date:', 'woocommerce'); ?></th>
								<td><?php echo wc_format_datetime($order->get_date_created()); ?></td>
							</tr>

							<?php if (is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email()) : ?>
								<tr class="woocommerce-order-overview__email email d-md-none">
									<th><?php _e('Email:', 'woocommerce'); ?></th>
									<td><?php echo $order->get_billing_email(); ?></td>
								</tr>
							<?php endif; ?>

							<tr class="woocommerce-order-overview__total total">
								<th><?php _e('Total:', 'woocommerce'); ?></th>
								<td><?php echo $order->get_formatted_order_total(); ?></td>
							</tr>

							<?php if ($order->get_payment_method_title()) : ?>
								<tr class="woocommerce-order-overview__payment-method method">
									<th><?php _e('Payment method:', 'woocommerce'); ?></th>
									<td><?php echo wp_kses_post($order->get_payment_method_title()); ?></td>
								</tr>
							<?php endif; ?>
						</table>
					</div>
				</div>

		<?php endif; ?>
		
			<div class="col-12 col-lg-7 d-flex flex-column-reverse order-md-0">
				<?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
				<?php do_action('woocommerce_thankyou', $order->get_id()); ?>
			</div>
		</div>
	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received alert alert-success mt-md-5 mb-md-5"><?php echo apply_filters('woocommerce_thankyou_order_received_text', __('Thank you. Your order has been received.', 'woocommerce'), null); ?></p>

	<?php endif; ?>

</div>
