<?php
	$user = wp_get_current_user();

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$site_url = get_site_url();
		
		$site_data = file_get_contents( $site_url );

		$response = wp_remote_get( $site_url );
		if( is_array($response) ) {
		  $header = $response['headers']; // array of http header lines
		  $body = $response['body']; // use the content
		}

        $first = strpos($body, '<meta name="viewport" content="initial-scale=1">');
        $second = strpos($body, '<meta name="viewport" content="width=device-width">');
        $third = strpos($body, '<meta name="viewport" content="width=device-width, initial-scale=1">');

		echo __('<h5> Check your website is responsive or not. </h5>','wpsec');

		if( $first >= 0 || $second >= 0 || $third >= 0 ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Your website is responsive','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your website passed various responsiveness tests.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Your website is not responsive <br /> Find a responsive theme to be mobile friendly with theme shops like elegantthemes and woothemes. ','wpsec').'</span>
				</div>';
		}
	}
?>