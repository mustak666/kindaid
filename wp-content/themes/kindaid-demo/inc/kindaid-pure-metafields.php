<?php



add_filter( 'tp_meta_boxes', 'themepure_metabox' );
function themepure_metabox( $meta_boxes ) {
    $meta_boxes[] = array(
        'metabox_id' => '_your_id',
        'title'      => esc_html__( 'Your Metabox Title', 'textdomain' ),
        'post_type'  => 'post', // এখানে page বা custom post type নামও হতে পারে
        'context'    => 'normal',
        'priority'   => 'core',
        'fields'     => array(
            array(
                'label'       => 'Text Field',
                'id'          => '_your_text_id',
                'type'        => 'text',
                'placeholder' => '',
                'default'     => '',
            ),
            // এখানে আরও field types add করা যাবে
        ),
    );

    $meta_boxes[] = array(
        'metabox_id' => '_your_id2',
        'title'      => esc_html__( 'Your Metabox Title', 'textdomain' ),
        'post_type'  => 'page', // এখানে page বা custom post type নামও হতে পারে
        'context'    => 'normal',
        'priority'   => 'core',
        'fields'     => array(
            array(
                'label'       => 'Textarea Field',
                'id'          => '_your_id2',
                'type'        => 'textarea',
                'placeholder' => '',
                'default'     => '',
            ),
            // এখানে আরও field types add করা যাবে
        ),
    );

    return $meta_boxes;
}
