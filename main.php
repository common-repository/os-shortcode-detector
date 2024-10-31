<?php

/**
 * Plugin Name: OS Shortcode Detect Plugin
 * Plugin URI: https://github.com/essensx/wp-os-detect
 * Description: Detects Operating system and allows to utilize that with shortcodes
 * Version: 1.0.0
 * Author: Šarūnas Maželis (@essens)
 */

/** Autoload dependencies */
require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

use Essens\OsDetectionPlugin\ShortCodeController;
use Sinergi\BrowserDetector\Os;

$os_detect = new Os();

$short_code_controller = new ShortCodeController( $os_detect );
