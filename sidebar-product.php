<aside id="sidebar-product" class="sidebar <?php wpbs_sidebar_class(); ?>" role="complementary">
	<div class="sidebar-inside">
	<?php if ( is_active_sidebar( 'sidebar_product' ) ) {
		dynamic_sidebar( 'sidebar_product' );
	}; ?>
	</div>
</aside>