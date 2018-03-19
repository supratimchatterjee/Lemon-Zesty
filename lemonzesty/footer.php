<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lemon_Zesty
 */

?>

<div>
	<br />
	<br />
</div>
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-medium-3-10">
			<a href="<?php echo home_url( '/' ); ?>">
				<img src="<?php the_field('footer_long','option'); ?>">
			</a>
			<div>
				<p>
					<?php the_field('content','option'); ?>
				</p>
			</div>
		</div>
		<?php dynamic_sidebar('sidebar-1'); ?>
		<div class="uk-width-medium-3-10">
			<div class="subscribe">
				<h6><?php the_field('news_letter_title','option'); ?></h6>
				<?php $code = get_field('newsletter_short_code','option'); ?>
				<?php echo do_shortcode($code); ?>
			</div>
			<div class="social">
				<h6><?php the_field('follow_us_title','option'); ?></h6>
				<div>
					<?php if(get_field('facebook_link','option')): ?>
					<a href="<?php the_field('facebook_link','option'); ?>"><i class="uk-icon-facebook-f"></i></a>
					<?php endif; ?>
					<?php if(get_field('twitter_link','option')): ?>
					<a href="<?php the_field('twitter_link','option'); ?>"><i class="uk-icon-twitter"></i></a>
					<?php endif; ?>
					<?php if(get_field('instagram_link','option')): ?>
					<a href="<?php the_field('instagram_link','option'); ?>"><i class="uk-icon-instagram"></i></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
