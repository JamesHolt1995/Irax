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
				<svg id="Group_7" data-name="Group 7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 116 57.422">
					<defs>
						<clipPath id="clip-path">
							<rect id="Rectangle_2" data-name="Rectangle 2" width="116" height="57.422" fill="#fff" />
						</clipPath>
						<clipPath id="clip-path-2">
							<path id="Path_4" data-name="Path 4" d="M503.675,0a1.524,1.524,0,0,0-1.524,1.524V55.9a1.524,1.524,0,0,0,3.049,0V1.525A1.524,1.524,0,0,0,503.675,0Z" transform="translate(-502.151 -0.001)" fill="none" />
						</clipPath>
						<linearGradient id="linear-gradient" x1="-2.035" y1="1.215" x2="-2.03" y2="1.215" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#5bc0eb" />
							<stop offset="0.999" stop-color="#a9fbd7" />
							<stop offset="1" stop-color="#a9fbd7" />
						</linearGradient>
						<clipPath id="clip-path-3">
							<rect id="Rectangle_4" data-name="Rectangle 4" width="116" height="57.422" fill="none" />
						</clipPath>
					</defs>
					<path id="Path_6" data-name="Path 6" d="M0,0H11.06V35.405H0Z" transform="translate(0.654 15.917)" fill="#fff" />
					<g id="Group_2" data-name="Group 2">
						<g id="Group_1" data-name="Group 1" clip-path="url(#clip-path)">
							<path id="Path_1" data-name="Path 1" d="M89.663,78.488l-3.632-.262q-5.2,0-6.675,3.272v22.415H68.328V68.508h10.34l.36,4.548q2.781-5.2,7.755-5.2a10.752,10.752,0,0,1,3.076.393Z" transform="translate(-52.959 -52.591)" fill="#fff" />
							<path id="Path_2" data-name="Path 2" d="M190.851,103.914a12.436,12.436,0,0,1-1.047-3.174,10.254,10.254,0,0,1-8.508,3.829,12.559,12.559,0,0,1-8.508-3.027,9.63,9.63,0,0,1-3.5-7.607q0-5.759,4.254-8.7t12.369-2.945h3.4V80.41q0-4.9-4.221-4.9-3.927,0-3.927,3.88H170.138a9.884,9.884,0,0,1,4.368-8.334,18.358,18.358,0,0,1,11.142-3.2q6.773,0,10.7,3.3a11.49,11.49,0,0,1,4.025,9.064V95.9a16.043,16.043,0,0,0,1.505,7.461v.556Zm-6.9-7.2a6.152,6.152,0,0,0,3.42-.883,5.54,5.54,0,0,0,1.947-2V88.175h-3.207q-5.76,0-5.759,5.17a3.156,3.156,0,0,0,1.014,2.438,3.67,3.67,0,0,0,2.585.932" transform="translate(-131.209 -52.591)" fill="#fff" />
							<path id="Path_3" data-name="Path 3" d="M339.552,80.515l5.137-9.751h11.453l-9.326,17.244,9.784,18.161H345.082L339.519,95.7l-5.465,10.471H322.471l9.817-18.161-9.293-17.244h11.584Z" transform="translate(-249.936 -54.847)" fill="#fff" />
						</g>
					</g>
					<g id="Group_4" data-name="Group 4" transform="translate(112.951 0)">
						<g id="Group_3" data-name="Group 3" clip-path="url(#clip-path-2)">
							<rect id="Rectangle_3" data-name="Rectangle 3" width="45.156" height="40.183" transform="matrix(0.66, -0.751, 0.751, 0.66, -28.471, 32.417)" fill="#FF0FA7" />
						</g>
					</g>
					<g id="Group_6" data-name="Group 6">
						<g id="Group_5" data-name="Group 5" clip-path="url(#clip-path-3)">
							<path id="Path_5" data-name="Path 5" d="M0,11.684A4.922,4.922,0,0,1,1.7,7.823,6.421,6.421,0,0,1,6.119,6.318a6.423,6.423,0,0,1,4.418,1.505,4.924,4.924,0,0,1,1.7,3.861,4.923,4.923,0,0,1-1.7,3.861,6.42,6.42,0,0,1-4.418,1.505A6.418,6.418,0,0,1,1.7,15.546,4.921,4.921,0,0,1,0,11.684" transform="translate(0 -4.897)" fill="#fff" />
						</g>
					</g>
				</svg>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="header__nav">
				<div class="header__menu-wrapper">
					<?php $location = 'header-navigation' ?>
					<?php wp_nav_menu(array('theme_location' => $location, 'container' => false, 'menu_class' => 'header__menu')); ?>
				</div>


				<a href="#contact" class="header__nav-button button button--bright">Contact us</a>

				<div id="burger-menu" class="header__burger">
					<div class="burger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->