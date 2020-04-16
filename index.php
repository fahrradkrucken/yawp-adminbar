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
        if (!class_exists('YAWPAdminBar')) {
            require plugin_dir_path(__FILE__ . 'src' . DIRECTORY_SEPARATOR . 'YAWPAdminBar.php');
            (new YAWPAdminBar())->bootstrap();
        }
    }
}