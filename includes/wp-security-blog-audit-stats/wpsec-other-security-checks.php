<?php

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$active_plugins = get_option('active_plugins');
     
		echo __('<h5> Akismet Plugin Configurations check </h5>','wpsec');
		if( in_array("akismet/akismet.php", $active_plugins) ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Register for an Akismet key to help combat spam comments that your blog will inevitably receive. </b>','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your Website have properly installed Akismet Plugin','wpsec').'</span>
				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Bullet Proof Security Plugin Not Installed or Not Active','wpsec').'   <a href="https://wordpress.org/plugins/bulletproof-security/" target="_blank">'.__('Click to download plugin','wpsec').'</a></span>
				</div>';
		}


        $permalink_structure = get_option('permalink_structure');
		echo __('<h5> Permalink Structure Status Check </h5>','wpsec');
		if( $permalink_structure == '/%postname%/' ) {

			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Your website permalinks structure is okay.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your site has post_name permalink structure which is very good for SEO.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Change your permalink structure to use “post name” as the default so you don’t have dates and categories in your URL. <br />','wpsec').'   <a target="_blank" href="'.site_url('/wp-admin/options-permalink.php').'">'.__('Change permalink structure','wpsec').'</a></span>
				</div>';
		}

		$page_about = '';
		$page_about_us = '';
		$page_about = get_page_by_title( 'About' );
		$page_about_us = get_page_by_title( 'About us' );
		
		echo __('<h5> About or About Us Page Status Check </h5>','wpsec');

		if( $page_about->ID != '' || $page_about_us->ID != '' ) {

			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Your website has About page.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your site has About us page already.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Create About us or About page from below link <br />','wpsec').'   <a target="_blank" href="'.site_url('/wp-admin/post-new.php?post_type=page').'">'.__('Create page from this link','wpsec').'</a></span>
				</div>';
		}


		$page_contact = '';
		$page_contact_us = '';
		$page_contact = get_page_by_title( 'Contact' );
		$page_contact_us = get_page_by_title( 'Contact us' );
		
		echo __('<h5> Contact or Contact Us Page Status Check </h5>','wpsec');

		if( $page_contact->ID != '' || $page_contact_us->ID != '' ) {

			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Your website has Contact us page.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your site has Contact us page already.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Create Contact us or Contact page from below link <br />','wpsec').'   <a target="_blank" href="'.site_url('/wp-admin/post-new.php?post_type=page').'">'.__('Create page from this link','wpsec').'</a></span>
				</div>';
		}

		$page_privacy = '';
		$page_privacy_policy = '';
		$page_privacy = get_page_by_title( 'privacy' );
		$page_privacy_policy = get_page_by_title( 'privacy policy' );
		
		echo __('<h5> Privacy or Privacy Policy Page Status Check </h5>','wpsec');

		if( $page_contact->ID != '' || $page_contact_us->ID != '' ) {

			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i>
</span>


				    <span data-notify="message">'.__('<b> Success - </b> Your website has Privacy Policy page.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your site has Privacy Policy page already.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Create Privacy or Privacy Policy page from below link <br />','wpsec').'   <a target="_blank" href="'.site_url('/wp-admin/post-new.php?post_type=page').'">'.__('Create page from this link','wpsec').'</a></span>
				</div>';
		}


		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Think about your categories and tags that you use and try to put each post into only one category and 3-5 tags based around your keywords.</b>','wpsec').'<br /><a target="_blank" href="'.site_url('/wp-admin/edit-tags.php?taxonomy=category').'">'.__('Create categories from this link','wpsec').'</a></span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Consider having a logo made.</b>','wpsec').'<br /><a target="_blank" href="https://99designs.com/">'.__('Create logo from here','wpsec').'</a></span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Set up analytics on your site.</b>','wpsec').'<br /><a target="_blank" href="https://wordpress.org/plugins/google-analytics-for-wordpress/">'.__('Install and activate Monsterinsights plugin','wpsec').'</a></span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Sign up for Webmaster Tools to give you some interesting insights about how Google sees your blog and how you can improve your search performance.</b>','wpsec').'<br /><a target="_blank" href="https://www.google.com/webmasters/tools/home?hl=en">'.__('Create google webmaster account here or configure','wpsec').'</a></span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Write your first pillar blog post of at least 2,500 words that really sets the tone for your topic and your blog’s style. You want to provide as much value as possible as soon as people land on your site so they know you’re the real deal. </b>','wpsec').'<br /><a target="_blank" href="'.site_url('/wp-admin/post-new.php').'">'.__('Create post from here.','wpsec').'</a></span></div>';


		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Create a lead-magnet or free eBook that you give away to readers in exchange for them signing up for updates. This should be a very high quality/high value offering that is tight on the topic you want to talk about over the coming months.</b>','wpsec').'</span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Sign up for a service like AWeber where you can store your email subscribers’ addresses, create opt-in forms, analyze stats, etc.</b>','wpsec').'<br /><a target="_blank" href="http://www.aweber.com/">'.__('Create Aweber acount from here.','wpsec').'</a></span></div>';

		echo '<div class="alert alert-info alert-with-icon alert alert-success">
			<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
		    <span data-notify="message">'.__('<b> Add social sharing plugin.</b>','wpsec').'<br /><a target="_blank" href="https://wordpress.org/plugins/search.php?q=social+share">'.__('Install any social share plugin from here.','wpsec').'</a></span></div>';

	}
?>