<?php
/**
* Template Name: Single Branch
*/
get_header();

?>

<div class="branches" id="fullpage-other">
  <section class="first-back fullSection-other" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?php the_field('branch_background'); ?>">
    <div class="branch-block main-container">
      <div class="branch-description wow slideInRight">
        <h1 class="branch-heading"><?php the_field('branch_heading'); ?></h1>
        <p class="branch-description"><div class="item-text-content"><?php the_field('branch_description'); ?>
          <?php if(wp_is_mobile()){ ?>
            <a class="mobile-more-details"><?php _e('Show More','Rafael'); ?><span><?php _e('Show Less','Rafael'); ?></span></a>
          <?php } ?>

        </div></p>
      </div>
      <div class="branch-map wow slideInLeft">
        <?php
          $mapShort = get_field('branch_map');
          echo do_shortcode("$mapShort");
        ?>
        <div class="branch-map-container">
          <div class="branch-map-address">
            <h2><?php the_field('branch_heading'); ?></h2>
            <?php the_field('branch_address'); ?>
            <a href="<?php the_field('branch_link'); ?>" class="button"><?php _e('View','Rafael') ?></a>
            <img src="<?= get_bloginfo('template_url') ?>/assets/images/map-btn.png" class="map-btn">
          </div>
        </div>
      </div>
    </div>
  </section>

<?php if( get_field('branch_images_section') ): ?>
  <section class="branches-images main-container fullSection-other wow slideInLeft">
    <?php
    if( have_rows('branch_images_section') ):
        while ( have_rows('branch_images_section') ) : the_row();
        ?>
            <img src="<?php the_sub_field('branch_image_item'); ?>" alt="">
        <?php
        endwhile;
    else :
    endif;
    ?>
  </section>
<?php endif; ?>

<?php if( get_field('branch_masonry_section') ): ?>
  <section class="Our-salons main-container fullSection-other">
    <h1 class="section-heading line"><?php _e('Our Salons','Rafael'); ?><span class="heading-back"><?php _e('Our Salons','Rafael'); ?></span></h1>
    <div class="masonry-container wow slideInRight">
      <?php
      if( have_rows('branch_masonry_section') ):
          while ( have_rows('branch_masonry_section') ) : the_row();
          ?>
              <div class="masonry-item">
                <img src="<?php the_sub_field('branch_item_image'); ?>" alt="">
                <div class="masonry-hidden">
                  <h2><?php the_sub_field('branch_item_heading'); ?></h2>
                  <a href="<?php the_sub_field('branch_item_link'); ?>"><?php _e('more details','Rafael') ?><img src="<?= get_bloginfo('template_url') ?>/assets/images/moreDetails.svg" alt=""></a>
                </div>
              </div>
          <?php
          endwhile;
      else :
      endif;
      ?>
    </div>
  </section>
<?php endif; ?>


<?php if( get_field('contact_us_section') == 'yes' ): ?>

  <section class="fullSection-other Contact-us">
    <?php
    if(!wp_is_mobile()){
      $mapShort = get_field('map_shortcode', 'options');
      echo do_shortcode("$mapShort");
    }
    ?>
      <div class="map-content-container">
        <div class="main-container" <?php if(wp_is_mobile()) { ?> style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/mobileContactUsBack.png');" <?php } ?> >
          <div class="inner-container">
            <h1 class="section-heading line"><?php the_field('contact_us_heading', 'options'); ?><span class="heading-back"><?php the_field('contact_us_heading', 'options'); ?></span></h1>
            <div class="form-container">
              <div class="section-col form">
                <?php
                if(ICL_LANGUAGE_CODE == en){
                      echo do_shortcode('[caldera_form id="CF5e38045d0df1c"]');
                    }
                    elseif(ICL_LANGUAGE_CODE == he){
                      echo do_shortcode('[caldera_form id="CF5e3d364f8200a"]');
                    }
                    elseif(ICL_LANGUAGE_CODE == ru){
                      echo do_shortcode('[caldera_form id="CF5e3d38276a254"]');
                    } ?>
              </div>

              <div class="section-col credentials">
                <a class="phone" href="tel:<?php the_field('contact_us_phone', 'options'); ?>">Tel: <?php the_field('contact_us_phone', 'options'); ?> </a>
                <a class="mail" href="mailto:<?php the_field('contact_us_mail', 'options'); ?>">Email: <?php the_field('contact_us_mail', 'options'); ?> </a>
                <p><?php the_field('contact_us_address', 'options'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <img src="<?= get_bloginfo('template_url') ?>/assets/images/map-btn.png" class="map-btn">
      </div>
  </section>

<?php endif; ?>
<?php get_template_part('template-parts/custom-footer'); ?>
</div>
<?php

get_footer();
