<?php
/**
 * Template part for displaying 'team' page content 
 * in page-contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

// ACF: Team member -- repeater
$team_member_identifier 	= 'acf_team_member_repeater';

?>

<div class="c-page__main">
	<span class="l-row">
		<span class="l-container">
			<span class="l-col-12">
				<?php 
				// Loop ACF repeater
				if ( have_rows( $team_member_identifier ) ) : 

					// Set an index for grid classes
					$i = 1;

					while ( have_rows( $team_member_identifier ) ) : the_row(); ?>

						<?php
						// ACF: Get photo sub-field 
						$team_member_photo = get_sub_field( 'acf_team_member_photo' ); ?>

						<div class="c-bio l-col-12 l-col-sml-6<?php if ( $i % 2 == 0 ) : ?>-last<?php endif; ?> l-col-med-4<?php if ( $i % 3 == 0 ) : ?>-last<?php endif; ?>">

								<span class="c-bio__image-container u-b u-pos-rel">
									<?php if ( $team_member_photo ) : ?>
										<img class="c-bio__image u-abs-center" src="<?php echo $team_member_photo['url']; ?>"/>
									<?php endif; ?>
								</span>

							<h2 class="c-bio__title"><?php the_sub_field( 'acf_team_member_name' ); ?></h2>
							<span class="c-bio__description u-b"><?php the_sub_field( 'acf_team_member_blurb' ); ?></span>

							<?php
							// ACF: Social links -- repeater 
							$social_links_identifier = 'acf_team_member_social_repeater'; ?>

							<?php 
							// Loop ACF repeater
							if ( have_rows( $social_links_identifier ) ) : 
								while ( have_rows( $social_links_identifier ) ) : the_row(); ?>

								<a class="c-bio__link" href="<?php the_sub_field( 'acf_team_member_social_url' ); ?>"><?php the_sub_field( 'acf_team_member_social_text' ); ?></a>

								<?php 
								endwhile;
							endif; ?>

						</div>

					<?php
					$i++; // Increment index value
					endwhile;
				endif; ?>

			</span>
		</span>
	</span>
</div>
