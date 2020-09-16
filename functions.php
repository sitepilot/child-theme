<?php

/**
 * Theme constants and initialization.
 *
 * @package Sitepilot\Theme
 */

// Check if theme was already loaded
if (defined('SITEPILOT_THEME_VERSION')) {
    return;
}

// Useful global constants
define('SITEPILOT_THEME_VERSION', wp_get_theme()->get('Version'));
define('SITEPILOT_THEME_DIR', trailingslashit(get_stylesheet_directory()));
define('SITEPILOT_THEME_URL', trailingslashit(get_stylesheet_directory_uri()));
define('SITEPILOT_THEME_FILE', SITEPILOT_THEME_DIR . 'functions.php');

// Require Composer autoloader if it exists
if (file_exists(SITEPILOT_THEME_DIR . '/vendor/autoload.php')) {
    require_once SITEPILOT_THEME_DIR . 'vendor/autoload.php';
}

Sitepilot\Theme\Theme::init();
