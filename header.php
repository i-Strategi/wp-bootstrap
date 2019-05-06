<!doctype html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title><?php wp_title('|', true, 'right');?></title>
  		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
		<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
	<!-- #root -->
	<?php do_action('root_before'); // @ hook root_before?>
	<div id="root" class="<?php wpbs_root_class();?>">
		<?php do_action('root_start'); // @ hook root_start?>