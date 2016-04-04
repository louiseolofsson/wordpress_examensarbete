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

    // Make sure that the theme supports woocommerce and gets rid of the message that says:
    // “Your theme does not declare WooCommerce support”. You add_theme_support as below
    add_theme_support( 'woocommerce' );
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


/*---------------------------------- WooCommerce -----------------------------------*/

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// TE9LE3DhZV

// Make sure that the markup matches that of your theme.
// If you’re unsure of which classes or IDs to use,
// take a look at your theme’s page.php for a guide.
function lh_theme_wrapper_start() {
    echo '<div id="main" class="container">';
}
add_action('woocommerce_before_main_content', 'lh_theme_wrapper_start', 10);

function lh_theme_wrapper_end() {
    echo '</div>';
}
add_action('woocommerce_after_main_content', 'lh_theme_wrapper_end', 10);

// Unhook sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Display 12 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

// Remove bredcrumbs from shop 'homepage'
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// 'remove' 'rating'-tab from single-product page
//function lh_woo_remove_reviews_tab($tabs) {
    //unset($tabs['reviews']);
    //unset($tabs['additional_information']);
    //return $tabs;
//}
//add_filter( 'woocommerce_product_tabs', 'lh_woo_remove_reviews_tab', 98 );

// Remove the product rating display on product loops
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );