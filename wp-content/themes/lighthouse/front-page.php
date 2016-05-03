<?php get_header(); ?>


    <div class="container-fluid first-content first-content-heading">
        <?php get_template_part( 'template-parts/content', 'first' ); ?>
    </div>

    <div class="container-fluid second-content" id="qualities">
        <?php get_template_part( 'template-parts/content', 'second' ); ?>
    </div>

    <div class="container-fluid third-content" id="aboutus">
        <?php get_template_part( 'template-parts/content', 'third' ); ?>
    </div>

        <div class="container-fluid fourth-content">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <?php

                    if( is_active_sidebar( 'first-introduce-widget-sidebar' ) ):
                        dynamic_sidebar( 'first-introduce-widget-sidebar' );
                    else :

                    the_widget( 'Introduce_Widget', 'introduce-textarea=Check out this stuff - we want to show you something! Our new Online Shop is now avalible.&introduce-button-name=Look at this&introduce-url=http://localhost/wordpress_examensarbete/shop/&introduce-btn-color=1aba9d&');

                    endif;

                    ?>

                </div>
            </div>
        </div>

    <div class="container-fluid fifth-content team-widget" id="team">
        <?php get_template_part( 'template-parts/content', 'fifth' ); ?>
    </div>

    <div class="container-fluid sixth-content">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <?php

                if( is_active_sidebar( 'second-introduce-widget-sidebar' ) ):
                    dynamic_sidebar( 'second-introduce-widget-sidebar' );
                else :

                    the_widget( 'Introduce_Widget', 'introduce-textarea=Do you have a question?&introduce-button-name=Contact us&introduce-url=http://localhost/wordpress_examensarbete/&introduce-btn-color=1aba9d&');

                endif;

                ?>

            </div>
        </div>
    </div>

    <div class="container-fluid seventh-content" id="news">
        <?php get_template_part( 'template-parts/content', 'seventh' ); ?>
    </div>

    <div class="container-fluid eighth-content">
        <div class="row">
            <div class="col-md-12 widgetarea-social">

                <?php

                if( is_active_sidebar( 'social-widgetarea' ) ):
                    dynamic_sidebar( 'social-widgetarea' );
                else :

                the_widget( 'Social_Widget', 'social-url=http://www.facebook.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/Facebook-100.png" );
                the_widget( 'Social_Widget', 'social-url=http://www.instagram.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/Instagram-100.png" );
                the_widget( 'Social_Widget', 'social-url=http://www.linkedin.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/Linkedin-100.png" );
                the_widget( 'Social_Widget', 'social-url=http://www.twitter.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/Twitter-100.png" );
                the_widget( 'Social_Widget', 'social-url=http://www.youtube.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/YouTube-104.png" );
                the_widget( 'Social_Widget', 'social-url=http://www.tumblr.com&featured_image=' . get_stylesheet_directory_uri() . "/assets/images/Tumblr-100.png" );

                endif;

                ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>