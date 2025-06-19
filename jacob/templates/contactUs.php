<?php
/**
* Template Name: ContactUS
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();

?>

<div class="template_wrapper ContactUsTemplate" style="background-image: url(<?php echo get_bloginfo('url'); ?>/wp-content/themes/celebration/assets/images/celebrationBg.webp")>

  <div class="contactUsPage">
    <div class="container">
      <?php
      $args = array(
        'delimiter' => '/',
        'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'woothemes' ) . '</span>'
      );
      woocommerce_breadcrumb();
      ?>
      <div class="headingBanner"><img src="<?= get_bloginfo('template_url') ?>/assets/images/ContactBanner.jpg" alt=""></div>
      <div class="content_row">
        <div class="contactFeatures">
          <div class="contactFeaturesRow">
            <div class="contactFeaturesCol">
              <h3><?php the_field('first_feature_heading'); ?></h3>
              <p><?php the_field('first_feature_content'); ?></p>
            </div>
            <div class="contactFeaturesColImg">
              <img src="<?php the_field('first_feature_image'); ?>" alt="">
            </div>
          </div>
          <div class="contactFeaturesRow">
            <div class="contactFeaturesCol">
              <h3><?php the_field('second_feature_heading'); ?></h3>
              <p><?php the_field('second_feature_content'); ?></p>
            </div>
            <div class="contactFeaturesColImg">
              <img src="<?php the_field('second_feature_image'); ?>" alt="">
            </div>
          </div>
          <div class="contactFeaturesRow">
            <div class="contactFeaturesCol">
              <h3><?php the_field('third_feature_heading'); ?></h3>
              <p><?php the_field('third_feature_content'); ?></p>
            </div>
            <div class="contactFeaturesColImg">
              <img src="<?php the_field('third_feature_image'); ?>" alt="">
            </div>
          </div>
          <div class="contactFeaturesRow">
            <div class="contactFeaturesCol">
              <h3><?php the_field('fourth_feature_heading'); ?></h3>
              <p><?php the_field('fourth_feature_content'); ?></p>
            </div>
            <div class="contactFeaturesColImg">
              <img src="<?php the_field('fourth_feature_image'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="contactForm wow fadeInRight">
          <h1 class="formHeading"><?php the_field('form_heading'); ?></h1>
          <p class="formDescription"><?php the_field('form_description'); ?></p>
          <?php echo do_shortcode('[caldera_form id="CF5d6f6e369bdb3"]'); ?>
        </div> <!-- contactForm -->
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.4523891028075!2d34.79973731502505!3d32.084056981186755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4bbf52969b17%3A0xaeb826bf17ccc0d8!2zVHV2YWwgMjEsIFJhbWF0IEdhbiwg0JjQt9GA0LDQuNC70Yw!5e0!3m2!1sru!2sua!4v1571059446075!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>

</div>


<?php

get_footer();
