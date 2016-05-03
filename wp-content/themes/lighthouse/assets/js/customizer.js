jQuery(function( $ ){
    wp.customize.section( 'sidebar-widgets-team-widget-sidebar' ).panel( 'lh_team_panel' );
    wp.customize.section( 'sidebar-widgets-team-widget-sidebar' ).priority( '2' );

    wp.customize.section( 'sidebar-widgets-first-introduce-widget-sidebar' ).panel( 'lh_introduce_panel' );
    wp.customize.section( 'sidebar-widgets-first-introduce-widget-sidebar' ).priority( '2' );

    wp.customize.section( 'sidebar-widgets-second-introduce-widget-sidebar' ).panel( 'lh_second_introduce_panel' );
    wp.customize.section( 'sidebar-widgets-second-introduce-widget-sidebar' ).priority( '2' );

    wp.customize.section( 'sidebar-widgets-social-widgetarea' ).panel( 'lh_social_panel' );
    wp.customize.section( 'sidebar-widgets-social-widgetarea' ).priority( '2' );

    wp.customize.section( 'sidebar-widgets-footer-widget-sidebar-1' ).panel( 'lh_footer_panel' );
    wp.customize.section( 'sidebar-widgets-footer-widget-sidebar-1' ).priority( '2' );

    wp.customize.section( 'background_image' ).panel( 'lh_head_options_panel' );
    wp.customize.section( 'background_image' ).priority( '999' );

});
