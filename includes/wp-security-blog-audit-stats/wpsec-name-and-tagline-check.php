<?php
	$user = wp_get_current_user();

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$blog_name = get_option( 'blogname' );

		$blog_tagline = get_option( 'blogdescription' );
		
		echo __('<h5> Website Title & Tagline Status Check </h5>','wpsec');

		if( $blog_name != "" ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span><span data-notify="message">'.__('<b> Success - </b> Website Title available','wpsec').'</span><br /><span data-notify="message">'.__('<b> Good Job</b> Your website have title.','wpsec').'</span>
				</div>';
		} 
		if( $blog_tagline != ""  ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span><span data-notify="message">'.__('<b> Success - </b> Website Tagline available','wpsec').'</span><br /><span data-notify="message">'.__('<b> Good Job</b> Your website have tagline.','wpsec').'</span>
				</div>';
		}
		if( $blog_name == "" || $blog_tagline == "" ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Your website does not have Title Or Tagline. Kindly add title or tagline from here...</span>','wpsec').'<a href="'.get_site_url().'/wp-admin/customize.php" >Click </a></div>';
		}
	}
?>