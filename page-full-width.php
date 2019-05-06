<?php

/*
 * Template Name: Page - Full width
 */
 
get_header(); // @ include header

?>

	<?php do_action('main_before'); // @ hook main_before?>
	<main id="main" role="main">
		<?php do_action('main_start'); // @ hook main_start?>
		<section id="content" class="<?php do_action('content_class'); // @hook content_class?>">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php do_action('content_before'); // @ hook content_before?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				<?php do_action('content_start'); // @ hook content_start?>
				<section class="post-content">
					<?php the_content(); ?>
				</section>
				<?php do_action('content_end'); // @ hook content_end?>
			</article>
			<?php do_action('content_after'); // @ hook content_after?>
			<?php comments_template('', true); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<article id="post-not-found">			
				<header class="page-header">
					<h1 class="page-title"><?php _e("Not Found", "wpbs"); ?></h1>
				</header>			
				<section class="post-content">
					<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbs"); ?></p>
				</section>				
			</article>
			<?php endif; ?>	
		</section>		
		<?php do_action('main_end'); // @ hook main_end?>			
	</main>		
	<?php do_action('main_after'); // @ hook main_after?>
<?php

get_footer(); // @ include footer

?>