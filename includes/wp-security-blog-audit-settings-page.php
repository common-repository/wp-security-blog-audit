<div class="wrap">
	<div class="col-md-12">
            <div class="col-md-12">
                <div class="col-md-12 card" style="max-width:100%;">
                    <div class="header">
                        <h1 class="title"><strong><span data-notify="icon" class="pe-7s-tools"></span>  <?php echo __('WP Security Blog Audit','wpsec'); ?></strong></h1>
                    </div>
                    <div class="content" id="wpsec_loader">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="<?php echo plugins_url('loader.gif', __FILE__);?>">
                                <h3><?php echo __('Please wait for a while', 'wpsec');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="content" id="wpsec_content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Username Check for security purposes -->
                                <?php include("wp-security-blog-audit-stats/wpsec-username-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Username Check for security purposes -->
                                <?php include("wp-security-blog-audit-stats/wpsec-email-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Website Title and Tagline Check -->
                                <?php include("wp-security-blog-audit-stats/wpsec-name-and-tagline-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Security Plugins Installation Check -->
                                <?php include("wp-security-blog-audit-stats/wpsec-security-plugins-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Sitemap is created or not check. -->
                                <?php include("wp-security-blog-audit-stats/wpsec-sitemap-exist.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Yoast SEO Plugin Check. -->
                                <?php include("wp-security-blog-audit-stats/wpsec-yoast-seo-plugin-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Wordpress Other Security Checks. -->
                                <?php include("wp-security-blog-audit-stats/wpsec-other-security-checks.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Wordpress Other Security Checks. -->
                                <?php include("wp-security-blog-audit-stats/wpsec-website-responsiveness-check.php"); ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</div>