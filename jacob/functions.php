<?php
/**
 * Celebration functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Celebration
 */
 @ini_set( 'upload_max_size' , '64M' );
 @ini_set( 'post_max_size', '64M');
 @ini_set( 'max_execution_time', '300' );
if ( ! function_exists( 'celebration_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function celebration_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Celebration, use a find and replace
		 * to change 'celebration' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'celebration', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'celebration' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'celebration_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


	}
endif;
add_action( 'after_setup_theme', 'celebration_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function celebration_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'celebration_content_width', 640 );
}
add_action( 'after_setup_theme', 'celebration_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function celebration_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'celebration' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'celebration' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'celebration_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function celebration_scripts() {
    
	wp_enqueue_style( 'celebration-style', get_stylesheet_uri() );

	// main css file
	wp_enqueue_style( 'celebration-main-style', get_template_directory_uri() . '/assets/css/main.css' );

	// vlada css file (remove after)
	wp_enqueue_style( 'celebration-vlada-style', get_template_directory_uri() . '/assets/css/vlada.css' );

	// fonts
  wp_enqueue_style( 'font-dancing', 'https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap' );
	wp_enqueue_style( 'font-rubik', 'https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap&subset=hebrew' );
	wp_enqueue_style( 'font-assistant', 'https://fonts.googleapis.com/css?family=Assistant:300,400,600,700&display=swap&subset=hebrew' );

	 wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );

  // main js file
	wp_enqueue_script( 'celebration-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'celebration-some-js', get_template_directory_uri() . '/assets/js/someScripts.js', array(), '20151215', true );

  // darg and scroll js file ()
	//wp_enqueue_script( 'celebration-dragandScroll-js', 'https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js', array(), '20151215', true );

  // jquery UI
  //wp_enqueue_script( 'jQueryUIJS', 'https://code.jquery.com/ui/1.12.0/jquery-ui.js', array(), '20151215', true );
  //wp_enqueue_style( 'jQueryUICSS', 'https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css' );
  // https://code.jquery.com/ui/1.12.0/jquery-ui.js

  // slick slider
  wp_enqueue_script( 'slick-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array(), '20151215', true );
  //wp_enqueue_style( 'slick-slider-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css' );
//wp_enqueue_script( 'slick-slider-js', get_template_directory_uri() . '/assets/js/slick.min.js' , array(), '20151215', true );
  wp_enqueue_style( 'slick-slider-css', get_template_directory_uri() . '/assets/css/slick.min.css' );
//	wp_enqueue_script( 'jquery_rtl_slider', get_template_directory_uri().'/assets/js/jquery.ui.slider-rtl.min.js' );


  // nice select
  //wp_enqueue_script( 'niceSelect-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js', array(), '20151215', true );
  //wp_enqueue_style( 'niceSelect-css', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css' );
wp_enqueue_script( 'niceSelect-js', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '20151215', true );
  wp_enqueue_style( 'niceSelect-css', get_template_directory_uri() . '/assets/css/nice-select.min.css' );
  // wow animations
  //wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '20151215', true );
  //wp_enqueue_style( 'wow-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
 wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );
  wp_enqueue_style( 'wow-css', get_template_directory_uri() . '/assets/css/animate.min.css' );
	// mark js
	wp_enqueue_script( 'mark-js', 'https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
	function wps_deregister_styles() {
	    wp_dequeue_style( 'wp-block-library' );
	}
}
add_action( 'wp_enqueue_scripts', 'celebration_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme options page (ACF).
 */
require get_template_directory() . '/inc/acf-options-page/index.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );



function celebration_ProdsAndPostsSection() {
	require get_template_directory() . '/inc/widgets/prdodsAndPosts.php';
  return '';
}
add_shortcode( 'ProdsAndPostsSection', 'celebration_ProdsAndPostsSection' );

add_filter( 'woocommerce_loop_add_to_cart_link', 'woo_archive_page_cart_button_custom_class', 10, 2 );
function woo_archive_page_cart_button_custom_class($array, $product){
    return sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
        esc_url( get_permalink( $loop->post->ID ) ),
        esc_attr( $product->id ),
        esc_attr( $product->get_sku() ),
        esc_attr( isset( $quantity ) ? $quantity : 1 ),
        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button icon-shopping-cart' : '',
        esc_attr( $product->product_type ),
        esc_html( 'לדף המוצר' )
    );
}


add_action( 'woocommerce_before_shop_loop', 'ps_selectbox', 25 );
function ps_selectbox() {
    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);
    ?>
    <div class="woocommerce-perpage">
      <span><?php echo __('Per Page:', 'Celebration'); ?> </span>
      <select class="perPageSelector" onchange="if (this.value) window.location.href=this.value">
      <?php
      $orderby_options = array(
          '8' => '8',
          '16' => '16',
          '32' => '32',
          '64' => '64'
      );
      foreach( $orderby_options as $value => $label ) {
          echo "<option ".selected( $per_page, $value )." value='?perpage=$value'>$label</option>";
      }
      ?>
      </select>
    </div>
    <?php
}

add_action( 'pre_get_posts', 'ps_pre_get_products_query' );
function ps_pre_get_products_query( $query ) {
		$default_per_page = 8;
    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);
    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'product' ) ) {
			if (is_null($per_page)) {
				$query->set( 'posts_per_page', $default_per_page );
			} else {
				$query->set( 'posts_per_page', $per_page );
			}
    }
}

