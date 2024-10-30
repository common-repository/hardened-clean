<?php
/**
 * Plugin Name:       Hardened Clean
 * Description:       Lightweight protection to and cleaning of your Wordpress website.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Janos Moga
 * Author URI:        https://thewebplans.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hardened-clean
 *
 * @package           HardenedClean
*/

/**
 * Protection against direct access.
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define folder access.
 * @since 1.0.0
 */
define( 'HARDENEDCLEAN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Load necessary files.
 * @since 1.0.0
 */
require_once HARDENEDCLEAN_DIR . 'includes/invite.php';