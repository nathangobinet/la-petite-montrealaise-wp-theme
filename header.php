<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La_petite_Montrealaise
 */

$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full')[0];

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'la-petite-montrealaise'); ?></a>

		<header id="masthead" class="site-header container<?php if (is_front_page()) { echo ' transparent'; } ?>">
			<div class="site-branding">
				<a href="/"><img src="<?php echo $logo ?>" class="header-logo"></a>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html_e('Primary Menu', 'la-petite-montrealaise'); ?>
				</button>
				<?php
				wp_nav_menu(
					array(
						'menu' => 'Menu principal',
						'menu_class' => 'header-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->