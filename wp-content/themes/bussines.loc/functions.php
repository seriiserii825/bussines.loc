<?php
/**
 * bussines functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bussines
 */

require_once __DIR__.'/inc/carbon-fields/carbon-fields.php';
require_once __DIR__.'/inc/post-type.php';



if ( ! function_exists( 'bussines_setup' ) ) :
	function bussines_setup() {
		load_theme_textdomain( 'bussines', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'bussines' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'bussines_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bussines_setup' );

function bussines_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bussines_content_width', 640 );
}
add_action( 'after_setup_theme', 'bussines_content_width', 0 );

function bussines_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bussines' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bussines' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bussines_widgets_init' );

function bussines_scripts() {
	wp_enqueue_style( 'business-style', get_stylesheet_uri() );
	wp_enqueue_style('business-grid-css', get_template_directory_uri().'/assets/css/grid.css');
	wp_enqueue_style('business-magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style('business-style-css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('business-colorScheme-4-css', get_template_directory_uri().'/assets/css/colorScheme-4.css');
	wp_enqueue_style('business-camera-css', get_template_directory_uri().'/assets/css/camera.css');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'business-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-jquery.cookie-js', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array('jquery'), null, true );
	wp_enqueue_script( 'businessjquery.easing.1.3-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-tmstickup-js', get_template_directory_uri() . '/assets/js/tmstickup.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-jquery.ui.totop-js', get_template_directory_uri() . '/assets/js/jquery.ui.totop.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-jquery.equalheights-js', get_template_directory_uri() . '/assets/js/jquery.equalheights.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-superfish-js', get_template_directory_uri() . '/assets/js/superfish.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-camera-js', get_template_directory_uri() . '/assets/js/camera.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-jquery.magnific-popup.min-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'business-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bussines_scripts' );

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'nav_menu_css_class', 'add_primary_menu_item_css_classes', 10, 4 );

function add_primary_menu_item_css_classes( $classes) {
	if(in_array('current-menu-item', $classes)){
        $classes[] = 'active';
	}

	return $classes;
}
