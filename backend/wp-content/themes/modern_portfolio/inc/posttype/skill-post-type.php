<?php
/* Create Custom Post Type : skill */
function create_skill_post_type() 
{
	$labels = array(
		'name' => __( 'Skill','framework'),
		'singular_name' => __( 'Education','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Skill','framework'),
		'edit_item' => __('Edit Skill','framework'),
		'new_item' => __('New Skill','framework'),
		'view_item' => __('View Skill','framework'),
		'search_items' => __('Search Skill','framework'),
		'not_found' =>  __('No Education found','framework'),
		'not_found_in_trash' => __('No Skill found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'query_var' => true,
		'menu_icon' => 'dashicons-sticky',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'show_in_rest'=>true,
		'supports' => array('title')
	  ); 
	  
	  register_post_type('skill',$args);
}

add_action( 'init', 'create_skill_post_type' );


