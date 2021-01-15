<?php

/**
 * Initialize theme.
 *
 * @package Sitepilot\Child
 */

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

Sitepilot\Child\Theme::make();
