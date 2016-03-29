<?php get_header(); ?>


    <div class="first-content">
        <?php get_template_part( 'template-parts/content', 'first' ); ?>
    </div>

    <div class="second-content container" id="qualities">
        <?php get_template_part( 'template-parts/content', 'second' ); ?>
    </div>

    <div class="third-content" id="aboutus">
        <?php get_template_part( 'template-parts/content', 'third' ); ?>
    </div>

    <div class="fourth-content">
        <div class="container small-container">
            <div class="row">
                <div class="col-md-2 col-sm-2"></div>
                <div class="col-md-8 col-sm-8">
                    <!-- TEXT TO INTRODUCE SOMETHING, WITH BUTTON THAT LINKS TO THAT SOMETHING -->
                    <?php if ( dynamic_sidebar( 'first-introduce-widget-sidebar' ) ) : else : endif; ?>
                </div>
                <div class="col-md-2 col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="fifth-content" id="team">
        <?php get_template_part( 'template-parts/content', 'fifth' ); ?>
    </div>

    <div class="sixth-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2"></div>
                <div class="col-md-8 col-sm-8">
                    <?php if ( dynamic_sidebar( 'second-introduce-widget-sidebar' ) ) : else : endif; ?>
                </div>
                <div class="col-md-2 col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="seventh-content" id="news">
        <?php get_template_part( 'template-parts/content', 'seventh' ); ?>
    </div>

    <div class="eighth-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[contact_form_dm]'); ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>