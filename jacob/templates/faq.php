<?php
/**
* Template Name: FAQ
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();

?>
<style>
@media only screen and (max-width:425px) {
    .FAQTemplate .faqSection .container_content {
        padding-right: 30px;
        padding-left: 30px;
    }
    .FAQTemplate .faqSection .questionSection .question .title .name {
        font-size: 24px;
    }
    .headerLine.line .pinkline {
        width: 75%;
    }
}

.FAQTemplate .faqSection .questionSection .question.active .dropdown {
    max-height: unset;
}


/* .FAQTemplate .faqSection .questionSection .question.active .title .name {  transition: 0.3s all;  font-weight: 500;  font-size: 24px;  line-height: 36px;  text-align: right;  color: #DFA29D;} */

.FAQTemplate .faqSection .questionSection .question.active .wrap svg {
    transform: rotate(180deg);
    transition: 0.3s all;
}

.questionHeadingBlock {
    display: flex;
    align-items: center;
}

.questionHeadingBlock .questionHeading {
    margin: 10px auto;
    font-weight: 700;
}

.questionHeadingBlock span.sepHolder {
    height: 1px;
    position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-width: 10%;
}

.questionHeadingBlock span.sepHolder span {
    border-top-width: 2px;
    border-color: #ebebeb;
    height: 1px;
    border-top: 1px solid #ebebeb;
    display: block;
    position: relative;
    top: 1px;
    width: 100%;
}
.FAQTemplate {
    background-image: url(https://celebration.coelix.live/wp-content/themes/celebration/assets/images/celebrationBg.png);
    background-repeat: no-repeat;
}

.FAQTemplate .faqSection .container_content {
    display: block;
    max-width: 1200px;
    margin: 0 auto;
}

.FAQTemplate .faqSection .container_content .faq_name_section {
    display: block;
    width: 100%;
}

.FAQTemplate .faqSection .container_content .faq_name_section .hebrew {
    font-weight: 500;
    font-size: 64px;
    line-height: 76px;
    text-align: right;
    color: #333333;
}

.headerLine.line {
    width: 100%;
    height: 1px;
    position: relative;
    background-color: #BDBDBD;
    margin-bottom: 20px;
}

.headerLine.line .pinkline {
    width: 33%;
    height: 5px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #F1C5C5;
}

.faqSection .questionSection .question i.faqIcon:after {
    height: 4px;
    width: 10px;
}

.faqSection .questionSection .question i.faqIcon:before {
    height: 10px;
    width: 4px;
}

.faqSection .questionSection .question i.faqIcon:before,
.faqSection .questionSection .question i.faqIcon:after {
    border: 1px solid #acacac;
    content: '';
    display: block;
    background: #bababa;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    left: 0;
    position: absolute;
    top: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.FAQTemplate .faqSection .questionSection .question {
    align-content: center;
}

.FAQTemplate .faqSection .questionSection .question .title {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 15px 0;
    cursor: pointer;
}

.FAQTemplate .faqSection .questionSection .question .title .wrap {
    margin-right: 10px;
}

.FAQTemplate .faqSection .questionSection .question .title .name {
    font-size: 22px;
    line-height: 24px;
    text-align: right;
    color: #333333;
    transition: .3s all;
}

.FAQTemplate .faqSection .question .dropdown {
    max-height: 0;
    overflow: hidden;
    transition: 0.5s all;
}

.FAQTemplate .faqSection .question .dropdown .text {
    font-size: 17px;
    line-height: 18px;
    text-align: right;
    color: #4F4F4F;
}
.banner-row{
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  background-color: #323642;
  text-align: center;
  font-size: 21px;
  height: 87px;
}
.banner-row a,
.banner-row a:visited{
  color: #a07936;
  text-decoration: none;
}
.faqTopBlock p,
.wcArchiveHeader p{
    font-size: 15px;
}
.faqTopBlock h2,
.wcArchiveHeader h2{
  font-size: 28px;
  line-height: 28px;
}


@media only screen and (max-width:1440px) {
    .FAQTemplate .faqSection .container_content {
        max-width: 1000px;
    }
}

@media only screen and (max-width:425px) {
    .FAQTemplate .faqSection .container_content {
        padding-right: 30px;
        padding-left: 30px;
    }
    .FAQTemplate .faqSection .questionSection .question .title .name {
        font-size: 24px;
    }
    .headerLine.line .pinkline {
        width: 75%;
    }
}

.FAQTemplate .faqSection .questionSection .question.active .dropdown {
    max-height: unset;
}


/* .FAQTemplate .faqSection .questionSection .question.active .title .name {  transition: 0.3s all;  font-weight: 500;  font-size: 24px;  line-height: 36px;  text-align: right;  color: #DFA29D;} */

.FAQTemplate .faqSection .questionSection .question.active .wrap svg {
    transform: rotate(180deg);
    transition: 0.3s all;
}

.questionHeadingBlock {
    display: flex;
    align-items: center;
}

.questionHeadingBlock .questionHeading {
    margin: 10px auto;
    font-weight: 700;
}

.questionHeadingBlock span.sepHolder {
    height: 1px;
    position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-width: 10%;
}

.questionHeadingBlock span.sepHolder span {
    border-top-width: 2px;
    border-color: #ebebeb;
    height: 1px;
    border-top: 1px solid #ebebeb;
    display: block;
    position: relative;
    top: 1px;
    width: 100%;
}
</style>
<script type="text/javascript">
jQuery(document).ready(function ($) {
  $('.title').click(function(event) {
   $(this).parent().toggleClass('active');
  });
});
</script>

	
<script data-cfasync='false'>document.addEventListener('DOMContentLoaded',function(){!function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||"all";t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);});</script>
<div class="template_wrapper FAQTemplate" style="background-image: url(<?php echo get_bloginfo('url'); ?>/wp-content/themes/celebration/assets/images/celebrationBg.webp")>
  <div class="faqSection">
    <div class="container_content">
      <?php
      $args = array(
        'delimiter' => '/',
        'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'woothemes' ) . '</span>'
      );
      woocommerce_breadcrumb();
      ?>
      <div class="faqTopBlock">
        <h2>שאלות נפוצות</h2>
        <p>לקראת קניה של תכשיט מתעוררות שאלות שונות. קבלו מענה לשאלה שלכם, בשביל שתצליחו לבחור את התכשיט המתאים ביותר בעבורכם!</p>
        <p><b>שאלות נוספות? פנו אלינו! JACOB DIAMONDS  כאן לשירותכם בשביל לענות לכם על כל שאלה הקשורה ליהלומים ולתכשיטים.</b></p>
      </div>
      <div class="questionSection">
        <div class="questionHeadingBlock">
          <span class="sepHolder"><span></span></span>
          <h2 class="questionHeading"><?php the_field('first_heading'); ?></h2>
          <span class="sepHolder"><span></span></span>
        </div>
        <?php
        // проверяем есть ли в повторителе данные
        if( have_rows('faq_list_first') ):
         	// перебираем данные
            while ( have_rows('faq_list_first') ) : the_row();
                // отображаем вложенные поля
                ?>
                <div class="question">
                  <div class="title">
                    <span class="name"><?php the_sub_field('question'); ?></span>
                    <div class="wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="16" viewBox="0 0 29 16" fill="none">
                      <path d="M0.299999 1.80354C0.0999984 1.59742 -5.85634e-08 1.33977 -4.6175e-08 1.05636C-3.37866e-08 0.772946 0.0999985 0.515297 0.299999 0.309177C0.699999 -0.103061 1.35 -0.103061 1.75 0.309178L14.5 13.4493L27.25 0.309179C27.65 -0.10306 28.3 -0.10306 28.7 0.309179C29.1 0.721417 29.1 1.3913 28.7 1.80354L15.225 15.6908C14.825 16.1031 14.175 16.1031 13.775 15.6908L0.299999 1.80354Z" fill="#333333"/>
                      </svg>
                    </div>
                  </div>
                  <div class="dropdown">
                    <span class="text"><?php the_sub_field('answer'); ?></span>
                  </div>
                </div> <!-- question -->

                <?php
            endwhile;
        else :
            // вложенных полей не найдено
        endif;

        ?>
      </div> <!-- questionSection -->

      <div class="questionSection">
        <div class="questionHeadingBlock">
          <span class="sepHolder"><span></span></span>
          <h2 class="questionHeading"><?php the_field('second_heading'); ?></h2>
          <span class="sepHolder"><span></span></span>
        </div>
        <?php
        // проверяем есть ли в повторителе данные
        if( have_rows('faq_list_second') ):
         	// перебираем данные
            while ( have_rows('faq_list_second') ) : the_row();
                // отображаем вложенные поля
                ?>
                <div class="question">
                  <div class="title">
                    <span class="name"><?php the_sub_field('question'); ?></span>
                    <div class="wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="16" viewBox="0 0 29 16" fill="none">
                      <path d="M0.299999 1.80354C0.0999984 1.59742 -5.85634e-08 1.33977 -4.6175e-08 1.05636C-3.37866e-08 0.772946 0.0999985 0.515297 0.299999 0.309177C0.699999 -0.103061 1.35 -0.103061 1.75 0.309178L14.5 13.4493L27.25 0.309179C27.65 -0.10306 28.3 -0.10306 28.7 0.309179C29.1 0.721417 29.1 1.3913 28.7 1.80354L15.225 15.6908C14.825 16.1031 14.175 16.1031 13.775 15.6908L0.299999 1.80354Z" fill="#333333"/>
                      </svg>
                    </div>
                  </div>
                  <div class="dropdown">
                    <span class="text"><?php the_sub_field('answer'); ?></span>
                  </div>
                </div> <!-- question -->

                <?php
            endwhile;
        else :
            // вложенных полей не найдено
        endif;

        ?>
      </div> <!-- questionSection -->

      <div class="questionSection">
        <div class="questionHeadingBlock">
          <span class="sepHolder"><span></span></span>
          <h2 class="questionHeading"><?php the_field('third_heading'); ?></h2>
          <span class="sepHolder"><span></span></span>
        </div>
        <?php
        // проверяем есть ли в повторителе данные
        if( have_rows('faq_list_third') ):
         	// перебираем данные
            while ( have_rows('faq_list_third') ) : the_row();
                // отображаем вложенные поля
                ?>
                <div class="question">
                  <div class="title">
                    <span class="name"><?php the_sub_field('question'); ?></span>
                    <div class="wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="16" viewBox="0 0 29 16" fill="none">
                      <path d="M0.299999 1.80354C0.0999984 1.59742 -5.85634e-08 1.33977 -4.6175e-08 1.05636C-3.37866e-08 0.772946 0.0999985 0.515297 0.299999 0.309177C0.699999 -0.103061 1.35 -0.103061 1.75 0.309178L14.5 13.4493L27.25 0.309179C27.65 -0.10306 28.3 -0.10306 28.7 0.309179C29.1 0.721417 29.1 1.3913 28.7 1.80354L15.225 15.6908C14.825 16.1031 14.175 16.1031 13.775 15.6908L0.299999 1.80354Z" fill="#333333"/>
                      </svg>
                    </div>
                  </div>
                  <div class="dropdown">
                    <span class="text"><?php the_sub_field('answer'); ?></span>
                  </div>
                </div> <!-- question -->

                <?php
            endwhile;
        else :
            // вложенных полей не найдено
        endif;

        ?>
      </div> <!-- questionSection -->

    </div>
  </div> <!-- faqSection -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('.title').click(function(event) {
   $(this).parent().toggleClass('active');
  });
</script>

</div>

<?php

get_footer();
