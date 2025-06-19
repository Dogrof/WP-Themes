<footer id="colophon" class="site-footer fullSection fp-auto-height">
  <div class="main-container">
    <div class="footer-cols">
    <div class="footer-logo">
      <div class="site-branding">
        <?php
        the_custom_logo();
        ?>
      </div><!-- .site-branding -->
    </div>
    <div class="footer-menu">
      <nav id="site-navigation" class="main-navigation">
        <?php
        if(wp_is_mobile()){
          wp_nav_menu( array(
      			'theme_location' => 'mobile-menu',
      			'menu_id'        => 'mobile-menu',
      		) );
        }
        else{
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
          ) );
        }
        ?>
      </nav><!-- #site-navigation -->
    </div>
    <?php if(wp_is_mobile()) { ?>
      <img src="<?= get_bloginfo('template_url') ?>/assets/images/upperBtn.svg" alt="">
     <?php } ?>
   </div>
   <span>Powered by Coelix</span>
  </div>
</footer><!-- #colophon -->
