<header class="page-header" role="heading">
	<h1><?php the_title(); ?></h1>
	<?php if (empty( WPBS['layout']['post']['disable_post_meta'] )):?>
	<p class="meta">
		<span class="meta-time">
		<i class="fas fa-clock"></i> <?php _e("Posted", "wpbs"); ?> <time datetime="<?php echo the_time('G:i'); ?>" pubdate="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?> <?php echo get_the_time(); ?></time>
		</span>
		<span class="meta-author">
		<i class="fas fa-user"></i> <?php the_author_posts_link(); ?>
		</span> 
		<span class="meta-category">
		<i class="fas fa-folder"></i> <?php the_category(', '); ?>
		</span>
	</p>
	<?php endif; ?>
</header>