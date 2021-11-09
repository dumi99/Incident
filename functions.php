<?php

function add_theme_scripts() {

    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all' );

    wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
    
    wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.8.6');


  }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu-1' => __( 'Footer Menu 1' ),
            'footer-menu-2' => __( 'Footer Menu 2' )
        )
    );
}
  add_action( 'init', 'wpb_custom_new_menu' );



// Importing all necessary inc files


//ACF stuff
require('inc/acf-related/acf.php');





/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'News right sidebar',
		'id'            => 'news_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_theme_support( 'post-thumbnails' );


?>