<?php
function kindaid_matafield( $meta_boxes ) {
    $meta_boxes[] = array(
        'metabox_id' => 'header_select',
        'title'      => esc_html__( 'Header/Footer Select Section', 'kindaid' ),
        'post_type'  => 'page', // এখানে page বা custom post type নামও হতে পারে
        'context'    => 'normal',
        'priority'   => 'core',
        'fields'     => array(
            array(

                'label'           => esc_html__('Header Option By Page', 'kindaid'),
                'id'              => "header_option_page",
                'type'            => 'select',
                'placeholder' => esc_html__( 'Select Header Style', 'kindaid' ),
                'options'         => array(
                    'header_style_blank' => 'Header Style Blank',
                    'header_style_1' => 'Header Style 01',
                    'header_style_2' => 'Header Style 02',
                    'header_style_3' => 'Header Style 03',
                ),
                'conditional' => array(),
                'default' => 'header_style_blank',
                'multiple' => false,
            ),
            array(

                'label'           => esc_html__('Footer Option By Page', 'kindaid'),
                'id'              => "Footer_option_page",
                'type'            => 'select',
                'placeholder' => esc_html__( 'Select Footer Style', 'kindaid' ),
                'options'         => array(
                    'footer_style_blank' => 'Footer Style Blank',
                    'footer_style_1' => 'Footer Style 01',
                    'footer_style_2' => 'Footer Style 02',
                ),
                'conditional' => array(),
                'default' => 'footer_style_blank',
                'multiple' => false,
            )
        ),
    );
    $meta_boxes[] = array(
        'metabox_id' => 'kindaid_blog_video',
        'title'      => esc_html__( 'Blog Video', 'kindaid' ),
        'post_type'  => 'post',
        'context'    => 'normal',
        'priority'   => 'core',
        'fields'     => array(
            array(
                'label'       => 'Video URL',
                'id'          => 'video_url',
                'type'        => 'text',
                'default'     => esc_html__('https://www.youtube.com/watch?v=mPRXhNFPgwo','kindaid'),
            ),
        ),
        'post_format' => 'video' 
    );
    $meta_boxes[] = array(
        'metabox_id' => 'kindaid_blog_audio',
        'title'      => esc_html__( 'Blog Audio', 'kindaid' ),
        'post_type'  => 'post',
        'context'    => 'normal',
        'priority'   => 'core',
        'fields'     => array(
            array(
                'label'       => 'Audio URL',
                'id'          => 'audio_url',
                'type'        => 'text',
                'default'     => esc_html__('https://soundcloud.com/discover/sets/personalized-tracks::mustakahmed-rion:60302056','kindaid'),
            ),
        ),
        'post_format' => 'audio' 
    );
    $meta_boxes[] = array(
        'metabox_id'       =>  'kindaid_blog_gallery',
        'title'    => esc_html__( 'Blog Gallery', 'kindaid' ),
        'post_type'=> 'post',
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
            array(
                'label'    => esc_html__( 'Gallery Item', 'kindaid' ),
                'id'      => "gallery_item",
                'type'    => 'gallery',
            ),
        ),
        'post_format' => 'gallery' // if u want to bind with post formats
    );
    $meta_boxes[] = array(
        'metabox_id'       =>  'kindaid_breadcrumb_page',
        'title'    => esc_html__( 'Kindaid Breadcrumb', 'kindaid' ),
        'post_type'=> 'page',
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
                array(  
                    'label'     => esc_html__( 'Breadcrumb BG', 'kindaid' ),
                    'id'        => "breadcrumb_bg",
                    'type'      => 'image', // specify the type field
                    'default'   => '',
                    'conditional' => array()
                ),
                array(
                    'label' => 'Breadcrumb Menu On/Off',
                    'id'    => "breadcrumb_menu_switch",
                    'type'  => 'switch', // specify the type field
                    'default' => 'on', // do not remove default key
                ),
                array(
                    'label' => 'Breadcrumb On/Off',
                    'id'    => "breadcrumb_switch",
                    'type'  => 'switch', // specify the type field
                    'default' => 'on', // do not remove default key
                ),
        ),
    );
    return $meta_boxes;
}

add_filter( 'tp_meta_boxes', 'kindaid_matafield' );

    // kindaid_user_metas
    function kindaid_user_metas(){
        $meta = array(
            'id' => 'kindaid_user_meta_sec',
            'label' => esc_html__('User Social Information', 'kindaid'),
            'fields' => array(
                array(
                    'id' => 'kindaid_facebook',
                    'label' => esc_html__('Facebook URL', 'kindaid'),
                    'type' => 'text',
                    'default' => '',
                    'placeholder' => esc_html__('Facebook URL...', 'kindaid'),
                    'show_in_admin_table' => 1
                ),
                array(
                    'id' => 'kindaid_linkedin',
                    'label' => esc_html__('Linkedin URL', 'kindaid'),
                    'type' => 'text',
                    'default' => '',
                    'placeholder' => esc_html__('Linkedin URL...', 'kindaid'),
                    'show_in_admin_table' => 1
                ),
                array(
                    'id' => 'kindaid_instagram',
                    'label' => esc_html__('Instagram URL', 'kindaid'),
                    'type' => 'text',
                    'default' => '',
                    'placeholder' => esc_html__('Instagram URL...', 'kindaid'),
                    'show_in_admin_table' => 1
                ),
                array(
                    'id' => 'kindaid_youtube',
                    'label' => esc_html__('Youtube URL', 'kindaid'),
                    'type' => 'text',
                    'default' => '',
                    'placeholder' => esc_html__('Youtube URL...', 'kindaid'),
                    'show_in_admin_table' => 1
                ),
            )
        );

        return $meta;
    }
    add_filter('tp_user_meta', 'kindaid_user_metas');