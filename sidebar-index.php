<aside id="sidebar-index" class="sidebar <?php wpbs_sidebar_class(); ?>" role="complementary">
	<div class="sidebar-inside">
	<?php if ( is_active_sidebar( 'sidebar_index' ) ) {
		dynamic_sidebar( 'sidebar_index' );
	}; ?>
	</div>
</aside>