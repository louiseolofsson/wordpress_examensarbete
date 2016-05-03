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

    <?php
    if( is_active_sidebar( 'team-widget-sidebar' ) ):
        dynamic_sidebar( 'team-widget-sidebar' );
    else :

        the_widget( 'Team_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/lighthouse.jpg" . '&team-title=Test Testsson&team-position=CEO');
        the_widget( 'Team_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/lighthouse.jpg" . '&team-title=Test Testsson&team-position=CEO');
        the_widget( 'Team_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/lighthouse.jpg" . '&team-title=Test Testsson&team-position=CEO');
        the_widget( 'Team_Widget', 'featured_image='.get_stylesheet_directory_uri()."/assets/images/lighthouse.jpg" . '&team-title=Test Testsson&team-position=CEO');

    endif;
    ?>

</div>
