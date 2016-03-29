<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="second-content-heading-subheading">
                <?php if ( $seventh_content_title = get_theme_mod( 'lh_pic_text_title' ) ) : ?>
                    <h2 class="secondContentHeadingH2"><?php echo $seventh_content_title; ?></h2>
                <?php endif; ?>

                <?php if ( $seventh_content_subtitle = get_theme_mod( 'lh_pic_text_subtitle' ) ) : ?>
                    <p class="secondContentSubheading"><?php echo $seventh_content_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row secondRow">
        <div class="col-md-6 col-xs-12" style="background-image: url(<?php if ( $lh_pic = get_theme_mod( 'lh_pic' ) ) : echo esc_url( $lh_pic ); endif; ?>); background-size: cover; min-height: 300px;">

        </div>
        <div class="col-md-6 col-xs-12">
            <?php if ( $lh_title = get_theme_mod( 'lh_title' ) ) : ?>
                <h3 class="seventhContentH3"><?php echo $lh_title; ?></h3>
            <?php endif; ?>

            <?php if ( $lh_text = get_theme_mod( 'lh_text' ) ) : ?>
                <p class=""><?php echo $lh_text; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row thirdRow">
        <div class="col-md-6 col-xs-12 thirdRowText">
            <?php if ( $lh_title2 = get_theme_mod( 'lh_title2' ) ) : ?>
                <h3 class="seventhContentH3"><?php echo $lh_title2; ?></h3>
            <?php endif; ?>

            <?php if ( $lh_text2 = get_theme_mod( 'lh_text2' ) ) : ?>
                <p class=""><?php echo $lh_text2; ?></p>
            <?php endif; ?>
        </div>
        <div class="col-md-6 col-xs-12" style="background-image: url(<?php if ( $lh_pic2 = get_theme_mod( 'lh_pic2' ) ) : echo esc_url( $lh_pic2 ); endif; ?>); background-size: cover; min-height: 300px;">

        </div>
    </div>
</div>