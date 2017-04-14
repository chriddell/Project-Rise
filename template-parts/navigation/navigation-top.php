<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

?>

<nav role="navigation" aria-label="<?php _e( 'Top Menu', 'rise' ); ?>">
	<button aria-controls="top-menu" aria-expanded="false"></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => '',
	) ); ?>
</nav>
