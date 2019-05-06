<a class="navbar-brand" title="<?php echo bloginfo('name') .' | '.get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
<?php
	if ( !empty( WPBS['profile']['logo'] ) )	{
		echo '<img src="'. WPBS['profile']['logo']. '" class="logo">';
	}
	else {
		bloginfo('name');
	};
?>
</a>