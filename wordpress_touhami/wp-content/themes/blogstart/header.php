<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogstart
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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="main-header">
		<!-- .header-top-->
		<?php
		$facebook = get_theme_mod( 'facebook' );
		$twitter = get_theme_mod( 'twitter' );
		$googleplus = get_theme_mod( 'googleplus' );
		$pinterest = get_theme_mod( 'pinterest' );
		$youtube = get_theme_mod( 'youtube' );
		if ( $facebook && $twitter && $googleplus && $pinterest && $youtube ) :
			?>
		<div class="header-top">
			<div class="container h-100">
				<div class="row justify-content-between align-items-center h-100">
					<div class="icons col col-sm-6">
						
					</div>
					<!-- .select-lang -->
				   <div class="col col-sm-6 d-flex justify-content-md-end">
					   <div class="icons col col-sm-6">
						<?php
						if ( ! empty( $facebook ) ) :
							?>
							<a href="<?php echo esc_url( $facebook ); ?>"><i class="fa fa-facebook"></i></a>
							<?php
						endif;
						if ( ! empty( $twitter ) ) :
							?>
							<a href="<?php echo esc_url( $twitter ); ?>"><i class="fa fa-twitter"></i></a>
							<?php
						endif;
						if ( ! empty( $googleplus ) ) :
							?>
							<a href="<?php echo esc_url( $googleplus ); ?>"><i class="fa fa-google-plus"></i></a>
							<?php
						endif;
						if ( ! empty( $pinterest ) ) :
							?>
							<a href="<?php echo esc_url( $pinterest ); ?>"><i class="fa fa-pinterest"></i></a>
							<?php
						endif;
						if ( ! empty( $youtube ) ) :
							?>
							<a href="<?php echo esc_url( $youtube ); ?>"><i class="fa fa-youtube"></i></a>
						<?php endif; ?>
					</div>
				   </div>
					<!-- //.select-lang -->
				</div>
			</div>
		</div>
	<?php endif; ?>
		<!-- //.header-top-->
		<!-- .site-branding -->
		<div class="site-branding" style="background-image: url(<?php echo esc_url( header_image() ); ?>)">
			<nav class="h-100 navbar">
				<div class="container h-100">
					<div class="row w-100">
						<?php
						if ( has_custom_logo() ) :
							the_custom_logo();
						else :
							if ( is_front_page() && is_home() ) :
								?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
						else :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						endif;
						$blogstart_description = get_bloginfo( 'description', 'display' );
						if ( $blogstart_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $blogstart_description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif;
						endif;
						?>
					</div>
				</div>
			</nav>
		</div>
		<!-- //.site-branding -->
		<nav class="main-nav navbar-expand-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="stellarnav" id="stellarnav">
							<!--navbar nav-->
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'container' => 'ul',
								)
							);
							?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="header-search-form">
						<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

