<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :

function site_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'site' ),
	) );

	add_image_size('home-thumb',600,800,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );
  wp_enqueue_style( 'site-style-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style( 'site-style-animate', get_template_directory_uri() ."/assets/css/animate.css" );

	wp_enqueue_script( 'site-style-jquery', get_template_directory_uri() ."/assets/js/jquery-3.1.1.min.js");
	wp_enqueue_script( 'site-style-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
  wp_enqueue_script( 'site-script-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
