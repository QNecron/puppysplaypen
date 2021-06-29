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

			<!-- store info -->
			<section class="section section-contact" role="region">

			  <div class="wrapper">

				<div class="contact">
				  <div class="contact-info">Monday-Friday 7am-7pm</div>
				  <div class="contact-info">Saturday-Sunday 9am-5pm</div>
				</div>

			  </div>

			</section>

			<!-- instagram feed -->
			<section class="section section-instgram">

				<div class="wrapper">

					<!-- puppys_playpen_grooming puppys_playpen -->
					<div id="instafeed" class="instagram-container" data-instagram="puppys_playpen" data-scrolled-to>

					  <div class="instagram-item" data-social-share>

							<div class="social-share">

							  <a href="#" class="social-share-item facebook">
									<span class="srt">Facebook</span>
									<span class="fab fa-facebook-square" aria-hidden="hidden"></span>
							  </a>

							  <a href="#" class="social-share-item instagram">
									<span class="srt">Instagram</span>
									<span class="fab fa-instagram" aria-hidden="hidden"></span>
							  </a>

							  <a href="#" class="social-share-item youtube">
									<span class="srt">YouTube</span>
									<span class="fab fa-youtube" aria-hidden="hidden"></span>
							  </a>

							</div>

					  </div>

					</div>

        </div>

      </section>

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
