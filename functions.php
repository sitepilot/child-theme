<?php

use Sitepilot\Child\Theme;

if (!defined('ABSPATH')) exit;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

function sitepilot_theme()
{
    static $theme;

    if (!$theme) $theme = new Theme;

    return $theme;
}

sitepilot_theme();
