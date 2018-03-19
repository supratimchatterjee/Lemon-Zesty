<?php
/*
Template Name: FAQ
 */

get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while ( have_posts() ) : the_post();?>
<div class="uk-container uk-container-center">
	<div class="uk-clearfix">
		<div class="uk-float-right">
			<?php if(get_field('button_link')): ?>
			<a  href="<?php the_field('button_link'); ?>" class="uk-button"><?php the_field('button_text'); ?></a>
			<?php endif; ?>
		</div>
		<div class="tm-overflow-hidden">
			<p>
			<?php the_field('heading'); ?>
			</p>
		</div>
	</div>
</div>
<div class="uk-block">
	<div class="uk-container uk-container-center">
		<h1><?php the_title(); ?></h1>
		<hr>
		<div class="uk-grid">
			<div class="uk-width-medium-2-3">
				<div class="uk-grid">
					<?php if( have_rows('module_heading') ): ?>
				    	<?php while( have_rows('module_heading') ): the_row(); ?>
						<div class="uk-width-medium-1-2">
							<h5><?php the_sub_field('heading'); ?></h5>
							<?php if( have_rows('faq_content') ): ?>
								<?php while( have_rows('faq_content') ): the_row(); ?>
								<div class="uk-accordion" data-uk-accordion>
									<h6 class="uk-accordion-title"><?php the_sub_field('quention'); ?></h6>
									<div class="uk-accordion-content"><?php the_sub_field('answer'); ?></div>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="uk-width-medium-1-3">
				<h5><?php the_field('heading_question'); ?></h5>
				<p><?php the_field('content_question'); ?></p>
				<?php $code = get_field('short_code'); ?>
				<?php echo do_shortcode($code) ;?>
			</div>
		</div>
	</div>
</div>

	<?php endwhile; // End of the loop.?>
<?php endif;?>


<?php
get_footer();
