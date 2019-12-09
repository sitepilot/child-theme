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

// Require Composer autoloader if it exists
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once 'vendor/autoload.php';
}

// Useful global constants
define('SITEPILOT_THEME_VERSION', '{{SP_VERSION}}');
define('SITEPILOT_THEME_DIR', trailingslashit(get_stylesheet_directory()));
define('SITEPILOT_THEME_URL', trailingslashit(get_stylesheet_directory_uri()));
define('SITEPILOT_THEME_FILE', SITEPILOT_THEME_DIR . 'functions.php');

Sitepilot\Theme\Theme::init();
 