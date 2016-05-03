<div class="row firstContentRow">
    <div class="col-md-12">
        <?php if ( $head_title = get_theme_mod( 'lh_head_options_title' ) ) : ?>
            <h1 class="firstContentHeadingH1"><?php echo $head_title; ?></h1>
        <?php endif; ?>

        <?php if ( $head_subtitle = get_theme_mod( 'lh_head_options_subtitle' ) ) : ?>
            <h3><?php echo $head_subtitle; ?></h3>
        <?php endif; ?>
    </div>
</div>