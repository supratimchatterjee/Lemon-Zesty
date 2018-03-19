<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lemon_Zesty
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
			<div class="blog-section">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg">
				<div class=" uk-clearfix">
					<span class="uk-float-right">September 21, 2017</span>
					<h2 class="uk-float-left">Meet the Artist</h2>
				</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
					adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
				</p>
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single-1.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single-2.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single-2.jpg"></li>
				</ul>
				<blockquote>
					Yankee Dime Creations is now Lemon Zesty!  Same sassy art, but a brand new name.  I adore custom work so feel free to ask away. Thanks for looking!
				</blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
					adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irureed
				</p>
				<div class="uk-clearfix">
					<div class="uk-float-right post-comment">
						<ul>
							<li>cat :<em><a href="#">Events, About</a></em></li>
							<li class="like"><a href="#">136 Likes</a></li>
							<li class="comment"><a href="#">21 Comments</a></li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<h4>post a comment</h4>
			<form class="uk-form">
	            <div class="uk-form-row">
	                <input placeholder="Name" type="text"> <span class="uk-form-help-inline">
					<input placeholder="Email" type="email"> <span class="uk-form-help-inline">
	            </div>
	            <div class="uk-form-row">
	                <textarea cols="30" rows="5" placeholder="Comments"></textarea>
	            </div>
				<input type="file" name="pic" accept="image/*">
				<a href="#" class="uk-button">POST</a>
	        </form>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif;?>
<?php
get_footer();
