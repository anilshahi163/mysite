<?php 
	function cyrus_script_enqueue(){
		wp_enqueue_style('customstyle', 'C:\xampp\htdocs\wordpress\wp-content\themes\cyrustheme\css\cyrus.css', array(), '1.0.0','all');
		wp_enqueue_script('customjs','C:\xampp\htdocs\wordpress\wp-content\themes\cyrustheme\js\cyrus.js', array(), '1.0.0', true);
	}

add_action('wp_enqueue_scripts','cyrus_script_enqueue');
 ?>