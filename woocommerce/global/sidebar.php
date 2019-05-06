<?php
/**
 * Sidebar
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


if( is_product() ) 
{
	get_sidebar( 'product' ); 
}
else 
{
	get_sidebar( 'shop' );
}

?>
		</div>
	</div>
	<?php do_action('main_end'); // @ hook main_end ?>
</main>
<?php do_action('main_after'); // @ hook main_after ?>