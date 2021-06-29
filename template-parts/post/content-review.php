<?php
/**
 * Displays reviews for front page
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

?>

<li class="reviews-item">

  <article id="post-<?php the_ID(); ?>" class="article article-review" role="article">

    <?php the_title( '<h3 class="heading-2">', '</h3>' ); ?>

    <div class="editorial">
      <?php the_content(); ?>
    </div>

  </article>

</li>
