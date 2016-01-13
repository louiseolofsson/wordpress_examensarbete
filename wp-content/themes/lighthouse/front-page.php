<?php get_header(); ?>


    <div class="first-content container">
        <div class="first-content-heading">
            <?php if ( $head_title = get_theme_mod( 'lh_head_options_title' ) ) : ?>
                <h1><?php echo $head_title; ?></h1>
            <?php endif; ?>

            <?php if ( $head_subtitle = get_theme_mod( 'lh_head_options_subtitle' ) ) : ?>
                <h3><?php echo $head_subtitle; ?></h3>
            <?php endif; ?>
        </div>
    </div>

    <div class="second-content">

        <?php if ( dynamic_sidebar( 'description-widget-sidebar' ) ) : else : endif; ?>

    </div>

    <div class="third-content">



    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>