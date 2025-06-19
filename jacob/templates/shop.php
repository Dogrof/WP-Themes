<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="shopPageWrapper">

  <header class="wcArchiveHeader">
    <div class="breadcrumbProd">
      <?php
      $args = array(
        'delimiter' => '/',
        'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'woothemes' ) . '</span>'
      );
      woocommerce_breadcrumb();
      ?>
    </div>
    <h1>צמידי יהלומים</h1>
    <p>רוצים לרכוש צמידי יהלומים איכותיים? לא מתפשרים על העיצוב הייחודי והיוקרתי? אם תיכנסו ל –   Jacob Diamonds תיהנו ממגוון עצום של צמידי טניס כאשר כל לקוח יוכל למצוא בו את מבוקשו.
      <p>
      למה דווקא ב –  Jacob Diamonds ?
    </p>
    <p>
      ההמלצה שלנו לרכוש צמידי יהלומים דווקא ב –  Jacob Diamonds  היא לא סתם. קניה ב –  Jacob Diamonds  זוהי רכישה נכונה וחכמה במיוחד המעניקה חווית לקוח ברמה בלתי מתפשרת, הן באיכות והן במחיר!
      כי היחס שתקבלו ב –  Jacob Diamonds  הוא יחס מיוחד ואדיב אותו לא תוכלו לקבל בשום מקום אחר. מלבד היחס האישי תיהנו מהתאמה מושלמת של הצמיד על פי רצונכם ובהתאם לעיצוב הרצוי עבורכם. אתם לא תצטרכו להתפשר על שום פרט.
    </p>
    <p>
      אין ספק כי רכישה של צמיד יהלומים ב –  Jacob Diamonds  זוהי רכישה מוצלחת במיוחד ותוכלו ליהנות ממנה לאורך זמן.
    </p>
    <p>
      והמחיר אם שאלתם? שווה לכל כיס. מדובר בהחלט בשילוב מושלם של איכות יחד עם מחיר משתלם ונוח.
    </p>
      אז מה אתם צריכים יותר מזה?…. צפו בקטלוג עכשיו</p>
    </header>
  <div class="shopPage container">
    <div class="shopContent">
    	<?php
    	if ( woocommerce_product_loop() ) {

    		/**
    		 * Hook: woocommerce_before_shop_loop.
    		 *
    		 * @hooked woocommerce_output_all_notices - 10
    		 * @hooked woocommerce_result_count - 20
    		 * @hooked woocommerce_catalog_ordering - 30
    		 */
    		do_action( 'woocommerce_before_shop_loop' );

    		woocommerce_product_loop_start();

    		if ( wc_get_loop_prop( 'total' ) ) {
    			while ( have_posts() ) {
    				the_post();

    				/**
    				 * Hook: woocommerce_shop_loop.
    				 *
    				 * @hooked WC_Structured_Data::generate_product_data() - 10
    				 */
    				do_action( 'woocommerce_shop_loop' );

    				wc_get_template_part( 'content', 'product' );
    			}
    		}

    		woocommerce_product_loop_end();

    		/**
    		 * Hook: woocommerce_after_shop_loop.
    		 *
    		 * @hooked woocommerce_pagination - 10
    		 */
    		do_action( 'woocommerce_after_shop_loop' );
    	} else {
    		/**
    		 * Hook: woocommerce_no_products_found.
    		 *
    		 * @hooked wc_no_products_found - 10
    		 */
    		do_action( 'woocommerce_no_products_found' );
    	}

    	/**
    	 * Hook: woocommerce_after_main_content.
    	 *
    	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
    	 */
    	?>
    </div> <!-- .shopContent -->
    <div class="shopSidebar">
          <?php// theCelebrationSidebar(); ?>
          <?php get_sidebar(); ?>
    </div> <!-- .shopSidebar -->
  </div> <!-- .shopPage -->
</div> <!-- .shopPageWrapper -->
<?php
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
