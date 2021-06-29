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

<article id="post-<?php the_ID(); ?>" class="article article-page" role="article">

	<?php the_title( '<h1 class="heading-1">', '</h1>' ); ?>
	<?php twentyseventeen_edit_link( get_the_ID() ); ?>

	<div class="editorial">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				)
			);
		?>
	</div>

</article>
