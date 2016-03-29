<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php
                        the_archive_title( '<h1>', '</h1>' );
                        ?>
                    </header>

                    <ul>
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'archive' );

                        endwhile; ?>
                    </ul>

                    <?php
                    the_posts_pagination( array(
                        'prev_text' => __( 'Previous page', 'lh' ),
                        'next_text' => __( 'Next page', 'lh' )
                    ) );
                    ?>

                <?php
                else :
                    //get_template_part( 'content', 'none' );
                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>

            </div>

            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>