<?php




new \Kirki\Panel(
	'kindaid_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Kindaid', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

function kindaid_header_select(){
    new \Kirki\Section(
        'kindaid_header_select',
        [
            'title'       => esc_html__( 'Kindaid Header Select', 'kirki' ),
            'description' => esc_html__( 'Header Select Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'header_option',
            'label'       => esc_html__( 'Select A Header', 'kirki' ),
            'section'     => 'kindaid_header_select',
            'default'     => 'header_1',
            'choices'     => [
                'header_1' => esc_html__( 'Header 01', 'kirki' ),
                'header_2' => esc_html__( 'Header 02', 'kirki' ),
            ],
        ]
    );
}
kindaid_header_select();



// Header 
function kindaid_header_section(){
    new \Kirki\Section(
        'kindaid_header',
        [
            'title'       => esc_html__( 'Kindaid Header', 'kirki' ),
            'description' => esc_html__( 'My Logo Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_right_info_switch',
            'label'       => esc_html__( 'Header Right Info Switch', 'kirki' ),
            'description' => esc_html__( 'Please On', 'kirki' ),
            'section'     => 'kindaid_header',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'header_btn_text',
            'label'    => esc_html__( 'Header Btn Text', 'kirki' ),
            'section'  => 'kindaid_header',
            'default'  => esc_html__( 'Donate Now', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'header_btn_url',
            'label'    => esc_html__( 'Header Btn URL', 'kirki' ),
            'section'  => 'kindaid_header',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
}
kindaid_header_section();

// Logos 
function kindaid_logo(){
    new \Kirki\Section(
        'kindaid_logos',
        [
            'title'       => esc_html__( 'Kindaid Logos', 'kirki' ),
            'description' => esc_html__( 'My Logo Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_logo_black',
            'label'       => esc_html__( 'Kindaid Logo Black', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'kindaid_logos',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_logo_yellow',
            'label'       => esc_html__( 'Kindaid Logo Yellow', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'kindaid_logos',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-yellow.png',
        ]
    );
}
kindaid_logo();



// Offcanvas social
function kindaid_offcanvas_gallery(){
    new \Kirki\Section(
        'kindaid_offcanvas_gallery',
        [
            'title'       => esc_html__( 'Kindaid Offcanvas Gallery', 'kirki' ),
            'description' => esc_html__( 'Offvanvas Gallery Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'kindaid_gallery_list',
            'label'    => esc_html__( 'Gallery List', 'kirki' ),
            'section'  => 'kindaid_offcanvas_gallery',
            'priority' => 10,
            'fields'   => [
                'gallery_img'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Info Text', 'kirki' ),
                    'description' => esc_html__( 'Phone - tel:123. and gmail - mailto:abc@gmail.com', 'kirki' ),
                ],
            ],
        ]
    );


}
kindaid_offcanvas_gallery();



// Offcanvas 
function kindaid_offcanvas(){
    new \Kirki\Section(
        'kindaid_offcanvas',
        [
            'title'       => esc_html__( 'Kindaid Offcanvas', 'kirki' ),
            'description' => esc_html__( 'Offvanvas Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_offcanvas_logo',
            'label'       => esc_html__( 'Kindaid Offcanvas Logo', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings' => 'kindaid_offcanvas_title',
            'label'    => esc_html__( 'Offcanvas Title', 'kirki' ),
            'section'  => 'kindaid_offcanvas',
            'default'  => esc_html__( 'Hello There!', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'kindaid_offcanvas_content',
            'label'    => esc_html__( 'Offcanvas Content', 'kirki' ),
            'section'  => 'kindaid_offcanvas',
            'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kirki' ),
            'priority' => 10,
        ]
    );
    // offcanvas info 

    new \Kirki\Field\Repeater(
        [
            'settings' => 'kindaid_info_list',
            'label'    => esc_html__( 'Info List', 'kirki' ),
            'section'  => 'kindaid_offcanvas',
            'priority' => 10,
            'fields'   => [
                'info_text'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Info Text', 'kirki' ),
                    'description' => esc_html__( 'Phone - tel:123. and gmail - mailto:abc@gmail.com', 'kirki' ),
                ],
                'info_url'    => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Info URL', 'kirki' ),
                    'description' => esc_html__( ' Enter Your URl Here', 'kirki' ),
                    'default' => '#',
                ],
            ],
        ]
    );



    

}
kindaid_offcanvas();


// socials  
function kindaid_social_main(){
    new \Kirki\Section(
        'kindaid_social',
        [
            'title'       => esc_html__( 'Kindaid Social', 'kirki' ),
            'description' => esc_html__( 'Social Description.', 'kirki' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'facbook_url',
            'label'    => esc_html__( 'Facbook URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'instragram_url',
            'label'    => esc_html__( 'Instragram URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'linkedin_url',
            'label'    => esc_html__( 'Linkedin URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'vieamo_url',
            'label'    => esc_html__( 'Vieamo URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'youtube_url',
            'label'    => esc_html__( 'Youtube URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'flickr_url',
            'label'    => esc_html__( 'Flickr  URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings' => 'behance_url',
            'label'    => esc_html__( 'Behance URL', 'kirki' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

}
kindaid_social_main();