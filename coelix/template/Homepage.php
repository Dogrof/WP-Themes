<?php
/**
* Template Name: Homepage
*/
get_header();

?>

<div class="homepage">
  <section class="welcome" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/img/welcome-back.png');">
    <div class="inner-container">
      <img src="" alt="">
      <span></span>
      <h1></h1>
      <p></p>
      <a href=""></a>
    </div>
  </section>

  <section class="about-us" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/img/about-us-back.png');">
    <div class="inner-container">
      <h3 class="section-name"><?php _e('About Us','coelix'); ?></h5>
      <h1 class="section-heading"><?php _e('Why Clients Choose Coelix?','coelix'); ?></h1>
      <div class="about-us-container">
        <div class="about-us-item">
          <div class="about-us-item-col"><img src="" alt=""></div>
          <div class="about-us-item-col description">
            <span></span>
            <h3></h3>
            <p></p>
          </div>
        </div>
        <div class="about-us-item"></div>
        <div class="about-us-item"></div>
        <div class="about-us-item"></div>
      </div>
    </div>
  </section>

  <section class="branding" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/img/services-back.png');">
    <div class="inner-container">
      <h3 class="section-name"><?php _e('Services','coelix'); ?></h5>
      <h1 class="section-heading"><?php _e('What we do','coelix'); ?></h1>
      <div class="branding-container">
        <div class="branding-col">
          <div class="branding-item">
            <img src="" alt="">
            <h3></h3>
          </div>
        </div>
        <div class="branding-col">
          <div class="branding-description">
            <div class="upper-row"><img src="" alt=""><h2></h2></div>
            <p></p>
          </div>

        </div>
        </div>
      </div>
  </section>

  <section class="portfolio" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/img/projects-back.png');">
    <div class="inner-container">
      <h3 class="section-name"><?php _e('Portfolio','coelix'); ?></h5>
        <div class="section-upper">
          <h1 class="section-heading"><?php _e('Our latest projects','coelix'); ?></h1>
          <div class="portfolio-buttons">
            <div class="button prev"></div>
            <div class="button next"></div>
          </div>
        </div>
      <div class="portfolio-container">
        <div class="tab-container">
          <a href="" class="tab-item"></a>
          <a href="" class="tab-item"></a>
          <a href="" class="tab-item"></a>
          <a href="" class="tab-item"></a>
        </div>
        <div class="projects-container">
          <div class="project-item">
            <img src="" alt="">
            <span></span>
            <h3></h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/img/contact-us-back.png');">
    <div class="inner-container">
      <h1><?php _e('Want to request a consultation or ask a question?','coelix'); ?></h1>
      <div class="contact-col">
        <?php do_shortcode('[caldera_form id="CF5dd402aa12918"]') ?>
      </div>
      <div class="contact-col">
        <div class="contact-us-text">
          <a href="tel:+380987654321">+ 38 098 765 43 21</a>
    			<a href="mailto:coelix@gmail.com">coelix@gmail.com</a>
    			<a href="skype:@yairlev">skype: @yairlev</a>
        </div>
      </div>
    </div>
  </section>

</div>
<?php

get_footer();
