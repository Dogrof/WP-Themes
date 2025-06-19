<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Celebration
 */

?>

	</div><!-- #content -->
	<div id="to-top" class="scroll-button">
		<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"  title="To Top"></a>
	</div>

	<?php
	if ( is_post_type_archive() || is_product_category() ){
	?>
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
		<?php } ?>

		<div class="row logos">
			<?php
			if( have_rows('logos_images', 'options') ):
					while ( have_rows('logos_images', 'options') ) : the_row();
							?>
							<div class="logo_wrap">
								<img src="<?php the_sub_field('logos_images_item'); ?>" alt="<?php the_sub_field('logos_images_item'); ?>">
							</div>
							<?php
					endwhile;
			else :
				echo "Set in admin panel, please. Go to Theme options and set in Footer section.";
			endif;
			?>
		</div>

	<footer id="colophon" class="site-footer">

    <div class="container footerContainer wow fadeInUp">

      <div class="row">
        <div class="column logo">
          <span class="title">אודותינו</span>
					<span class="subtitle">JACOB DIAMONDS</span>
          <p class="description">
						אנחנו בעלי ניסיון של למעלה מ-30 שנה בתחום תכשיטי היהלומים, מציעים את כל סוגי התכשיטים והיהלומים עם אפשרות לעיצוב אישי, מבחר גדול ובמחיר נוח…
						<a href="<?= home_url('/אודות/'); ?>">קרא עוד</a>
          </p>
					<div class="newsLetterSection">
						<span class="newsletterTitle">הרשמה לניוזלטר שלנו!</span>
						<div class="tnp tnp-subscription">
							<form method="post" action="<?= home_url('/?na=s/') ?>" onsubmit="return newsletter_check(this)">
								<input type="hidden" name="nlang" value="he">
								<div class="newsletterFooter">
								<div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" placeholder="מייל" required></div><div class="tnp-field tnp-field-button"><input class="tnp-submit subsBtn" type="submit" value="שלח"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="copyright">2019 כל הזכויות שמורות JACOB DIAMONDS</div>
					<div class="payment"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2017/11/i.png" alt=""></div>
        </div>
        <div class="column footerMenu">
					<div class="title">מפת אתר</div>
          <?php wp_nav_menu( [
        		'container_class' => 'footer-menu-1',
            'menu'            => 'footer-menu-1'
        	] ); ?>

        </div>
        <div class="column infos">
          <div class="title">שעות פתיחה בתיאום מראש</div>
          <div class="infosContent">
						<div class="infoLine">
              <div class="infosTexts">
                <div class="infosTitle">ראשון עד חמישי:</div>
                <div class="infosText"><?php the_field('sunday_to_thursday', 'options') ?></div>
              </div>
            </div>
						<div class="infoLine">
              <div class="infosTexts">
                <div class="infosTitle">שישי:</div>
                <div class="infosText"><?php the_field('friday', 'options') ?></div>
              </div>
            </div>
						<div class="infoLine">
							<div class="infosTexts">
								<div class="infosTitle">כתובת:</div>
								<div class="infosText"><?php the_field('adress', 'options') ?></div>
								<div class="infosText phoneText"><?php the_field('phone_number', 'options') ?></div>
							</div>
						</div>
          </div> <!-- .infosContent -->
        </div> <!-- .infos -->
      </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
