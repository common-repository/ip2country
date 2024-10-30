<?php
/*
Plugin Name: Ip2country
Plugin URI: http://wordpress.org/plugins/ip2country/
Description: Plugin converts IP-address to the country.
Version: 1.3
Author: webvitaly
Author URI: http://web-profile.net/wordpress/plugins/
License: GPLv2 or later
*/

if ( !function_exists( 'ip2country' ) ):

	global $wpdb;
	$ip2country_table = $wpdb->prefix.'ip2country';
	$ip2country_info_table = $wpdb->prefix.'ip2country_info';
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function ip2country( $ip = '' ){ // get country code and name from the IP
		global $wpdb;
		global $ip2country_table;
		global $user_ip;
		if( $ip == '' ){
			$ip = $user_ip;
		}
		$ip2long = sprintf("%u",ip2long($ip));
		$row = $wpdb->get_row("SELECT country_code,country_name FROM ".$ip2country_table." WHERE ".$ip2long." BETWEEN begin_ip_num AND end_ip_num");
		
		if( $row ){
		}else{
			$row->country_code = '';
			$row->country_name = '';
		}
		return $row;
	}

	function ip2country_info( $code = '' ){ // get extended country info from the country code
		global $wpdb;
		global $ip2country_info_table;
		global $user_ip;
		$code = strtolower($code);
		$row = $wpdb->get_row("SELECT * FROM ".$ip2country_info_table." WHERE code='".$code."'");
		
		if( $row ){
		}else{
			$row->iso_code_2 = '';
			$row->iso_code_3 = '';
			$row->iso_country = '';
			$row->country = '';
			$row->lat = '';
			$row->lon = '';
		}
		return $row;
	}

endif;


function ip2country_unqprfx_plugin_meta( $links, $file ) { // add 'Support' and 'Donate' links to plugin meta row
	if ( strpos( $file, 'ip2country.php' ) !== false ) {
		$links = array_merge( $links, array( '<a href="http://web-profile.net/wordpress/plugins/ip2country/" title="Need help?">' . __('Support') . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://web-profile.net/donate/" title="Support the development">' . __('Donate') . '</a>' ) );
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'ip2country_unqprfx_plugin_meta', 10, 2 );