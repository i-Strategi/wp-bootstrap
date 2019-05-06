<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline flex-nowrap">
	<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbs"); ?>" value="<?php the_search_query(); ?>" class="form-control mr-2" />
	<button type="submit" class="btn btn-primary"><span class="search-label pr-1"><?php _e('Search', 'wpbs' ); ?></span><i class="fas fa-search"></i></button>
</form>