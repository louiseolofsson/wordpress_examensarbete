<?php

function lh_after_setup_theme() {

    // Register menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lh' ),
        'footer' => __( 'Footer Menu', 'lh' )
    ) );


    add_theme_support( 'post-formats', array(
        'image', 'video', 'gallery'
    ) );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'lh_after_setup_theme' );

function lh_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Default', 'lh' ),
        'id'            => 'sidebar-default',
        'before-title'  => '<h2 class="widget-title">',
        'after-title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'lh_widgets_init' );

function lh_enqueue_scripts() {

    // bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    // bootstrap.js
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery') );

    // style.css
    wp_enqueue_style( 'default-style', get_stylesheet_uri() );


}
add_action( 'wp_enqueue_scripts', 'lh_enqueue_scripts' );



// Customizer
require get_template_directory() . '/inc/customizer.php';

// Widgets
require get_template_directory() . '/inc/widgets/init.php';
