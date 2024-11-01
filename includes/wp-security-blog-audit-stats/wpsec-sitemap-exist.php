<?php

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
        $site_url_site_map_xml = site_url('/site_map.xml');
        $site_url_sitemap_xml = site_url('/sitemap.xml');

		echo __('<h5> Sitemap.xml Exists or Not Check </h5>','wpsec');

		if( file_exists($site_url_site_map_xml) || file_exists($site_url_sitemap_xml) ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Sitemap.xml File is created.','wpsec').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> You have already created sitemap for your website.','wpsec').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Create a sitemap with the plugin XML Sitemaps so that Google can see how your site is structured and updated. <br />','wpsec').'   <a target="_blank" href="https://wordpress.org/plugins/google-sitemap-generator/">'.__('Download Sitemap Generator Plugin and Create Sitemap','wpsec').'</a></span>
				</div>';
		}
	}
?>