<?php
/*
Plugin Name: Monkey Kode Additional Mime Supports
Plugin URI:
Description: Add additional Media types to the Media uploader. Requires Wordpress 4.0 or higher.
Version:     1.0.0
Author:      Jull Weber
Author URI:  http://monkeykode.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: mka-color-map-widget
Domain Path:
*/

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
include_once( 'inc/class-mime-support.php' );

if ( ! function_exists( 'mka_additional_mime_supports' ) ):
	/**
	 * Initializes plugin.
	 * Define your mime name and mime type with add_mime_type function and then fire load method.
	 */
	function mka_additional_mime_supports() {
		// MimeSupport::add_mime_type( 'svg', 'image/svg+xml' );
		// MimeSupport::load();
	}

	mka_additional_mime_supports();
endif;