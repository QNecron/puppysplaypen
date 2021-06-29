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

      <!-- home page -->
      <?php

        if ( is_front_page() ) :
          get_the_content(null, false, "GALLERY_HOME_POST_ID");
        endif;

      ?>

      <!-- grooming -->
      <?php

        if ( is_page('grooming') ) :
          get_the_content(null, false, "GALLERY_GROOMING_POST_ID");
        endif;

      ?>

    </div>

  </div>

</section>
