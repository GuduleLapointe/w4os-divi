<?php
/*
Plugin Name: W4OS - Divi Builder modules"
Plugin URI:  https://w4os.org
Description: Divi Builder modules for W4OS plugin
Version:     1.0.1
Author:      Speculoos World
Author URI:  https://speculoos.world
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: w4di-w4os-divi
Domain Path: /languages

W4OS - Divi Builder modules" is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

W4OS - Divi Builder modules" is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with W4OS - Divi Builder modules". If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'w4di_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function w4di_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/W4OsDivi.php';
}
add_action( 'divi_extensions_init', 'w4di_initialize_extension' );
endif;
