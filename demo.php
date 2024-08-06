<?php
/*
Plugin Name: Demo
Plugin URI: http://anystack.sh
Description: Example plugin
Author: Philo Hermans
Version: REF
Author URI: https://anystack.sh
*/

require 'wp-guard/src/WpGuard.php';

$guard = new Anystack\WpGuard\V001\WpGuard(
	__FILE__,
	[
		'api_key' => 'NZ0bbKsEzgUl8XAVQLEhZDf5Nk2Zdl81',
		'product_id' => '9cb1bb5b-cd84-45f0-81b1-c0a43e91174f',
		'product_name' => 'GetItemSwiper',
		'license' => [
			'require_email' => false,
		],
		'updater' => [
			'enabled' => true,
		]
	]
);

$guard->validCallback(function() {
	add_action( 'admin_notices', 'daily_revenue' );
});

function daily_revenue() {
	echo '<p>Hi there! Your revenue for today is $123.45</p>';
}