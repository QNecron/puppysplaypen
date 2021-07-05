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

<section class="section section-gallery" role="region">

  <div class="wrapper">

    <header class="section-header" role="banner">
      <div class="section-hours">Monday-Friday 7am-7pm</div>
      <div class="section-hours">Saturday-Sunday 9am-5pm</div>
    </header>

    <div class="gallery">

      <?php

        // display all reviews on the correct page
        if ( is_page( 'grooming' ) ) {
          $the_query = new WP_Query( 'cat=gallery-grooming' );
        }
        else {
          $the_query = new WP_Query( 'cat=gallery-home' );
        }

        if ( $the_query->have_posts() ) {

          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            the_content();
          }

        }

        wp_reset_postdata();
      ?>

    </div>

  </div>

</section>
