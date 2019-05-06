<aside id="sidebar-shop" class="sidebar <?php wpbs_sidebar_class(); ?>" role="complementary">
	<div class="sidebar-inside">
	<?php if ( is_active_sidebar( 'sidebar_shop' ) ) {
		dynamic_sidebar( 'sidebar_shop' );
	}; ?>
	</div>
</aside>