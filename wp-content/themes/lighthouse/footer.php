
        <div class="container-fluid footer-content">
            <div class="row">

                <?php

                if( is_active_sidebar( 'footer-widget-sidebar-1' ) ):
                    dynamic_sidebar( 'footer-widget-sidebar-1' );
                else :

                    the_widget( 'Description_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/Marker-96.png" . '&description-head=&description-textarea=Street 123');
                    the_widget( 'Description_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/MessageFilled-100.png" . '&description-head=&description-textarea=Email@Email.com');
                    the_widget( 'Description_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/Phone-96.png" . '&description-head=&description-textarea=012-345 67 89');

                endif;

                ?>

            </div>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>