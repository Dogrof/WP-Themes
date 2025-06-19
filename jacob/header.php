<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Celebration
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'celebration' ); ?></a> -->

	<header id="masthead" class="site-header">


		<div class="mainHeader">

			<div class="container mainHeaderContainer">
				<div class="siteSearch">
					<form action="<?php echo get_bloginfo('url'); ?>" class="siteSearchForm">
						<input type="hidden" name="post_type" value="product">
						<input autocomplete="off" type="text" name="s" placeholder="חיפוש" value="<?php echo get_search_query(); ?>">
						<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt=""></button>
						<div class="searchResult"></div>
					</form> <!-- .siteSearchForm -->
				</div> <!-- .siteSearch -->
				<a href="<?php echo get_bloginfo('url'); ?>" class="logo">
					<div class="title">
            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logoMain.png" alt="<?php echo get_bloginfo('name'); ?>">
					</div> <!-- .title -->
				</a> <!-- .logo -->

				<div class="phoneAndSocial">
					<div class="curChanger">
						<?= do_shortcode('[woocs show_flags=0 txt_type="txt_type" style=1]'); ?>
					</div>
					<div class="phoneSection">
						<span class="text">טלפון להזמנות : </span><span class="tel"><?php the_field('telphone_number', 'options') ?></span>
					</div>
					<div class="socialSection">
						<a href="https://www.youtube.com/channel/UC3s4ccsguz-Frp3nnttk1eA"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtubeIcon.png" alt="youtube"></a>
						<a href="https://twitter.com/JacobDiamonds1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="twitter"></a>
						<a href="https://www.facebook.com/jacobmazrai/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="facebook"></a>
						<a href="https://www.instagram.com/jacob_diamonds_/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt="instagram"></a>
					</div>
				</div>

			</div> <!-- .mainHeaderContainer -->

		</div> <!-- .mainHeader -->



		<nav id="site-navigation" class="main-navigation">
			<div class="container mainNavigationContainer">
				<?php
				wp_nav_menu( array(
					'theme_location'  => 'our-menu',
					'menu' => 'Our Menu',
				) );
				?>
				<div class="activeLine"></div>
			</div>
		</nav><!-- #site-navigation -->

		<div class="mobileHeader">
			<div class="mobileHeaderTopLine">
				<div class="row">
					<div class="burgerButton">
						<div class="burgerIcon">
							<div class="burgerLine"></div>
						</div>
					</div>

					<div class="logo">
						<!-- <span class="title"><?php echo get_bloginfo('name'); ?></span> -->
						<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoJacob.svg" ></a>
					</div>

					<div class="searchAndProfile">
						<div class="searchIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt=""></div>
					</div>
				</div>
				<div class="searchBar">
						<form role="search" class="searchWrap" method="get" action="<?php echo home_url( '/' ) ?>" >
							<input type="hidden" name="post_type" value="product">
							<input autocomplete="off" type="text" name="s" placeholder="חיפוש" value="<?php echo get_search_query(); ?>">
							<button type="submit" name="button"><i class="fas fa-search"></i></button>
							</form>
				</div> <!-- .searchBar -->
			</div>
			<div class="fullscreenMenu">
				<div class="mainMenu">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'our-menu',
						'menu' => 'Our Menu',
					) );
					?>
				</div> <!-- .mainMenu -->
				<div class="slideLine">
					<ul>
						<?php
						if( have_rows('pages_list', 'options') ):
							while ( have_rows('pages_list', 'options') ) : the_row();
							?>
							<a href="<?php echo get_sub_field('custompage'); ?>"><?php echo get_sub_field('pagename'); ?></a>
							<?php
						endwhile;
						else :
							echo "go to admin panel and setting this section in Theme Options";
						endif;
						?>
					</ul>
				</div> <!-- .slideLine -->
			</div> <!-- .fullscreenMenu -->
		</div> <!-- .mobileHeader -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
