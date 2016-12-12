<?php
function tophot_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Colors', 'tophot'),
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'tophot'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'tophot_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'tophot_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'tophot' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'tophot_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'tophot' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General Colors', 'tophot'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('tophot_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'tophot'),
      'section'  => 'colors_general',
      'settings' => 'tophot_theme_options[colors_default]',
    )));

  $wp_customize->add_setting('tophot_theme_options[colors_header_objects]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_header_objects]', array(
      'label'    => esc_html__('Header Objects', 'tophot'),
      'section'  => 'colors_general',
      'settings' => 'tophot_theme_options[colors_header_objects]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'tophot'),
      'section'  => 'colors_general',
      'settings' => 'tophot_theme_options[colors_button]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_social_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_social_hover]', array(
      'label'    => esc_html__('Social Widget Hover', 'tophot'),
      'section'  => 'colors_general',
      'settings' => 'tophot_theme_options[colors_social_hover]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Menu Colors', 'tophot'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'tophot_theme_options[menu_background_width]', array(
  	'type'        => 'radio-buttonset',
  	'settings'    => 'tophot_theme_options[menu_background_width]',
  	'label'       => esc_html__( 'Menu Style', 'tophot' ),
  	'section'     => 'colors_menu',
  	'default'     => 'boxed',
  	'priority'    => 1,
    'option_type'           => 'option',
  	'choices'     => array(
  		'boxed'   => esc_attr__( 'Boxed', 'tophot' ),
  		'full' => esc_attr__( 'Full Width', 'tophot' ),
  	),
 ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_bg_left]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_bg_left]',
    'label'       => esc_html__( 'Background Left', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_bg_right]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_bg_right]',
    'label'       => esc_html__( 'Background Right', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 2,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu]',
    'label'       => esc_html__( 'Link', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 10,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_hover_text]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_hover_text]',
    'label'       => esc_html__( 'Link Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 11,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_hover]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_hover]',
    'label'       => esc_html__( 'Link Hover Background', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 12,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_border]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_border]',
    'label'       => esc_html__( 'Border', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 13,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub]',
    'label'       => esc_html__( 'Sub Link', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_hover]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_hover]',
    'label'       => esc_html__( 'Sub Link Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_background]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_background]',
    'label'       => esc_html__( 'Sub Link Background', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_hover_background]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_hover_background]',
    'label'       => esc_html__( 'Sub Link Background Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_cat]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_cat]',
    'label'       => esc_html__( 'Sub Category Link', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 16,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_cat_hover]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_cat_hover]',
    'label'       => esc_html__( 'Sub Category Link Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 17,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_cat_bg]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_cat_bg]',
    'label'       => esc_html__( 'Sub Category Link Background', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 18,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_sub_cat_hover_bg]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_sub_cat_hover_bg]',
    'label'       => esc_html__( 'Sub Category Link Background Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 18,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_button]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_button]',
    'label'       => esc_html__( 'Small Menu Button Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_button_background]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_button_background]',
    'label'       => esc_html__( 'Small Menu Button Hover Background', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_background]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_background]',
    'label'       => esc_html__( 'Small Menu Background', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 21,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_link]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_link]',
    'label'       => esc_html__( 'Small Menu Link', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 22,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_link_hover]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_link_hover]',
    'label'       => esc_html__( 'Small Menu Link Hover', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 23,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_small_text]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_small_text]',
    'label'       => esc_html__( 'Small Menu Text', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 24,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_random_background]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_random_background]',
    'label'       => esc_html__( 'Random Button Hover Backgrond', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 32,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_search_text]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_search_text]',
    'label'       => esc_html__( 'Search Text', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 30,
  ));

  Kirki::add_field( 'tophot_theme_options[colors_menu_search]', array(
    'type'        => 'color',
    'settings'    => 'tophot_theme_options[colors_menu_search]',
    'label'       => esc_html__( 'Search Backgrond', 'tophot' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 31,
  ));


  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'tophot'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_top_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_top_background]', array(
      'label'    => esc_html__('Top Footer Background', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_top_background]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_top_title]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_top_title]', array(
      'label'    => esc_html__('Top Footer Title', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_top_title]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_top_text]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_top_text]', array(
      'label'    => esc_html__('Top Footer Text', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_top_text]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_top_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_top_link]', array(
      'label'    => esc_html__('Top Footer Link', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_top_link]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_top_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_top_link_hover]', array(
      'label'    => esc_html__('Top Footer Link Hover', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_top_link_hover]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_border]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_border]', array(
      'label'    => esc_html__('Footer Border', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_border]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_bottom_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_bottom_background]', array(
      'label'    => esc_html__('Bottom Footer Background', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_bottom_background]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_bottom_text]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_bottom_text]', array(
      'label'    => esc_html__('Bottom Footer Text', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_bottom_text]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_bottom_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_bottom_link]', array(
      'label'    => esc_html__('Bottom Footer Link', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_bottom_link]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_bottom_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_bottom_link_hover]', array(
      'label'    => esc_html__('Bottom Footer Link Hover', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_bottom_link_hover]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_social_icon]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_social_icon]', array(
      'label'    => esc_html__('Social Icon', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_social_icon]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_social_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_social_background]', array(
      'label'    => esc_html__('Social Icon Background', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_social_background]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_social_icon_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_social_icon_hover]', array(
      'label'    => esc_html__('Social Icon Hover', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_social_icon_hover]',
  )));

  $wp_customize->add_setting('tophot_theme_options[colors_footer_social_background_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tophot_theme_options[colors_footer_social_background_hover]', array(
      'label'    => esc_html__('Social Icon Hover Background', 'tophot'),
      'section'  => 'colors_footer',
      'settings' => 'tophot_theme_options[colors_footer_social_background_hover]',
  )));





}

add_action('customize_register', 'tophot_customize_colors');
?>
