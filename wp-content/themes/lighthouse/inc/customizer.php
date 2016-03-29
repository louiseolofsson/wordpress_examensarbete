<?php
/**
 * Register customizer
 * @param WP_Customize_Manager $wp_customize
 */

function lh_customize_register( $wp_customize ){

    /**
     * -------------------------------------------------
     * FIRST CONTENT - HEAD OPTIONS PANEL
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_head_options_panel', array(
        'title'         => __( 'First Content - Head Options' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 1
    ) );
    // Section - Logotype
    $wp_customize->add_section( 'lh_head_options_logotype' , array(
        'title' => __( 'Logotype', 'lh' ),
        'panel' => 'lh_head_options_panel'
    ) );
    // Setting - Default-logotype
    $wp_customize->add_setting( 'lh_head_options_logo', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
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
        'title'     => __( 'Heading on Image', 'lh' ),
        'panel'     => 'lh_head_options_panel'
    ) );
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_head_options_title', array(
        'default'               => 'Your own heading',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_head_options_title', array(
        'label'     => __( 'Heading', 'lh' ),
        'section'   => 'lh_head_options_heading',
        'setting'   => 'lh_head_options_title'
    ) );

    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_head_options_subtitle', array(
        'default'               => 'Your own subheading',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_head_options_subtitle', array(
        'label'     => __( 'Subheading', 'lh' ),
        'section'   => 'lh_head_options_heading',
        'setting'   => 'lh_head_options_subtitle'
    ) );

    /**
     * -------------------------------------------------
     * SECOND CONTENT - COMPANY QUALITY PANEL
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_company_info_panel', array(
        'title'         => __( 'Second Content - Qualities' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 2
    ) );

    // COMPANY INFO HEADING
    $wp_customize->add_section( 'lh_company_info_heading' , array(
        'title'     => __( 'Heading & Subheading', 'lh' ),
        'panel'     => 'lh_company_info_panel'
    ) );
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_company_info_title', array(
        'default'               => 'Your own heading',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_info_title', array(
        'label'     => __( 'Heading', 'lh' ),
        'section'   => 'lh_company_info_heading',
        'setting'   => 'lh_company_info_title'
    ) );

    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_company_info_subtitle', array(
        'default'               => 'Your own subheading',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_info_subtitle', array(
        'label'     => __( 'Subheading', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_company_info_heading',
        'setting'   => 'lh_company_info_subtitle'
    ) );

    // COMPANY QUALITIES SECTION
    // Company Qualities 1 Section
    $wp_customize->add_section( 'lh_company_info_qualities1' , array(
        'title'     => __( 'Company Quality 1', 'lh' ),
        'panel'     => 'lh_company_info_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_qual1_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_qual1_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_info_qualities1',
            'setting'   => 'lh_company_qual1_pic'
        )
    ) );
    // Company qualities 1 Title
    // Setting
    $wp_customize->add_setting( 'lh_company_qual1_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual1_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_info_qualities1',
        'setting'   => 'lh_company_qual1_title'
    ) );
    // Company qualities 1 text
    // Setting
    $wp_customize->add_setting( 'lh_company_qual1_text', array(
        'default'               => 'Write about a company quality',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual1_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_company_info_qualities1',
        'setting'   => 'lh_company_qual1_text'
    ) );

    // COMPANY QUALITIES SECTION 2
    $wp_customize->add_section( 'lh_company_info_qualities2' , array(
        'title'     => __( 'Company Quality 2', 'lh' ),
        'panel'     => 'lh_company_info_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_qual2_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_qual2_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_info_qualities2',
            'setting'   => 'lh_company_qual2_pic'
        )
    ) );
    // Company qualities 2 Title
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_company_qual2_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual2_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_info_qualities2',
        'setting'   => 'lh_company_qual2_title'
    ) );

    // Company qualities 2 Subtitle
    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_company_qual2_text', array(
        'default'               => 'Write about a company quality',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual2_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_company_info_qualities2',
        'setting'   => 'lh_company_qual2_text'
    ) );

    // COMPANY QUALITIES SECTION 3
    $wp_customize->add_section( 'lh_company_info_qualities3' , array(
        'title'     => __( 'Company Quality 3', 'lh' ),
        'panel'     => 'lh_company_info_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_qual3_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_qual3_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_info_qualities3',
            'setting'   => 'lh_company_qual3_pic'
        )
    ) );
    // Company qualities 3 Title
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_company_qual3_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual3_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_info_qualities3',
        'setting'   => 'lh_company_qual3_title'
    ) );

    // Company qualities 3 text
    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_company_qual3_text', array(
        'default'               => 'Write about a company quality',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual3_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_company_info_qualities3',
        'setting'   => 'lh_company_qual3_text'
    ) );

    // COMPANY QUALITIES SECTION 4
    $wp_customize->add_section( 'lh_company_info_qualities4' , array(
        'title'     => __( 'Company Quality 4', 'lh' ),
        'panel'     => 'lh_company_info_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_qual4_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_qual4_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_info_qualities4',
            'setting'   => 'lh_company_qual4_pic'
        )
    ) );
    // Company qualities 4 Title
    // Setting - Default-value "Your own heading"
    $wp_customize->add_setting( 'lh_company_qual4_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual4_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_info_qualities4',
        'setting'   => 'lh_company_qual4_title'
    ) );

    // Company qualities 4 text
    // Setting - Default-value "Your own subheading"
    $wp_customize->add_setting( 'lh_company_qual4_text', array(
        'default'               => 'Write about a company quality',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_qual4_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_company_info_qualities4',
        'setting'   => 'lh_company_qual4_text'
    ) );

    /**
     * -------------------------------------------------
     * THIRD CONTENT - ABOUT US
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_company_about_panel', array(
        'title'         => __( 'Third Content - About us' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 3
    ) );

    // COMPANY ABOUT US 1 Section
    $wp_customize->add_section( 'lh_company_about_us1' , array(
        'title'     => __( 'Company about us 1', 'lh' ),
        'panel'     => 'lh_company_about_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_about1_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_about1_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_about_us1',
            'setting'   => 'lh_company_about1_pic'
        )
    ) );
    // Setting - Company About us 1 Title
    $wp_customize->add_setting( 'lh_company_about1_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about1_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_about_us1',
        'setting'   => 'lh_company_about1_title'
    ) );
    // Setting - Company about us 1 text
    $wp_customize->add_setting( 'lh_company_about1_text', array(
        'default'               => 'Write about your company',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about1_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_company_about_us1',
        'setting'   => 'lh_company_about1_text'
    ) );

    // COMPANY ABOUT US 2 SECTION
    $wp_customize->add_section( 'lh_company_about_us2' , array(
        'title'     => __( 'Company About us 2', 'lh' ),
        'panel'     => 'lh_company_about_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_about2_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_about2_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_about_us2',
            'setting'   => 'lh_company_about2_pic'
        )
    ) );
    // Company about us 2 Title - setting
    $wp_customize->add_setting( 'lh_company_about2_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about2_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_about_us2',
        'setting'   => 'lh_company_about2_title'
    ) );

    // Company about us 2 text - setting
    $wp_customize->add_setting( 'lh_company_about2_text', array(
        'default'               => 'Write about a company',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about2_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_company_about_us2',
        'setting'   => 'lh_company_about2_text'
    ) );

    // COMPANY QUALITIES SECTION 3
    $wp_customize->add_section( 'lh_company_about_us3' , array(
        'title'     => __( 'Company about us 3', 'lh' ),
        'panel'     => 'lh_company_about_panel'
    ) );
    // Setting - Default picture to quality
    $wp_customize->add_setting( 'lh_company_about3_pic', array(
        'default'               => 'http://localhost/wordpress_examensarbete/wp-content/uploads/2016/01/twitter.png',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_company_about3_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_company_about_us3',
            'setting'   => 'lh_company_about3_pic'
        )
    ) );
    // Company about us 3 Title - setting
    $wp_customize->add_setting( 'lh_company_about3_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about3_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_company_about_us3',
        'setting'   => 'lh_company_about3_title'
    ) );

    // Company about us 3 text - setting
    $wp_customize->add_setting( 'lh_company_about3_text', array(
        'default'               => 'Write about a company',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_company_about3_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_company_about_us3',
        'setting'   => 'lh_company_about3_text'
    ) );

    /**
     * -------------------------------------------------
     * FOURTH CONTENT - 1ST INTRODUCE
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_introduce_panel', array(
        'title'         => __( 'Fourth Content - First Introduce' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 4
    ) );


    /**
     * -------------------------------------------------
     * FIFTH CONTENT - YOUR TEAMS MEMBERS
     * -------------------------------------------------
     */

    $wp_customize->add_panel( 'lh_team_panel', array(
        'title'         => __( 'Fifth Content - Your Team' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 5
    ) );
    // Section
    $wp_customize->add_section( 'lh_team_heading' , array(
        'title'     => __( 'Team - Heading', 'lh' ),
        'panel'     => 'lh_team_panel',
        'priority'  => 1
    ) );
    //Setting - TITLE
    $wp_customize->add_setting( 'lh_team_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control - TITLE
    $wp_customize->add_control( 'lh_team_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_team_heading',
        'setting'   => 'lh_team_title'
    ) );
    //Setting - SUBTITLE
    $wp_customize->add_setting( 'lh_team_subtitle', array(
        'default'               => 'Your own subtitle',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control - SUBTITLE
    $wp_customize->add_control( 'lh_team_subtitle', array(
        'label'     => __( 'Subtitle', 'lh' ),
        'type'      => 'textarea',
        'section'   => 'lh_team_heading',
        'setting'   => 'lh_team_subtitle'
    ) );

    /**
     * -------------------------------------------------
     * SIXTH CONTENT - 2ND INTRODUCE
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_second_introduce_panel', array(
        'title'         => __( 'Sixth Content - Second Introduce' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 6
    ) );

    /**
     * -------------------------------------------------
     * SEVENTH CONTENT - PICTURE AND TEXT
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_picture_text_panel', array(
        'title'         => __( 'Seventh Content - Pic & Text' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 7
    ) );

    // Section
    $wp_customize->add_section( 'lh_pic_text_heading' , array(
        'title'     => __( 'Pic & Text - Heading', 'lh' ),
        'panel'     => 'lh_picture_text_panel',
        'priority'  => 1
    ) );
    //Setting - TITLE
    $wp_customize->add_setting( 'lh_pic_text_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control - TITLE
    $wp_customize->add_control( 'lh_pic_text_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_pic_text_heading',
        'setting'   => 'lh_pic_text_title'
    ) );
    //Setting - SUBTITLE
    $wp_customize->add_setting( 'lh_pic_text_subtitle', array(
        'default'               => 'Your own subtitle',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control - SUBTITLE
    $wp_customize->add_control( 'lh_pic_text_subtitle', array(
        'label'     => __( 'Subtitle', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_pic_text_heading',
        'setting'   => 'lh_pic_text_subtitle'
    ) );

    $wp_customize->add_section( 'lh_pic_text' , array(
        'title'     => __( '1st Picture & Text', 'lh' ),
        'panel'     => 'lh_picture_text_panel'
    ) );
    // Setting - (Default?)
    $wp_customize->add_setting( 'lh_pic', array(
        'default'               => '',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_pic',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_pic_text',
            'setting'   => 'lh_picture_text_panel'
        )
    ) );
    // Setting - Title
    $wp_customize->add_setting( 'lh_title', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_title', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_pic_text',
        'setting'   => 'lh_title'
    ) );
    // Setting
    $wp_customize->add_setting( 'lh_text', array(
        'default'               => 'Write something about your company',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_text', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_pic_text',
        'setting'   => 'lh_text'
    ) );

    $wp_customize->add_section( 'lh_pic_text2' , array(
        'title'     => __( '2nd Picture & Text', 'lh' ),
        'panel'     => 'lh_picture_text_panel'
    ) );
    // Setting - (Default?)
    $wp_customize->add_setting( 'lh_pic2', array(
        'default'               => '',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'lh_pic2',
        array(
            'label'     => __( 'Picture', 'lh' ),
            'section'   => 'lh_pic_text2',
            'setting'   => 'lh_picture_text_panel'
        )
    ) );
    // Setting - Title
    $wp_customize->add_setting( 'lh_title2', array(
        'default'               => 'Your own title',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_title2', array(
        'label'     => __( 'Title', 'lh' ),
        'section'   => 'lh_pic_text2',
        'setting'   => 'lh_title2'
    ) );
    // Setting
    $wp_customize->add_setting( 'lh_text2', array(
        'default'               => 'Write something about your company',
        'sanitize_callback'     => 'lh_sanitize_text'
    ) );
    // Control
    $wp_customize->add_control( 'lh_text2', array(
        'label'     => __( 'Text', 'lh' ),
        'type'      => 'textarea',
        'description' => 'Add < br/> for line break',
        'section'   => 'lh_pic_text2',
        'setting'   => 'lh_text2'
    ) );

    /**
     * -------------------------------------------------
     * FOOTER CONTENT
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'lh_footer_panel', array(
        'title'         => __( 'Footer Content' ),
        'capability'    => 'edit_theme_options',
        'priority'      => 9
    ) );



}
add_action( 'customize_register', 'lh_customize_register' );

// The force_balance_tags() function ensures that no tags are left unclosed,
// while the wp_kses_post() ensures that only safe tags make it into the database
// (the same tags that are allowed in a standard WordPress post.
function lh_sanitize_text( $input ){
    return wp_kses_post( force_balance_tags( $input ) );
}


function lh_customize_enqueue_scripts(){
    wp_enqueue_script( 'lh-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery'), 'v1', true );
}
add_action( 'customize_controls_enqueue_scripts', 'lh_customize_enqueue_scripts');