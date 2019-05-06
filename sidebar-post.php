<aside id="sidebar-post" class="sidebar <?php wpbs_sidebar_class(); ?>" role="complementary">
	<div class="sidebar-inside">
	<?php if ( is_active_sidebar( 'sidebar_post' ) ) {
		dynamic_sidebar( 'sidebar_post' );
	}; ?>
	</div>
</aside>