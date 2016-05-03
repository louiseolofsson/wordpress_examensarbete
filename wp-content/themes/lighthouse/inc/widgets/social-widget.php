<?php

class Social_Widget extends WP_Widget {

    // Registers the widget, sets the widget-name
    public function __construct(){
        parent::__construct(
        // Base ID of your widget
            'lh-social-widget',
            // Widget name that will appear for the user to see
            __( 'Social Widget', 'lh' ),

            // Widget description
            array( 'description' => __( 'Widget that shows a image that can link to a social-media-page such as twitter, facebook etc.', 'lh' ) )
        );
    }

    public function widget( $args, $instance ) {

        extract( $args );

        ?>

        <div class="social-widget">

            <?php if( $social_url = @$instance[ 'social-url' ] ) : ?>
                <a href="<?php echo $social_url; ?>" target="_blank">

                    <?php if ( $featured_image = @$instance['featured_image'] ) : ?>
                        <img src="<?php echo esc_url( $featured_image ); ?>" style="height: 30px; width: 30px;">
                    <?php endif; ?>

                </a>
            <?php endif; ?>

        </div>

        <?php

    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;

        $instance[ 'social-url' ] = esc_url_raw( $new_instance[ 'social-url' ] );
        $instance[ 'featured_image' ] = esc_url_raw( $new_instance[ 'featured_image' ] );

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
            <label for="<?php echo $this->get_field_id( 'featured image' ); ?>"><?php _e( 'Featured Image', 'lh' ); ?></label>
            <span class="image-container">
                <?php if ( ! empty( $instance['featured_image'] ) ) : ?>
                    <img src="<?php echo $instance['featured_image']; ?>" style="max-width: 100%; margin: 5px 0; display: block;">
                <?php endif; ?>
            </span>
            <input type="text" name="<?php echo $this->get_field_name('featured_image'); ?>" id="<?php echo $this->get_field_id( 'featured_image' ); ?>" value="<?php if ( ! empty( $instance['featured_image'] ) ) echo $instance['featured_image']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload image" style="margin-top: 5px;">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'social-url' ); ?>"><?php _e( 'Social url:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'social-url' ); ?>" name="<?php echo $this->get_field_name( 'social-url' ); ?>" type="text" value="<?php if( ! empty( $instance['social-url'] ) ) echo $instance['social-url']; ?>" />
        </p>


        <?php
    }

}