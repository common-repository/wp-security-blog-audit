<?php

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
        $active_plugins = get_option('active_plugins');

		echo __('<h5> Yoast SEO Plugin Stats </h5>','wpsec');

		if( in_array('wordpress-seo/wp-seo.php',$active_plugins ) ) {

			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Yoast SEO Plugin Installed and Activated.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your site is ready with Yoast SEO Plugin. Go and configure your seo settings','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Add the Yoast SEO plugin and set up the basics. This can be quite an advanced plugin so don’t waste too much time now you can tweak it as you go. <br />','wpsec').'   <a target="_blank" href="https://wordpress.org/plugins/wordpress-seo/">'.__('Download and Activate Yoast SEO Plugin from this link.','wpsec').'</a></span>
				</div>';
		}
	}
?>