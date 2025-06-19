<?php
/**
* Template Name: Homepage 2
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
$deskUsr = 'Chrome'; $mobUsr = 'Android';
$mystring = $_SERVER['HTTP_USER_AGENT'];
?>
<style>
section.banners.homepage .imageBlock a{
    background-color: transparent;
    border-radius: 3px;
    border: 1px solid #000;
    font-size: 18px;
    line-height: 21px;
    padding: 10px;
    text-transform: uppercase;
    text-align: center;
    color: #000;
    text-decoration: none;  
        max-height: 42px;
}
section.banners.homepage .imageBlock.third{
    max-width: 276px;
    width: 100%;
}
section.banners.homepage .imageBlock.second{
    max-width: 550px;
    width: 100%;
    margin: 0 12px;
}
section.banners.homepage .imageBlock.first {
    max-width: 380px;
    width: 100%;
}
section.banners.homepage .imageBlock.fourth {
    width: 100%;
    max-width: 830px;
    margin-right: 12px;
}
section.banners.homepage .imageBlock.fifth{
    width: 100%;
    max-width: 390px;
}
section.banners.homepage .imageBlock{
    height:350px;
    display:inline-flex;
    margin-bottom:12px;
}
@media(max-width:768px){
    section.banners.homepage .imageBlock a{
        line-height: 14px;
        font-size: 14px;
        padding:6px;
    }
    
    section.banners.homepage .imageBlock{
        flex-basis: calc(50% - 3px);
        height: 170px; 
        justify-content:flex-start;
    }
    section.banners.homepage .imageBlock.fourth{
        flex-basis:100%;
        margin:0;
    }
    section.banners.homepage .imageBlock.fourth a{
        line-height: 11px;
        max-width: 130px;
    }
    section.banners.homepage .imageBlock.second{
        margin:0;
    }
    
}




</style>


<div class="template_wrapper homepageTemplate">

  <div class="firstScreenSlider wow fadeIn">
    <div class="slick_slider">
      <!-- homepage_slider -->
      <?php
      if( have_rows('homepage_slider') ):
          while ( have_rows('homepage_slider') ) : the_row();
            ?>
            <div>
              <div class="slider_screen" style="background-repeat: no-repeat; background-position: center center;background-size: cover; background-image: url('<?php echo get_sub_field('slider_img')['url']; ?>);">
                <div class="txtBlock">
                  <span class="title"><?php the_sub_field('slider_title'); ?></span>
                  <span class="content"><?php the_sub_field('slider_content'); ?></span>
                  <a href="<?= home_url('/product-category/טבעות-אירוסין/'); ?>" class="banner-button">טבעות אירוסין</a>
                </div>
              </div>
            </div>
            <?php
          endwhile;

      else :

      endif;

      ?>
    </div>

    <div class="banner-row">
      <p>קניה ישירה מבורסת היהלומים >> ללא פערי תיווך >> אחריות לכל החיים >> סטנדרט הכי גבוה.  <a href="https://jacobdiamonds.co.il/למה-אנחנו-2/">לפרטים נוספים לחץ</a></p>
    </div>
  </div> <!-- .firstScreenSlider -->

<section class="prodCarousel homepage">
    <div class="container wow fadeIn">
        <h1 class="sectionHeading">תכשיטים חדשים </h1>
        <div class="carouselContent">
            <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 15 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                        <div class="carouselItem">
                              <div>
                              <a class="carouselImage" href="<?php echo get_permalink( $loop->post->ID ) ?>">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="150px" height="150px" />'; ?>
                              </a>
                              <a class="carouselText" href="<?php echo get_permalink( $loop->post->ID ) ?>"><h3><?php the_title(); ?></h3></a>
                              </div>
                              <a class="carousel button" href="<?php echo get_permalink( $loop->post->ID ) ?>">לדף המוצר</a>
                        </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div><!--/.products-->
    </div> <!-- .container -->
</section>

  <section class="banners homepage">
      <div class="imageBlock third" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/Banners1r3.<?php if(strpos($mystring, $deskUsr) !== false){ echo "webp"; } else{ echo "png"; } ?>);">
          <a href="https://jacobdiamonds.co.il/product-category/%D7%AA%D7%9B%D7%A9%D7%99%D7%98%D7%99%D7%9D/%D7%98%D7%91%D7%A2%D7%95%D7%AA-%D7%99%D7%94%D7%9C%D7%95%D7%9E%D7%99%D7%9D-%D7%9E%D7%A2%D7%95%D7%A6%D7%91%D7%95%D7%AA/"><span>טבעות יהלומים מעוצבות </span></a>
      </div>
       <div class="imageBlock second" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/Banners1r2.<?php if(strpos($mystring, $deskUsr) !== false){ echo "webp"; } else{ echo "png"; } ?>);">
          <a href="https://jacobdiamonds.co.il/product-category/%D7%AA%D7%9B%D7%A9%D7%99%D7%98%D7%99%D7%9D/%D7%A9%D7%A8%D7%A9%D7%A8%D7%90%D7%95%D7%AA-%D7%95%D7%AA%D7%9C%D7%99%D7%95%D7%A0%D7%99%D7%9D/"><span>שרשראות ותליונים </span></a>
      </div>
       <div class="imageBlock first" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/Banners1r1.<?php if(strpos($mystring, $deskUsr) !== false){ echo "webp"; } else{ echo "png"; } ?>);">
          <a href="https://jacobdiamonds.co.il/product-category/%D7%AA%D7%9B%D7%A9%D7%99%D7%98%D7%99%D7%9D/%D7%A2%D7%92%D7%99%D7%9C%D7%99-%D7%99%D7%94%D7%9C%D7%95%D7%9E%D7%99%D7%9D/"><span>עגילי יהלומים </span></a>
      </div>
      <div class="imageBlock fifth" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/Banners2r1.<?php if(strpos($mystring, $deskUsr) !== false){ echo "webp"; } else{ echo "png"; } ?>);">
          <a href="https://jacobdiamonds.co.il/product-category/%D7%AA%D7%9B%D7%A9%D7%99%D7%98%D7%99%D7%9D/%D7%98%D7%91%D7%A2%D7%95%D7%AA-%D7%90%D7%99%D7%98%D7%A8%D7%A0%D7%98%D7%99/"><span>טבעות אינטרנטי </span></a>
      </div>
      <div class="imageBlock fourth" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/Banners2r2.<?php if(strpos($mystring, $deskUsr) !== false){ echo "webp"; } else{ echo "png"; } ?>);">
            <a href="https://jacobdiamonds.co.il/product-category/%D7%AA%D7%9B%D7%A9%D7%99%D7%98%D7%99%D7%9D/%D7%A6%D7%9E%D7%99%D7%93%D7%99-%D7%99%D7%94%D7%9C%D7%95%D7%9E%D7%99%D7%9D/">צמידי יהלומים</a>
      </div>
  </section>

  <div class="advantagesSection">
    <div class="svgAnimation">
    </div>
    <div class="container wow fadeIn">
      <div class="title">
        <span class="titlename"> חשוב לדעת... </span>
      </div> <!-- .title -->
      <div class="row">
        <div class="singleAdv wow bounceIn">
            <div class="imgBlock">
              <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Features3.png" alt="">
            </div>

          <div class="conSection">
            <div class="name">
              <span class="eng">מדיד טבעות</span>
            </div>
            <div class="info">
              <span class="text">מסמך פרטים מידות <a class="lastWord" href="https://jacobdiamonds.co.il/wp-content/uploads/2019/09/Guide.pdf">להורדה</a></span>
            </div>
          </div> <!-- .conSection -->
        </div>

        <div class="singleAdv wow bounceIn">
            <div class="imgBlock">
              <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Features2.png" alt="">
            </div>

          <div class="conSection">
            <div class="name">
              <span class="eng">תכשיטים בעיצוב אישי</span>
            </div>
            <div class="info">
              <span class="text">טבעות מעוצבות בהתאמה אישית
בתקופה הקלאסית עוצבו תכשיטים רבים,
שיוצרו מחומרים יקרים כמו זהב… <a class="lastWord" href="https://jacobdiamonds.co.il/תכשיטים-בעיצוב-אישי/">קרא עוד</a></span>
            </div>
          </div> <!-- .conSection -->
        </div>

        <div class="singleAdv wow bounceIn">
            <div class="imgBlock">
              <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Features1.png" alt="">
            </div> <!-- .content -->

          <div class="conSection">
            <div class="name">
              <span class="eng">יהלומים לא מטופלים</span>
            </div> <!-- .name -->
            <div class="info">
              <span class="text">כאשר אנו בוחרים יהלומים, אנו שמים לב לצורה
בה נלטשו, לברק שלהם וכמובן לגודל.
כל יהלום הוא יצירת אומנות <a class="lastWord" href="https://jacobdiamonds.co.il/מהו-יהלום-מטופל/"> קרא עוד </a></span>
            </div> <!-- .info -->
          </div> <!-- .conSection -->
        </div> <!-- .singleAdv -->

      </div> <!-- .row -->
    </div> <!-- .container -->

  </div> <!-- .advantagesSection -->

<div class="facebookSection">
<h1 class="sectionHeading"><i class="fab fa-facebook-square"></i> לקוחות ממליצים</h1>
  <?php do_action( 'wprev_pro_plugin_action', 1 ); ?>
  <a href="https://jacobdiamonds.co.il/reviews/" class="button-product-lower">לכל ההמלצות</a>
</div>

<div class="postCarouselback">
  <section class="postCarousel homepage">
      <div class="container wow fadeIn">
          <h1 class="sectionHeading">בלוג</h1>
          <div class="carouselContent posts">
              <?php
                  $args = array( 'post_type' => 'post', 'posts_per_page' => 15 );
                  $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                          <div class="carouselItem">
                                  <div>
                                    <a class="carouselImage" href="<?php echo get_permalink( $loop->post->ID ) ?>">
                                      <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'medium');
                                      else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="340px" height="265px" />'; ?>
                                    </a>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                  </div>
                                  <a class="carouselButton" href="<?php echo get_permalink( $loop->post->ID ) ?>">לקרוא <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Arrow.svg" alt=""> </a>
                          </div>
                    <?php endwhile; ?>
              <?php wp_reset_query(); ?>
          </div><!--/.products-->
      </div> <!-- .container -->
  </section>
</div>

  <section class="instaFeed">
    <h1 class="sectionHeading"><i class="fab fa-instagram"></i> לקוחות משתפים</h1>
    <?= do_shortcode('[instagram-feed]'); ?>
  </section>


  <section class="aboutUs homepage">
    <h1 class="sectionHeading">מי אנחנו</h1>
      <div class="aboutUsBlock">
        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/AboutUsImg.png" alt="">
        <div class="aboutUsDesc">
          <h2>אנחנו כאן כדי לעזור לך</h2>
          <p>בג’ייקוב יהלומים אנחנו היצרנים של התכשיטים וגם של היהלומים, ולכן אין פערי תיווך. זאת, לצד העיצוב האישי והליווי הצמוד: אנחנו מציעים תכשיטים איכותיים עם חיסכון במחיר.            איננו מתפשרים על האיכות וגם לא על השירות: אצלנו תוכלו למצוא את החבילה המלאה. החל מבחירת היהלום ועד להתאמת התכשיט בדיוק למידותיכם, לפי טעמכם האישי.  אצלנו תוכלו למצוא מגוון עצום של טבעות אירוסין יוקרתיות           מזהב צהוב, מזהב לבן או ורוד, כמו גם עגילי יהלומים, שרשראות יהלומים, תליונים וצמידי טניס.
          </p>
          <a href="<?= home_url('אודות'); ?>" class="siteBtn">קרא עוד</a>
        </div>
      </div>

  </section>

</div> <!-- .template_wrapper .homepageTemplate -->

<?php

get_footer();
