<?php

class Team_Widget extends WP_Widget {

    // Registers the widget, sets the widget-name
    public function __construct(){
        parent::__construct(
        // Base ID of your widget
            'lh-team-widget',
            // Widget name that will appear for the user to see
            __( 'Team Widget', 'lh' ),

            // Widget description
            array( 'description' => __( 'Widget that shows can show a member of your team - your employees.', 'lh' ) )
        );
    }

    public function widget( $args, $instance ) {

        extract( $args );

        global $sidebars_widgets;
        global $class;
        $count = count ($sidebars_widgets['team-widget-sidebar']);
        switch ( $count ) {
            case '1':
                $class = 'col-md-12';
                break;
            case '2':
                $class = 'col-md-6 col-sm-6 two_team_members';
                break;
            case '3':
                $class = 'col-md-4 col-sm-6';
                break;
            case '4':
                $class = 'col-md-3 col-sm-6';
                break;
            default:
                $class = 'col-md-3 col-sm-6';
                break;
        }

        ?>

            <div class="<?php echo $class; ?> team-widget-sidebar-row">

                <?php if ( $featured_image = @$instance['featured_image'] ) : ?>
                    <!--<div class="service-image" style="background-image: url(<?php echo $featured_image ?>);"></div>-->
                    <img src="<?php echo esc_url( $featured_image ); ?>" style="height: 170px; width: 170px; border-radius: 50%;">
                <?php endif; ?>
                <?php if( $team_title = @$instance[ 'team-title' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->
                    <div class="team-widget-title"><p class="teamMemberName"><?php echo $team_title; ?></p></div>
                <?php endif; ?>
                <hr class="teamHr">
                <?php if( $team_position = @$instance[ 'team-position' ] ) : ?>
                    <div class="team-widget-position"><p><?php echo $team_position; ?></p></div>
                <?php endif; ?>

            </div>

        <?php

    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;

        $instance[ 'featured_image' ] = esc_url_raw( $new_instance[ 'featured_image' ] );
        $instance[ 'team-title' ] = strip_tags( $new_instance[ 'team-title' ] );
        $instance[ 'team-position' ] = strip_tags( $new_instance[ 'team-position' ] );

        return $instance;
    }

    /*
     * The form() method/function is used to define the back-end widget form – which you see
     * in the widgets panel in the dashboard  This form enables a user to set up the title
     * and other options for the widget.
     * This function takes the following parameter(s):
     * $instance – Previously saved values from the database
     */
    public function form( $instance ) {

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'featured image' ); ?>"><?php _e( 'Feautured Image', 'lh' ); ?></label>
            <span class="image-container">
                <?php if ( ! empty( $instance['featured_image'] ) ) : ?>
                    <img src="<?php echo $instance['featured_image']; ?>" style="max-width: 100%; margin: 5px 0; display: block;">
                <?php endif; ?>
            </span>
            <input type="text" name="<?php echo $this->get_field_name('featured_image'); ?>" id="<?php echo $this->get_field_id( 'featured_image' ); ?>" value="<?php if ( ! empty( $instance['featured_image'] ) ) echo $instance['featured_image']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload image" style="margin-top: 5px;">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'team-title' ); ?>"><?php _e( 'Team Members Name:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'team-title' ); ?>" name="<?php echo $this->get_field_name( 'team-title' ); ?>" type="text" value="<?php if( ! empty( $instance['team-title'] ) ) echo $instance['team-title']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'team-position' ); ?>"><?php _e( 'Position:', 'lh' ); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('team-position'); ?>" name="<?php echo $this->get_field_name('team-position'); ?>" value="<?php if( ! empty( $instance['team-position'] ) ) echo $instance['team-position']; ?>" class="widefat media-input">
        </p>

        <?php
    }

}
