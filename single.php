<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

 	<main id="main" class="site-main" role="main">

 		<!-- hero -->
 		<?php // get_template_part( 'template-parts/page/content', 'hero-navigation' ); ?>

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

					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="srt">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="srt">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span class="nav-title">%title</span>',
					// 	)
					// );

 				endwhile; // End of the loop.
 				?>
 			</div>

 		</section>

 	</main>
	<?php // get_sidebar(); ?>

 </div>

 <?php
 get_footer();
