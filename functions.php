<?php

use Sitepilot\Child\Theme;

if (!defined('ABSPATH')) exit;

if (defined('SITEPILOT')) {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        require_once __DIR__ . '/vendor/autoload.php';
    }

    $theme = Theme::make(get_stylesheet());
}
