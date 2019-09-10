<?php
/* Create Custom Post Type : Education */
function create_education_post_type() 
{
	$labels = array(
		'name' => __( 'Education','framework'),
		'singular_name' => __( 'Education','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Education','framework'),
		'edit_item' => __('Edit Education','framework'),
		'new_item' => __('New Education','framework'),
		'view_item' => __('View Education','framework'),
		'search_items' => __('Search Education','framework'),
		'not_found' =>  __('No Education found','framework'),
		'not_found_in_trash' => __('No Education found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'query_var' => true,
		'menu_icon' => 'dashicons-businessman',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title'),
		'show_in_rest' => true,
	  ); 
	  
	  register_post_type('education',$args);
}

add_action( 'init', 'create_education_post_type' );


/* Add Custom Columns */
/*function slide_edit_columns($columns)
{

	$columns = array(
		  "cb" => '<input type="checkbox" >',
		  "title" => __( 'Slide Title','framework' ),		  
		  // "thumb" => __( 'Thumbnail','framework' ),		  		 
		  "slide_sub_title" => __('Slide Sub Title','framework'),
		  "main_title_span" => __('Main title span','framework'),
		  "date" => __( 'Date','framework' )
	);
	
	return $columns;
}
add_filter("manage_edit-slide_columns", "slide_edit_columns");


function slide_custom_columns($column){
	global $post;
	switch ($column)
	{
				
		case 'slide_sub_title':
			$slide_sub_title = get_post_meta($post->ID,'slide_sub_title',true);
			if(!empty($slide_sub_title))
			{
				echo $slide_sub_title;
			}
			case 'main_title_span':
			$main_title_span = get_post_meta($post->ID,'main_title_span',true);
			if(!empty($main_title_span))
			{
				echo $main_title_span;
			}
			else
			{
				_e('NA','framework');
			}		
			break;
	}
}
add_action("manage_posts_custom_column", "slide_custom_columns");

*/