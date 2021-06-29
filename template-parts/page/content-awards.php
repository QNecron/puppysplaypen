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

<section class="section section-awards" role="region">

  <div class="wrapper">

    <?php if ( is_front_page() ) : ?>

    <header class="section-header" role="banner">
      <h2 class="heading-1">Our Awards</h2>
    </header>

    <?php endif; ?>

    <ul class="awards-container">

      <li class="awards-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/award-inverse-2018.svg" alt="2018 Kansas City's Best Dog Groomers">
        <!-- <span class="awards-inverse">Best Dog Groomers in Kansas City</span> -->
      </li>

      <li class="awards-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/award-bbb-2018.png" alt="2018 Better Business Bureau award">
      </li>

      <li class="awards-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/award-readers-choice-2017.png" alt="2017 Reader's Choice award">
      </li>

      <li class="awards-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/award-angies-2016.png" alt="2016 Angie's List Super Service award">
      </li>

    </ul>

  </div>

</section>
