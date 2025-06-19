<?php
/**
* The template for displaying product content in the single-product.php template
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.6.0
*/

defined( 'ABSPATH' ) || exit;

global $post, $product;
$product_tech_info = get_field('product_tech_info', $post->ID);
$product_notes     = get_field('product_notes', $post->ID) ? get_field('product_notes', $post->ID) : get_field("single_product_remark","options");
$custom_link_title = get_field('custom_link_title', $post->ID) ? get_field('custom_link_title', $post->ID) : get_field('find_your_ring_size_title', 'option');
$custom_link_url   = get_field('custom_link_url', $post->ID) ? get_field('custom_link_url', $post->ID) : get_field('custom_link_url', 'option');

$main_diamond_weight = get_field("main_diamond_weight",$post->ID);
$main_diamond_color  = get_field("main_diamond_color",$post->ID);
$main_diamond_clean  = get_field("main_diamond_clean",$post->ID);
$main_diamond_cut    = get_field("main_diamond_cut",$post->ID);

$diamond_weight      = get_field("diamond_weight",$post->ID);
$diamond_color       = get_field("diamond_color",$post->ID);
$diamond_clean       = get_field("diamond_clean",$post->ID);
$diamond_cut         = get_field("diamond_cut",$post->ID);

/**
* Hook: woocommerce_before_single_product.
*
* @hooked wc_print_notices - 10
*/
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<script> 
jQuery(document).ready(function ($) {
	var productName = $('.productContent .product_title').text();
console.log(productName);
$('.formWrapepr .productName').val(productName);
});
</script>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="container">
		<div class="productContent">
			<div class="productInfoPart">
				<div class="breadcrumbProd">
					<?php
					$args = array(
						'delimiter' => '/',
						'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'woothemes' ) . '</span>'
					);
					woocommerce_breadcrumb();
					?>
				</div>
				<div class="title">
					<?php woocommerce_template_single_title(); ?>
				</div> <!-- .title -->
				<div class="description">
					<div class="descriptionContent">
						<div itemprop="description" class="single_product_short_description">
								<strong><?php the_field("excerpt_title_on_product_page","options");?></strong>
							<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
						<div class="product-price">	<?= $product->get_price_html(); ?> </div>
						</div>
						<?php if($main_diamond_weight):?>
										<div class="product_tech_info_item">
											<h3 class="info-tech-heading">יהלום מרכזי</h3>
												<!-- <div class="product_tech_info_title">מדידות יהלום עיקריות</div> -->
												<div class="product_tech_info_list">
														<?php if($main_diamond_weight):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $main_diamond_weight;?></span>
																		<div class='sub_title'>משקל יהלום</div>
																</div>
														<?php endif;?>
														<?php if($main_diamond_color):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $main_diamond_color;?></span>
																		<div class='sub_title'>צבע</div>
																</div>
														<?php endif;?>
														<?php if($main_diamond_clean):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $main_diamond_clean;?></span>
																		<div class='sub_title'>נקיון</div>
																</div>
														<?php endif;?>
														<?php if($main_diamond_cut):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $main_diamond_cut;?></span>
																		<div class='sub_title'>חיתוך</div>
																</div>
														<?php endif;?>
												</div>
										</div>
								<?php endif;?>
						<?php if($diamond_weight):?>
										<div class="product_tech_info_item">
											<h3 class="info-tech-heading">יהלומים צדדיים</h3>
												<!-- <div class="product_tech_info_title">מדידות יהלומים</div> -->
												<div class="product_tech_info_list">
														<?php if($diamond_weight):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $diamond_weight;?></span>
																		<div class='sub_title'>משקל יהלומים</div>
																</div>
														<?php endif;?>
														<?php if($diamond_color):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $diamond_color;?></span>
																		<div class='sub_title'>צבע</div>
																</div>
														<?php endif;?>
														<?php if($diamond_clean):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $diamond_clean;?></span>
																		<div class='sub_title'>נקיון</div>
																</div>
														<?php endif;?>
														<?php if($diamond_cut):?>
																<div class="product_tech_info_list_item">
																	<span class="techContent"><?php echo $diamond_cut;?></span>
																		<div class='sub_title'>חיתוך</div>
																</div>
														<?php endif;?>
												</div>
										</div>
								<?php endif;?>
					</div>
				</div> <!-- .description -->




				<div class="atrributesPart">
					<?php echo wc_display_product_attributes( $product ); ?>
				</div>
			</div> <!-- .productInfoPart -->
			<div class="galleryPart">
				<div class="bigImage">
					<div class="currentImage">
						<?php
						if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
							return;
						}
						if(get_field("youtube",$post->ID)){
							echo '<div id="main-frame">';
								echo '<iframe width="100%" height="560" src="https://www.youtube.com/embed/'.get_field("youtube",$post->ID).'?rel=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>';
							echo '</div>';
							}
						else
						{
							echo get_the_post_thumbnail($post->ID);
						}
						$attachment_ids = $product->get_gallery_image_ids();
						if ( $attachment_ids  ) {
							foreach ( $attachment_ids as $attachment_id ) {
								echo wp_get_attachment_image($attachment_id, 'full');
								// echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
							}
						}
						 ?>
					</div> <!-- .currentImage -->
				</div> <!-- .bigImage -->
				<div class="imageSliderWrapper">
					<div class="imageSlider">
						<?php
						if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
							return;
						}
						if(get_field("video_thumbnail",$post->ID)){
							?>
							<img width="180" height="180" src="<?php echo get_field("video_thumbnail",$post->ID); ?>" data-value="<?php echo get_field("youtube",$post->ID); ?>" class="video-thumbnail">
						<?php }
						else
						{
							//echo get_the_post_thumbnail($post->ID);
							?>
							<img width="180" height="180" src="https://jacobdiamonds.co.il/wp-content/uploads/2017/07/360-videos.png" data-value="<?php echo get_field("youtube",$post->ID); ?>" class="video-thumbnail">
							<?
						}
						$attachment_ids = $product->get_gallery_image_ids();
						if ( $attachment_ids ) {
							foreach ( $attachment_ids as $attachment_id ) {
								echo wp_get_attachment_image($attachment_id, 'full');
								// echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
							}

						}
						 ?>
					</div> <!-- .imageSlider -->
				</div> <!-- .imageSliderWrapper -->
			</div> <!-- .galleryPart -->
		</div> <!-- .productContent -->
	</div> <!-- .container -->


	<div class="bottomProductPart">
		<div class="contactUsSection">
			<div class="container">
				<div class="contactInfo">
					<?php if($product_notes): ?>
	        <div class="single_product_notes">
							<div class="product_view-exp">
								<a href="https://jacobdiamonds.co.il/כיצד-לבחור-יהלום/" target="_blank">למד אודות איכות היהלומים בתכשיט זה</a>
							</div>
							<div class="single_product_tags">
								<?php echo $product->get_tags( ',', '<span class="tagged_as"><span>' . _n( 'Tag:', 'Tags:', $tag_count, 'wdjewelry' ) . '</span>', '</span>' ); ?>
							</div>
	            <div class="single_product_notes_inner">
	                <?php echo $product_notes; ?>
									<a href="https://jacobdiamonds.co.il/כיצד-לבחור-יהלום/" class="button-product-lower">קרא עוד</a>
	            </div>
	        </div>
	    <?php endif; ?>
					<div class="socialsShares">
						<?php
						$current_url = home_url(add_query_arg(array(), $wp->request));
						$title = get_the_title();
						?>
						<span class="titleShare">שתף :</span>
						<a target="_blank" href="https://telegram.me/share/url?url=<?php echo $current_url; ?>&text=<?php echo $title; ?>">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/telegramshare.svg" alt="telegramshare">
							</div>
						</a>
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>&t=<?php echo $title; ?>">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebookshare.svg" alt="facebookshare">
							</div>
						</a>
					</div> <!-- .socialsShares -->
				</div> <!-- .contactInfo -->
				<div class="contactForm">
					<span class="formTitle">מתעניין בתכשיט הזה?</span>
					<span class="formSubTitle">השאירו פרטים ונשמח לעזור! או חייגו עכשיו 058.444.55.99</span>
					<div class="formWrapepr">
						<?php echo do_shortcode('[caldera_form id="CF5d6fbac2b5fd2"]'); ?>
					</div> <!-- .formWrapepr -->
				</div> <!-- .contactForm -->
				<div class="decorLine"></div>
				<div class="decorLine bottom"></div>
			</div> <!-- .container -->

		</div> <!-- .contactUsSection -->

		<div class="instaWrapper">
			<h1 class="sectionHeading"><i class="fab fa-instagram"></i> לקוחות משתפים</h1>
			<div class="container">
				<?= do_shortcode('[instagram-feed]'); ?>
			</div>
		</div> <!-- .instaWrapper -->


		<div class="whyUs container">
			<div class="infoSection">
				<div class="firstPart">
					<span class="listTitle"><?php the_field('about_us_first_list_title', 'options'); ?></span>
					<ul>
						<?php
						while ( have_rows('about_us_first_list', 'options') ) : the_row();
								?><li><?php the_sub_field('about_us_first_list_item'); ?></li><?php
						endwhile;
						?>
					</ul>
					<span class="listTitle"><?php the_field('about_us_second_list_title', 'options'); ?></span>
					<ul>
						<?php
						while ( have_rows('about_us_second_list', 'options') ) : the_row();
								?><li><?php the_sub_field('about_us_second_list_item'); ?></li><?php
						endwhile;
						?>
					</ul>
				</div>
				<div class="secondPart">
					<span class="listTitle"><?php the_field('about_us_third_list_title', 'options'); ?></span>
					<ul>
						<?php
						while ( have_rows('about_us_third_list', 'options') ) : the_row();
								?><li><?php the_sub_field('about_us_third_list_item'); ?></li><?php
						endwhile;
						?>
					</ul>
				</div>
			</div>
			<div class="imageSection">
				<img src="<?php the_field('about_us_image', 'options'); ?>" alt="">
			</div>
		</div> <!-- .whyUs -->
		<div class="imageContainerTxt">
		</div>
		<div class="imgFeaturesBlock container">
			<span class="titleInfo"><?php echo get_field('about_us_title', 'options'); ?></span>
			<div class="imagesFeautures">
			<?php
			while ( have_rows('feautures', 'options') ) : the_row();
					?><a href="<?= home_url('/למה-אנחנו/'); ?>"> <img src="<?php the_sub_field('feautures_image'); ?>" alt=""> </a><?php
			endwhile;
			?>
			</div>
		</div>

		<div class="discountAndTableImages container">
		<!--	<span class="titleInfo">תעודת IGL</span></br>
			<span class="title_desc">ברכישה של 2,000 ש"ח ומעלה</span> -->
			<div class="discountAndTableImagesInner">
		<!--		 <div class="right-block" style="background-size: cover; background-image:url(<?php// bloginfo('template_url'); ?>/assets/images/right-block-image.png);">
					<h3>תעודת IGL</h3>
					<p>ברכישת של 2000₪ ומעלה</p>
					</div> -->
				<div class="igl-block" style="background-size: contain; background-repeat: no-repeat; background-position: center; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/IGLBack.png);"></div>
				<a href="<?= home_url('/reviews/') ?>" class="facebook-block" style="background-size: cover; background-image:url(<?php bloginfo('template_url'); ?>/assets/images/facebook-block-back.svg);">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/FacebookIcon.svg" alt="">
					<h3>100% לקוחות מרוצים</h3>
					<p>לכל ההמלצות<img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow 1.svg" alt=""></p>
				</a>
			</div>
		</div>

		<section class="prodCarousel productPage">
			<h1 class="sectionHeading">תכשיטים דומים</h1>
		    <div class="container wow fadeIn">
		        <div class="carouselContent">
		            <?php
		                $args = array( 'post_type' => 'product', 'posts_per_page' => 15 );
		                $loop = new WP_Query( $args );
		                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
		                        <div class="carouselItem">
		                                <?php// woocommerce_show_product_sale_flash( $post, $product ); ?>
		                                <div>
		                                <a class="carouselImage" href="<?php echo get_permalink( $loop->post->ID ) ?>">
		                                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
		                                  else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="150px" height="150px" />'; ?>
		                                </a>
		                                <a class="carouselText" href="<?php echo get_permalink( $loop->post->ID ) ?>"><h3><?php the_title(); ?></h3></a>
		                              </div>
		                                <!-- <span class="carouselPrice"><?php// echo $product->get_price_html(); ?></span> -->
		                        </div>
		            <?php endwhile; ?>
		            <?php wp_reset_query(); ?>
		        </div><!--/.products-->
		    </div> <!-- .container -->
		</section>
	</div> <!-- .bottomProductPart -->
</div> <!-- .product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
