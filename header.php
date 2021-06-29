<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#000" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-loader="true" data-theme="cyan" data-page="<? echo strtolower(get_the_title()); ?>">

<div id="page" data-page-container>

	<a class="skip-link srt" href="#main"><?php _e( 'Skip to main', 'twentyseventeen' ); ?></a>

	<div class="site-header-container">

		<header id="masthead" class="site-header" role="banner">

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			<?php endif; ?>

		</header>

		<button class="theme-toggle" data-theme-toggle>
			<span class="srt">Toggle Theme</span>
		</button>

	</div>

	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	// if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	// 	echo '<div class="single-featured-image-header">';
	// 	echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
	// 	echo '</div><!-- .single-featured-image-header -->';
	// endif;
	?>
