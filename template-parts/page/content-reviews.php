<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

?>

<section class="section section-reviews" role="region">

  <div class="wrapper">

    <?php if ( is_front_page() ) : ?>

    <header class="section-header" role="banner">
      <h2 class="heading-1">What Our Customers Are Saying</h2>
    </header>

    <?php endif; ?>

    <ul class="reviews-container">

      <?php

        // display all reviews on the correct page
        if ( is_page( 'reviews' ) ) {
          $the_query = new WP_Query( array( 'category_name' => 'reviews' ) );

          if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part( 'template-parts/post/content', 'review' );
            }

          }

          wp_reset_postdata();

        }
        else {
          $the_query = new WP_Query( array( 'category_name' => 'reviews', 'posts_per_page' => 4 ) );

          if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part( 'template-parts/post/content', 'review' );
            }

          }

          wp_reset_postdata();

        }
      ?>

    </ul>

  </div>

</section>
