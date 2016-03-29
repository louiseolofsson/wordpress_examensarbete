<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php
                    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                        comments_template();
                    endif;

                    the_post_navigation( array(
                        'next_text' => '&larr; %title',
                        'prev_text' => '%title &rarr;'
                    ) );
                    ?>

                <?php endwhile; ?>

            </div>

            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>

        </div>
    </div>


<?php get_footer(); ?>