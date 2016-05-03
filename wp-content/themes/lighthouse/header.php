<!DOCTYPE>
<html>
    <head>

        <link href='https://fonts.googleapis.com/css?family=Raleway:300,900,600' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>

    </head>
    <body <?php if ( is_front_page() ) body_class(); ?> >
        <!-- for fixed navbar add class: navbar-fixed-top -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <?php if ( $head_logo = get_theme_mod( 'lh_head_options_logo' ) ) : ?>
                        <a class="navbar-logo" href="<?php echo esc_url( home_url() ); ?>">
                            <img src="<?php echo esc_url( $head_logo ); ?>">
                        </a>
                    <?php endif; ?>

                </div>
                <div id="navbar" class="navbar-collapse pull-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' ) ); ?>
                </div>
            </div>
        </nav>

