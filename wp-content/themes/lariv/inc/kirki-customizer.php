<?php
/**
 * lariv customizer
 *
 * @package lariv
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function lariv_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'lariv_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'lariv Customizer', 'lariv' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'lariv' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'lariv' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'lariv' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'lariv' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'lariv' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'background_image_setting', [
        'title'       => esc_html__( 'Background Image Setting', 'lariv' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'lariv' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'lariv' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'lariv' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'lariv' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'lariv' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'event_settings', [
        'title'       => esc_html__( 'Event Settings ', 'lariv' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'lariv' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'lariv' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'lariv' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'lariv_customizer',
    ] );
}

add_action( 'customize_register', 'lariv_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher info', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_search',
        'label'    => esc_html__( 'Header Search On/Off', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_header_lang',
        'label'    => esc_html__( 'language On/Off', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_button_text',
        'label'    => esc_html__( 'Button Text', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'lariv' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'lariv_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'lariv_button_link',
        'label'    => esc_html__( 'Button URL', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'lariv_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_phone_num',
        'label'    => esc_html__( 'Phone Number', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 234 567 899', 'lariv' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_mail_id',
        'label'    => esc_html__( 'Mail ID', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'info@lariv.com', 'lariv' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_address',
        'label'    => esc_html__( 'Address', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Moon ave, New York, 2020 NY US', 'lariv' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_address_url',
        'label'    => esc_html__( 'Address URL', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'lariv' ),
        'priority' => 10,
    ];    

    // Login
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_acc_button_text',
        'label'    => esc_html__( 'Login', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Login', 'lariv' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_acc_button_link',
        'label'    => esc_html__( 'Account URL', 'lariv' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'lariv' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'lariv' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'lariv' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'lariv' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'lariv' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
   

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'lariv' ),
        'description' => esc_html__( 'Upload Your Logo.', 'lariv' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/logo.svg',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'lariv' ),
        'description' => esc_html__( 'Header Logo Black', 'lariv' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/logo-dark.svg',
    ];

  

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );


/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // background image setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'background_bg_img',
        'label'       => esc_html__( 'Background Image', 'lariv' ),
        'description' => esc_html__( 'Background Image', 'lariv' ),
        'section'     => 'background_image_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'lariv_background_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'lariv' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'lariv' ),
        'section'     => 'background_image_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'background_info_switch',
        'label'    => esc_html__( 'Background Info switch', 'lariv' ),
        'section'  => 'background_image_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'background_switch',
        'label'    => esc_html__( 'Background Hide', 'lariv' ),
        'section'  => 'background_image_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'lariv' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'lariv' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'lariv' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'lariv' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'lariv' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            'footer-style-4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'lariv' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'lariv' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'lariv' ),
            '3' => esc_html__( 'Widget Number 3', 'lariv' ),
            '2' => esc_html__( 'Widget Number 2', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'lariv_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'lariv' ),
        'description' => esc_html__( 'Footer Background Image.', 'lariv' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'lariv_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'lariv' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'lariv' ),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'lariv' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'lariv' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'lariv' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_copyright',
        'label'    => esc_html__( 'Copy Right', 'lariv' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2022 Theme_Pure. All Rights Reserved', 'lariv' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function lariv_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_1',
        'label'       => __( 'Theme Color 1', 'lariv' ),
        'description' => esc_html__( 'This is a Theme color control.', 'lariv' ),
        'section'     => 'color_setting',
        'default'     => '#3D6CE7',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_2',
        'label'       => __( 'Theme Color 2', 'lariv' ),
        'description' => esc_html__( 'This is a Theme color control.', 'lariv' ),
        'section'     => 'color_setting',
        'default'     => '#258E46',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_3',
        'label'       => __( 'Theme Color 3', 'lariv' ),
        'description' => esc_html__( 'This is a Theme color control.', 'lariv' ),
        'section'     => 'color_setting',
        'default'     => '#007A70',
        'priority'    => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'lariv_color_fields' );

// 404
function lariv_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'lariv_404_bg',
        'label'       => esc_html__( '404 Image.', 'lariv' ),
        'description' => esc_html__( '404 Image.', 'lariv' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_error_title',
        'label'    => esc_html__( 'Not Found Title', 'lariv' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'lariv' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'lariv_error_desc',
        'label'    => esc_html__( '404 Description Text', 'lariv' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'lariv' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'lariv_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'lariv' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'lariv' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'lariv_404_fields' );

// course_settings
function lariv_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'lariv_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'lariv' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'lariv_learndash_order',
        'label'       => esc_html__( 'Post Order', 'lariv' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'lariv' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'lariv' ),
            'DESC' => esc_html__( 'DESC', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'lariv' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'lariv_learndash_fields' );
}


// tutor_course_settings
function lariv_tutor_course_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_details_author_meta_switch',
        'label'    => esc_html__( 'Tutor Course Details Author Meta', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_details_payment_switch',
        'label'    => esc_html__( 'Tutor Course Details Payment', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_desc_tab_switch',
        'label'    => esc_html__( 'Tutor Course Description Tab Swicher', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__( 'Tutor Course Curriculum Tab Swicher', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_reviews_tab_switch',
        'label'    => esc_html__( 'Tutor Course Reviews Tab Swicher', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'lariv_tutor_course_instructor_tab_switch',
        'label'    => esc_html__( 'Tutor Course Instructor Tab Swicher', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
    ];
    return $fields;
}

if (  function_exists('tutor') ) {
    add_filter( 'kirki/fields', 'lariv_tutor_course_fields' );
}

/**
 * Added Event Fields
 */
function lariv_event_fields( $fields ) {
    // event settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_text',
        'label'    => esc_html__( 'Button Text', 'lariv' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( 'Enroll Now', 'lariv' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_link',
        'label'    => esc_html__( 'Button Link', 'lariv' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( '#', 'lariv' ),
        'priority' => 10,
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'lariv_event_fields' );


/**
 * Added Fields
 */
function lariv_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'lariv' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'lariv_typo_fields' );


// course_settings
function lariv_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'lariv' ),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'lariv' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'lariv' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'lariv' ),
            'off' => esc_html__( 'Disable', 'lariv' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

add_filter( 'kirki/fields', 'lariv_course_fields' );




/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function lariv_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'lariv' ) ) {
        $value = Kirki::get_option( lariv_get_theme(), $name );
    }

    return apply_filters( 'lariv_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function lariv_get_theme() {
    return 'lariv';
}