<?php
/**
 * Template part for displaying 'contact' page content 
 * in page-contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

?>

<div class="c-page__main">
	<span class="l-row">
		<span class="l-container">
			<span class="l-col-9 l-col-med-4">
				<?php
				the_content(); ?>
			</span>
			<span class="l-col-med-4-last">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<span class="l-col-7-last u-b">
						<?php get_template_part( 'template-parts/navigation/social' ); ?>
					</span>
				<?php endif; ?>
			</span>
		</span>
	</span>
</div>
