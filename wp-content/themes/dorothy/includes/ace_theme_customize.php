<?php
// ==================================================================
// Register theme customize
// ==================================================================
function ace_customize_register($wp_customize) {
  if( function_exists('wp_customize') ) {} else {}

// ==================================================================
// Register theme customize section
// ==================================================================
$wp_customize->add_section( 'ace_theme_setup', array(
	'title'       => __( 'Ace: Theme Setup', 'ace' ),
	'priority'    => 499,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_enable_breadcrumb', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_enable_breadcrumb', array(
	'label'       => __( 'Enable Breadcrumb navigation', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_enable_breadcrumb',
	'type'        =>  'checkbox',
	'priority'    => 1,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_enable_excerpt', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_enable_excerpt', array(
	'label'       => __( 'Use excerpt summary', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_enable_excerpt',
	'type'        =>  'checkbox',
	'priority'    => 2,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_enable_related', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_enable_related', array(
	'label'       =>  __( 'Enable related post', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_enable_related',
	'type'        =>  'checkbox',
	'priority'    =>  3,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_enable_post_thumbnail', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_enable_post_thumbnail', array(
	'label'       => __( 'Enable feature thumbnail', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_enable_post_thumbnail',
	'type'        =>  'checkbox',
	'priority'    => 4,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_thumb_width', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_thumb_width', array(
	'label'       => __( 'Thumb width', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_thumb_width',
	'type'        =>  'text',
	'priority'    => 5,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_thumb_height', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_thumb_height', array(
	'label'       => __( 'Thumb height', 'ace' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_thumb_height',
	'type'        =>  'text',
	'priority'    => 6,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_favicon', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ace_favicon', array(
	'label'       => __( 'Favicon', 'themename' ),
	'section'     =>  'ace_theme_setup',
	'settings'    =>  'ace_favicon',
	'type'        =>  'image',
	'priority'    => 7,
) ) );


// ==================================================================
// Register theme customize section
// ==================================================================
$wp_customize->add_section( 'ace_slider', array(
	'title'       => __( 'Ace: Slider', 'ace' ),
	'priority'    => 500,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_feature_enable', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_feature_enable', array(
	'label'       => __( 'Enable slider', 'ace' ),
	'section'     =>  'ace_slider',
	'settings'    =>  'ace_feature_enable',
	'type'        =>  'checkbox',
	'priority'    => 1,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_feature_enable_home', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_feature_enable_home', array(
	'label'       => __( 'Show slider on homepage only', 'ace' ),
	'section'     =>  'ace_slider',
	'settings'    =>  'ace_feature_enable_home',
	'type'        =>  'checkbox',
	'priority'    => 2,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_feature_title_enable', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_feature_title_enable', array(
	'label'       => __( 'Show title', 'ace' ),
	'section'     =>  'ace_slider',
	'settings'    =>  'ace_feature_title_enable',
	'type'        =>  'checkbox',
	'priority'    => 3,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_featured_slide_pause', array(
	'default'     =>  '5000',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_featured_slide_pause', array(
	'label'       => __( 'Time pause on each slide', 'ace' ),
	'section'     =>  'ace_slider',
	'settings'    =>  'ace_featured_slide_pause',
	'type'        =>  'select',
	'choices'   => array(
    '1000' =>  '1 second',
    '2000' =>  '2 seconds',
    '3000' =>  '3 seconds',
    '4000' =>  '4 seconds',
    '5000' =>  '5 seconds',
    ),
	'priority'    => 4,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_featured_slide_speed', array(
	'default'     =>  '1000',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( 'ace_featured_slide_speed', array(
	'label'       => __( 'Time pause on each slide', 'ace' ),
	'section'     =>  'ace_slider',
	'settings'    =>  'ace_featured_slide_speed',
	'type'        =>  'select',
	'choices'   => array(
    '1000' =>  '1 second',
    '2000' =>  '2 seconds',
    '3000' =>  '3 seconds',
    '4000' =>  '4 seconds',
    '5000' =>  '5 seconds',
    ),
	'priority'    => 5,
) );


// ==================================================================
// Register theme customize section
// ==================================================================
$wp_customize->add_section( 'ace_links', array(
	'title'       => __( 'Ace: Link Colors', 'ace' ),
	'priority'    => 501,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_nav_bg', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_nav_bg', array(
	'label'       => __( 'Navigation menu background color', 'themename' ),
	'section'     =>  'ace_links',
	'settings'    =>  'ace_nav_bg',
	'priority'    => 1,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_link', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_link', array(
	'label'       => __( 'Link color', 'themename' ),
	'section'     =>  'ace_links',
	'settings'    =>  'ace_link',
	'priority'    => 2,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_link_hover', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_link_hover', array(
	'label'       => __( 'Link hover color', 'themename' ),
	'section'     =>  'ace_links',
	'settings'    =>  'ace_link_hover',
	'priority'    => 3,
) ) );


// ==================================================================
// Register theme customize section
// ==================================================================
$wp_customize->add_section( 'ace_buttons', array(
	'title'       => __( 'Ace: Button Colors', 'ace' ),
	'priority'    => 502,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_bg', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_bg', array(
	'label'       => __( 'Button background color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_bg',
	'priority'    => 1,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_border', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_border', array(
	'label'       => __( 'Button border color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_border',
	'priority'    => 2,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_text', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_text', array(
	'label'       => __( 'Button text color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_text',
	'priority'    => 3,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_bg_hover', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_bg_hover', array(
	'label'       => __( 'Button hover background color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_bg_hover',
	'priority'    => 4,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_border_hover', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_border_hover', array(
	'label'       => __( 'Button hover border color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_border_hover',
	'priority'    => 5,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_button_text_hover', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_text_hover', array(
	'label'       => __( 'Button hover text color', 'themename' ),
	'section'     =>  'ace_buttons',
	'settings'    =>  'ace_button_text_hover',
	'priority'    => 6,
) ) );

// ==================================================================
// Register theme customize section
// ==================================================================
$wp_customize->add_section( 'ace_headings', array(
	'title'       => __( 'Ace: Headings Colors', 'ace' ),
	'priority'    => 503,
) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h1', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h1', array(
	'label'       => __( 'Heading 1 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h1',
	'priority'    => 1,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h2', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h2', array(
	'label'       => __( 'Heading 2 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h2',
	'priority'    => 2,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h3', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h3', array(
	'label'       => __( 'Heading 3 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h3',
	'priority'    => 3,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h4', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h4', array(
	'label' => __( 'Heading 4 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h4',
	'priority'    => 4,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h5', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h5', array(
	'label'       => __( 'Heading 5 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h5',
	'priority'    => 5,
) ) );

// ===============
// Setting
// ===============
$wp_customize->add_setting( 'ace_h6', array(
	'default'     =>  '',
	'type'        =>  'option',
	'capability'  =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h6', array(
	'label'       => __( 'Heading 6 color', 'themename' ),
	'section'     =>  'ace_headings',
	'settings'    =>  'ace_h6',
	'priority'    => 1,
) ) );



}
add_action( 'customize_register', 'ace_customize_register' );

?>