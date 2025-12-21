<?php




new \Kirki\Panel(
	'kindaid_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Kindaid', 'kindaid' ),
		'description' => esc_html__( 'My Panel Description.', 'kindaid' ),
	]
);

function kindaid_header_select(){
    new \Kirki\Section(
        'kindaid_header_select',
        [
            'title'       => esc_html__( 'Kindaid Header Select', 'kindaid' ),
            'description' => esc_html__( 'Header Select Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'header_option',
            'label'       => esc_html__( 'Select A Header Global', 'kindaid' ),
            'section'     => 'kindaid_header_select',
            'default'     => 'header_1',
            'choices'     => [
                'header_1' => esc_html__( 'Header 01', 'kindaid' ),
                'header_2' => esc_html__( 'Header 02', 'kindaid' ),
                'header_3' => esc_html__( 'Header 03', 'kindaid' ),
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
            'title'       => esc_html__( 'Kindaid Header', 'kindaid' ),
            'description' => esc_html__( 'My Logo Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_right_info_switch',
            'label'       => esc_html__( 'Header Right Info Switch', 'kindaid' ),
            'description' => esc_html__( 'Please On', 'kindaid' ),
            'section'     => 'kindaid_header',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'header_btn_text',
            'label'    => esc_html__( 'Header Btn Text', 'kindaid' ),
            'section'  => 'kindaid_header',
            'default'  => esc_html__( 'Donate Now', 'kindaid' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'header_right_info_switch', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ],
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'header_btn_url',
            'label'    => esc_html__( 'Header Btn URL', 'kindaid' ),
            'section'  => 'kindaid_header',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'header_right_info_switch', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
}
kindaid_header_section();

// Logos 
function kindaid_logo(){
    new \Kirki\Section(
        'kindaid_logos',
        [
            'title'       => esc_html__( 'Kindaid Logos', 'kindaid' ),
            'description' => esc_html__( 'My Logo Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_logo_black',
            'label'       => esc_html__( 'Kindaid Logo Black', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_logos',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_logo_yellow',
            'label'       => esc_html__( 'Kindaid Logo Yellow', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_logos',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-yellow.png',
        ]
    );
}
kindaid_logo();


// Offcanvas 
function kindaid_offcanvas(){
    new \Kirki\Section(
        'kindaid_offcanvas',
        [
            'title'       => esc_html__( 'Kindaid Offcanvas', 'kindaid' ),
            'description' => esc_html__( 'Offvanvas Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );

    // logo switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_logo',
            'label'       => esc_html__( 'Switch Logo', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Logo', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 7,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_offcanvas_logo',
            'label'       => esc_html__( 'Kindaid Offcanvas Logo', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
            'priority' => 7,
            'active_callback' => [
                [
                    'setting'  => 'switch_logo', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
    // logo switch


    // content part 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_content',
            'label'       => esc_html__( 'Switch Content', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Content', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 8,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'kindaid_offcanvas_title',
            'label'    => esc_html__( 'Offcanvas Title', 'kindaid' ),
            'section'  => 'kindaid_offcanvas',
            'default'  => esc_html__( 'Hello There!', 'kindaid' ),
            'priority' => 8,
            'active_callback' => [
                [
                    'setting'  => 'switch_content', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'kindaid_offcanvas_content',
            'label'    => esc_html__( 'Offcanvas Content', 'kindaid' ),
            'section'  => 'kindaid_offcanvas',
            'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kindaid' ),
            'priority' => 8,
            'active_callback' => [
                [
                    'setting'  => 'switch_content', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
    // content part 
    // gallery Part 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_gallery',
            'label'       => esc_html__( 'Switch Gallery', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Gallery', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 9,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'kindaid_gallery_list',
            'label'    => esc_html__( 'Gallery List', 'kindaid' ),
            'section'  => 'kindaid_offcanvas',
            'priority' => 9,
            'fields'   => [
                'gallery_img'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Info Text', 'kindaid' ),
                    'description' => esc_html__( 'Phone - tel:123. and gmail - mailto:abc@gmail.com', 'kindaid' ),
                ],
            ],
            'active_callback' => [
                [
                    'setting'  => 'switch_gallery', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
    // gallery Part 

    // offcanvas info 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_info',
            'label'       => esc_html__( 'Switch Info', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Info', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'kindaid_info_list',
            'label'    => esc_html__( 'Info List', 'kindaid' ),
            'section'  => 'kindaid_offcanvas',
            'priority' => 10,
            'fields'   => [
                'info_text'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Info Text', 'kindaid' ),
                    'description' => esc_html__( 'Phone - tel:123. and gmail - mailto:abc@gmail.com', 'kindaid' ),
                ],
                'info_url'    => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Info URL', 'kindaid' ),
                    'description' => esc_html__( ' Enter Your URl Here', 'kindaid' ),
                    'default' => '#',
                ],
            ],
            'active_callback' => [
                [
                    'setting'  => 'switch_info', // The setting to watch
                    'operator' => '===',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_menu',
            'label'       => esc_html__( 'Switch Menu', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Menu', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_social',
            'label'       => esc_html__( 'Switch Social', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Social', 'kindaid' ),
            'section'     => 'kindaid_offcanvas',
            'default'     => 'on',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
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
            'title'       => esc_html__( 'Kindaid Social', 'kindaid' ),
            'description' => esc_html__( 'Social Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'facbook_url',
            'label'    => esc_html__( 'Facbook URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'instragram_url',
            'label'    => esc_html__( 'Instragram URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'linkedin_url',
            'label'    => esc_html__( 'Linkedin URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'vieamo_url',
            'label'    => esc_html__( 'Vieamo URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'youtube_url',
            'label'    => esc_html__( 'Youtube URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'flickr_url',
            'label'    => esc_html__( 'Flickr  URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings' => 'behance_url',
            'label'    => esc_html__( 'Behance URL', 'kindaid' ),
            'section'  => 'kindaid_social',
            'default'  => esc_html__( '#', 'kindaid' ),
            'priority' => 10,
        ]
    );

}
kindaid_social_main();

// Logos 
function kindaid_searchform(){
    new \Kirki\Section(
        'kindaid_searchform',
        [
            'title'       => esc_html__( 'Kindaid Searchform', 'kindaid' ),
            'description' => esc_html__( 'My Logo Description.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    // logo switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'searchform_switch_logo',
            'label'       => esc_html__( 'Searchform Switch Logo', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Logo', 'kindaid' ),
            'section'     => 'kindaid_searchform',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'kindaid_searchform_logo',
            'label'       => esc_html__( 'Kindaid Searchform Logo', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_searchform',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
            'active_callback' => [
                [
                    'setting'  => 'searchform_switch_logo', // The setting to watch
                    'operator' => '==',            // The comparison operator
                    'value'    => true,            // The value to compare against
                ],
            ],
        ]
    );
}
kindaid_searchform();

// footer 
function kindaid_footer_option(){
    new \Kirki\Section(
        'kindaid_footer',
        [
            'title'       => esc_html__( 'Kindaid Footer', 'kindaid' ),
            'description' => esc_html__( 'kindaid Footer here.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'kindaid_footer_option',
            'label'       => esc_html__( 'Select A Footer Global', 'kindaid' ),
            'section'     => 'kindaid_footer',
            'default'     => 'footer_1',
            'choices'     => [
                'footer_1' => esc_html__( 'Footer 01', 'kindaid' ),
                'footer_2' => esc_html__( 'Footer 02', 'kindaid' ),
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_1_bg',
            'label'       => esc_html__( 'Kindaid Footer 01 BG', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_footer',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'kindaid_footer_copyright',
            'label'    => esc_html__( 'Footer Copyright', 'kindaid' ),
            'section'  => 'kindaid_footer',
            'default'  => esc_html__( '© 2025 Charity. is Proudly Powered by Aqlova', 'kindaid' ),
        ]
    );

}
kindaid_footer_option();
// footer 
function kindaid_breadcrumb_option(){
    new \Kirki\Section(
        'kindaid_breadcrumb',
        [
            'title'       => esc_html__( 'Kindaid Breadcrumb', 'kindaid' ),
            'description' => esc_html__( 'kindaid Breadcrumb here.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_bg_global',
            'label'       => esc_html__( 'Kindaid Breadcrumb BG Global', 'kindaid' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kindaid' ),
            'section'     => 'kindaid_breadcrumb',
            'default'     => get_template_directory_uri() . '/assets/img/update/breadcrumb/bg.jpg',
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_breadcrumb',
            'label'       => esc_html__( 'Switch Breadcrumb', 'kindaid' ),
            'description' => esc_html__( 'Simple switch Breadcrumb', 'kindaid' ),
            'section'     => 'kindaid_breadcrumb',
            'default'     => 'on',
            'priority' => 9,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kindaid' ),
                'off' => esc_html__( 'Disable', 'kindaid' ),
            ],
        ]
    );

}
kindaid_breadcrumb_option();

function kindaid_404_option(){
    new \Kirki\Section(
        'kindaid_404',
        [
            'title'       => esc_html__( 'Kindaid 404', 'kindaid' ),
            'description' => esc_html__( 'kindaid 404 here.', 'kindaid' ),
            'panel'       => 'kindaid_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'error_title',
            'label'    => esc_html__( '404 Title', 'kindaid' ),
            'section'  => 'kindaid_404',
            'default'  => esc_html__( 'Opps!', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'error_sub_title',
            'label'    => esc_html__( '404 Sub Title', 'kindaid' ),
            'section'  => 'kindaid_404',
            'default'  => esc_html__( '404 - page not found', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'error_content',
            'label'    => esc_html__( '404 Content', 'kindaid' ),
            'section'  => 'kindaid_404',
            'default'  => esc_html__( 'the page you are looking for might have been removed has its name chenged or is tempurery unavable', 'kindaid' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'error_btn_text',
            'label'    => esc_html__( 'Btn Text', 'kindaid' ),
            'section'  => 'kindaid_404',
            'default'  => esc_html__( 'Go To Homepage', 'kindaid' ),
            'priority' => 10,
        ]
    );

}
kindaid_404_option();


new \Kirki\Panel(
	'kindaid_blog',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Kindaid Blog', 'kindaid' ),
		'description' => esc_html__( 'My Panel Description.', 'kindaid' ),
	]
);

function kindaid_blog(){
    new \Kirki\Section(
        'kindaid_blog_button',
        [
            'title'       => esc_html__( 'Kindaid Blog Button', 'kindaid' ),
            'description' => esc_html__( 'kindaid Blog Button here.', 'kindaid' ),
            'panel'       => 'kindaid_blog',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'blog_btn_text',
            'label'    => esc_html__( 'Btn Text', 'kindaid' ),
            'section'  => 'kindaid_blog_button',
            'default'  => esc_html__( 'Read More', 'kindaid' ),
            'priority' => 10,
        ]
    );
}
kindaid_blog();