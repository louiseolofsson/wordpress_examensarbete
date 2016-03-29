<?php
if ( post_password_required() ){
    return;
}
?>

<?php if ( have_comments() ) : ?>

    <?php
    wp_list_comments( array(
        'style' => 'ul'
    ) );
    ?>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

        <?php previous_comments_link( __( 'Older comments', 'lh' ) ); ?>
        <?php next_comments_link( __( 'Newer comments', 'lh' ) ); ?>

    <?php endif; ?>

<?php else : ?>

    <p><?php _e ( 'There are no comments on this post', 'lh' ); ?> </p>

<?php endif; ?>

<?php
if ( ! comments_open() && '0' != comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    _e( 'Comments are closed', 'lh' );
endif;
?>

<?php comment_form(); ?>