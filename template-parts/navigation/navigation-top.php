<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Puppys_Playpen
 * @since 1.0
 * @version 1.2
 */
?>
<nav id="site-navigation" role="navigation">

	<button class="site-navigation-trigger js-mobile-trigger" aria-controls="top-menu" aria-expanded="false">
		<span class="fas fa-bars" aria-hidden="true"></span> Menu
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
			'menu_class'		 => 'site-nav',
			'container_class'=> 'site-nav-container js-mobile-menu'
		)
	);
	?>

	<div class="phone-maps-container">

		<a href="tel:+1-913-648-3647" class="cta-phone">(913) 648-DOGS</a>

		<a href="https://www.google.com/maps/place/5205+W+95th+St,+Overland+Park,+KS+66207/" class="cta-maps" target="_blank" rel="noopener noreferrer">
			<span class="maps-line-1">5205 W. 95th Street</span>
			<span class="maps-line-2">Overland Park, KS 66207</span>
		</a>

	</div>

</nav>
