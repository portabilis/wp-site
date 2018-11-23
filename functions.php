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
	wp_enqueue_script( 'site-style-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js");
	wp_enqueue_script( 'site-style-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
  wp_enqueue_script( 'site-script-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

function register_post_type_cases(){
  $singular = 'Case';
  $plural = 'Cases';
  $labels = array(
    'name' => $plural,
    'singular_name' => $singular,
    'add_new_item' => 'Adicionar novo '.$singular,
    );
  $args = array(
    'labels' => $labels,
    'public' => true,
        'supports' => array('title'),
        'menu_position' => 4
    );

  register_post_type('cases',$args);
}
add_action( 'init','register_post_type_cases');


function register_post_type_funcionario(){
  $singular = 'Funcionário';
  $plural = 'Funcionários';
  $labels = array(
    'name' => $plural,
    'singular_name' => $singular,
    'add_new_item' => 'Adicionar novo '.$singular,
    );
  $args = array(
    'labels' => $labels,
    'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 5
    );

  register_post_type('funcionario',$args);
}
add_action( 'init','register_post_type_funcionario');


function register_post_type_vagas(){
  $singular = 'Vaga';
  $plural = 'Vagas';
  $labels = array(
    'name' => $plural,
    'singular_name' => $singular,
    'add_new_item' => 'Adicionar novo '.$singular,
    );
  $args = array(
    'labels' => $labels,
    'public' => true,
        'supports' => array('title'),
        'menu_position' => 6
    );

  register_post_type('vagas',$args);
}
add_action( 'init','register_post_type_vagas');
