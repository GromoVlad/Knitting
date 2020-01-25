<?php


	$customizer_url = admin_url('customize.php');
	$customizer_theme_support = 'https://themepoints.com/questions-answer';
	$customizer_theme_pro = 'https://themepoints.com/product/philips-multipurpose-blog-theme-for-wordpress/';


?>
<div class="wrap">
	
	<h2><?php echo'Welcome to Philips - Version 1.0.5';?></h2>
	<p><?php echo'Help & Support';?></p>
	
	<div class="support-area">
		<div class="support">
			<div class="single-items">
				<h3>Customize</h3>
				<p>Click the "Customize" link in your menu, or use the button below to get started customizing Philips</p>
				<span class="support-btn">
					<a class="button-primary" href="<?php echo esc_url( $customizer_url ); ?>">Customize</a>
				</span>
			</div>
			<div class="single-items">
				<h3>Support</h3>
				<p>If you need any help to setup or customize philips theme please join our forum and ask any question</p>
				<span class="support-btn">
					<a target="_blank" class="button-primary" href="<?php echo esc_url( $customizer_theme_support ); ?>">Support</a>
				</span>
			</div>
			<div class="single-items">
				<h3>Upgrade Pro</h3>
				<p>Philips comes with two different version free & premium . Upgrade pro version to unlock all features.</p>
				<span class="support-btn">
					<a target="_blank" class="button-primary" href="<?php echo esc_url( $customizer_theme_pro ); ?>">Pro Version</a>
				</span>
			</div>
		</div>
	</div>
</div>



<?php

?>