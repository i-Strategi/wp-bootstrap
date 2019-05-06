<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="product-tabs">
		<ul class="nav nav-tabs mb-3" role="tablist" id="productTabs">
			<?php 
				$tabCount = 0;
				foreach ( $tabs as $key => $tab ) :
			?>
			<li class="<?php echo esc_attr( $key ); ?>_tab nav-item">
				<a href="#tab-<?php echo esc_attr( $key ); ?>" id="tab-title-<?php echo esc_attr( $key ); ?>" class="nav-link <?php if($tabCount == 0){echo "active";};?>" data-toggle="tab" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>" aria-selected="true"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
			</li>
			<?php
				$tabCount++;
				endforeach; 
			?>
		</ul>
		<div class="tab-content">
			<?php 
				$contentCount = 0;
				foreach ( $tabs as $key => $tab ) : 
			?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> tab-pane mb-3 <?php if($contentCount == 0){echo "active";};?>" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
			</div>
			<?php 			
				$contentCount++;
				endforeach; 
			?>
		</div>
	</div>


	

<?php endif; ?>
