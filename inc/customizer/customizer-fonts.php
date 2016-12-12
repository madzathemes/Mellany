<?php

function tophot_customize_fonts($wp_customize){
	//	==================================================
    //  =============================
    //  = ==== Fonts
    //  =============================

    $wp_customize->add_section('tophot_fonts', array(
        'title'    => esc_html__('Fonts Size', 'tophot'),
        'priority' => 303,
        'panel'       => apply_filters( 'magazin_font_typography_panel_id', 'magazin_font_typography_panel' ),
    ));


     //  =============================
    //  = H1
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h1_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h1_size', array(
        'label'    	=> esc_html__('H1 size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 72', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h1_size]',
    ));

     //  =============================
    //  = H2
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h2_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h2_size', array(
        'label'    	=> esc_html__('H2 size (px)', 'tophot'),
       'description'    => esc_html__('Sample: 56', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h2_size]',
    ));

     //  =============================
    //  = H3
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h3_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h3_size', array(
        'label'    	=> esc_html__('H3 size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 48', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h3_size]',
    ));

     //  =============================
    //  = H4
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h4_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h4_size', array(
        'label'    	=> esc_html__('H4 size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 31', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h4_size]',
    ));

     //  =============================
    //  = H5
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h5_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h5_size', array(
        'label'    	=> esc_html__('H5 size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 24', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h5_size]',
    ));

     //  =============================
    //  = H6
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_h6_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h6_size', array(
        'label'    	=> esc_html__('H6 size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 18', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_h6_size]',
    ));


     //  =============================
    //  = p
    //  =============================
    $wp_customize->add_setting('tophot_theme_options[font_p_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_p_size', array(
        'label'    	=> esc_html__('p size (px)', 'tophot'),
        'description'    => esc_html__('Sample: 15', 'tophot'),
        'section'    => 'tophot_fonts',
        'settings'   => 'tophot_theme_options[font_p_size]',
    ));

}

add_action('customize_register', 'tophot_customize_fonts');

?>
