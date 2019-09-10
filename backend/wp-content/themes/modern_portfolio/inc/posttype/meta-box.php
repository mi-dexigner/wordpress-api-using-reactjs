<?php
/*-----------------------------------------------------------------------------------*/
/*	Add Metabox to Profile
/*-----------------------------------------------------------------------------------*/	
	add_action( 'add_meta_boxes', 'profile_meta_box_add' );
function profile_meta_box_add()
	{
		add_meta_box( 'slide-meta-box', __('My Profile Information', 'framework'), 'slide_meta_box', 'my-profile', 'normal', 'high' );
	}
	
	function slide_meta_box( $post )
	{
    $values = get_post_custom( $post->ID );
    $bio = isset( $values['bio'] ) ? esc_attr( $values['bio'][0] ) : '';
		$destination = isset( $values['destination'] ) ? esc_attr( $values['destination'][0] ) : '';
		$name = isset( $values['name'] ) ? esc_attr( $values['name'][0] ) : '';	
		$date_of_birth = isset( $values['date_of_birth'] ) ? esc_attr( $values['date_of_birth'][0] ) : '';
		$nationality = isset( $values['nationality'] ) ? esc_attr( $values['nationality'][0] ) : '';
		$address = isset( $values['address'] ) ? esc_attr( $values['address'][0] ) : '';
		$phone = isset( $values['phone'] ) ? esc_attr( $values['phone'][0] ) : '';
		$email = isset( $values['email'] ) ? esc_attr( $values['email'][0] ) : '';
		$facebook_username = isset( $values['facebook_username'] ) ? esc_attr( $values['facebook_username'][0] ) : '';
		$twitter_username = isset( $values['twitter_username'] ) ? esc_attr( $values['twitter_username'][0] ) : '';
		$github_username = isset( $values['github_username'] ) ? esc_attr( $values['github_username'][0] ) : '';
		$linkedin_username = isset( $values['linkedin_username'] ) ? esc_attr( $values['linkedin_username'][0] ) : '';
		$destination = isset( $values['destination'] ) ? esc_attr( $values['destination'][0] ) : '';
		wp_nonce_field( 'profile_meta_box_nonce', 'meta_box_nonce_profile' );
		?>

<table style="width:100%;">
  <tr>
    <td><label for="destination"><strong>
        <?php _e('Destination','framework');?>
        </strong></label></td>
    <td><input type="text" name="destination" id="destination" value="<?php echo $destination; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example:Designer','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="name"><strong>
        <?php _e('Name','framework');?>
        </strong></label></td>
    <td><input type="text" name="name" id="name" value="<?php echo $name; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Muhammad Idrees','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td style="vertical-align: top;"><label for="bio"><strong>
        <?php _e('Bio','framework');?>
        </strong></label></td>
    <td>
    <?php wp_editor(  $bio, 'bio',array('wpautop'=>true,'media_buttons'=>false,'textarea_rows'=>2,'teeny'=>true,'quicktags'=>false,'drag_drop_upload'=>true) ); ?> 
      <span style="color:#999; display:block;">
      <?php _e('Example: Inroduce your self','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="date_of_birth"><strong>
        <?php _e('Date Of Birth','framework');?>
        </strong></label></td>
    <td><input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $date_of_birth; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Month / Date / Year','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="nationality"><strong>
        <?php _e('Nationality','framework');?>
        </strong></label></td>
    <td><input type="text" name="nationality" id="nationality" value="<?php echo $nationality; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Pakistani'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="doctor_intro_text"><strong>
        <?php _e('Address','framework');?>
        </strong></label></td>
    <td><textarea name="address" id="address" cols="30" rows="2" style="width:70%; margin-right:4%; " ><?php echo $address; ?></textarea>
      <span style="color:#999; display:block;  margin-bottom:10px;">
      <?php _e('You can use &lt;br/&gt; tag for linebreak.','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td style="width:25%;"><label for="phone"><strong>
        <?php _e('Phone','framework');?>
        </strong></label></td>
    <td style="width:75%;"><input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: 00 123 5465 6789','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="twitter_link"><strong>
        <?php _e('E-mail Address','framework');?>
        </strong></label></td>
    <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: mail@example.com','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="facebook_username"><strong>
        <?php _e('Facebook Username','framework');?>
        </strong></label></td>
    <td><input type="text" name="facebook_username" id="facebook_username" value="<?php echo $facebook_username; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: muhammadidrees','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="twitter_username"><strong>
        <?php _e('Twitter Username','framework');?>
        </strong></label></td>
    <td><input type="text" name="twitter_username" id="twitter_username" value="<?php echo $twitter_username; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: muhammadidrees','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="github_username"><strong>
        <?php _e('Github Username','framework');?>
        </strong></label></td>
    <td><input type="text" name="github_username" id="github_username" value="<?php echo $github_username; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: muhammadidrees','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="linkedin_username"><strong>
        <?php _e('Linkedin Username','framework');?>
        </strong></label></td>
    <td><input type="text" name="linkedin_username" id="linkedin_username" value="<?php echo $linkedin_username; ?>" style="width:60%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: muhammadidrees','framework'); ?>
      </span></td>
  </tr>
</table>
<?php
	}
add_action( 'save_post', 'profile_meta_box_save' );
	
	function profile_meta_box_save( $post_id )
	{
    if( isset( $_POST['bio'] ) )
			update_post_meta( $post_id, 'bio', $_POST['bio'] );
		if( isset( $_POST['destination'] ) )
			update_post_meta( $post_id, 'destination', $_POST['destination'] );
		
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		if( !isset( $_POST['meta_box_nonce_profile'] ) || !wp_verify_nonce( $_POST['meta_box_nonce_profile'], 'profile_meta_box_nonce' ) ) return;
		
		if( !current_user_can( 'edit_post' ) ) return;				
		
		if( isset( $_POST['name'] ) )
			update_post_meta( $post_id, 'name', $_POST['name']  );

		if( isset( $_POST['date_of_birth'] ) )
			update_post_meta( $post_id, 'date_of_birth', $_POST['date_of_birth']  );
		
		if( isset( $_POST['nationality'] ) )
			update_post_meta( $post_id, 'nationality', $_POST['nationality'] );
		if( isset( $_POST['address'] ) )
			update_post_meta( $post_id, 'address', $_POST['address'] );
			if( isset( $_POST['phone'] ) )
			update_post_meta( $post_id, 'phone', $_POST['phone'] );
			if( isset( $_POST['email'] ) )
			update_post_meta( $post_id, 'email', $_POST['email'] );
			if( isset( $_POST['nationality'] ) )
			update_post_meta( $post_id, 'nationality', $_POST['nationality'] );

		if( isset( $_POST['facebook_username'] ) )
						update_post_meta( $post_id, 'facebook_username', $_POST['facebook_username'] );
			
		if( isset( $_POST['twitter_username'] ) )
						update_post_meta( $post_id, 'twitter_username', $_POST['twitter_username'] );
			
		if( isset( $_POST['github_username'] ) )
						update_post_meta( $post_id, 'github_username', $_POST['github_username'] );
			
		if( isset( $_POST['linkedin_username'] ) )
						update_post_meta( $post_id, 'linkedin_username', $_POST['linkedin_username'] );
}	
	
/*-----------------------------------------------------------------------------------*/
/*	Add Metabox to Education
/*-----------------------------------------------------------------------------------*/	
	add_action( 'add_meta_boxes', 'education_meta_box_add' );
	
	function education_meta_box_add()
	{
		add_meta_box( 'education-meta-box', __('My Education Information', 'framework'), 'education_meta_box', 'education', 'normal', 'high' );
	}
	
	function education_meta_box( $post )
	{
		$values = get_post_custom( $post->ID );
		$subject = isset( $values['subject'] ) ? esc_attr( $values['subject'][0] ) : '';	
		$date_from = isset( $values['date_from'] ) ? esc_attr( $values['date_from'][0] ) : '';
		$date_to = isset( $values['date_to'] ) ? esc_attr( $values['date_to'][0] ) : '';
		
		wp_nonce_field( 'education_meta_box_nonce', 'meta_box_nonce_education' );
		?>
<table style="width:100%;">
  <tr>
    <td><label for="subject"><strong>
        <?php _e('Subject','framework');?>
        </strong></label></td>
    <td><input type="text" name="subject" id="subject" value="<?php echo $subject; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example:Matric Science','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="date_from"><strong>
        <?php _e('Date From','framework');?>
        </strong></label></td>
    <td><input type="date" name="date_from" id="date_from" value="<?php echo $date_from; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Month / Date / Year','framework'); ?>
      </span></td>
  <tr>
    <td><label for="date_to"><strong>
        <?php _e('Date To','framework');?>
        </strong></label></td>
    <td><input type="date" name="date_to" id="date_to" value="<?php echo $date_to; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Month / Date / Year','framework'); ?>
      </span></td>
  </tr>
</table>
<?php
	}
add_action( 'save_post', 'education_meta_box_save' );
	
	function education_meta_box_save( $post_id )
	{
	
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		if( !isset( $_POST['meta_box_nonce_education'] ) || !wp_verify_nonce( $_POST['meta_box_nonce_education'], 'education_meta_box_nonce' ) ) return;
		
		if( !current_user_can( 'edit_post' ) ) return;				
		
			if( isset( $_POST['subject'] ) )
			update_post_meta( $post_id, 'subject', $_POST['subject'] );
		if( isset( $_POST['date_from'] ) )
			update_post_meta( $post_id, 'date_from', $_POST['date_from']  );

		if( isset( $_POST['date_to'] ) )
			update_post_meta( $post_id, 'date_to', $_POST['date_to']  );
		
}	
/*-----------------------------------------------------------------------------------*/
/*	Add Metabox to work
/*-----------------------------------------------------------------------------------*/	
	add_action( 'add_meta_boxes', 'work_meta_box_add' );
	
	function work_meta_box_add()
	{
		add_meta_box( 'work-meta-box', __('My Work Information', 'framework'), 'work_meta_box', 'experience', 'normal', 'high' );
	}
function work_meta_box( $post )
	{
    $values = get_post_custom( $post->ID );
    $description = isset( $values['description'] ) ? esc_attr( $values['description'][0] ) : '';	
		$position = isset( $values['position'] ) ? esc_attr( $values['position'][0] ) : '';	
		$date_from = isset( $values['date_from'] ) ? esc_attr( $values['date_from'][0] ) : '';
		$date_to = isset( $values['date_to'] ) ? esc_attr( $values['date_to'][0] ) : '';
		
		wp_nonce_field( 'work_meta_box_nonce', 'meta_box_nonce_work' );
		?>
<table style="width:100%;">
  <tr>
    <td><label for="description"><strong>
        <?php _e('Description','framework');?>
        </strong></label></td>
    <td><textarea name="description" id="description"  style="width:70%; margin-right:4%;"><?php echo $description; ?></textarea>
      <span style="color:#999; display:block;">
      <?php _e('Example:About Company','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="position"><strong>
        <?php _e('Position','framework');?>
        </strong></label></td>
    <td><input type="text" name="position" id="position" value="<?php echo $position; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example:Designer','framework'); ?>
      </span></td>
  </tr>
  <tr>
    <td><label for="date_from"><strong>
        <?php _e('Date From','framework');?>
        </strong></label></td>
    <td><input type="date" name="date_from" id="date_from" value="<?php echo $date_from; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Month / Date / Year','framework'); ?>
      </span></td>
  <tr>
    <td><label for="date_to"><strong>
        <?php _e('Date To','framework');?>
        </strong></label></td>
    <td><input type="date" name="date_to" id="date_to" value="<?php echo $date_to; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example: Month / Date / Year','framework'); ?>
      </span></td>
  </tr>
</table>
<?php
	}
add_action( 'save_post', 'work_meta_box_save' );
	
	function work_meta_box_save( $post_id )
	{
if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		if( !isset( $_POST['meta_box_nonce_work'] ) || !wp_verify_nonce( $_POST['meta_box_nonce_work'], 'work_meta_box_nonce' ) ) return;
		
		if( !current_user_can( 'edit_post' ) ) return;				
		
			if( isset( $_POST['description'] ) )
      update_post_meta( $post_id, 'description', $_POST['description'] );
      if( isset( $_POST['position'] ) )
			update_post_meta( $post_id, 'position', $_POST['position'] );
		if( isset( $_POST['date_from'] ) )
			update_post_meta( $post_id, 'date_from', $_POST['date_from']  );

		if( isset( $_POST['date_to'] ) )
			update_post_meta( $post_id, 'date_to', $_POST['date_to']  );
		
}
/*-----------------------------------------------------------------------------------*/
/*	Add Metabox to skill
/*-----------------------------------------------------------------------------------*/	
	add_action( 'add_meta_boxes', 'skill_meta_box_add' );
	
	function skill_meta_box_add()
	{
		add_meta_box( 'skill-meta-box', __('My Skill Information', 'framework'), 'skill_meta_box', 'skill', 'normal', 'high' );
	}
	
	function skill_meta_box( $post )
	{
		$values = get_post_custom( $post->ID );
		$percentage = isset( $values['percentage'] ) ? esc_attr( $values['percentage'][0] ) : '';	
		
		
		wp_nonce_field( 'skill_meta_box_nonce', 'meta_box_nonce_skill' );
		?>
<table style="width:100%;">
  <tr>
    <td><label for="percentage"><strong>
        <?php _e('Percentage','framework');?>
        </strong></label></td>
    <td><input type="text" name="percentage" id="percentage" value="<?php echo $percentage; ?>" style="width:70%; margin-right:4%;" />
      <span style="color:#999; display:block;">
      <?php _e('Example:20','framework'); ?>
      </span></td>
  </tr>
</table>
<?php
	}
add_action( 'save_post', 'skill_meta_box_save' );
	
	function skill_meta_box_save( $post_id )
	{
if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		if( !isset( $_POST['meta_box_nonce_skill'] ) || !wp_verify_nonce( $_POST['meta_box_nonce_skill'], 'skill_meta_box_nonce' ) ) return;
		
		if( !current_user_can( 'edit_post' ) ) return;				
		
			if( isset( $_POST['percentage'] ) )
			update_post_meta( $post_id, 'percentage', $_POST['percentage'] );
		
		
}
	
?>
