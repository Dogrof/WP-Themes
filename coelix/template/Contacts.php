<?php
/**
* Template Name: Contacts
*/
get_header();

?>

  <section class="contact-us" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/contact-us-back.png');">
    <div class="section-inner container">
    <div class="contact-col">
      <h1><?php _e('Want to request a consultation or ask a question?','coelix'); ?></h1>
      <?= do_shortcode('[caldera_form id="CF5dd402aa12918"]') ?>
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
<?php

get_footer();
