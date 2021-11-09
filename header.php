<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('stretched'); ?>>

<div id="wrapper" class="clearfix">

	<!-- Header
	============================================= -->
	<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

		<div id="header-wrap">

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

				<?php echo wp_kses_post( site\header\get_logo() ); ?>

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="dark">

					<?php echo wp_kses_post( site\header\get_menu() ); ?>

					<!-- Top Cart
					============================================= -->
					<div id="top-cart">
						<a href="cart.html" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
					</div><!-- #top-cart end -->

					<!-- Top Search
					============================================= -->
					<div id="top-search">
						<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
						<form action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
						</form>
					</div><!-- #top-search end -->

				</nav><!-- #primary-menu end -->

			</div>

		</div>

	</header><!-- #header end -->
