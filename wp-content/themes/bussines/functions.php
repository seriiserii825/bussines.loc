<?php

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_true' );

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );


if ( ! function_exists( 'bussines_setup' ) ) :
	function bussines_setup() {
		load_theme_textdomain( 'bussines', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bussines' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;

add_action( 'after_setup_theme', 'bussines_setup' );

require( trailingslashit( get_template_directory() ) . '/functions/theme-options.php');
require( trailingslashit( get_template_directory() ) . '/functions/meta-boxes.php');

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

function bussines_styles() {
	wp_enqueue_style('bussines-grid', get_stylesheet_directory_uri().'/css/grid.css');
	wp_enqueue_style('bussines-style', get_stylesheet_uri());
	wp_enqueue_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('bussines-animate', get_stylesheet_directory_uri().'/css/animate.css');
	wp_enqueue_style('bussines-colorScheme-2', get_stylesheet_directory_uri().'/css/colorScheme-2.css');
	wp_enqueue_style('bussines-owl-carousel', get_stylesheet_directory_uri().'/css/owl-carousel.css');
	wp_enqueue_style('bussines-magnific-popup', get_stylesheet_directory_uri().'/css/magnific-popup.css');
}
add_action( 'wp_enqueue_scripts', 'bussines_styles' );

function bussines_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('business_magnific_popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'bussines-scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
	wp_enqueue_script( 'bussines-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bussines_scripts' );
