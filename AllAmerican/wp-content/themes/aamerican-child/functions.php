<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; 

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style( 'litebox-style', get_stylesheet_directory_uri() . '/css/litebox.css' );
    wp_enqueue_style( 'lightslider-min', get_stylesheet_directory_uri() . '/css/lightslider.min.css' );
    wp_enqueue_style( 'master-style', get_stylesheet_directory_uri() . '/css/master.css' );
    wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css' );
  
    wp_enqueue_script( 'jquery-min-script', 'http://code.jquery.com/jquery-1.11.2.min.js' );
    wp_enqueue_script( 'carousel-script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js' );
    wp_enqueue_script( 'litebox-script', get_stylesheet_directory_uri() . '/js/litebox.js' );
    wp_enqueue_script( 'lightslider-min-script', get_stylesheet_directory_uri() . '/js/lightslider.min.js' );    
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom.js' );
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );