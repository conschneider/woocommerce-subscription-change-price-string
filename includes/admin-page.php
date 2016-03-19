<?php

function wcsp_options_page() {

	global $wcsp_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>WooCommerce Subscriptions edit Price Options</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wcsp_settings_group'); ?>
		

			<h4><?php _e('Replace "with a"', 'wcsp_domain'); ?></h4>
			<p>
				<input id="wcsp_settings[replace_with]" name="wcsp_settings[replace_with]" type="text" value="<?php echo $wcsp_options['replace_with']; ?>"/>
				<label class="description" for="wcsp_settings[replace_with]"><?php _e('Enter your replacment text', 'wcsp_domain'); ?></label>
			</p>
			
			<h4><?php _e('Replace "and a"', 'wcsp_domain'); ?></h4>
			<p>
				<input id="wcsp_settings[replace_and]" name="wcsp_settings[replace_and]" type="text" value="<?php echo $wcsp_options['replace_and']; ?>"/>
				<label class="description" for="wcsp_settings[replace_and]"><?php _e('Enter your replacment text', 'wcsp_domain'); ?></label>
			</p>

		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wcsp_domain'); ?>" />
			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}

function wcsp_add_options_link() {
	add_options_page('WooCommerce Subscriptions edit Price Options', 'WC Subscription Price', 'manage_options', 'wcsp-options', 'wcsp_options_page');
}
add_action('admin_menu', 'wcsp_add_options_link');

function wcsp_register_settings() {
	// creates our settings in the options table
	register_setting('wcsp_settings_group', 'wcsp_settings');
}
add_action('admin_init', 'wcsp_register_settings');