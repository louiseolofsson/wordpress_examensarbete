<?php
/**
 * Register customizer
 * @param WP_Customize_Manager $wp_customize
 */

function lh_customize_register( $wp_customize ){

    /**
     * -------------------------------------------------
     * HEAD OPTIONS PANEL
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_head_options_panel', array(
        'title' => __( 'Head Options' ),
        'capability'    => 'edit_theme_options',
        'priority' => 1
    ) );
    // Section - Logotype
    $wp_customize->add_section( 'lh_head_options_logotype' , array(
        'title' => __( 'Logotype', 'lh' ),
        'panel' => 'lh_head_options_panel'
    ) );
    // Setting - Default-logotype
    $wp_customize->add_setting( 'lh_head_options_logo', array(
        'default' => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_head_options_logo',
        array(
            'label'     => __( 'Logotype', 'lh' ),
            'section'   => 'lh_head_options_logotype',
            'setting'   => 'lh_head_options_logo'
        )
    ) );

    // Section - Heading
    $wp_customize->add_section( 'lh_head_options_heading' , array(
        'title' => __( 'Image Heading', 'lh' ),
        'panel' => 'lh_head_options_panel'
    ) );
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_head_options_title', array(
        'default' => 'Your own heading',
        'sanitize_callback' => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_head_options_title', array(
        'label' => __( 'Heading', 'lh' ),
        'section' => 'lh_head_options_heading',
        'setting' => 'lh_head_options_title'
    ) );

    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_head_options_subtitle', array(
        'default' => 'Your own subheading',
        'sanitize_callback' => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_head_options_subtitle', array(
        'label' => __( 'Subheading', 'lh' ),
        'section' => 'lh_head_options_heading',
        'setting' => 'lh_head_options_subtitle'
    ) );

}
add_action( 'customize_register', 'lh_customize_register' );

// The force_balance_tags() function ensures that no tags are left unclosed,
// while the wp_kses_post() ensures that only safe tags make it into the database
// (the same tags that are allowed in a standard WordPress post.
function lh_sanitize_text( $input ){
    return wp_kses_post( force_balance_tags( $input ) );
}