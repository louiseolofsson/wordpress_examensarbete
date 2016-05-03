<?php get_header(); ?>

    <div class="container page">
        <div class="row">

            <div class="col-md-12">


                <!--<ul class="products">
                    <?php

                    /*
                     *
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 12
                    );

                    $loop = new WP_Query( $args );

                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                            wc_get_template_part( 'content', 'product' );
                        endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();

                     *
                     */

                    ?>
                </ul> .products-->


                <?php while ( have_posts() ) : the_post(); ?>

                    <h1> <?php the_title() ?> </h1>
                    <?php the_content() ?>

                <?php endwhile; ?>

            </div>

        </div>
    </div>

<?php get_footer(); ?>