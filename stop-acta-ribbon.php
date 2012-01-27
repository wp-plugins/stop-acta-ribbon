<?php
/*
Plugin Name: Stop ACTA Ribbon
Plugin URI: http://vandorp.biz
Description: When activated, this plugin will put a Stop ACTA ribbon on the top right corner of your website. This is a modified work of the original work of Konstantin Kovshenin, which was released under the GPLv2 license.
Author: Daniel van Dorp
Version: 1.0
License: GPLv2
Author URI: http://vandorp.biz
*/

function render_stop_acta_ribbon() {
	$ribbon_url = plugins_url( 'stop-acta-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='stop-acta-ribbon' href='http://www.avaaz.org/en/eu_save_the_internet/'><img src='{$ribbon_url}' alt='Stop ACTA' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_stop_acta_ribbon' );