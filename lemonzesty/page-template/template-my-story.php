<?php
/*
Template Name: My Story
 */

get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while ( have_posts() ) : the_post();?>
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-collapse" data-uk-grid-match>
		<?php if( have_rows('top_module') ): ?>
			<?php $count = 0; ?>
			<?php while( have_rows('top_module') ): the_row(); ?>
			<?php if($count % 2 == 0): ?>
				<?php $class_image = 'uk-pull-1-2'; ?>
				<?php $class = 'uk-push-1-2'; ?>
				<?php else: ?>
				<?php $class = ''; ?>
				<?php $class_image = ''; ?>
			<?php endif; ?>
			<div class="uk-width-medium-1-2 <?php echo $class; ?>">
				<h3><?php the_sub_field('title'); ?></h3>
				<hr>
				<span><?php the_sub_field('sub_title'); ?></span>
				<?php the_sub_field('content'); ?>
				<?php if(get_sub_field('button_link')): ?>
				<a href="<?php the_sub_field('button_link'); ?>" class="uk-button"><?php the_sub_field('button_text'); ?></a>
				<?php endif; ?>
			</div>
			<div class="uk-width-medium-1-2 <?php echo $class_image; ?>">
				<div class="offset-caption uk-width-medium-1-1">
					<img class="" src="<?php the_sub_field('image'); ?>">
				</div>
			</div>
			<?php $count++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
	<?php endwhile; // End of the loop.?>
<?php endif;?>
<?php
get_footer();
