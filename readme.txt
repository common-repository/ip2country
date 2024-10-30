=== Ip2country ===
Contributors: webvitaly
Donate link: http://web-profile.net/donate/
Tags: ip2country, ip-to-country, geolocation, ip, country
Requires at least: 3.0
Tested up to: 5.4
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin converts IP-address to the country.

== Description ==

* **[WordPress Pro plugins](http://web-profile.net/wordpress/plugins/ "WordPress Pro plugins")**
* **[Ip2country plugin](http://web-profile.net/wordpress/plugins/ip2country/ "Ip2country plugin page")**
* **[Donate](http://web-profile.net/donate/ "Support the development")**

* Code is based on: [phpweby.com/software/ip2country](http://phpweby.com/software/ip2country)
* Ip2country database table is based on: [maxmind.com](http://maxmind.com/)
* Ip2country_info database table is based on: [ip2nation.com](http://www.ip2nation.com/)
* Last IP database update: 15-jan-2012
* Ip2country database is stored on your site.

Get country code or country name:
`
<?php
$ip2country = ip2country();
echo ' Country code: '.$ip2country->country_code;
echo ' Country name: '.$ip2country->country_name;
// or
$ip2country2 = ip2country('212.113.46.148');
echo ' Country code: '.$ip2country2->country_code;
echo ' Country name: '.$ip2country2->country_name;
?>
`

Get additional info about the country by country code:
`
<?php
$ip2country_info = ip2country_info($ip2country->country_code);
echo ' iso_code_2: '.$ip2country_info->iso_code_2;
echo ' iso_code_3: '.$ip2country_info->iso_code_3;
echo ' iso_country: '.$ip2country_info->iso_country;
echo ' country: '.$ip2country_info->country;
echo ' lat: '.$ip2country_info->lat;
echo ' lon: '.$ip2country_info->lon;
// or
$ip2country_info = ip2country_info('us');
echo ' lat: '.$ip2country_info->lat;
echo ' lon: '.$ip2country_info->lon;
?>
`

[Ip2country support page](http://web-profile.com.ua/wordpress/plugins/ip2country/)

= Useful: =
* ["Page-list" - show list of pages with shortcodes](http://wordpress.org/plugins/page-list/ "list of pages with shortcodes")
* ["Iframe" - embed content](http://wordpress.org/plugins/iframe/ "embed content")
* [WordPress Pro plugins](http://web-profile.net/wordpress/plugins/ "WordPress Pro plugins")


== Screenshots ==

1. Ip2country table
2. Ip2country_info table

== Changelog ==

= 1.3 =
* minor changes

= 1.2 =
* IP database update;

= 1.1.0 =
* Added info table from http://www.ip2nation.com/;

= 1.0.0 =
* Initial release;

== Installation ==

1. install and activate the plugin on the Plugins page
2. insert [ip2country dump](http://svn.wp-plugins.org/ip2country/trunk/wp_ip2country.zip) into your database using phpMyAdmin (if your database prefix is not "wp_", you should change prefix inside the sql database dump manually)
3. you can use plugin functions to convert the IP-address to the country
