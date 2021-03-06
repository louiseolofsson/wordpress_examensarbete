<?php

class Description_Widget extends WP_Widget {

    // Registers the widget, sets the widget-name
    public function __construct(){
        parent::__construct(
        // Base ID of your widget
            'lh-description-widget',
            // Widget name that will appear for the user to see
            __( 'Description Widget', 'lh' ),

            // Widget description
            array( 'description' => __( 'Widget that shows a description of the company and a icon or image', 'lh' ) )
        );
    }

    public function widget( $args, $instance ) {

        extract( $args );

        global $sidebars_widgets;
        global $class;
        $count = count ($sidebars_widgets['footer-widget-sidebar-1']);
        switch ( $count ) {
            case '1':
                $class = 'col-md-12';
                break;
            case '2':
                $class = 'col-md-6 col-sm-6';
                break;
            case '3':
                $class = 'col-md-4 col-sm-6';
                break;
            case '4':
                $class = 'col-md-3 col-sm-6';
                break;
            default:
                $class = 'col-md-4 col-sm-6';
                break;
        }

        ?>

        <div class="<?php echo $class; ?> description-widget">

            <?php if ( $featured_image = @$instance['featured_image'] ) : ?>
                <!--<div class="service-image" style="background-image: url(<?php echo $featured_image ?>);"></div>-->
                <img src="<?php echo esc_url( $featured_image ); ?>" style="height: 40px; width: 40px;">
            <?php endif; ?>
            <?php if( $description_head = @$instance[ 'description-head' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->
                <div class="description-widget-title"><h2><?php echo $description_head; ?></h2></div>
            <?php endif; ?>
            <?php if( $description_textarea = @$instance[ 'description-textarea' ] ) : ?>
                <div class="description-widget-textarea"><p><?php echo $description_textarea; ?></p></div>
            <?php endif; ?>

        </div>

        <?php

    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;

        $instance[ 'featured_image' ] = esc_url_raw( $new_instance[ 'featured_image' ] );
        $instance[ 'description-head' ] = strip_tags( $new_instance[ 'description-head' ] );
        $instance[ 'description-textarea' ] = strip_tags( $new_instance[ 'description-textarea' ] );

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
            <label for="<?php echo $this->get_field_id( 'description-head' ); ?>"><?php _e( 'Description Head:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'description-head' ); ?>" name="<?php echo $this->get_field_name( 'description-head' ); ?>" type="text" value="<?php if( ! empty( $instance['description-head'] ) ) echo $instance['description-head']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'description-textarea' ); ?>"><?php _e( 'Description Textarea:', 'lh' ); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('description-textarea'); ?>" name="<?php echo $this->get_field_name('description-textarea'); ?>"><?php if( ! empty( $instance['description-textarea'] ) ) echo $instance['description-textarea']; ?></textarea>
        </p>

    <?php
    }

}