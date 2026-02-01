<?php

/**
    * Essential theme supports
**/
function kindaid_theme_supports(){

    /** Automatic feed links **/
    add_theme_support( 'automatic-feed-links' );

    /** Document title **/
    add_theme_support( 'title-tag' );

    /** Featured image **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 markup support **/
    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption' 
    ) );

    /** Live widget refresh **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** Post formats **/
    add_theme_support( 'post-formats', array(
        'image','gallery','video','audio','quote'
    ));

    /** Disable widget block editor (Classic widgets) **/
    remove_theme_support( 'widgets-block-editor' );

    /** Gutenberg recommended supports **/
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    /** Custom logo **/
    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    /** Custom header **/
    add_theme_support( 'custom-header', array(
        'width'       => 1600,
        'height'      => 500,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    /** Background support **/
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    /** Editor style load (Block + Classic) **/
    add_editor_style( 'assets/css/main.css' );

    /** Register menus **/
    register_nav_menus( array(
        'main_menu'   => __( 'Main Menu','kindaid' ),
        'footer_menu' => __( 'Footer Menu','kindaid' ),
    ));
}
add_action( 'after_setup_theme', 'kindaid_theme_supports' );


// css-calling 
include_once('inc/common/scripts.php');

// template functions 
include_once('inc/template-functions.php');

// Nav Walker
include_once('inc/kindaid-nav-walker.php');

// Nav Walker
include_once('inc/breadcrumb.php');

include_once('inc/kindaid-pure-metafields.php');

// kirki
if ( class_exists( 'Kirki' ) ) {
    include_once('inc/kindaid-kirki.php');
}

/**
 * Add a sidebar.
 */
function kindaid_widgets() {
	register_sidebar( array(
		'name'          => __( 'Event Sidebar', 'kindaid' ),
		'id'            => 'event_sidebar',
		'description'   => __( 'Widgets in this area will be shown on Event Sidebar', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-event-sidebar mb-20 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-widget-main-title mb-35">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Campain Sidebar', 'kindaid' ),
		'id'            => 'campain_sidebar',
		'description'   => __( 'Widgets in this area will be shown on Blog Sidebar', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-widget-sidebar mb-20 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-widget-main-title mb-25">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'kindaid' ),
		'id'            => 'blog_sidebar',
		'description'   => __( 'Widgets in this area will be shown on Blog Sidebar', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-widget-sidebar mb-20 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-widget-main-title mb-25">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 Widget 01', 'kindaid' ),
		'id'            => 'footer_1_widget_01',
		'description'   => __( 'Widgets in this area will be shown on footer', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 Widget 02', 'kindaid' ),
		'id'            => 'footer_1_widget_02',
		'description'   => __( 'Widgets in this area will be shown on footer', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 mb-50 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 Widget 03', 'kindaid' ),
		'id'            => 'footer_1_widget_03',
		'description'   => __( 'Widgets in this area will be shown on footer', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 Widget 04', 'kindaid' ),
		'id'            => 'footer_1_widget_04',
		'description'   => __( 'Widgets in this area will be shown on footer', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-cta mb-50 bg-position wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	// footer-2 
	register_sidebar( array(
		'name'          => __( 'Footer 2 Widget 01', 'kindaid' ),
		'id'            => 'header_2_widget_01',
		'description'   => __( 'Widgets in this area will be shown on footer 02', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 mr-70 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 Widget 02', 'kindaid' ),
		'id'            => 'header_2_widget_02',
		'description'   => __( 'Widgets in this area will be shown on footer 02', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-30 mb-50 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 Widget 03', 'kindaid' ),
		'id'            => 'header_2_widget_03',
		'description'   => __( 'Widgets in this area will be shown on footer 02', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 tp-footer-col-2 mb-50 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 Widget 04', 'kindaid' ),
		'id'            => 'header_2_widget_04',
		'description'   => __( 'Widgets in this area will be shown on footer 02', 'kindaid' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-30 tp-footer-3-cta mb-50 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'kindaid_widgets' );

function kindaid_block_features_init() {

    /* ------------------------------------
     * 1. Register Custom Block Style
     * ------------------------------------ */
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'kindaid-highlight',
            'label' => __( 'Highlighted Text', 'kindaid' ),
            'inline_style' => '.is-style-kindaid-highlight { background:#ffef9f;padding:4px;border-radius:4px; }'
        )
    );

    /* ------------------------------------
     * 2. Register Block Pattern
     * ------------------------------------ */
    register_block_pattern(
        'kindaid/cta-box',
        array(
            'title'       => __( 'CTA Box', 'kindaid' ),
            'description' => __( 'Call-to-Action block section.', 'kindaid' ),
            'content'     => '
                <div class="cta-box" style="padding:35px;background:#222;color:#fff;text-align:center;border-radius:6px;">
                    <h2>🔥 Join Our Newsletter</h2>
                    <p>Get updates, premium articles & tips.</p>
                    <a style="background:#ff6464;color:#fff;padding:10px 22px;border-radius:4px;display:inline-block;margin-top:8px;" href="#">Subscribe Now</a>
                </div>
            ',
        )
    );
}
add_action( 'init', 'kindaid_block_features_init' );
