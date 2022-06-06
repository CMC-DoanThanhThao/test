<?php
/**
 * Plugin Name:       hello world
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       print hello
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Thao doan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

define('TP_WEATHER_URL', plugin_dir_url(__FILE__));
define('TP_WEATHER_DIR', plugin_dir_path(__FILE__));
const AA = '111';
require_once('includes/tp-weather.php' );

TP_WEATHER::getAPI();