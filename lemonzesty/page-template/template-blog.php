<?php
/*
Template Name: Blog
 */

get_header(); ?>

<?php if(have_posts()) : ?>
<?php while ( have_posts() ) : the_post();?>
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-medium-3-10">
			<hr>
			<div>
				<h4>Popular post</h4>
				<ul>
					<li><a href="#">Meet the Artist</a></li>
					<hr>
					<li><a href="#">New Pieces Coming this Fall</a></li>
					<hr>
					<li><a href="#">Illustrations, Pins & More!</a></li>
				</ul>
			</div>
			<div>
				<h4>Blog categories</h4>
				<ul>
					<li><a href="#">News (4)</a></li>
					<li><a href="#">Events (7)</a></li>
					<li><a href="#">About (2)</a></li>
				</ul>
			</div>
			<div>
				<h4>Archives</h4>
				<ul>
					<li><a href="#">March (4)</a></li>
					<li><a href="#">April (5)</a></li>
					<li><a href="#">May (3)</a></li>
					<li><a href="#">June (4)</a></li>
					<li><a href="#">July (2)</a></li>
				</ul>
			</div>
			<div>
				<hr>
				<h4>lemon zesty Instagram</h4>
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-1.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-2.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-3.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-1.jpg"></li>
				</ul>
			</div>

		</div>
		<div class="uk-width-medium-7-10">
			<h1>blog</h1>
			<hr>
			<div class="blog-section uk-clearfix">
				<div class="uk-float-right uk-margin-large-top date">
					<span>Sept<em>21</em></span>
				</div>
				<div class="blog-sectio">
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
				<div class="blog-sectio">
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
				<div class="blog-sectio">
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
			<div class="uk-text-center">
				<a href="#" class="uk-button">LOAD MORE</a>
			</div>
		</div>
	</div>
</div>
<?php endwhile; // End of the loop.?>
<?php endif;?>
<?php
get_footer();
