<?php
/*
Plugin Name: WP-KiwiIRC
Plugin URI: https://github.com/xnite/wp-kiwiirc
Description: Allows you to embed a KiwiIRC client with a shortcode.
Version: 1.0
Author: Robert Whitney <xnite@xnite.org>
Author URI: http://xnite.org
License: http://xnite.org/copyright#code
*/

function kiwiembed_func($atts) {
	extract(shortcode_atts(array(
		'clientURL'		=> 'https://kiwiirc.com/client',
		'server'		=> 'irc.afraidirc.net',
		'channel'		=> '#lobby',
		'nick'			=> 'Web?',
		'theme'			=> 'basic',
		'height'		=> '450px',
		'width'			=> '100%'
	), $atts));
	return '<iframe src="'.$clientURL.'/'.$server.'/?nick='.$nick.'&theme='.$theme.$channel.'" style="border:0; width:'.$width.'; height:'.$height.';"></iframe>';
}
add_shortcode('kiwiirc', 'kiwiembed_func');
?>