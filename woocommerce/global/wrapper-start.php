<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = wc_get_theme_slug_for_templates();

?>

<?php do_action('main_before'); // @ hook main_before ?>
<main id="main" role="main">
	<?php do_action('main_start'); // @ hook main_start ?>
	<div class="container">
		<div class="row">
			<section id="content" class="<?php wpbs_content_class(); // @hook content_class ?>">
				<?php do_action('content_start'); // @ hook content_start ?>