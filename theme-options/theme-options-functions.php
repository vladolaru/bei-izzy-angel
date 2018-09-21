<?php

add_action( 'customize_register', 'panel' );
function panel( $wp_customize ) {

	$wp_customize->add_panel( 'theme-options', array(
		'title'       => 'Theme Options',
		'description' => 'Customize your theme options',
		'priority'    => 10,
	) );

	$wp_customize->add_section( 'post-section', array(
		'title'    => 'Post Options',
		'priority' => 10,
		'panel'    => 'theme-options',
	) );

	$wp_customize->add_section( 'project-section', array(
		'title'    => 'Project Options',
		'priority' => 20,
		'panel'    => 'theme-options',
	) );

	add_checkbox( $wp_customize, 'project', 'Show categories on archives' );
	add_checkbox( $wp_customize, 'project', 'Show customer on archives' );
	add_checkbox( $wp_customize, 'project', 'Show year on archives' );

	add_checkbox( $wp_customize, 'post', 'Show featured image on archives' );
	add_checkbox( $wp_customize, 'post', 'Show category on archives' );
	add_checkbox( $wp_customize, 'post', 'Show date on archives' );
	add_checkbox( $wp_customize, 'post', 'Show author on archives' );
	add_checkbox( $wp_customize, 'post', 'Show author box on single' );
	add_checkbox( $wp_customize, 'post', 'Show featured image on single' );
}

function add_checkbox( $wp_customize, $post_type, $label ) {
	$settingId = $post_type . '-' . strtolower( str_replace( ' ', '-', $label ) );
	$wp_customize->add_setting( $settingId, array(
		'default' => get_theme_mod( $settingId ),
	) );

	$wp_customize->add_control( $settingId . '-control', array(
		'label'    => __( $label ),
		'type'     => 'checkbox',
		'section'  => $post_type . '-section',
		'settings' => $settingId,
	) );

	return $settingId;
}
