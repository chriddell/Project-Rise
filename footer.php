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

<footer>
	<span class"l-row">
		<span class="l-container">
			<span class="l-col-12 l-col-med-6">
				<?php 
				// Gravity Forms: 'Contact' Forms
				echo do_shortcode( "[gravityform id=1 title=false description=false ajax=true]" ); ?>
			</span>
			<span class="l-col-12 l-col-med-6-last">
				<h3>Our details</h3>
				<ul>
					<li><span>Email: </span>hello@projectrise.org.uk</li>
					<li><span>Registered company number: </span>09386646</li>
				</ul>
				<h3>Partners</h3>
				<ul>
					<li>Shelbyville Elementary</li>
					<li>JLB Credit</li>
					<li>Elmer Fudd</li>
					<li>David Byrne</li>
					<li>Honest Jon</li>
				</ul>
			</span>
		</span>
	</span>
</footer>

<?php wp_footer(); ?>

</body>
</html>
