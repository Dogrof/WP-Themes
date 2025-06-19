<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}
if(get_field("youtube",$post->ID)){
	echo '<div id="main-frame">';
		echo '<iframe width="100%" height="483" src="https://www.youtube.com/embed/'.get_field("youtube",$post->ID).'?rel=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>';
	echo '</div>';
	}
global $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids  ) {
	foreach ( $attachment_ids as $attachment_id ) {
		echo wp_get_attachment_image($attachment_id, 'full');
		// echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
	}
	if(get_field("video_thumbnail",$post->ID)){
	?>
	<a href="javascript:void(0)" >
		<img width="180" height="180" src="<?php echo get_field("video_thumbnail",$post->ID); ?>" data-value="<?php echo get_field("youtube",$post->ID); ?>" class="video-thumbnail">
	</a>
	<?php }

}
