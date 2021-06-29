<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

?>

<!-- intro -->
<section class="section section-intro" role="region">

	<div class="wrapper">

		<article id="post-<?php the_ID(); ?>" class="article article-intro" role="article">

			<?php the_title( '<h2 class="heading-1">', '</h2>' ); ?>
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			<div class="editorial">
				<?php
					/* translators: %s: Name of current post */
					the_content(
						sprintf(
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						)
					);
				?>
			</div>

		</article>

	</div>

</section>
