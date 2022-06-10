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
require_once('includes/tp-weather.php' );
require_once('includes/tp-weather-widget.php' );
require_once('includes/tp-weather-settings.php' );

add_action( 'widgets_init', function(){
    register_widget( 'TP_WEATHER_WIDGET' );
});

if(is_admin()){
    $tp_weather_setting = new TP_WEATHER_SETTING();
}else{
    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_script('jquery');
        wp_register_script('tp-js', TP_WEATHER_URL. 'scripts/js/functions.js');
        wp_localize_script('tp-js', 'tp', [
            'url' => admin_url('admin-ajax.php')
        ]);
        wp_enqueue_script('tp-js');
    });
}
