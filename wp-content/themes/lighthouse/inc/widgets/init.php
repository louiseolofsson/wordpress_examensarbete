<?php
/*
 *      $args = array(
 *      'name' => $name,
 *      'id' => $id,
 *      'before_widget' => '',
 *      'after_widget' => '',
 *      );
 *      register_sidebar($args);
 *
 *      noticing above example, this is how you insert $args in functions in a more
 *      clear way.
 *
 *      we do not write $args, but the register_sidebar(array()) is the same thing.
 */

// Description widget
require get_template_directory() . '/inc/widgets/description-widget.php';

// Social widget
require get_template_directory() . '/inc/widgets/social-widget.php';

// Picture widget
require get_template_directory() . '/inc/widgets/picture-widget.php';

// Introduce widget
require get_template_directory() . '/inc/widgets/introduce-widget.php';

// Team widget
require get_template_directory() . '/inc/widgets/team-widget.php';

function lh_register_widgets_init() {

    /*register_widget( 'Description_Widget' );

    register_sidebar( array(
        'name'          => __( 'Description Widget Sidebar', 'lh' ),
        'id'            => 'description-widget-sidebar',
        'before_widget' => '<div class="description-widget">',
        'after_widget'  => '</div>'
    ) );*/

    register_widget( 'Description_Widget' );
    register_widget( 'Social_Widget' );
    register_widget( 'Picture_Widget' );
    register_widget( 'Introduce_Widget' );
    register_widget( 'Team_Widget' );


    $sidebars = array(
        'description-widget-sidebar' => __( 'Description Widget Sidebar', 'lh' ),
        'first-introduce-widget-sidebar' => __( 'First Introduce - Widget', 'lh' ),
        'second-introduce-widget-sidebar' => __( 'Second Introduce - Widget', 'lh' ),
        'team-widget-sidebar' => __( 'Team Members - Widget', 'lh' ),
        'footer-widget-sidebar-1' => __( 'Footer Sidebar 1', 'lh' ),
        'footer-widget-sidebar-2' => __( 'Footer Sidebar 2', 'lh' )
    );

    /*
     *      $args = array(
     *      'name' => $name,
     *      'id' => $id,
     *      'before_widget' => '',
     *      'after_widget' => '',
     *      );
     *      register_sidebar($args);
     *
     *      noticing above example, this is how you insert $args in functions in a more
     *      clear way.
     *
     *      we do not write $args, but the register_sidebar(array()) is the same thing.
     */

    /*
    <div id="%1$s" class="widget %2$s"> inside 'before_widget' gives every div a unique id.
    Close the div with </div> inside 'after_widget'.
    */
    foreach ( $sidebars as $id => $name) {
        register_sidebar( array(
            'name' => $name,
            'id' => $id,
            'before_widget' => '',
            'after_widget' => ''
        ) );
    }

}
add_action( 'widgets_init', 'lh_register_widgets_init' );

function lh_widget_scripts() {
    wp_enqueue_media();
    wp_enqueue_script( 'lh-widget-js', get_template_directory_uri() . '/assets/js/widgets.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'lh_widget_scripts' );
