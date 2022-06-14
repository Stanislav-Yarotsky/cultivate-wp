<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cultivate
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class('page__body'); ?>>
	<?php wp_body_open(); ?>
	<div class="site-container">
		<div class="white-theme">
			<header class="header">
				<div class="container">
					<div class="header__flex">
						<a href="index" class="header__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo-dark" alt="Cultivate Logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" class="logo-white" alt="Cultivate Logo">
						</a>
						<div class="header__wrap">
							<nav class="header__nav nav-menu" data-menu>
								<?php
								wp_nav_menu([
									'theme_location'  => 'menu-1',
									'menu'            => '',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								]);
								?>
							</nav>
							<div class="header__btns">
								<a href="sign-in.html" class="btn-outline header__btn-outline btn-reset">Sign in</a>
								<a href="#" class="btn header__btn btn-reset">Free trial</a>
							</div>
						</div>
						<button class="burger" aria-label="Open menu" data-burger>
							<span class="burger__line"></span>
						</button>
					</div>
				</div>
			</header>
		</div>