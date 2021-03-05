<?php

use Sitepilot\Child\Theme;

if (!defined('ABSPATH')) exit;

define('SITEPILOT_THEME_VERSION', wp_get_theme()->get('Version'));
define('SITEPILOT_THEME_DIR', trailingslashit(get_stylesheet_directory()));
define('SITEPILOT_THEME_URL', trailingslashit(get_stylesheet_directory_uri()));
define('SITEPILOT_THEME_FILE', SITEPILOT_THEME_DIR . 'functions.php');

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

if (!function_exists('sitepilot_theme')) {
    /**
     * Returns the Sitepilot theme instance.
     *
     * @return Plugin
     */
    function sitepilot_theme(): Theme
    {
        return Theme::make();
    }
}

sitepilot_theme();
