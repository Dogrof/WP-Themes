<?php
/**
* Template Name: About Us
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();

?>

<div class="template_wrapper aboutUsTemplate">

  <div class="About_Container">
    <div class="content_section">
      <div class="info_first_row">
        <div class="content wow fadeInRight">
          <?php
          $args = array(
            'delimiter' => '/',
            'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'woothemes' ) . '</span>'
          );
          woocommerce_breadcrumb();
          ?>
          <div class="title">

            <span class="name"><?php the_field('first_title_name'); ?></span>
          </div> <!-- title -->
          <div class="text">
            <p><?php the_field('first_text_area'); ?></p>
          </div> <!-- text-->
        </div> <!-- content -->
        <div class="imag_Section wow fadeInLeft">
          <div class="wrap">
            <img src="<?php echo get_field('first_image')['url']; ?>" />
          </div>
        </div> <!-- imag_Section -->
      </div> <!-- info_first_row -->
      <div class="info_second_row">
        <div class="imag_Section revers wow fadeInRight">
          <div class="wrap">
            <img src="<?php echo get_field('second_image')['url']; ?>" />
          </div> <!-- wrap -->
        </div> <!-- imag_Section -->
        <div class="content wow fadeInLeft">
          <div class="title">
            <span class="name"><?php the_field('second_title_name'); ?></span>
          </div> <!-- title -->
          <div class="text">
            <p><?php the_field('second_text_area'); ?></p>
          </div> <!-- text-->
        </div> <!-- content -->
      </div> <!-- info_second_row -->
    </div> <!-- content_section -->
    <?php echo do_shortcode('[ProdsAndPostsSection]'); ?>
  </div> <!-- About_Container -->


</div>

<?php

get_footer();
