<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	
	<header class="c-page__header">
		<span class="l-row">
			<span class="l-container">
				<span class="l-col-12">
					<?php  the_title( '<h1 class="c-page__title">', '</h1>' ); ?>
					<span class="c-page__description u-b"><?php the_field( 'acf_page_description' ); ?></span>
				</span>
			</span><!-- / .l-container -->
		</span><!-- / .l-row -->
	</header><!-- .c-page__header -->

	<main role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/page/content', 'page' );

		endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php get_footer();
