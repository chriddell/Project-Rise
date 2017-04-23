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

<nav class="c-navigation c-navigation--top" id="main-nav" role="navigation" aria-label="<?php _e( 'Top Menu', 'rise' ); ?>">
	<button aria-controls="top-menu" aria-expanded="false"></button>
	<?php wp_nav_menu( array(
		'theme_location' 	=> 'top',
		'menu_id'        	=> 'main-nav-menu',
		'container'				=> false,
		'menu_class'			=> 'c-menu c-menu--floats'
	) ); ?>
</nav>
