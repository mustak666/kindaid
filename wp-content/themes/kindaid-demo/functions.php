<?php

/**
    * Essential theme supports
**/
function kindaid_theme_suppots(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** post formats */
    add_theme_support( 'post-formats',
    array(
        'image',
        'gallery',
        'video',
        'audio',
        'quote',
    ));
    // classic editor
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme','kindaid_theme_suppots' );

// css-calling 

include_once('inc/common/scripts.php');