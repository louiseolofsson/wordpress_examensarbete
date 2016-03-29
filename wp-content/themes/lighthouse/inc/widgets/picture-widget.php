<?php

class Picture_Widget extends WP_Widget {

    // Registers the widget, sets the widget-name
    public function __construct(){
        parent::__construct(
        // Base ID of your widget
            'lh-picture-widget',
            // Widget name that will appear for the user to see
            __( 'Picture Widget', 'lh' ),

            // Widget description
            array( 'description' => __( 'Widget that displays a picture', 'lh' ) )
        );
    }

    public function widget( $args, $instance ) {

        extract( $args );

        //echo $before_widget;

        ?>

            <div class="col-md-6">

                <?php if ( $featured_image = @$instance[ 'featured_image' ] ) : ?>

                    <?php if( $height = @$instance[ 'height' ] & $width = @$instance[ 'width' ] ) : ?>

                        <img src="<?php echo esc_url( $featured_image ); ?>" style="height: <?php echo $height ?>px; width: <?php echo $width ?>px;">

                    <?php endif; ?>

                <?php endif; ?>

            </div>

        <?php

        //echo $after_widget;
    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;

        $instance[ 'height' ] = strip_tags( $new_instance[ 'height' ] );
        $instance[ 'width' ] = strip_tags( $new_instance[ 'width' ] );
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
            <label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e( 'Height:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="text" value="<?php if( ! empty( $instance['height'] ) ) echo $instance['height']; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'width' ); ?>"><?php _e( 'Width:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name( 'width' ); ?>" type="text" value="<?php if( ! empty( $instance['width'] ) ) echo $instance['width']; ?>" />
        </p>

        <?php
    }

}