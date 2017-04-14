<?php
/**
 * Rise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rise_setup() {

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'top'    => __( 'Top Menu', 'rise' )
  ) );

}
add_action( 'after_setup_theme', 'rise_setup' );

/**
 * Enqueue scripts and styles.
 */
function rise_scripts() {

  // Theme stylesheet.
  wp_enqueue_style( 'rise-style', get_theme_file_uri() . '/assets/css/style.css' );

  // Theme scripts
  wp_enqueue_script( 'rise-app', get_theme_file_uri( '/assets/js/app/built/app.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'rise-lib', get_theme_file_uri( '/assets/js/lib/built/lib.min.js' ), '', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'rise_scripts' );