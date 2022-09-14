<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package irax_2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="header">
			<div class="header__logo">
				<svg class="header__svg" id="Logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 515.71 255.28">
					<defs>
						<style>
							.cls-1 {
								fill: url(#linear-gradient);
							}

							.cls-2 {
								fill: #2f2b33;
							}
						</style>
						<linearGradient id="linear-gradient" x1="589.16" y1="36.29" x2="342.33" y2="317.33" gradientUnits="userSpaceOnUse">
							<stop offset="0" stop-color="#5bbfea" />
							<stop offset="1" stop-color="#a8fad6" />
						</linearGradient>
					</defs>
					<g id="Layer_1-2">
						<g>
							<g>
								<path class="cls-2" d="M52.08,228.17H2.91V70.76H52.08V228.17Z" />
								<path class="cls-2" d="M163.18,115.13l-16.15-1.16c-15.42,0-25.31,4.85-29.68,14.55v99.65h-49.03V70.76h45.97l1.6,20.22c8.24-15.42,19.73-23.13,34.48-23.13,5.24,0,9.79,.58,13.67,1.75l-.87,45.53Z" />
								<path class="cls-2" d="M265.15,228.17c-1.75-3.2-3.3-7.9-4.66-14.11-9.02,11.35-21.63,17.02-37.82,17.02-14.84,0-27.45-4.49-37.82-13.46-10.38-8.97-15.57-20.24-15.57-33.82,0-17.07,6.3-29.97,18.91-38.7,12.61-8.73,30.94-13.09,54.99-13.09h15.13v-8.33c0-14.52-6.25-21.78-18.77-21.78-11.64,0-17.46,5.75-17.46,17.25h-49.02c0-15.21,6.47-27.56,19.42-37.05,12.95-9.49,29.46-14.24,49.53-14.24s35.93,4.9,47.57,14.69c11.64,9.8,17.6,23.23,17.89,40.3v69.68c.19,14.45,2.42,25.51,6.69,33.17v2.47h-49.03Zm-30.69-32.01c6.11,0,11.18-1.31,15.2-3.93,4.02-2.62,6.91-5.58,8.65-8.87v-25.17h-14.26c-17.07,0-25.6,7.66-25.6,22.99,0,4.46,1.5,8.07,4.51,10.84,3,2.76,6.84,4.15,11.49,4.15Z" />
								<path class="cls-2" d="M398.41,114.11l22.84-43.35h50.92l-41.46,76.66,43.5,80.74h-51.21l-24.73-46.55-24.29,46.55h-51.5l43.64-80.74-41.32-76.66h51.5l22.11,43.35Z" />
							</g>
							<path class="cls-1" d="M508.93,255.28c-3.74,0-6.78-3.03-6.78-6.78V6.78c0-3.74,3.03-6.78,6.78-6.78s6.78,3.03,6.78,6.78V248.5c0,3.74-3.03,6.78-6.78,6.78Z" />
							<path class="cls-2" d="M0,30.18c0-6.98,2.52-12.7,7.56-17.17,5.04-4.46,11.59-6.69,19.64-6.69s14.59,2.23,19.64,6.69c5.04,4.46,7.56,10.18,7.56,17.17s-2.52,12.71-7.56,17.17c-5.04,4.46-11.59,6.69-19.64,6.69s-14.6-2.23-19.64-6.69C2.52,42.88,0,37.16,0,30.18Z" />
						</g>
					</g>
				</svg>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="header__nav">
				<a href="#about" class="header__nav-button header__nav-button--a button button--dark">About us</a>
				<a href="#contact" class="header__nav-button header__nav-button--b button button--bright">Contact us</a>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->