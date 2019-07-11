<?php

    
?>

<div class="navbar-cart dropdown <?php echo wpbs_navbar_cart_class(); ?>">

	<button class="navbar-btn dropdown-toggle <?php echo wpbs_navbar_cart_btn_class(); ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="<?php _e('View cart','woocommerce'); ?>" type="button">
		<i class="<?php echo apply_filters('wpbs_navbar_cart_icon','fas fa-fw '.setting_navbar_cart_icon()); ?>"></i> <?php echo WC()->cart->get_cart_total(); ?>  <span class="badge badge-pill"><?php echo sprintf(_n('%d', '%d', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?></span>
	</button>

	<div class="dropdown-menu dropdown-menu-right">
		<?php if (! WC()->cart->is_empty()) : ?>
		<ul class="woocommerce-mini-cart cart_list product_list_widget cart_contents">
			<?php
            do_action('woocommerce_before_mini_cart_contents');

            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product     = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id   = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
                    $product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
                    $thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                    $product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key); ?>
                    <li class="woocommerce-mini-cart-item <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
                        <?php
                        echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                            '<a href="%s" class="remove remove_from_cart_button text-danger" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fas fa-times"></i></a>',
                            esc_url(wc_get_cart_remove_url($cart_item_key)),
                            __('Remove this item', 'woocommerce'),
                            esc_attr($product_id),
                            esc_attr($cart_item_key),
                            esc_attr($_product->get_sku())
                        ), $cart_item_key); ?>
                        <?php if (empty($product_permalink)) : ?>						
                            <?php echo $thumbnail; ?>
                            <div class="product_info">
                                <span class="product_title"><?php echo $product_name; ?></span>
                                <?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf('%s &times; %s', $cart_item['quantity'], $product_price) . '</span>', $cart_item, $cart_item_key); ?>
                                <?php echo wc_get_formatted_cart_item_data($cart_item); ?>
                            </div>							
                        <?php else : ?>						
                            <a href="<?php echo esc_url($product_permalink); ?>" class="product_link">
                                <?php echo $thumbnail; ?>
                                <div class="product_info">
                                    <span class="product_title"><?php echo $product_name; ?></span>
                                    <?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf('%s &times; %s', $cart_item['quantity'], $product_price) . '</span>', $cart_item, $cart_item_key); ?>
                                    <?php echo wc_get_formatted_cart_item_data($cart_item); ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        
                    </li>
                    <?php
                }
            }

            do_action('woocommerce_mini_cart_contents');
            ?>
		</ul>

		<div class="woocommerce-mini-cart__total total"><strong><?php _e('Subtotal', 'woocommerce'); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></div>

		<?php do_action('woocommerce_widget_shopping_cart_before_buttons'); ?>

		<div class="woocommerce-mini-cart__buttons text-center buttons">
			<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="button wc-forward btn btn-primary btn-block"><?php _e('View cart', 'woocommerce'); ?></a>
			<a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="button checkout wc-forward btn btn-primary btn-block"><?php _e('Checkout', 'woocommerce'); ?></a>
		</div>

		<?php else : ?>

		<div class="woocommerce-mini-cart__empty-message"><?php _e('No products in the cart.', 'woocommerce'); ?></div>

		<?php endif; ?>

	</div>
</div>