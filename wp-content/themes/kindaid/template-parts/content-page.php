
<div class="tp-page-post page-area">
<?php
    // Display the main content
    the_content();

    // Display pagination links if content is paginated
    wp_link_pages( [
        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'kindaid' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'kindaid' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
    ] );

    // Load comments if open or available
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
</div>
