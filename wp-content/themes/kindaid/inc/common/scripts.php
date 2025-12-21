<?php

function kindaid_add_theme_scripts() {

    //  Google Fonts Load 
    wp_enqueue_style( 'kindaid-fonts', kindaid_fonts_url(), array(), '1.0.0', 'all' );

    // CSS Load 
    wp_enqueue_style('kindaid-style', get_stylesheet_uri(), '1.0.0', 'all');
    wp_enqueue_style('unit-test', get_template_directory_uri() . '/assets/css/unit-test.css', '5.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '5.3.8', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', '1.0.0', 'all');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', '6.5.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', '1.0.0', 'all');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', '6.0.0', 'all');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', '1.0.0', 'all');
    wp_enqueue_style('kindaid-main', get_template_directory_uri() . '/assets/css/main.css', '1.0.0', 'all'); // Main CSS font-dependent

    // JS Load 
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-min.js', ['jquery'], '5.3.8', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', ['jquery'], '6.5.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', ['jquery'], '1.0', true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', ['jquery'], '1.5.0', true);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', ['jquery'], '1.12.1', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', ['jquery'], '1.0.1', true);
    wp_enqueue_script('kindaid-main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true);

    // comments reply support 
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'kindaid_add_theme_scripts');


function kindaid_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'kindaid' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Libre+Baskerville:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    }
    return $font_url;
}

