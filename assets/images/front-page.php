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

<div id="primary" class="content-area">

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

			<!-- instagram feed -->
			<section class="section section-instgram" role="region">

				<div class="wrapper">

					<ul id="instafeed" class="instagram-container" data-scrolled-to></ul>

					<li class="instagram-item" data-social-share>
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
					</li>

				</div>

			</section>

			<!-- awards -->
			<section class="section section-awards" role="region">

				<div class="wrapper">

					<header class="section-header" role="banner">
						<h2 class="heading-1">Our Awards</h2>
					</header>

					<ul class="awards-container">

						<li class="awards-item">
							<img src="../../assets/images/award-inverse-2018.svg" alt="">
							<span class="awards-inverse">Best Dog Groomers in Kansas City</span>
						</li>

						<li class="awards-item">
							<img src="../../assets/images/award-bbb-2018.png" alt="">
						</li>

						<li class="awards-item">
							<img src="../../assets/images/award-readers-choice-2017.png" alt="">
						</li>

						<li class="awards-item">
							<img src="../../assets/images/award-angies-2016.png" alt="">
						</li>

					</ul>

				</div>

			</section>

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

	</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
