<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Rise
 * @since 1.0
 * @version 1.0
 */

// ACF: Hero
$hero_heading 						= get_field( 'acf_hero_heading' );
$hero_image 							= get_field( 'acf_hero_image' );
$hero_btn_text 						= get_field( 'acf_hero_btn_text' );
$hero_btn_action 					= get_field( 'acf_hero_btn_action' );

// ACF: Text block -- repeater
$text_blocks_identifier		= 'acf_textblock_repeater'; 

?>

<header class="l-hero c-hero" style="background-image: url( <?php echo $hero_image['url']; ?> );">
	<span class="c-hero__main u-abs-center u-b">
		<h1 class="c-hero__title"><?php echo $hero_heading; ?></h1>
		<a class="c-btn c-hero__btn" >
			<span class=""><?php echo $hero_btn_text; ?></span>
		</a>
	</span>
</header>

<?php 
if ( have_rows( $text_blocks_identifier ) ) : $i = 1; ?>

	<span class="l-row">
		<span class="l-container">

			<?php
				while ( have_rows( $text_blocks_identifier ) ) : the_row();

				// ACF: Text block -- repeater sub-fields
				$text_block_title 	= get_sub_field( 'acf_textblock_heading' ); // Text
				$text_block_main	 	= get_sub_field( 'acf_textblock_main' ); // WYSIWYG

				switch( $i ) :
					case $i % 3 == 0: ?>

						<span class="l-col-12 l-col-sml-4-last">
							<?php
								printf( '<h2 class="">%s</h2>', $text_block_title );
								echo $text_block_main; ?>
						</span>

					<?php
						break;
					case $i == 5: ?>

						<span class="l-col-12 l-col-sml-8-last">
							<?php
								printf( '<h2 class="">%s</h2>', $text_block_title );
								echo $text_block_main; ?>
						</span>

					<?php
						break;
					default: ?>

						<span class="l-col-12 l-col-sml-4">
							<?php
								printf( '<h2 class="">%s</h2>', $text_block_title );
								echo $text_block_main; ?>
						</span>

					<?php
						break;
				endswitch;
				$i++;
			endwhile; ?>

		</span>
	</span>

<?php
endif; ?>
