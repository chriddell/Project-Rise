<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="u-sr-only" href="#main-content"><?php _e( 'Skip to content', 'rise' ); ?></a>

	<header role="banner" class="c-header c-header--site c-brand">

		<span class"l-row u-b">
			<span class="l-container u-b">
				<span class="l-col-2 u-b">
					<h1 class="c-header__title c-brand__logo c-brand__logo--has-inner-link u-pos-rel">
						<a class="u-absolute-fill u-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span class="u-sr-only"><?php bloginfo('name'); ?></span>
						</a>
					</h1>
				</span>

				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<span class="l-col-7-last u-b">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</span>
				<?php endif; ?>
			</span>
		</span>

	</header>
