    <div class="row">
        <div class="col-md-12">
            <div class="second-content-heading-subheading">
                <?php if ( $second_content_title = get_theme_mod( 'lh_company_info_title' ) ) : ?>
                    <h2 class="secondContentHeadingH2"><?php echo $second_content_title; ?></h2>
                <?php endif; ?>

                <?php if ( $second_content_subtitle = get_theme_mod( 'lh_company_info_subtitle' ) ) : ?>
                    <p class="secondContentSubheading"><?php echo $second_content_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <!-- <?php //if ( dynamic_sidebar( 'information-widget-sidebar' ) ) : else : endif; ?> -->
    </div>
    <div class="row">
        <div class="company_qual col-md-3 col-sm-6">
            <?php if ( $qual1_pic = get_theme_mod( 'lh_company_qual1_pic' ) ) : ?>
                <img class="qual_pic" src="<?php echo esc_url( $qual1_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="">
                <?php if ( $second_content_qual1_title = get_theme_mod( 'lh_company_qual1_title' ) ) : ?>
                    <h4 class="secondContentQualTitle border-bottom"><?php echo $second_content_qual1_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $second_content_qual1_text = get_theme_mod( 'lh_company_qual1_text' ) ) : ?>
                <p class="secondContentQualText"><?php echo $second_content_qual1_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="company_qual col-md-3 col-sm-6">

            <?php if ( $qual2_pic = get_theme_mod( 'lh_company_qual2_pic' ) ) : ?>
                <img class="qual_pic" src="<?php echo esc_url( $qual2_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="">
                <?php if ( $second_content_qual2_title = get_theme_mod( 'lh_company_qual2_title' ) ) : ?>
                    <h4 class="secondContentQualTitle border-bottom"><?php echo $second_content_qual2_title; ?></h4>
                <?php endif; ?>
            </div>
            <?php if ( $second_content_qual2_text = get_theme_mod( 'lh_company_qual2_text' ) ) : ?>
                <p class="secondContentQualText"><?php echo $second_content_qual2_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="company_qual col-md-3 col-sm-6">

            <?php if ( $qual3_pic = get_theme_mod( 'lh_company_qual3_pic' ) ) : ?>
                <img class="qual_pic" src="<?php echo esc_url( $qual3_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="">
                <?php if ( $second_content_qual3_title = get_theme_mod( 'lh_company_qual3_title' ) ) : ?>
                    <h4 class="secondContentQualTitle border-bottom"><?php echo $second_content_qual3_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $second_content_qual3_text = get_theme_mod( 'lh_company_qual3_text' ) ) : ?>
                <p class="secondContentQualText"><?php echo $second_content_qual3_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="company_qual col-md-3 col-sm-6">

            <?php if ( $qual4_pic = get_theme_mod( 'lh_company_qual4_pic' ) ) : ?>
                <img class="qual_pic" src="<?php echo esc_url( $qual4_pic ); ?>" style="height: 60px; width: 60px;">
            <?php endif; ?>

            <div class="">
                <?php if ( $second_content_qual4_title = get_theme_mod( 'lh_company_qual4_title' ) ) : ?>
                    <h4 class="secondContentQualTitle border-bottom"><?php echo $second_content_qual1_title; ?></h4>
                <?php endif; ?>
            </div>

            <?php if ( $second_content_qual4_text = get_theme_mod( 'lh_company_qual4_text' ) ) : ?>
                <p class="secondContentQualText"><?php echo $second_content_qual4_text; ?></p>
            <?php endif; ?>
        </div>
    </div> <!-- closes 2nd row -->