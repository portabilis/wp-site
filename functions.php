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
		'primary' => esc_html__( 'Menutopo 1', 'site' ),
	) );
  register_nav_menus( array(
    'secondary' => esc_html__( 'Menutopo 2', 'site' ),
  ) );
  register_nav_menus( array(
    'tertiary' => esc_html__( 'Menutopo Blog', 'site' ),
  ) );
  register_nav_menus( array(
    'primary_f' => esc_html__( 'Menurodape 1', 'site' ),
  ) );
  register_nav_menus( array(
    'secondary_f' => esc_html__( 'Menurodape 2', 'site' ),
  ) );

	add_image_size('funcionario-thumb',250,250,true);
  add_image_size('blog-thumb',450,250,true);
  add_image_size('blog-thumb-b',350,350,true);
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
	wp_enqueue_script( 'site-style-popper', "https://unpkg.com/popper.js/dist/umd/popper.min.js");
	wp_enqueue_script( 'site-style-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
  wp_enqueue_script( 'site-script-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';