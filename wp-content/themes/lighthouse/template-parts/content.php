<article>

    <?php

    if ( is_single() || is_page() ) :
        the_title( '<h1 class="article-title">', '</h1>' );

    else:
        the_title( '<h3>', '</h3>' );
        // Retrieves the permalink for a post with a custom post type.
        // <a href="' . esc_url( get_permalink() ) . '"> , </a>

    endif;
    ?>

    <?php the_content() ?>

</article>