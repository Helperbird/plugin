<?php
/**
 * Make your more website accessible in seconds. Accelerate your business with Helperbirds accessibility widget without re-structuring your website’s existing code.
 *
 * @link              https://www.helperbird.com/products/widget
 * @since             1.0.0
 * @package           Helperbird
 *
 * @wordpress-plugin
 * Plugin Name:       Accessibility Widget by Helperbird
 * Plugin URI:        https://www.helperbird.com/products/widget
 * Description:       Make your website more accessible in seconds. Accelerate your business with Helperbirds accessibility widget without re-structuring your website’s existing code.
 * Version:           1.0.0
 * Author:            Helperbird
 * Author URI:        https://www.helperbird.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


add_filter( 'wp_footer', 'inject_helperbird' );


/**
 * Add and inject Helperbirds widget to every page.
 */
function inject_helperbird() {

	wp_enqueue_script( 'widget.js', plugins_url( '/trunk/javascript/widget/widget.js', __FILE__ ));

	echo'<helperbird-widget></helperbird-widget>';



}