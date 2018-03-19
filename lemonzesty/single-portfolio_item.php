<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lemon_Zesty
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post();?>
		<div class="uk-container uk-container-center uk-text-center">
			<h1><?php the_title(); ?></h1>
			<hr>
			<div class="uk-width-4-10 uk-container-center">
				<div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
				    <ul class="uk-slideshow">
				        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-single.jpg"></li>
				        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-single.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-single.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-single.jpg"></li>
				    </ul>
				    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
				    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
				        <li data-uk-slideshow-item="0"><a href=""></a></li>
				        <li data-uk-slideshow-item="1"><a href=""></a></li>
				    </ul>
				</div>
			</div>
			<div class="uk-margin-large-bottom">
				<h3>BEAR HUG</h3>
				<span>Watercolor</span>
			</div>
		</div>
	<?php endwhile;	?>
<?php get_footer();
