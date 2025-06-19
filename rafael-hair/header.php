<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rafael_Hair
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rafael-hair' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="main-container">
		<div class="upper-row flex">
			<div class="language-changer">
				<?php do_action('wpml_add_language_selector'); ?>
			</div>
		</div>
		<div class="lower-row flex flex-sides">
			<?php if(wp_is_mobile()){ ?>
				<div class="header-col mobile-menu">
					<img class="mobile-cross" src="<?= get_bloginfo('template_url') ?>/assets/images/mobile-cross.svg" alt="">
					<img class="mobile-bars active" src="<?= get_bloginfo('template_url') ?>/assets/images/mobile-bars.svg" alt="">
				</div>
			<?php } ?>
			<div class="header-col logo">
				<div class="site-branding">
					<a href="<?= home_url() ?>"><div id="lottie"></div></a>
				</div><!-- .site-branding -->
			</div>
			<div class="header-col menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'main-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="header-col socials">
				<a href="youtube.com" class="socials-item">
					<img src="<?= get_bloginfo('template_url') ?>/assets/images/youtubeIcon.svg" alt="">
				</a>
				<a href="instagram.com" class="socials-item">
					<img src="<?= get_bloginfo('template_url') ?>/assets/images/instaIcon.svg" alt="">
				</a>
				<a href="googleplus.com" class="socials-item">
					<img src="<?= get_bloginfo('template_url') ?>/assets/images/gplusIcon.svg" alt="">
				</a>
				<a href="facebook.com" class="socials-item">
					<img src="<?= get_bloginfo('template_url') ?>/assets/images/facebookIcon.svg" alt="">
				</a>
			</div>
			<?php if(wp_is_mobile()){ ?>
				<div class="header-col lang">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
			<?php } ?>


		</div>


	</div>
	</header><!-- #masthead -->
<div class="mobile-side-menu">
	<div class="menu-section">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'mobile-menu',
			'menu_id'        => 'mobile-menu',
		) );
		?>
	</div>
	<div class="socials-block">
		<a href="instagram.com" class="socials-item">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/menu-insta.svg" alt="">
		</a>
		<a href="youtube.com" class="socials-item">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/menu-youtube.svg" alt="">
		</a>
		<a href="googleplus.com" class="socials-item">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/menu-google.svg" alt="">
		</a>
		<a href="facebook.com" class="socials-item">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/menu-facebook.svg" alt="">
		</a>
	</div>
</div>
	<div id="content" class="site-content">
