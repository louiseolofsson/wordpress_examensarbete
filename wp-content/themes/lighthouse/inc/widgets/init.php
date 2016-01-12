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


function lh_description_widgets_init() {

    register_widget( 'Description_Widget' );

    register_sidebar( array(
        'name'          => __( 'Description Widget Sidebar', 'lh' ),
        'id'            => 'description-widget-sidebar',
        'before_widget' => '<div class="description-widget-div">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'lh_description_widgets_init' );