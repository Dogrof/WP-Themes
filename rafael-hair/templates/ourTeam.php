<?php
/**
* Template Name: Our Team
*/
get_header();

?>

<div class="our-team" id="fullpage-other">
    <section class="first-back fullSection-other" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?php the_field('team_background'); ?>">
      <div class="main-container">
        <h1 class="first-back-heading"><?php the_title(); ?></h1>
        <div class="team-block wow slideInRight">
          <?php
          if( have_rows('team_section') ):
              while ( have_rows('team_section') ) : the_row();
              ?>
              <div class="team-item">
                <img src="<?php the_sub_field('team_image'); ?>">
                <div class="team-content">
                  <h2><?php the_sub_field('team_name'); ?> <span><?php the_sub_field('team_second_name'); ?></span></h2>
                  <span class="team-position"><?php the_sub_field('team_position'); ?></span>
                </div>
              </div>

              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
    </section>

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
