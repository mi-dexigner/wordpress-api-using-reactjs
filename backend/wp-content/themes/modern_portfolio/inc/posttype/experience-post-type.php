<?php
/* Create Custom Post Type : Experience */
function create_experience_post_type() 
{
	$labels = array(
		'name' => __( 'Experience','framework'),
		'singular_name' => __( 'Experience','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Experience','framework'),
		'edit_item' => __('Edit Experience','framework'),
		'new_item' => __('New Experience','framework'),
		'view_item' => __('View Experience','framework'),
		'search_items' => __('Search Experience','framework'),
		'not_found' =>  __('No Experience found','framework'),
		'not_found_in_trash' => __('No Experience found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'query_var' => true,
		'menu_icon' => 'dashicons-excerpt-view',
		'show_in_rest' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title')
	  ); 
	  
	  register_post_type('experience',$args);
}

add_action( 'init', 'create_experience_post_type' );

