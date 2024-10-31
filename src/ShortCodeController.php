<?php

namespace Essens\OsDetectionPlugin;

class ShortCodeController
{
	/** @var Sinergi\BrowserDetector **/
	private $os_detect;

	/**
	 * ShortCodeController constructor.
	 * @param $os_detect
	 */
	public function __construct( $os_detect ) {
		$this->os_detect = $os_detect;
		add_shortcode( 'os_detect', [ $this, 'execute_short_code' ] );
	}

	/**
	 * @param array $attributes
	 * @param string $content
	 * @return bool|string
	 */
	public function execute_short_code( $attributes = [], $content = '' ) {
		$short_code_params = shortcode_atts([
			'platforms' => '',
			'type' => 'show',
		], $attributes);

		$is_current_platform = $this->is_current_platform( $short_code_params['platforms'] );

		if ( true === $is_current_platform && 'show' == $short_code_params['type'] ) {
			return do_shortcode( $content );
		} else if ( false === $is_current_platform && 'hide' == $short_code_params['type'] ) {
			return do_shortcode( $content );
		}

		return false;
	}

	/**
	 * @param $platforms
	 * @return bool
	 */
	private function is_current_platform( $platforms ) {
		if ( empty( $platforms ) ) {
			return true;
		}

		$prepared_platforms = $this->prepare_platforms_input( $platforms );
		$client_os = strtolower( str_replace( ' ', '', $this->os_detect->getName() ) );

		if ( in_array( $client_os, $prepared_platforms ) ) {
			return true;
		}

		return false;
	}

	/**
	 * @param $platforms
	 * @return array
	 */
	private function prepare_platforms_input( $platforms ) {
		$platforms = explode( ',', $platforms );

		array_walk($platforms, function ( &$platform ) {
			$platform = strtolower( str_replace( ' ', '', $platform ) );
		});

		return $platforms;
	}
}
