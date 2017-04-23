<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

?>

<article class="c-page" id="post-<?php the_ID(); ?>">
	<header class="c-page__header">
		<span class="l-row">
			<span class="l-container">
				<span class="l-col-12">
					<?php the_title( '<h1 class="c-page__title">', '</h1>' ); ?>
				</span>
			</span>
		</span>
	</header><!-- .entry-header -->
	<div class="c-page__main">
		<span class="l-row">
			<span class="l-container">
				<span class="l-col-12">
					<?php
						the_content(); ?>
				</span>
			</span>
		</span>
	</div>
</article>
