<?php get_header(); ?>
<section id="content">
	<div class="container">
		<div class="row clearfix">
			<main id="main" class="col-xs-12" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					<header class="page-header">
						<h1><?php the_title(); ?></h1>
						<p class="meta">
							<span class="meta-time">
							<i class="glyphicon glyphicon-time"></i> <?php _e("Uploaded", "wpbs"); ?> <time datetime="<?php echo the_time('G:i'); ?>" pubdate="<?php echo get_the_date('Y-m-j'); ?>"><?php echo get_the_date(); ?> <?php echo get_the_time(); ?></time>
							</span>
							<span class="meta-author">
							<i class="glyphicon glyphicon-user"></i> <?php the_author_posts_link(); ?>
							</span> 
							<span class="meta-category">
							<i class="glyphicon glyphicon-folder-open"></i> <?php the_category(', '); ?>
							</span>
						</p>
					</header>
					<section class="post_content clearfix">
						<?php echo wp_get_attachment_image( $attachment->ID, 'full' ); ?>
						<?php the_content(); ?>
					</section>
					<footer>
						<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbs") . ':</span> ', ' ', '</p>'); ?>
					</footer>
				</article>
				<?php // comments_template(); ?>
				<?php endwhile; ?>			
				<?php else : ?>
				<article id="post-not-found">
					<header>
						<h1><?php _e("Not Found","wpbs"); ?></h1>
					</header>
					<section class="post_content">
						<p><?php _e("Sorry, but the requested resource was not found on this site.","wpbs"); ?></p>
					</section>
				</article>
				<?php endif; ?>
			</main>
		</div>
	</div>
</section>
<?php get_footer(); ?>
