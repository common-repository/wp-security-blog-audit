<?php
	$user = wp_get_current_user();

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$active_plugins = get_option('active_plugins');
     
		echo __('<h5> Bullet Proof Security Plugins Installation Check </h5>','wpsec');
		if( in_array("bulletproof-security/bulletproof-security.php", $active_plugins) ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Bullet Proof Security Installed / Active','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your Website have properly installed Bullet Proof Security Plugin','wpsec').'</span>
				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Bullet Proof Security Plugin Not Installed or Not Active','wpsec').'   <a href="https://wordpress.org/plugins/bulletproof-security/" target="_blank">'.__('Click to download plugin','wpsec').'</a></span>
				</div>';
		}
		
		echo __('<h5> WordFence Plugins Installation Check </h5>','wpsec');
		if( in_array("wordfence/wordfence.php", $active_plugins) ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> WordFence Security Installed / Active','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your Website have properly installed WordFence Security Plugin','wpsec').'</span>
				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> WordFence Security Plugin Not Installed or Not Active','wpsec').'   <a href="https://wordpress.org/plugins/wordfence/" target="_blank">'.__('Click to download plugin','wpsec').'</a></span>
				</div>';
		}
	}
?>