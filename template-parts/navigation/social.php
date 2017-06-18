<?php
/**
 * Displays social links
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

?>

<?php 
wp_nav_menu( array(
	'theme_location' 	=> 'social',
	'menu_id'        	=> 'social-links',
	'container'				=> false,
	'menu_class'			=> 'c-social u-list-reset'
) ); ?>
