<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<footer class="l-footer c-footer">
	<span class"l-row">
		<span class="l-container">
			<span class="l-col-9 l-col-med-4">
				<h3 class="c-footer__title">Get in contact</h3>
				<?php 
				// Gravity Forms: 'Contact' Forms
				echo do_shortcode( "[gravityform id=1 title=false description=false ajax=true]" ); ?>
			</span>
			<span class="l-col-9 l-col-med-4-last">
				<div class="c-footer__block">
					<h3 class="c-footer__title">Our details</h3>
					<ul class="c-footer__menu u-list-reset">
						<li class="c-footer__menu-item"><span class="u-bold">Email: </span>hello@projectrise.org.uk</li>
						<li class="c-footer__menu-item"><span class="u-bold">Registered company number: </span>09386646</li>
					</ul>
				</div>
				<!--
				<div class="c-footer__block">
					<h3 class="c-footer__title">Partners</h3>
					<ul class="c-footer__menu u-list-reset">
						<span class="l-col-9 l-col-med-4">
							<li class="c-footer__menu-item"><a href="" class="c-footer__link c-line-link c-line-link--one u-white">Shelbyville Elementary</a></li>
						</span>
						<span class="l-col-9 l-col-med-4-last">
							<li class="c-footer__menu-item"><a href="" class="c-footer__link c-line-link c-line-link--four u-white">JLB Credit</a></li>
						</span>
						<span class="l-col-9 l-col-med-4">
							<li class="c-footer__menu-item"><a href="" class="c-footer__link c-line-link c-line-link--two u-white">Elmer Fudd</a></li>
						</span>
						<span class="l-col-9 l-col-med-4-last">
							<li class="c-footer__menu-item"><a href="" class="c-footer__link c-line-link c-line-link--white u-white">David Byrne</a></li>
						</span>
						<span class="l-col-9 l-col-med-4">
							<li class="c-footer__menu-item"><a href="" class="c-footer__link c-line-link c-line-link--one u-white">Honest Jon</a></li>
						</span>
					</ul>
				</div>
				-->
			</span>
			<!-- <div class="l-col-9">
				<p class="c-footer__promotion">Website designed &amp; built with ♥ by <a href="http://chrisliddell.com" class="c-footer__link u-white" target="_blank">Chris Liddell</a>.</p>
			</div> -->
		</span>
	</span>
</footer>

<?php wp_footer(); ?>

</body>
</html>
