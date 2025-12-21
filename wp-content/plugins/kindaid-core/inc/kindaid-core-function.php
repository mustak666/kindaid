<?php




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
