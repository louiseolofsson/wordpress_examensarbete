<div class="container-fluid">
    <div class="row third-content-row">

        <div class="col-md-4 about-darkgrey">
            <?php if ( $about1_pic = get_theme_mod( 'lh_company_about1_pic' ) ) : ?>
                <img class="about_pic" src="<?php echo esc_url( $about1_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="border-bottom-about">
                <?php if ( $third_content_about1_title = get_theme_mod( 'lh_company_about1_title' ) ) : ?>
                    <h4 class="thirdContentAboutTitle"><?php echo $third_content_about1_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $third_content_about1_text = get_theme_mod( 'lh_company_about1_text' ) ) : ?>
                <p class="thirdContentAboutText"><?php echo $third_content_about1_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="col-md-4 about-white">
            <?php if ( $about2_pic = get_theme_mod( 'lh_company_about2_pic' ) ) : ?>
                <img class="about_pic" src="<?php echo esc_url( $about2_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="border-bottom-about">
                <?php if ( $third_content_about2_title = get_theme_mod( 'lh_company_about2_title' ) ) : ?>
                    <h4 class="thirdContentAboutTitle"><?php echo $third_content_about2_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $third_content_about2_text = get_theme_mod( 'lh_company_about2_text' ) ) : ?>
                <p class="thirdContentAboutText"><?php echo $third_content_about2_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="col-md-4 about-darkgrey">
            <?php if ( $about3_pic = get_theme_mod( 'lh_company_about3_pic' ) ) : ?>
                <img class="about_pic" src="<?php echo esc_url( $about3_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="border-bottom-about">
                <?php if ( $third_content_about3_title = get_theme_mod( 'lh_company_about3_title' ) ) : ?>
                    <h4 class="thirdContentAboutTitle"><?php echo $third_content_about3_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $third_content_about3_text = get_theme_mod( 'lh_company_about3_text' ) ) : ?>
                <p class="thirdContentAboutText"><?php echo $third_content_about3_text; ?></p>
            <?php endif; ?>
        </div>

    </div> <!-- closes row -->

    <!--<?php //if ( dynamic_sidebar( 'description-widget-sidebar' ) ) : else : endif; ?>-->
</div> <!-- closes third-content container -->