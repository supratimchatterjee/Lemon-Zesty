<?php
/*
Template Name: Event
 */

get_header(); ?>

<?php if(have_posts()) : ?>
<?php while ( have_posts() ) : the_post();?>
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-medium-3-10">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender-event.jpg">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-sidebar.jpg">
				<h4>Don’t Miss the Fall Selection!</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
 					tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-7-10">
			<h1>UPCOMING EVENTS</h1>
			<hr>
			<div class="blog-section uk-clearfix">
				<div class="uk-float-right uk-margin-large-top date">
					<span>Sept<em>21</em></span>
				</div>
				<div class="blog-section">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg">
					<h2>Meet the Artist</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
					</p>
					<div class="uk-float-left read-more">
						<a href="#">Read More</a>
					</div>
					<div class="uk-float-right post-comment">
						<ul>
							<li>cat :<em><a href="#">Events, About</a></em></li>
							<li class="like"><a href="#">136 Likes</a></li>
							<li class="comment"><a href="#">21 Comments</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="blog-section uk-clearfix">
				<div class="uk-float-right uk-margin-large-top date">
					<span>Sept<em>21</em></span>
				</div>
				<div class="blog-section">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg">
					<h2>Meet the Artist</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
					</p>
					<div class="uk-float-left read-more">
						<a href="#">Read More</a>
					</div>
					<div class="uk-float-right post-comment">
						<ul>
							<li>cat :<em><a href="#">Events, About</a></em></li>
							<li class="like"><a href="#">136 Likes</a></li>
							<li class="comment"><a href="#">21 Comments</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="blog-section uk-clearfix">
				<div class="uk-float-right uk-margin-large-top date">
					<span>Sept<em>21</em></span>
				</div>
				<div class="blog-section">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg">
					<h2>Meet the Artist</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
					</p>
					<div class="uk-float-left read-more">
						<a href="#">Read More</a>
					</div>
					<div class="uk-float-right post-comment">
						<ul>
							<li>cat :<em><a href="#">Events, About</a></em></li>
							<li class="like"><a href="#">136 Likes</a></li>
							<li class="comment"><a href="#">21 Comments</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; // End of the loop.?>
<?php endif;?>
<?php
get_footer();
