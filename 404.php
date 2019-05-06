<?php get_header(); ?>

<?php do_action('main_before'); // @ hook main_before?>
	<main id="main" role="main">
		<?php do_action('main_start'); // @ hook main_start?>
		<div class="container">
			<section id="content" class="<?php do_action('content_class'); // @hook content_class?>">
				<?php do_action('content_before'); // @ hook content_before?>
				<article <?php post_class(); ?> role="article">
					<?php do_action('content_start'); // @ hook content_start?>
					<header class="page-header">
						<h1 class="page-title"><?php _e("404 - The page was not found", "wpbs"); ?></h1>
					</header>
					<section class="post-content">
						<h6><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.", "wpbs"); ?></h6>
						<?php get_search_form(); ?>
					</section>				
					<?php do_action('content_end'); // @ hook content_end?>
				</article>
				<?php do_action('content_after'); // @ hook content_after?>
				<?php comments_template('', true); ?>
			</section>			
		</div>
		<?php do_action('main_end'); // @ hook main_end?>
	</main>
<?php do_action('main_after'); // @ hook main_after?>

<?php get_footer(); ?>