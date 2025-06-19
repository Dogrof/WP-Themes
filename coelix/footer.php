<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="inner-container">
		<div class="footer-col">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->
		</div>
		<div class="footer-col">
			<nav id="footer-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'footer-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
		<div class="footer-col text">
			<a href="tel:+380987654321">+ 38 098 765 43 21</a>
			<a class="call-request">Request a call</a>
			<a href="mailto:coelix@gmail.com">coelix@gmail.com</a>
			<a href="skype:@yairlev">skype: @yairlev</a>
		</div>
		<div class="footer-col">
			<a href="facebook" class="footer-social-item" target="_blank"><img src="<?= get_bloginfo('template_url') ?>/assets/images/footer-facebook.svg" alt=""></a>
			<a href="linkedin" class="footer-social-item" target="_blank"><img src="<?= get_bloginfo('template_url') ?>/assets/images/footer-linkedin.svg" alt=""></a>
			<a href="instagram" class="footer-social-item" target="_blank"><img src="<?= get_bloginfo('template_url') ?>/assets/images/footer-instagram.svg" alt=""></a>
		</div>
		</div>
	</footer><!-- #colophon -->
	<div class="lower-space"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
