<?php
/**
 * Lemon Zesty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lemon_Zesty
 */

if ( ! function_exists( 'lemonzesty_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lemonzesty_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lemon Zesty, use a find and replace
		 * to change 'lemonzesty' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lemonzesty', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-left' => esc_html__( 'Primary Menu Left', 'lemonzesty' ),
			'menu-right' => esc_html__( 'Primary Menu Right', 'lemonzesty' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


	}
endif;
add_action( 'after_setup_theme', 'lemonzesty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lemonzesty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lemonzesty_content_width', 1200 );
}
add_action( 'after_setup_theme', 'lemonzesty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lemonzesty_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'lemonzesty' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lemonzesty' ),
		'before_widget' => '<div id="%1$s" class=" uk-width-medium-2-10 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'lemonzesty' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'lemonzesty' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 style="display:none;">',
		'after_title'   => '</h6>',
	) );


}
add_action( 'widgets_init', 'lemonzesty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lemonzesty_scripts() {
	wp_enqueue_style( 'flexslider-style', get_template_directory_uri() .'/assets/css/flexslider.css' );
	wp_enqueue_style( 'app-style', get_template_directory_uri() .'/assets/css/app.css' );
	wp_enqueue_script( 'uikit', get_template_directory_uri() .'/assets/vendor/uikit/js/uikit.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'accordion', get_template_directory_uri() .'/assets/vendor/uikit/js/components/accordion.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'grid', get_template_directory_uri() .'/assets/vendor/uikit/js/components/grid.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'slide-show', get_template_directory_uri() .'/assets/vendor/uikit/js/components/slideshow.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() .'/assets/js/jquery.flexslider-min.js', array('jquery'), '', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() .'/assets/js/app.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lemonzesty_scripts' );





/**
 * Theme Option
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}



/**
 * Woocommerce .
 */
include 'inc/woocommerce.php';
