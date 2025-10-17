<?php

function harry_add_theme_scripts() {
    // CSS ফাইল লোড (theme এর css ফোল্ডার থেকে)
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_style('harry_fonts', kindaid_fonts_url(), array(), '1.0.0','all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '5.3.8','all');
    wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css', array(), '1.0.0','all');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() .'/assets/css/swiper-bundle.css', array(), '6.5.0','all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '1.0.0','all');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() .'/assets/css/font-awesome-pro.css', array(), '6.0.0','all');
    wp_enqueue_style('spacing', get_template_directory_uri() .'/assets/css/spacing.css', array(), '1.0.0','all');
    wp_enqueue_style('kindaid-main', get_template_directory_uri() .'/assets/css/main.css', array(), '1.0.0','all');


    // JS ফাইল লোড (theme এর js ফোল্ডার থেকে)
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-min.js', array('jquery'), '5.3.8', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '6.5.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery'), '1.0', true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array('jquery'), '1.5.0', true);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array('jquery'), '1.12.1', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('kindaid-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    if (is_singular() && comments_open() && get_option( 'thread_comments')){
        wp_enqueue_script('comment-reply');
    }
  
}
add_action('wp_enqueue_scripts', 'harry_add_theme_scripts');

function kindaid_fonts_url(){
    $font_url = '';

    if('off' !== _x('on','Google font: on or off','harry')){
        $font_url = 'https://fonts.googleapis.com/css2?'.urlencode('family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    }
    return $font_url;
}
