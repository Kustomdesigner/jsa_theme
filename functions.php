<?php

/*
*  Enqueue Scripts
*/
function jsa_theme_scripts() {
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome.min.css' );
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick.css' );   
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css' );   
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script('jquery'); 
    wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'jsa_theme_scripts' );

/*
*  Disable Gutenberg
*/
add_filter('use_block_editor_for_post', '__return_false', 10);

/*
*  Register Nav Menus
*/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
	'mobile_menu' => 'Mobile Menu',
) );

/*
*  Add Post Thumbnails
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 150, 150, true );
add_image_size( 'testimonial-thumbnail', 150, 150 );

/*
*  Register Sidebar
*/
function register_all_sidebars() {
    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'page-sidebar' ),
        'id' => 'aside-1',
        'description' => __( 'Widgets in this area will be shown on all pages.', 'cast' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Post Sidebar', 'post-sidebar' ),
        'id' => 'aside-2',
        'description' => __( 'Widgets in this area will be shown on all posts.', 'cast' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'register_all_sidebars' );
