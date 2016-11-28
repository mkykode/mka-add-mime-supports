<?php

/**
 * Add support to mimes
 */
class MimeSupport {
	/**
	 * @var array
	 */
	private static $mimes_types;

	function __construct() {
		self::$mimes_types = [];
	}

	/**
	 * @param $mimes
	 *
	 * @return array
	 */
	public function add_mime_supports( $mimes ) {
		$mimes = self::$mimes_types;
		return $mimes;
	}

	public static function load() {
		$mime = new self();
		add_filter( 'upload_mimes', array( $mime, 'add_mime_supports' ) );
	}

	/**
	 * Takes in the type and the mime type formats and adds it to the mime types array.
	 *
	 * @param $type
	 * @param $mime_type
	 *
	 * @return array
	 */
	public static function add_mime_type( $type, $mime_type ) {
		self::$mimes_types[ $type ] = $mime_type;
		return self::$mimes_types;
	}

}