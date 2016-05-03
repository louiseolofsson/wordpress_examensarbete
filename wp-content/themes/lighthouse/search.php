<?php get_header(); ?>

    <div class="container search-page">
        <div class="row">
            <div class="col-md-9">
                <h1>
                    <?php _e( 'You searched for: ', 'lh' ); ?>
                    <?php echo get_search_query(); ?>
                </h1>

                <?php if ( have_posts() ) : ?>

                    <ul class="archive-articles">
                        <?php
                        while ( have_posts() ) : the_post();

                            //echo "LOAD TEMPLATE PART FOR SEARCH-RESULT HERE";

                            get_template_part( 'template-parts/content', 'archive' );

                        endwhile;
                        ?>
                    </ul>

                    <?php
                    the_posts_pagination( array(
                        'prev_text' => __( 'Previous page', 'awsm' ),
                        'next_text' => __( 'Next page', 'awsm' )
                    ) );
                    ?>

                <?php else : ?>

                    <?php //echo "LOAD TEMPLATE FOR NO RESULT HERE"; ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>