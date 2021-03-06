<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<!-- section : hero -->
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

		<?php if ( is_front_page() ) : ?>

			<!-- gallery -->
			<?php get_template_part( 'template-parts/page/content', 'gallery' ); ?>

			<!-- awards -->
			<?php get_template_part( 'template-parts/page/content', 'awards' ); ?>

			<!-- reviews -->
			<?php get_template_part( 'template-parts/page/content', 'reviews' ); ?>

		<?php endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Puppys Playpen.
			 *
			 * @since Puppys Playpen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

		endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>

	</main>

<?php
get_footer();
