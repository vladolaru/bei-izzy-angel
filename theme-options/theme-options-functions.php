<?php

add_action( 'customize_register', 'izzy_theme_options_panel_register' );
function izzy_theme_options_panel_register( $wp_customize ) {

	$wp_customize->add_panel( 'theme-options', array(
		'title'       => __('Theme Options', 'izzy'),
		'description' => __('Customize your theme options', 'izzy'),
		'priority'    => 10,
	) );

	$wp_customize->add_section( 'post-section', array(
		'title'    => __('Post Options', 'izzy'),
		'priority' => 10,
		'panel'    => 'theme-options',
	) );

	$wp_customize->add_section( 'project-section', array(
		'title'    => __('Project Options', 'izzy'),
		'priority' => 20,
		'panel'    => 'theme-options',
	) );

	add_checkbox_to_theme_options_panel( $wp_customize, 'project', __('Show categories on archives', 'izzy'), 'categories-archives' );
	add_checkbox_to_theme_options_panel( $wp_customize, 'project', __('Show customer on archives', 'izzy' ), 'customer-archives' );
	add_checkbox_to_theme_options_panel( $wp_customize, 'project', __('Show year on archives', 'izzy' ), 'year-archives');

	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show featured image on archives', 'izzy' ), 'featured-image-archives');
	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show categories on archives', 'izzy' ), 'categories-archives');
	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show date on archives', 'izzy' ), 'date-archives');
	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show author on archives', 'izzy' ), 'author-archives');
	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show author box on single', 'izzy' ), 'author-box-single');
	add_checkbox_to_theme_options_panel( $wp_customize, 'post', __('Show featured image on single', 'izzy' ), 'featured-image-single');
}

function add_checkbox_to_theme_options_panel( $wp_customize, $post_type, $label, $id ) {
	$settingId = $post_type . '-' . $id;
	$wp_customize->add_setting( $settingId, array(
		'default' => get_theme_mod( $settingId ),
	) );

	$wp_customize->add_control( $settingId . '-control', array(
		'label'    => $label ,
		'type'     => 'checkbox',
		'section'  => $post_type . '-section',
		'settings' => $settingId,
	) );

	return $settingId;
}
