<header class="page-header">
    <h3 class="page-title"><?php _e( 'Sorry - Nothing Found', 'lh' ); ?></h3>
</header>

<?php if ( is_search() ) : ?>

<p><?php _e( 'Nothing matched your search terms. Please try again with some different keywords.', 'lh' ); ?></p>

<?php //get_search_form(); ?>

<?php endif; ?>