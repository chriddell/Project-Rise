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

<nav class="c-nav u-clearfix" id="main-nav" role="navigation" aria-label="<?php _e( 'Top Menu', 'rise' ); ?>">

	<button type="button" class="c-nav__trigger c-hamburger c-hamburger--boring u-mob-only" aria-controls="top-menu" aria-expanded="false" id="nav-trigger">
	  <span class="c-hamburger__box">
	    <span class="c-hamburger__inner"></span>
	  </span>
	  <span class="u-sr-only">Open Menu</span>
	</button>  

	<?php 
	wp_nav_menu( array(
		'theme_location' 	=> 'top',
		'menu_id'        	=> 'nav-menu',
		'container'				=> false,
		'menu_class'			=> 'c-menu'
	) ); ?>
</nav>
