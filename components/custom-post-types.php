<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 9/18/2018
 * Time: 12:28 PM
 */


function izzy_project_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Projects' ),
		'parent_item_colon'   => __( 'Parent Project' ),
		'all_items'           => __( 'All Projects' ),
		'view_item'           => __( 'View Project' ),
		'add_new_item'        => __( 'Add New Project' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Project' ),
		'update_item'         => __( 'Update Project' ),
		'search_items'        => __( 'Search Project' ),
		'not_found'           => __( 'Not Found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'Projects' ),
		'description'         => __( 'Project news and reviews' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'taxonomy' , 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'project-category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'project', $args );

}

add_action( 'init', 'izzy_project_type', 0 );

function izzy_project_taxonomy() {
	$labels = array(
		'name'              => _x( 'Project-Categorys', 'taxonomy general name', 'izzy' ),
		'singular_name'     => _x( 'Project-Category', 'taxonomy singular name', 'izzy' ),
		'search_items'      => __( 'Search Project-Categorys', 'izzy' ),
		'all_items'         => __( 'All Project-Categorys', 'izzy' ),
		'parent_item'       => __( 'Parent Project-Category', 'izzy' ),
		'parent_item_colon' => __( 'Parent Project-Category:', 'izzy' ),
		'edit_item'         => __( 'Edit Project-Category', 'izzy' ),
		'update_item'       => __( 'Update Project-Category', 'izzy' ),
		'add_new_item'      => __( 'Add New Project-Category', 'izzy' ),
		'new_item_name'     => __( 'New Project-Category Name', 'izzy' ),
		'menu_name'         => __( 'Project-Category', 'izzy' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project-category' ),
	);

	register_taxonomy( 'project-category', 'project', $args );
}

add_action( 'init', 'izzy_project_taxonomy', 0 );