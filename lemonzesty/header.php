<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lemon_Zesty
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div>
	<br>
	<br>
</div>
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-medium-4-10">
			<nav class="uk-navbar uk-navbar-flip">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-left',  'menu_class' => 'uk-navbar-nav', 'container' => false ) ); ?>
			</nav>
		</div>
		<div class="uk-width-medium-2-10">
			<div class="uk-flex uk-height-1-1 uk-flex-middle uk-flex-center">
				<a href="<?php echo home_url( '/' ); ?>">
					<img src="<?php the_field('logo','option'); ?>">
				</a>
			</div>
		</div>
		<div class="uk-width-medium-4-10">
			<nav class="uk-navbar">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-right',  'menu_class' => 'uk-navbar-nav', 'container' => false ) ); ?>
			</nav>
		</div>
	</div>
</div>
