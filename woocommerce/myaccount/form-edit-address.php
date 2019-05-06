<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

$page_title = ('billing' === $load_address) ? __('Billing address', 'woocommerce') : __('Shipping address', 'woocommerce');

do_action('woocommerce_before_edit_account_address_form'); ?>

<?php if (! $load_address) : ?>
	<?php wc_get_template('myaccount/my-address.php'); ?>
<?php else : ?>

	<form method="post" id="edit-address">

		<h3><?php echo apply_filters('woocommerce_my_account_edit_address_title', $page_title, $load_address); ?></h3><?php // @codingStandardsIgnoreLine?>

		<div class="woocommerce-address-fields">
			<?php do_action("woocommerce_before_edit_address_form_{$load_address}"); ?>

			<div class="woocommerce-address-fields__field-wrapper row">
				<?php
                    
            
                    if (!empty($address['billing_first_name'])) {
                        // Billing fields
                        $address['billing_first_name']['class'][] = "col-6";
                        $address['billing_last_name']['class'][] = "col-6";
                        $address['billing_company']['class'][] = "col-12";
                        $address['billing_country']['class'][] = "col-12";
                        $address['billing_address_1']['class'][] = "col-12";
                        $address['billing_postcode']['class'][] = "col-4";
                        $address['billing_city']['class'][] = "col-8";
                        $address['billing_phone']['class'][] = "col-6";
                        $address['billing_email']['class'][] = "col-6";
                    }
                    
                    // Shipping fields
                    if (!empty($address['shipping_first_name'])) {
                        $address['shipping_first_name']['class'][] = "col-6";
                        $address['shipping_last_name']['class'][] = "col-6";
                        $address['shipping_company']['class'][] = "col-12";
                        $address['shipping_country']['class'][] = "col-12";
                        $address['shipping_address_1']['class'][] = "col-12";
                        $address['shipping_postcode']['class'][] = "col-4";
                        $address['shipping_city']['class'][] = "col-8";
                    }
                    
                    unset($address['billing_address_2']);
                    unset($address['billing_state']);
                    unset($address['shipping_address_2']);
                    unset($address['shipping_state']);

                    echo "<pre>";
                    //print_r($address);
                    echo "</pre>";
                    

                    foreach ($address as $key => $field) {
                        $field['class'][] = "d-block ml-0 mr-0";
                        $field['input_class'][] = "form-control";
                        
                        if (isset($field['country_field'], $address[ $field['country_field'] ])) {
                            $field['country'] = wc_get_post_data_by_key($field['country_field'], $address[ $field['country_field'] ]['value']);
                        }
                        woocommerce_form_field($key, $field, wc_get_post_data_by_key($key, $field['value']));
                    }
                ?>
			</div>

			<script>

			</script>

			<?php do_action("woocommerce_after_edit_address_form_{$load_address}"); ?>

			<p>
				<button type="submit" class="button btn btn-primary" name="save_address" value="<?php esc_attr_e('Save address', 'woocommerce'); ?>"><?php esc_html_e('Save address', 'woocommerce'); ?></button>
				<?php wp_nonce_field('woocommerce-edit_address', 'woocommerce-edit-address-nonce'); ?>
				<input type="hidden" name="action" value="edit_address" />
			</p>
		</div>

	</form>

<?php endif; ?>

<?php do_action('woocommerce_after_edit_account_address_form'); ?>
