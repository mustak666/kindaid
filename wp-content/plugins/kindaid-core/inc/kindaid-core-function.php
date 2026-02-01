<?php
// ===============================
// Get All Categories
// ===============================
function post_cat($taxonomy = 'category') {
    $categories = get_categories(array(
        'taxonomy'   => $taxonomy,
        'orderby'    => 'name',
        'order'      => 'ASC',
    ));

    $cat_list = [];
    foreach ($categories as $cat) {
        $cat_list[$cat->slug] = $cat->name;
    }

    return $cat_list;
}

// ===============================
// Get All Posts (by post type)
// ===============================
function get_all_post($post_type_name = 'post') {
    $posts = get_posts(array(
        'post_type' => $post_type_name,
        'orderby'   => 'title',
        'order'     => 'ASC',
        'numberposts' => -1 // সব পোস্ট আনার জন্য
    ));

    $posts_list = [];
    foreach ($posts as $post) {
        $posts_list[$post->ID] = $post->post_title;
    }

    return $posts_list;
}

// Get category slug or name
function donacion_get_cat_data($categories = [], $delimiter = ' ', $term = 'slug') {
    $slugs = [];

    foreach ($categories as $cat) {
        if($term === 'slug') {
            $slugs[] = $cat->slug;
        }

        if($term === 'name') {
            $slugs[] = $cat->name;
        }
    }

    return implode($delimiter, $slugs);
}
// custom kses post 
function kd_kses( $custom_kses_post = '' ) {

	$kd_html_allow = [

		// ✅ Full SVG support
		'svg' => [
			'class'             => [],
			'xmlns'             => [],
			'xmlns:xlink'       => [],
			'version'           => [],
			'id'                => [],
			'x'                 => [],
			'y'                 => [],
			'width'             => [],
			'height'            => [],
			'viewbox'           => [],
			'fill'              => [],
			'stroke'            => [],
			'stroke-width'      => [],
			'stroke-linecap'    => [],
			'stroke-linejoin'   => [],
			'aria-hidden'       => [],
			'focusable'         => [],
			'role'              => [],
			'preserveaspectratio' => [],
		],
		'g' => [
			'fill'   => [],
			'stroke' => [],
			'class'  => [],
			'id'     => [],
			'style'  => [],
		],
		'path' => [
			'd'              => [],
			'fill'           => [],
			'stroke'         => [],
			'stroke-width'   => [],
			'stroke-linecap' => [],
			'stroke-linejoin'=> [],
			'class'          => [],
			'id'             => [],
			'style'          => [],
		],
		'circle' => [
			'cx'     => [],
			'cy'     => [],
			'r'      => [],
			'fill'   => [],
			'stroke' => [],
			'class'  => [],
		],
		'rect' => [
			'x'      => [],
			'y'      => [],
			'width'  => [],
			'height' => [],
			'rx'     => [],
			'ry'     => [],
			'fill'   => [],
			'class'  => [],
		],
		'polygon' => [
			'points' => [],
			'fill'   => [],
			'class'  => [],
		],
		'polyline' => [
			'points' => [],
			'fill'   => [],
			'class'  => [],
		],
		'line' => [
			'x1'     => [],
			'y1'     => [],
			'x2'     => [],
			'y2'     => [],
			'stroke' => [],
			'class'  => [],
		],
		'title' => [],
		'defs'  => [],
		'use'   => [
			'xlink:href' => [],
		],

		// ✅ Links and Text
		'a' => [
			'href'   => [],
			'target' => [],
			'class'  => [],
			'title'  => [],
		],
		'p' => [ 'class' => [], 'id' => [], 'style' => [] ],
		'div' => [ 'class' => [], 'id' => [], 'style' => [] ],
		'span' => [
			'class' => [], // ✅ for flaticon & fontawesome spans
			'id'    => [],
			'style' => [],
		],
		'i' => [
			'class'       => [], // ✅ fa, fab, flaticon-*, etc.
			'id'          => [],
			'style'       => [],
			'title'       => [],
			'aria-hidden' => [],
		],
		'strong' => [],
		'b'       => [],
		'em'      => [],
		'br'      => [],
		'ul'      => [ 'class' => [] ],
		'ol'      => [ 'class' => [] ],
		'li'      => [ 'class' => [] ],
		'img'     => [
			'src'       => [],
			'alt'       => [],
			'title'     => [],
			'width'     => [],
			'height'    => [],
			'class'     => [],
			'loading'   => [],
			'decoding'  => [],
		],
		'blockquote' => [ 'cite' => [] ],
		'q'          => [ 'cite' => [] ],
		'cite'       => [],
		'hr'         => [],
		'address'    => [ 'class' => [] ],
	];

	return wp_kses( $custom_kses_post, $kd_html_allow );
}