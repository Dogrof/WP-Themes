<?php
/**
* Template Name: Homepage
*/
get_header();

?>

<div class="homepage" id="fullpage">
  <section class="fullSection Start">
    <div class="video-container">
      <div class="embed-container">
        <iframe src="https://player.vimeo.com/video/392422614?api=1&background=1&autoplay=1&loop=1&autopause=0&muted=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
  </div>
    <div class="main-container">
        <div class="upper-block-emty"></div>
        <div class="center-block">
        	<img class="video-btn" src="<?= get_bloginfo('template_url') ?>/assets/images/button.svg" alt="">
          <h1 class="section-heading"><?php the_field('first_screen_text'); ?></h1>
        </div>
        <div class="scroll-down">
          <span><?php _e('Scroll down','Rafael'); ?></span>
          <img class="video-btn wow fadeInDown" data-wow-iteration="100" src="<?= get_bloginfo('template_url') ?>/assets/images/scrollDown.svg" alt="">
        </div>
    </div>
  </section>

  <section class="fullSection Who-we-are">
    <div class="main-container">
      <div class="inner-container">
        <div class="post-image">
          <img class="wow slideInLeft" src="<?= get_bloginfo('template_url') ?>/assets/images/whoWeAreImg.png" alt="">
        </div>
        <div class="post-content">
          <h1 class="section-heading "><?php the_field('second_screen_heading'); ?><span class="heading-back"><?php the_field('second_screen_heading'); ?></span></h1>
          <?php $typerText = wp_strip_all_tags(get_field('second_screen_text')); ?>
          <div class="content-text item-text-content"><?php the_field('second_screen_text'); ?>
            <?php if(wp_is_mobile()){ ?>
              <a class="mobile-more-details"><?php _e('Show More','Rafael'); ?><span><?php _e('Show Less','Rafael'); ?></span></a>
            <?php } ?>
          </div>
        <a class="more-details" href="<?php the_field('second_screen_link'); ?>"><?php _e('more details','Rafael') ?><img src="<?= get_bloginfo('template_url') ?>/assets/images/moreDetails.svg" alt=""></a>

        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Our-salons" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/thirdSectionBack.png">
    <div class="main-container">
      <div class="inner-container">
        <h1 class="section-heading line"><?php the_field('third_screen_heading'); ?><span class="heading-back"><?php the_field('third_screen_heading'); ?></span></h1>
        <div class="masonry-container wow slideInRight">
          <?php
          if( have_rows('third_screen_masonry') ):
              while ( have_rows('third_screen_masonry') ) : the_row();
              ?>
                  <div class="masonry-item">
                    <img src="<?php the_sub_field('third_screen_image'); ?>" alt="">
                    <div class="masonry-hidden">
                      <h2><?php the_sub_field('third_screen_heading'); ?></h2>
                      <a href="<?php the_sub_field('third_screen_page'); ?>"><?php _e('more details','Rafael') ?><img src="<?= get_bloginfo('template_url') ?>/assets/images/moreDetails.svg" alt=""></a>
                    </div>
                  </div>
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Hair-Solutions">
    <div class="main-container">
      <div class="inner-container">
        <h1 class="section-heading line"><?php the_field('fourth_screen_heading'); ?><span class="heading-back"><?php the_field('fourth_screen_heading'); ?></span></h1>
        <div class="content-columns-container wow slideInLeft">
          <?php
          if( have_rows('fourth_screen_items') ):
              while ( have_rows('fourth_screen_items') ) : the_row();
              ?>
              <div class="content-column-item">
              <?php if(wp_is_mobile()){ ?><div class="m-block"><?php } ?>

                <img src="<?php the_sub_field('fourth_screen_icon'); ?>" alt="">
                <h3><?php the_sub_field('fourth_screen_heading'); ?></h3>
              <?php if(wp_is_mobile()){ ?></div><?php } ?>

                <?php the_sub_field('fourth_screen_text'); ?>
                <a href="<?php the_sub_field('fourth_screen_link'); ?>" class="button"><?php _e('View','Rafael'); ?></a>
              </div>
                <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Be-with-us" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/fifthSectionBack.png">
    <div class="main-container">
      <div class="inner-container">
        <?php if(wp_is_mobile()){ ?>
          <h1 class="center-text"><?php the_field('fifth_screen_heading'); ?></h1>
        <?php } ?>
        <div class="column-images-container wow slideInRight">
          <?php
          if( have_rows('fifth_screen_images') ):
              while ( have_rows('fifth_screen_images') ) : the_row();
              ?>
              <img src="<?php the_sub_field('fifth_screen_image'); ?>" alt="">
              <?php
              endwhile;
          else :
          endif;
          ?>
          <h1 class="center-text"><?php the_field('fifth_screen_heading'); ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Raphael-method" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/sixthSectionBack.png">
    <div class="main-container">
      <div class="inner-container">
        <h1 class="section-heading line"><?php the_field('sixth_circles_heading'); ?><span class="heading-back"><?php the_field('sixth_circles_heading'); ?></span></h1>
        <div class="methods-container wow slideInLeft">
          <?php
          $counter == 0;
          if( have_rows('sixth_circles_block') ):
              while ( have_rows('sixth_circles_block') ) : the_row();
              $counter++;
              ?>
              <div class="methods-item">
                <img src="<?= get_bloginfo('template_url') ?>/assets/images/methodCircle.svg" alt="">
                <div class="method-content">
                  <h1 class="number"><?= $counter; ?></h1>
                  <p><?php the_sub_field('sixth_item_description'); ?></p>
                </div>
              </div>
              <?php
              endwhile;
          else :
          endif;
          ?>
          <img class="line" src="<?= get_bloginfo('template_url') ?>/assets/images/Line.svg">
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Before-After">
    <div class="main-container">
      <div class="inner-container">
        <div class="heading-block">
          <h1 class="section-heading line"><?php the_field('seventh_screen_heading'); ?><span class="heading-back"><?php the_field('seventh_screen_heading'); ?></span></h1>
          <div class="section-arrows">
            <div class="section-arrow-item prev"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-prev.svg" alt=""></div>
            <div class="section-arrow-item next"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-next.svg" alt=""></div>
          </div>
        </div>
        <div class="slider-image-container wow slideInRight">
          <?php
          if( have_rows('seventh_screen_slider') ):
              while ( have_rows('seventh_screen_slider') ) : the_row();
              ?>
                <img src="<?php the_sub_field('seventh_screen_image'); ?>" alt="">
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>

      </div>
    </div>
  </section>

  <section class="fullSection Clients" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/eightSectionBack.png">
    <div class="main-container">
      <div class="inner-container">
        <div class="heading-block">
          <h1 class="section-heading line"><?php the_field('eight_screen_heading'); ?><span class="heading-back"><?php the_field('eight_screen_heading'); ?></span></h1>
          <div class="section-arrows">
            <div class="section-arrow-item prev"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-prev.svg" alt=""></div>
            <div class="section-arrow-item next"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-next.svg" alt=""></div>
          </div>
        </div>
        <div class="slider-testimonials-container wow slideInLeft">
          <?php
          $testimonialCount == 0;
          if( have_rows('eight_screen_testimonials') ):
              while ( have_rows('eight_screen_testimonials') ) : the_row();
              $testimonialCount++;
              ?>
              <div class="testimonial-item">
                <div class="heading-block">
                  <h1>0<?php echo $testimonialCount; ?></h1>
                  <img src="<?= get_bloginfo('template_url') ?>/assets/images/testimonialIcon.svg" alt="">
                </div>
                <p><?php the_sub_field('testimonial_text'); ?></p>
                <div class="lower-block">
                  <img src="<?php the_sub_field('testimonial_author_image'); ?>" alt="">
                  <div class="author-content">
                    <h2><?php the_sub_field('testimonial_author_name'); ?></h2>
                    <span><?php the_sub_field('testimonial_author_position'); ?></span>
                  </div>
                </div>
              </div>
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Press">
    <div class="main-container">
      <div class="inner-container">
        <div class="heading-block">
          <h1 class="section-heading line"><?php the_field('nine_screen_heading'); ?><span class="heading-back"><?php the_field('nine_screen_heading'); ?></span></h1>
          <div class="section-arrows">
            <div class="section-arrow-item prev"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-prev.svg" alt=""></div>
            <div class="section-arrow-item next"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-next.svg" alt=""></div>
          </div>
        </div>
        <div class="branches-container wow slideInRight">
          <?php
          if( have_rows('nine_screen_items') ):
              while ( have_rows('nine_screen_items') ) : the_row();
              ?>
              <div class="branches-column-item" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?php the_sub_field('nine_screen_image'); ?>');">
                <div class="color-container">
                    <h1><?php the_sub_field('nine_screen_heading'); ?></h1>
                    <p><?php the_sub_field('nine_screen_text'); ?></p>
                    <a href="<?php the_sub_field('nine_screen_link'); ?>" class="button"><?php _e('Read','Rafael'); ?></a>
                </div>
              </div>
                <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="fullSection Call-now" style="background-repeat: no-repeat; background-position: center center; background-size: cover; background-image: url('<?= get_bloginfo('template_url') ?>/assets/images/tenSectionBack.png">
    <div class="main-container">
      <div class="inner-container">
        <div class="content-column wow slideInLeft">
          <h1><?php the_field('ten_screen_heading'); ?></h1>
          <h2><?php the_field('ten_screen_sub-heading'); ?></h2>
          <p><?php the_field('ten_screen_text'); ?></p>
          <a class="button" href="<?php the_field('ten_screen_link'); ?>"><?php _e('Call Now','Rafael'); ?></a>
        </div>
        <div class="image-column wow slideInRight">
          <img src="<?php the_field('ten_screen_image'); ?>">
        </div>
      </div>
    </div>
  </section>
  <section class="fullSection Contact-us">
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
  <?php if(wp_is_mobile()){ ?>
    <div class="mobile-map-container">
      <?php
        $mapShort = get_field('map_shortcode', 'options');
        echo do_shortcode("$mapShort");
      ?>
    </div>
  <?php } ?>
  <?php get_template_part('template-parts/custom-footer'); ?>

</div>
<?php

get_footer();