add_action( 'widgets_init', 'jacob_widgets_init' );
function jacob_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'jacob' ),
        'id' => 'sidebar-1',
    ) );
}

add_action( 'widgets_init', 'jacob_widgets_init_face' );
function jacob_widgets_init_face() {
    register_sidebar( array(
        'name' => __( 'Facebook Sidebar', 'jacob' ),
        'id' => 'sidebar-2',
    ) );
}


// theCelebrationSidebar with category
function theCelebrationSidebar(){
  ?>
    <div class="priceRangeBlock">
			<div class="rangeSlider">
						<div class="slidecontainer">
							<p>
								<p class="amountTotal">
									<input type="text" id="amount_right" class="priceAmounts" readonly>
									<input type="text" id="amount_left" class="priceAmounts" readonly>
								</p>
							</p>

							<div id="slider-range"></div>
						</div>
					</div>
    </div>
		<div class="latestNewsBlock">
			<div class="latestNewsContent">
			<?php
				$args = array( 'numberposts' => '4' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){ ?>
					<li>
						<a href="<?= get_permalink($recent["ID"]); ?>"><?= $recent["post_title"] ?></a>
						<p><?= get_the_excerpt( $recent["ID"] ); ?></p>
					</li>
			<?php	}	?>
			</div>
		</div>
  <?php
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// add excerpt in product loop
add_action( 'woocommerce_after_shop_loop_item_title', 'bbloomer_ins_woocommerce_product_excerpt', 35, 2);

function bbloomer_ins_woocommerce_product_excerpt() {
     echo '<span class="excerpt">';
		 the_excerpt();
     echo '</span>';
}

// get percent product sale (int)
function getPercentDiscount($product) {
  $salePrice 	= $product->get_sale_price();
  $mainPrice 	= $product->get_regular_price();
  $difference = $mainPrice - $salePrice;
  $profit 		= intval($difference / ($mainPrice / 100));
  if ($salePrice > 0) {
    return $profit;
  }
}

add_filter('woocommerce_single_product_image_thumbnail_html','wc_remove_link_on_thumbnails' );

function wc_remove_link_on_thumbnails( $html ) {
     return strip_tags( $html,'<img>' );
}


// full image in cart
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'custom-thumb', 100, 100 ); // 100 wide and 100 high
}

/**
 * @snippet       Display Cart @ Checkout Page Only - WooCommerce
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action( 'woocommerce_before_checkout_form', 'bbloomer_cart_on_checkout_page_only', 5 );

function bbloomer_cart_on_checkout_page_only() {

if ( is_wc_endpoint_url( 'order-received' ) ) return;

echo do_shortcode('[woocommerce_cart]');

}


add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

	// Первый параметр 'twentyfifteen-script' означает, что код будет прикреплен к скрипту с ID 'twentyfifteen-script'
	// 'twentyfifteen-script' должен быть добавлен в очередь на вывод, иначе WP не поймет куда вставлять код локализации
	// Заметка: обычно этот код нужно добавлять в functions.php в том месте где подключаются скрипты, после указанного скрипта
	wp_localize_script( 'celebration-main-js', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);

}

add_action( 'wp_ajax_get_cart_count', 'get_cart_count' );
add_action('wp_ajax_nopriv_get_cart_count', 'get_cart_count');
function get_cart_count() {
	global $woocommerce;
	$res = $woocommerce->cart->cart_contents_count;

	echo $res;

	wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}


add_action( 'wp_ajax_searchAjaxHeader', 'searchAjaxHeader' );
add_action('wp_ajax_nopriv_searchAjaxHeader', 'searchAjaxHeader');
function searchAjaxHeader() {
	$string = $_GET['string'];
	$string = urlencode($string);
	$query = new WP_Query( 's='.$string.'&post_type=product');
	while ( $query->have_posts() ) {
		$query->the_post();

		?>
		<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php
	}

	wp_die();
}


/**
* @snippet       Edit Address Tab @ My Account
* @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
* @sourcecode    https://businessbloomer.com/?p=21253
* @author        Rodolfo Melogli
* @testedwith    WooCommerce 3.5.1
* @donate $9     https://businessbloomer.com/bloomer-armada/
*/

