<?php
	$user = wp_get_current_user();

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$user_email = $user->user_email;
		
		$site_url = get_site_url();
		
		$admin_email_check = explode("://",$site_url);
                       
		echo __('<h5> Administrator Email Address Checkup </h5>','wpsec');

		if( strpos( $user_email, $admin_email_check[1]) >= 0 && strpos( $user_email, $admin_email_check[1]) != "" ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Admin Email Security Test Passed','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your e-Mail address contains rootdomain name.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Admin Email Security Test Failed Change it of Create new from your cpanel like this -> admin@'.$admin_email_check[1],'wpsec').'</span>
				</div>';
		}
	}
?>