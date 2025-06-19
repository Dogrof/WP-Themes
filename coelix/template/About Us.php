<?php
/**
* Template Name: About Us
*/
get_header();

?>

<div class="template_wrapper aboutUsTemplate">
  <div class="about-content-wrapper site-content">
    <div class="about-content">
      <?php
      while ( have_posts() ) :
        if(wp_is_mobile()){
          the_post_thumbnail();
        }
        the_post();
        get_template_part( 'template-parts/content', 'page' );
      endwhile; // End of the loop.
      ?>
    </div>
    <div class="about-sidebar">
       <?php the_post_thumbnail(); ?>
       <?php echo do_shortcode('[caldera_form id="CF5daf6e1433b5a"]') ?>
    </div>
  </div>

</div> <!-- .template_wrapper .aboutUsTemplate -->

<?php

get_footer();
