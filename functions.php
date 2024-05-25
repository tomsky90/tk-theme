<?php
/**
 * @package labella
 */

error_reporting( 0 );

if ( ! defined( '_S_VERSION' ) ) {
	define( 'S_VERSION', '1.6.7' );
}

require_once 'inc/menus.php';


// require_once( get_stylesheet_directory() . '/assets/css/main.css?v=5.2' );

function init_scripts() {
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css?v=5.2', [], false, 'all' );
    wp_enqueue_style( 'main-css' );

    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/script-min.js?v=1.0', [], false, 'all' );
    wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'init_scripts' );


function labella_theme_setup() {
   
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'labella_theme_setup');


