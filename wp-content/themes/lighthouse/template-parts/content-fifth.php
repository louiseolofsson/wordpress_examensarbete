<div class="team-widget">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if ( $team_title = get_theme_mod( 'lh_team_title' ) ) : ?>
                    <h3 class="teamTitleH3"><?php echo $team_title; ?></h3>
                <?php endif; ?>

                <?php if ( $team_subtitle = get_theme_mod( 'lh_team_subtitle' ) ) : ?>
                    <p class="teamSubtitle"><?php echo $team_subtitle; ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">

            <?php if ( dynamic_sidebar( 'team-widget-sidebar' ) ) : else : endif; ?>

        </div>
    </div>
</div>