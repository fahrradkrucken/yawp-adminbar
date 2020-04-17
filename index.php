<?php
/**
 * Plugin Name: YAWP - Admin Bar
 * Description: Simple custom admin bar for WordPress
 * Version: 0.0.1
 * Author: FahrradKrucken
 */

defined('ABSPATH') || exit;

if (!function_exists('yawpab_bootstrap')) {
    add_action('init', 'yawpab_bootstrap');
    function yawpab_bootstrap()
    {
        define('YAWPAB_PLUGINN_DIR', plugin_dir_path(__FILE__));
        define('YAWPAB_PLUGINN_URL', plugin_dir_url(__FILE__));
        if (!class_exists('YAWPAdminBar')) {
            require YAWPAB_PLUGINN_DIR . 'src' . DIRECTORY_SEPARATOR . 'YAWPAdminBar.php';
            (new YAWPAdminBar())->bootstrap();
        }
    }
}