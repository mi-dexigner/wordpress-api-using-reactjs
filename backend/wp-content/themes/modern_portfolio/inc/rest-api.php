<?php
/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
  //add_image_size( 'custom-image-size', 500, 500, true );
    add_image_size( '250x250', 250, 250, true );
}


/* Preapare Rest API */

/* Preapare Rest API My Profile  */


function prepare_rest_my_profile($data,$post,$request){
    $_data = $data->data;

    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $thumbnail250x250 = wp_get_attachment_image_src( $thumbnail_id, '250x250') ;
    $thumbnail = wp_get_attachment_image_src( $thumbnail_id, 'medium') ;
    $thumbnailMedium = wp_get_attachment_image_src( $thumbnail_id, 'medium') ;
    $thumbnailLarge = wp_get_attachment_image_src( $thumbnail_id, 'large') ;
    $thumbnailFull = wp_get_attachment_image_src( $thumbnail_id, 'full') ;

    $_data['my_profile_250x250'] = $thumbnail250x250[0];
    $_data['my_profile_thumbnail'] = $thumbnail[0];
    $_data['my_profile_medium'] = $thumbnailMedium[0];
    $_data['my_profile_large'] = $thumbnailLarge[0];
    $_data['my_profile_full'] = $thumbnailFull[0];
    $data->data = $_data;

    return $data;
}
add_filter( 'rest_prepare_my-profile', 'prepare_rest_my_profile', 10, 3 );
function filter_my_profile( $data, $post, $context ) {
    $destination = get_post_meta( $post->ID, 'destination', true );
    $name  = get_post_meta( $post->ID, 'name', true );
    $bio  = get_post_meta( $post->ID, 'bio', true );
    $dateOfBirth  = get_post_meta( $post->ID, 'date_of_birth', true );
    $nationality  = get_post_meta( $post->ID, 'nationality', true );
    $address  = get_post_meta( $post->ID, 'address', true );
    $phone  = get_post_meta( $post->ID, 'phone', true );
    $email = get_post_meta( $post->ID, 'email', true );
    $facebook_username = get_post_meta( $post->ID, 'facebook_username', true );
    $twitter_username = get_post_meta( $post->ID, 'twitter_username', true );
    $github_username = get_post_meta( $post->ID, 'github_username', true );
    $linkedin_username = get_post_meta( $post->ID, 'linkedin_username', true );
    
     if( $destination ) {
        $data->data['destination'] = $destination;
    } 
    if( $name ) {
        $data->data['name'] = $name;
    } 
    if( $bio ) {
        $data->data['bio'] = $bio;
    } 
    if( $dateOfBirth ) {
        $data->data['dateOfBirth'] = $dateOfBirth;
    } 
    if( $nationality ) {
        $data->data['nationality'] = $nationality;
    } 

    if( $address ) {
        $data->data['address'] = $address;
    } 

    if( $phone ) {
        $data->data['phone'] = $phone;
    } 
    if( $email ) {
        $data->data['email'] = $email;
    } 

    if( $facebook_username ) {
        $data->data['facebook_username'] = $facebook_username;
    } 

    if( $twitter_username ) {
        $data->data['twitter_username'] = $twitter_username;
    } 

    if( $github_username ) {
        $data->data['github_username'] = $github_username;
    } 
    if( $linkedin_username ) {
        $data->data['linkedin_username'] = $linkedin_username;
    } 
    
    return $data;
    }
    add_filter( 'rest_prepare_my-profile', 'filter_my_profile', 10, 3 );  
   

    function filter_experience( $data, $post, $context ) {
        $_data = $data->data;
        $description = get_post_meta( $post->ID, 'description', true );
        $position  = get_post_meta( $post->ID, 'position', true );
        $date_from  = get_post_meta( $post->ID, 'date_from', true );
        $date_to  = get_post_meta( $post->ID, 'date_to', true );
        
         if( $description ) {
            $data->data['description'] = $description;
        } 
        if( $position ) {
            $data->data['position'] = $position;
        } 
        if( $date_from ) {
            $data->data['date_from'] = $date_from;
        } 
        if( $date_to ) {
            $data->data['date_to'] = $date_to;
        } 
    
        
        return $data;
        }
        add_filter( 'rest_prepare_experience', 'filter_experience', 10, 3 );  

        function filter_education( $data, $post, $context ) {
            $_data = $data->data;
            $subject  = get_post_meta( $post->ID, 'subject', true );
            $date_from  = get_post_meta( $post->ID, 'date_from', true );
            $date_to  = get_post_meta( $post->ID, 'date_to', true );
            
             if( $subject ) {
                $data->data['subject'] = $subject;
            } 
            if( $date_from ) {
                $data->data['date_from'] = $date_from;
            } 
            if( $date_to ) {
                $data->data['date_to'] = $date_to;
            } 
        
            
            return $data;
            }
            add_filter( 'rest_prepare_education', 'filter_education', 10, 3 );

            function filter_skill( $data, $post, $context ) {
                $_data = $data->data;
                $percentage  = get_post_meta( $post->ID, 'percentage', true );
                
                if( $percentage ) {
                    $data->data['percentage'] = $percentage;
                } 
            
                return $data;
                }
                add_filter( 'rest_prepare_skill', 'filter_skill', 10, 3 );
/* function prepare_rest_post($data,$post,$request){
    $_data = $data->data;
    // get Thumbnail
    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $thumbnail300x180 = wp_get_attachment_image_src( $thumbnail_id, '300x180') ;
    $thumbnail = wp_get_attachment_image_src( $thumbnail_id, 'medium') ;
    $thumbnailMedium = wp_get_attachment_image_src( $thumbnail_id, 'medium') ;
    $thumbnailLarge = wp_get_attachment_image_src( $thumbnail_id, 'large') ;
    $thumbnailFull = wp_get_attachment_image_src( $thumbnail_id, 'full') ;

    // Get Categories
    $cats = get_the_category( $post->ID );

    $_data['mi_300x180'] = $thumbnail300x180[0];
    $_data['mi_thumbnail'] = $thumbnail[0];
    $_data['mi_medium'] = $thumbnailMedium[0];
    $_data['mi_large'] = $thumbnailLarge[0];
    $_data['mi_full'] = $thumbnailFull[0];
    $_data['mi_category'] = $cats;
    $data->data = $_data;

    return $data;
}

add_filter( 'rest_prepare_my_profile', 'prepare_rest_post',10,3); */

