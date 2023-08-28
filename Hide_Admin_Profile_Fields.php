<?

add_action('profile_personal_options', 'remove_profile_fields');
	
	function remove_profile_fields() {
	?>
	<style>
	  #your-profile h2, /* hide profile titles */
	  .user-rich-editing-wrap,
	  .user-syntax-highlighting-wrap,
	  .user-admin-color-wrap,
	  .user-comment-shortcuts-wrap,
	  .show-admin-bar,
	  .user-admin-bar-front-wrap,
	  .user-language-wrap,
	  .create-application-password,
	  /* begin - hide names fields for static sites */
	  .user-first-name-wrap,
	  .user-last-name-wrap,
	  .user-nickname-wrap,
	  .user-display-name-wrap,
	  .user-phone-wrap,
	  .user-facebook-wrap,
	  .user-twitter-wrap,
      .user-linkedin-wrap,
	  .user-instagram-wrap,
	  /* end - hide names fields for static sites */
	  .user-url-wrap,
	  .user-description-wrap,
	  .user-profile-picture {
		display: none;
	  }
	</style>
	<?php
	}
