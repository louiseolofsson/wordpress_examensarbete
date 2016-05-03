<?php

class Introduce_Widget extends WP_Widget {

    // Registers the widget, sets the widget-name
    public function __construct(){
        parent::__construct(
        // Base ID of your widget
            'lh-introduce-widget',
            // Widget name that will appear for the user to see
            __( 'Introduce Widget', 'lh' ),

            // Widget description
            array( 'description' => __( 'Widget that can introduce your visitor to visit a different page like your online shop etc.', 'lh' ) )
        );
    }

    public function widget( $args, $instance ) {

        extract( $args );

        ?>

        <div class="introduce-widget">

            <?php if ( $introduce_textarea = @$instance['introduce-textarea'] ) : ?>
                <p class="introduceTextarea"><?php echo $introduce_textarea; ?></p>
            <?php endif; ?>

            <div class="outerDivBtn">
            <?php if( $introduce_url = @$instance[ 'introduce-url' ] ) : ?>
                <a href="<?php echo esc_url( $introduce_url ); ?>" class="introduceButton" style="background: <?php if( $introduce_btn_color = @$instance[ 'introduce-btn-color' ] ) :  echo "#" . $introduce_btn_color; endif; ?>;">

                    <?php if( $introduce_button_name = @$instance[ 'introduce-button-name' ] ) : ?>
                        <?php echo $introduce_button_name; ?>
                    <?php endif; ?>

                </a>
            <?php endif; ?>
            </div>

        </div>

        <?php

    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;

        $instance[ 'introduce-textarea' ] = strip_tags( $new_instance[ 'introduce-textarea' ] );
        $instance[ 'introduce-button-name' ] = strip_tags( $new_instance[ 'introduce-button-name' ] );
        $instance[ 'introduce-url' ] = esc_url_raw( $new_instance[ 'introduce-url' ] );
        $instance[ 'introduce-btn-color' ] = strip_tags( $new_instance[ 'introduce-btn-color' ] );

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
            <label for="<?php echo $this->get_field_id( 'introduce-textarea' ); ?>"><?php _e( 'Introduce Text:', 'lh' ); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('introduce-textarea'); ?>" name="<?php echo $this->get_field_name('introduce-textarea'); ?>"><?php if( ! empty( $instance['introduce-textarea'] ) ) echo $instance['introduce-textarea']; ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'introduce-button-name' ); ?>"><?php _e( 'Introduce-button name:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'introduce-button-name' ); ?>" name="<?php echo $this->get_field_name( 'introduce-button-name' ); ?>" type="text" value="<?php if( ! empty( $instance['introduce-button-name'] ) ) echo $instance['introduce-button-name']; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'introduce-url' ); ?>"><?php _e( 'Introduce-button url:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'introduce-url' ); ?>" name="<?php echo $this->get_field_name( 'introduce-url' ); ?>" type="text" value="<?php if( ! empty( $instance['introduce-url'] ) ) echo $instance['introduce-url']; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'introduce-btn-color' ); ?>"><?php _e( 'Introduce-button hex-color:', 'lh' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'introduce-btn-color' ); ?>" name="<?php echo $this->get_field_name( 'introduce-btn-color' ); ?>" type="text" value="<?php if( ! empty( $instance['introduce-btn-color'] ) ) echo $instance['introduce-btn-color']; ?>" />
        </p>


        <?php
    }

}