<?php
function mellany_header_script() {

		wp_enqueue_style('mellany-style', get_stylesheet_uri());

		$option = get_option("mellany_theme_options");

		wp_enqueue_script( 'mellany_script', get_template_directory_uri(). '/inc/js/scripts.js', array( 'jquery'), '', true );
		wp_localize_script( 'mellany_script', 'ajax_posts', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'noposts' => esc_html__('No older posts found', 'mellany'), ));

		// Third party scripts/ styles don't need to be prefixed to avoid double loading
		wp_enqueue_script('html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'respondmin', 'conditional', 'lt IE 9' );

    function mellany_fonts_url() {

      $theme_font = "Lato:400,900,700";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'mellany' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }

    wp_enqueue_style( 'mellany-fonts', mellany_fonts_url(), array(), '1.0.0' );
		$time = "";
		if (!empty($option['menu_top_ad'])) {
			 if  ($option['menu_top_ad']!="ad") {
				 $time = "ture";
			 }
		} else {
			$time = "ture";
		}
		if(!empty($option['header_time']) and $time == "ture") { if($option['header_time']=="on") { wp_add_inline_script( 'mellany-fonts', 'window.onload=startTime;', 'before' ); }}

}
add_action('wp_enqueue_scripts', 'mellany_header_script');

function mellany_admin_script() {
	wp_enqueue_style('mellany-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'mellany_admin_script');


function mellany_header_hooks() {

	get_template_part('style');

}

add_action('wp_head', 'mellany_header_hooks');


add_filter('body_class','mellany_class');
function mellany_class($classes) {

	$body_class = "";

	$options = get_option("mellany_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}

	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
