<?php get_header(); ?>


<div class="site-intro container">
    <?php if ( $head_title = get_theme_mod( 'lh_theme_options_title' ) ) : ?>
        <h1><?php echo $head_title; ?></h1>
    <?php endif; ?>

    <?php if ( $head_subtitle = get_theme_mod( 'lh_theme_options_subtitle' ) ) : ?>
        <h3><?php echo $head_subtitle; ?></h3>
    <?php endif; ?>

</div>


<?php get_footer(); ?>