<?php
/* Create the Portfolios Item Custom Post Type */
function create_portfolios_post_type() 
{
    $labels = array(
        'name' => __( 'Portfolios Items','framework'),
        'singular_name' => __( 'Portfolios Item','framework' ),
        'add_new' => __('Add New','framework'),
        'add_new_item' => __('Add New portfolios Item','framework'),
        'edit_item' => __('Edit portfolios Item','framework'),
        'new_item' => __('New portfolios Item','framework'),
        'view_item' => __('View portfolios Item','framework'),
        'search_items' => __('Search portfolios Items','framework'),
        'not_found' =>  __('No portfolios Item found','framework'),
        'not_found_in_trash' => __('No portfolios Item found in Trash','framework'), 
        'parent_item_colon' => ''
      );
      
      $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true,
        'menu_icon' => 'dashicons-images-alt',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => array('title','thumbnail'),
        'rewrite' => array( 'slug' => __('portfolios-item', 'framework') )
      ); 
      
      register_post_type('portfolios-item',$args);
}
add_action( 'init', 'create_portfolios_post_type' );



/* Create Gallery Item Type Taxonomy */
function create_portfolios_item_type_taxonomy(){
    $labels = array(
        'name' => __( 'Portfolios Item Types', 'framework' ),
        'singular_name' => __( 'Portfolios Item Type', 'framework' ),
        'search_items' =>  __( 'Search Portfolios Item Types', 'framework' ),
        'popular_items' => __( 'Popular Portfolios Item Types', 'framework' ),
        'all_items' => __( 'All Portfolios Item Types', 'framework' ),
        'parent_item' => __( 'Parent Portfolios Item Type', 'framework' ),
        'parent_item_colon' => __( 'Parent Portfolios Item Type:', 'framework' ),
        'edit_item' => __( 'Edit Portfolios Item Type', 'framework' ), 
        'update_item' => __( 'Update Portfolios Item Type', 'framework' ),
        'add_new_item' => __( 'Add New Portfolios Item Type', 'framework' ),
        'new_item_name' => __( 'New Portfolios Item Type Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Portfolios Item Types with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or Remove Portfolios Item Types', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Portfolios Item Types', 'framework' ),
        'menu_name' => __( 'Portfolios Item Types', 'framework' )
    );
    
    register_taxonomy(
        'portfolios-item-type', 
        array( 'portfolios-item' ), 
        array(
            'hierarchical' => true, 
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => __('portfolios-item-type', 'framework'))
        )
    ); 
}

add_action( 'init', 'create_portfolios_item_type_taxonomy', 0 );


/* Add Custom Columns */
function gallery_edit_columns($columns){  

        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Portfolios Item Title','framework'),
            "portfolios-thumb" => __('Thumbnail','framework'),
            "type" => __('portfolios Item Type','framework'),
            "date" => __('Publish Time', 'framework')
        );
  
        return $columns;  
}  
  
function gallery_custom_columns($column){  
        global $post;  
        switch ($column)  
        {    
            case 'portfolios-thumb':             
                if(has_post_thumbnail($post->ID)) 
                {
                    ?>
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <?php the_post_thumbnail( 'portfolios-thumb' ); ?>
                    </a>
                    <?php
                }
                else
                {
                    _e('No Thumbnail','framework');
                }
                break;
            
            case 'type':  
                echo get_the_term_list($post->ID, 'portfolios-item-type', '', ', ','');  
                break;
        }  
} 
add_filter("manage_edit-gallery-item_columns", "gallery_edit_columns");  
add_action("manage_posts_custom_column",  "gallery_custom_columns");

