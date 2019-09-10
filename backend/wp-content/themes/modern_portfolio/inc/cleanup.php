<?php

/* Wordpress Update Closed */
function mi_remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
    }
    add_filter('pre_site_transient_update_core','mi_remove_core_updates');
    add_filter('pre_site_transient_update_plugins','mi_remove_core_updates');
    add_filter('pre_site_transient_update_themes','mi_remove_core_updates');

    /* remove version string from js and css */
function mi_remove_wp_version_strings( $src ) {
	
	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
	
}
add_filter( 'script_loader_src', 'mi_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'mi_remove_wp_version_strings' );

/* remove metatag generator from header */
function mi_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'mi_remove_meta_version' );
add_action( 'admin_menu', 'my_remove_menu_pages' );
   function my_remove_menu_pages() {
	 remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
   remove_menu_page( 'edit.php?post_type=page' );                   //Pages
	 remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	//remove_menu_page( 'users.php' );                  //Users
	 remove_menu_page( 'tools.php' );                  //Tools
	 //remove_menu_page( 'options-general.php' );        //Settings
	   remove_menu_page( 'index.php' );        // Dashboard
	  remove_menu_page('plugins.php');        // Plugins
   };
   function mi_head_cleanup() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );
   remove_action( 'wp_head', 'feed_links', 2 );
   remove_action( 'wp_head', 'rsd_link' );
   remove_action( 'wp_head', 'wlwmanifest_link' );
   remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
   remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
   remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
   remove_action( 'wp_head', 'wp_generator' );
   remove_action( 'wp_head', 'dns-prefetch' );
   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
   remove_action( 'wp_print_styles', 'print_emoji_styles' );
   remove_action( 'admin_print_styles', 'print_emoji_styles' );
   
   } 
     add_action( 'init', 'mi_head_cleanup' );

 add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

 function remove_wp_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
    $wp_admin_bar->remove_node( 'wporg' );
    $wp_admin_bar->remove_node( 'about' );

 }


 show_admin_bar( false );
if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}
add_filter('show_admin_bar', '__return_false');


function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

$user_id = get_current_user_id();



/* function restrict_redirect() {
    if( is_user_logged_in())
     {
        // feel free to customize the following line to suit your needs
       return "You Are Not Allowd"
        exit;
    }
}
add_action('wp', 'wpse_131562_redirect') */