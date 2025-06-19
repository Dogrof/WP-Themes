<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Celebration
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php
if ( is_post_type_archive() || is_product_category() ){
?>
	<div class="priceRangeBlock">
		<div class="rangeSlider">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
	</div>
	<?php } ?>
