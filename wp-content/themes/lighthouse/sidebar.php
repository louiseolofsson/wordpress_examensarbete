<?php

if ( ! is_active_sidebar( 'sidebar-default' ) ){
    return;
}
?>

<ul class="sidebar">

    <?php dynamic_sidebar( 'sidebar-default' ); ?>

</ul>
