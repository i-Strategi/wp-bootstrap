<aside id="sidebar-page" class="sidebar <?php wpbs_sidebar_class(); ?>" role="complementary">
	<div class="sidebar-inside">
	<?php if ( is_active_sidebar( 'sidebar_page' ) ) {
		dynamic_sidebar( 'sidebar_page' );
	}; ?>
	</div>
</aside>