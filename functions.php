<?php

/**
 * Include CSS files 
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/node_modules/mdbootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/node_modules/mdbootstrap/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/node_modules/mdbootstrap/js/jquery-3.2.1.min.js', array(), '2.2.3', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/node_modules/mdbootstrap/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/node_modules/mdbootstrap/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/node_modules/mdbootstrap/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );



             
/**
 * Setup Theme
 */
function MDB4wp_setup() {
  // Navigation Menus
  register_nav_menus(array(
    'navbar' => __( 'Navbar Menu'),
    'footer1' => __( 'Footer #1 Column'),
    'footer2' => __( 'Footer #2 Column'),
    'footer3' => __( 'Footer #3 Column')

    ));

  // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('main-full', 1078, 516, false); // main post image in full width
  }
  add_action('after_setup_theme', 'MDB4wp_setup');
                                     

/**
 * Include Bootstrap walker
 */
require_once('inc/mdb_bootstrap_navwalker.php');

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';


?>




