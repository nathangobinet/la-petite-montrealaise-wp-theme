<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La_petite_Montrealaise
 */

?>

<footer id="colophon" class="site-footer">
	<?php
	wp_nav_menu(
		array(
			'menu' => 'Menu secondaire',
			'menu_class' => 'footer-menu'
		)
	);
	?>
	<div class="footer-copyright">
		© La petite Montréalaise
	</div><!-- .site-info -->
	<div class="footer-made-by">
		par <a href="https://instagram.com/lilii_lev">Lili Hang Lévéillé</a> & <a href="https://github.com/nathangobinet">Nathan Gobinet</href>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
</body>

</html>