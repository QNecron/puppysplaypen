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
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<!-- hero -->
		<?php get_template_part( 'template-parts/page/content', 'hero-navigation' ); ?>

		<!-- page -->
		<section class="section section-page" role="region">

			<div class="wrapper">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>

		</section>

		<!-- awards -->
		<?php if ( is_page( 'about' ) ) :

			get_template_part( 'template-parts/page/content', 'awards' );

		endif; ?>

		<!-- reviews -->
		<?php if ( is_page( 'reviews' ) ) :

			get_template_part( 'template-parts/page/content', 'reviews' );

		endif; ?>

		<!-- grooming -->
		<?php if ( is_page( 'grooming' ) ) : ?>

			<!-- gallery -->
			<?php get_template_part( 'template-parts/page/content', 'gallery' ); ?>

		<?php endif; ?>


		<!-- ctas -->
		<?php if ( !is_page( 'reviews' ) ) : ?>

			<section class="section section-cta" role="region">

				<h3 class="srt">Enroll or reserve now</h3>

				<div class="cta-container">
					<a href="http://puppysplaypen.com/new-customers" class="cta-enrollment">New Customers</a>
					<a href="http://puppysplaypen.com/reservations" class="cta-reservations">Reservations</a>
				</div>

			</section>

		<?php endif; ?>

	</main>

</div>

<?php
get_footer();