add_filter( 'woocommerce_account_menu_items', 'bbloomer_remove_address_my_account', 999 );

function bbloomer_remove_address_my_account( $items ) {
	unset($items['edit-address']);
	unset($items['my-account']);
	unset($items['orders']);
	unset($items['downloads']);
	unset($items['edit-address']);
	unset($items['customer-logout']);
	return $items;
}

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
  return '...'; // replace the normal [.....] with a empty string
}
add_filter('excerpt_more', 'new_excerpt_more');


add_action('wp_ajax_register_user_front_end', 'register_user_front_end', 0);
add_action('wp_ajax_nopriv_register_user_front_end', 'register_user_front_end');
function register_user_front_end() {
	  $new_user_name = stripcslashes($_POST['new_user_name']);
	  $new_user_email = stripcslashes($_POST['new_user_email']);
	  $new_user_password = $_POST['new_user_password'];
	  // $new_user_phone = strtolower($_POST['new_user_phone']);
	  $user_data = array(
	      'user_login' 		=> $new_user_name,
	      'user_email' 		=> $new_user_email,
	      'user_pass' 		=> $new_user_password,
				// 'phone' 				=> $new_user_phone,
	      'role' 					=> 'subscriber',
	  	);
	  $user_id = wp_insert_user($user_data);
	  	if (!is_wp_error($user_id)) {
				$res = array(
					'success' => true,
					'message' => __('You have successfully registered!', 'Celebration'),
					'redirect' => home_url(),
				);
				echo json_encode($res);
	  	} else {
	    	if (isset($user_id->errors['empty_user_login'])) {
						$res = array(
							'success' => false,
							'message' => __('User Name and Email are mandatory.', 'Celebration'),
							'errors' => $user_id->errors,
						);
						echo json_encode($res);
	      	} elseif (isset($user_id->errors['existing_user_login'])) {
						$res = array(
							'success' => false,
							'message' => __('User name already exixts.', 'Celebration'),
							'errors' => $user_id->errors,
						);
						echo json_encode($res);
	      	} elseif (isset($user_id->errors['existing_user_email'])) {
						$res = array(
							'success' => false,
							'message' => __('User email already exixts.', 'Celebration'),
							'errors' => $user_id->errors,
						);
						echo json_encode($res);
	      	} else {
						$res = array(
							'success' => false,
							'message' => __('Error Occured please fill up the sign up form carefully.', 'Celebration'),
							'errors' => $user_id->errors,
						);
						echo json_encode($res);
	      	}
	  	}
	die;
}


add_action('wp_ajax_login_user_front_end', 'login_user_front_end', 0);
add_action('wp_ajax_nopriv_login_user_front_end', 'login_user_front_end');
function login_user_front_end() {
	  $user_data = array(
	      'user_login' 		=> stripcslashes($_POST['user_name']),
	      'user_password' 		=> $_POST['user_password'],
	      'remember' 					=> $_POST['user_remember'],
	  	);
	  $res = wp_signon($user_data);
		if ( is_wp_error($res) ) {
			echo $res->get_error_message();
		} else {
			echo var_dump($res);
		}
	die;
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'our-menu', 'Our Menu' );
}




// optimize speed js
function defer_parsing_of_js ( $url ) {

if (is_admin()) return $url;

if ( FALSE === strpos( $url, '.js' ) ) return $url;

if ( strpos( $url, 'jquery.js' ) ) return $url;

if ( strpos( $url, 'smush-lazy-load' ) ) return $url;


return "$url' defer ";

}

add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

add_action('wp_enqueue_scripts','Load_Template_Scripts_wpa83855');
function Load_Template_Scripts_wpa83855(){
    if ( is_page_template('reviews.php') ) {
        wp_enqueue_script('my-script', 'https://jacobdiamonds.co.il/wp-content/plugins/fb-reviews-widget/static/js/rplg.js');
    } 
}
