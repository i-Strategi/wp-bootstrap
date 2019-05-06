<?php get_header(); // @ include header ?>

	<?php do_action('main_before'); // @ hook main_before ?>
	<main id="main" role="main">
		<?php do_action('main_start'); // @ hook main_start ?>
		<div class="container">
			<div class="row">
				<section id="content" class="<?php wpbs_content_class(); // @hook content_class ?>">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<?php do_action('content_before'); // @ hook content_before ?>	
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
						<?php do_action('content_start'); // @ hook content_start ?>
						<?php get_template_part('template-parts/index-post'); // Get "archive post" ?>
						<?php do_action('content_end'); // @ hook content_end ?>
					</article>
					<?php endwhile; ?>	
					<?php else : ?>
						<?php get_template_part('template-parts/no-posts-found'); // Get "no posts found" ?>
					<?php endif; ?>
				</section>
				<?php 
					if (empty(WPBS['layout']['index']['sidebar-disable'])){
						get_sidebar('index');
					};
				?>
			</div>
		</div>
		<?php do_action('main_end'); // @ hook main_end ?>
	</main>
	<?php do_action('main_after'); // @ hook main_after ?>

<?php get_footer(); // @ include footer ?>
