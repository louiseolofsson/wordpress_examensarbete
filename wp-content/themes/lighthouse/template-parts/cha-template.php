<?php /*Template name: projects Template */ ?>
<?php get_header(); ?>
<div class="container projects-wrapper">
    <div class="row">
        <div class="col-md-12 projects-heading">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- do stuff ... -->
                    <h1 class="projects-title"><?php the_title(); ?></h1>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <?php $args = array( 'post_type' => 'projects' ); ?>
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $my_meta = get_post_meta( $post->ID, 'link', true ); echo $my_meta["link"]; ?>


            <div class="col-md-4 projects-post">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'thumbnail' );
                }

                ?>
                <?php the_title( '<h2>', '</h2>' ); ?>
                <?php the_content(); ?>

            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>



    </div>
</div>
<?php get_footer(); ?>