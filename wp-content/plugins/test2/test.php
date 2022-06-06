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


function lowercase($text){
    return strtolower($text) . ' 1';
}
function upperCase($text){
    return strtoupper($text) . ' 2';
}
add_filter('upper_title', 'lowercase', 11);
add_filter('upper_title', 'upperCase', 10);

function hello() {
    echo '12</br>';
}
function hello2() {
    echo '2</br>';
}

function hello3() {
    echo '3</br>';
}



/**
 * Register the "book" custom post type
 */
function pluginprefix_setup_post_type() {
    register_post_type( 'book', ['public' => true ] );
}

/**
 * Activate the plugin.
 */
function pluginprefix_activate() {

    // Trigger our function that registers the custom post type plugin.
    pluginprefix_setup_post_type();
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );

/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    //unregister_post_type( 'book' );
    pluginprefix_setup_post_type();

    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
    //var_dump(get_post_types());
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );
