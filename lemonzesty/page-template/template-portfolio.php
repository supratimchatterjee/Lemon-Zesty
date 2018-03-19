<?php
/*
Template Name: Portfolio
 */

get_header(); ?>

<?php if(have_posts()) : ?>
<?php while ( have_posts() ) : the_post();?>
	<div class="uk-container uk-container-center uk-text-center">
		<h1><?php the_title(); ?></h1>
		<hr>
		<div class="uk-width-1-3 uk-container-center">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-grid>
			<?php $images = get_field('image_gallery'); ?>
				<?php foreach ($images as $image ):?>
				<div class="uk-width-small-1-2 uk-width-medium-1-3">
					<img class="" src="<?php echo $image['url']; ?>">
				</div>
				<?php endforeach; ?>
		</div>
	</div>
<?php endwhile; // End of the loop.?>
<?php endif;?>
<?php
get_footer();
