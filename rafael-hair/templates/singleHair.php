<?php
/**
* Template Name: Single Hair
*/
get_header();

?>

<div class="single-hair">
  <div id="fullpage-other">
  <?php
    if( have_rows('content_part') ):
        while ( have_rows('content_part') ) : the_row();
          ?>
          <section class="content-part fullSection-other">
            <div class="single-hair-container wow fadeIn <?php if( get_sub_field('image_position') == 'left' ){echo 'left-img';}?>">
              <div class="text-block">
                <h1 class="section-heading line"><?php the_sub_field('heading'); ?><span class="heading-back"><?php the_sub_field('heading'); ?></span></h1>
                <div class="item-text-content">
                  <?php the_sub_field('content'); ?>
                  <?php if(wp_is_mobile()){ ?>
                    <a class="mobile-more-details"><?php _e('Show More','Rafael'); ?><span><?php _e('Show Less','Rafael'); ?></span></a>
                  <?php } ?>

                </div>
                <div class="buttons-part">
                  <?php
                  if( have_rows('buttons_container') ):
                      while ( have_rows('buttons_container') ) : the_row();
                      ?>
                      <a class="single-hair-btn button" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                      <?php
                      endwhile;
                  else :
                  endif;
                  ?>
                </div>
                <?php if( get_sub_field('video') ): ?>
                  <div class="video-part">
                    <?php $formatLink = get_sub_field('video');
                    $formatLink = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                		"<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>", $formatLink );
                    echo $formatLink;
                    ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="image-block">
                <img src="<?php the_sub_field('image'); ?>">
              </div>
            </div>
          </section>
          <?php
        endwhile;
    else :
    endif;
  ?>


<?php if( get_field('slider_section') ): ?>
  <section class="fullSection-other Before-After">
    <div class="main-container">
        <div class="heading-block">
          <h1 class="section-heading line"><?php the_field('slider_heading'); ?><span class="heading-back"><?php the_field('slider_heading'); ?></span></h1>
          <div class="section-arrows">
            <div class="section-arrow-item prev"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-prev.svg" alt=""></div>
            <div class="section-arrow-item next"><img src="<?= get_bloginfo('template_url') ?>/assets/images/arrow-next.svg" alt=""></div>
          </div>
        </div>
        <div class="slider-image-container wow fadeIn">
          <?php
          if( have_rows('slider_section') ):
              while ( have_rows('slider_section') ) : the_row();
              ?>
                <img src="<?php the_sub_field('slider_item'); ?>" alt="">
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
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
</div>
<?php

get_footer();
