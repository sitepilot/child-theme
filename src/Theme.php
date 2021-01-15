<?php

namespace Sitepilot\Child;

use Sitepilot\Theme\Base;

class Theme extends Base
{
    /**
     * Construct theme.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        add_filter('sp_theme_primary_color', function () {
            return '#f59e0b';
        });

        add_filter('sp_theme_secondary_color', function () {
            return '#fbbf24';
        });
    }

    /**
     * Enqueue theme scripts and stylesheets.
     * 
     * @return void
     */
    public function action_enqueue_scripts(): void
    {
        $version = strpos(SITEPILOT_THEME_VERSION, '-dev') !== false ? time() : SITEPILOT_THEME_VERSION;

        wp_enqueue_style('sitepilot-block', get_stylesheet_directory_uri() . '/assets/dist/css/block.css', [], $version);
        wp_enqueue_style('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/dist/css/theme.css', [], $version);
        wp_enqueue_script('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/dist/js/theme.js', array(), $version, true);
    }
}
