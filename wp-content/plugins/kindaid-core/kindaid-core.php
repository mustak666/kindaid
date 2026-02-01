<?php
/**
 * Plugin Name: Kindaid Core
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Kindaid
 * Author URI:  https://developers.elementor.com/
 * Text Domain: kindaid-core
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */



// include_once('inc/custom-widgets/event-date-widget.php');
include_once('inc/custom-widgets/event-letest-post.php');
include_once('inc/custom-widgets/blog-author-info.php');
include_once('inc/custom-widgets/blog-sidebar-support.php');
include_once('inc/custom-widgets/footer-contect-info-2.php');
include_once('inc/custom-widgets/footer-contect-info.php');
include_once('inc/custom-widgets/footer-info-widgets.php');
include_once('inc/custom-widgets/footer-newsletter-widget.php');
include_once('inc/custom-widgets/sidebar-rc-post.php');

include_once('inc/kindaid-core-function.php');
function kindaid_add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'kindaid_core',
		[
			'title' => esc_html__( 'Kindaid Core', 'kindaid-core' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'kindaid_add_elementor_widget_categories' );


function register_kindaid_widget( $widgets_manager ) {
	require_once( __DIR__ . '/widgets/event-post-long.php' );
	require_once( __DIR__ . '/widgets/event-post.php' );
	require_once( __DIR__ . '/widgets/misson.php' );
	require_once( __DIR__ . '/widgets/hero-video.php' );
	require_once( __DIR__ . '/widgets/step-box.php' );
	require_once( __DIR__ . '/widgets/gallery.php' );
	require_once( __DIR__ . '/widgets/testimonail.php' );
	require_once( __DIR__ . '/widgets/about.php' );
	require_once( __DIR__ . '/widgets/services-list.php' );
	require_once( __DIR__ . '/widgets/hero-slider.php' );
	if(function_exists('charitable')){
		require_once( __DIR__ . '/widgets/causes-slider.php' );
		require_once( __DIR__ . '/widgets/causes-post.php' );
	}
	require_once( __DIR__ . '/widgets/blog-post.php' );
	require_once( __DIR__ . '/widgets/brand.php' );
	require_once( __DIR__ . '/widgets/faq.php' );
	require_once( __DIR__ . '/widgets/team.php' );
	require_once( __DIR__ . '/widgets/buttons.php' );
	require_once( __DIR__ . '/widgets/choose.php' );
	require_once( __DIR__ . '/widgets/section-title.php' );
	require_once( __DIR__ . '/widgets/fect.php' );
	require_once( __DIR__ . '/widgets/join.php' );
	require_once( __DIR__ . '/widgets/services.php' );
	require_once( __DIR__ . '/widgets/hero.php' );
}
add_action( 'elementor/widgets/register', 'register_kindaid_widget' );