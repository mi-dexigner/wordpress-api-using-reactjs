<?php
/* Create Custom Post Type : My Profile */
function create_my_profile_post_type() 
{
	$labels = array(
		'name' => __( 'My Profile','framework'),
		'singular_name' => __( 'My Profile','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New My Profile','framework'),
		'edit_item' => __('Edit My Profile','framework'),
		'new_item' => __('New My Profile','framework'),
		'view_item' => __('View My Profile','framework'),
		'search_items' => __('Search My Profile','framework'),
		'not_found' =>  __('No My Profile found','framework'),
		'not_found_in_trash' => __('No My Profile found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'query_var' => false,
		'menu_icon' => 'dashicons-format-aside',
		'capability_type' => 'post',
		'capabilities' => array(
			//'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
			'create_posts' =>'edit_my-profile'
		  ),
		  'map_meta_cap'    => true, // Set to `false`, if users are not allowed to edit/delete existing posts.
		'hierarchical' => false,
		'menu_position' => 5,
		'show_in_rest' => true,
		'supports' => array('title','thumbnail','editor')
	  ); 
	  
	  register_post_type('my-profile',$args);
}

add_action( 'init', 'create_my_profile_post_type' );


add_filter( 'post_row_actions', 'remove_row_actions_post', 10, 2 );
function remove_row_actions_post( $actions, $post ) {
    if( $post->post_type === 'my-profile' ) {
        unset( $actions['clone'] );
		unset( $actions['trash'] );
		unset( $actions['trash'] );
    }
    return $actions;
}

