<?php

namespace Sitepilot\Theme;

use Jenssegers\Blade\Blade;

final class Theme
{
    private static $blade;

    /**
     * Initialize theme.
     *
     * @return void
     */
    static public function init()
    {
        /* Actions */
        add_action('after_setup_theme', __CLASS__ . '::init_modules');
        add_action('wp_enqueue_scripts', __CLASS__ . "::action_enqueue_scripts");

        /* Filters */
        add_filter('sp_client_website', '__return_true');
        add_filter('sp_update_list', __CLASS__ . '::filter_update_list');
    }

    /**
     * Initialize theme modules.
     *
     * @return void
     */
    static public function init_modules()
    {
        Shortcodes::init();
        Support\Acf::init();
        Support\Astra::init();
        Support\BeaverBuilder::init();
    }

    /**
     * Register theme to the Sitepilot updater.
     *
     * @param array $update_list
     * @return array $update_list
     */
    static public function filter_update_list(array $update_list)
    {
        if (strpos(SITEPILOT_THEME_VERSION, '-dev') === false) {
            $theme['file'] = SITEPILOT_THEME_FILE;
            $theme['slug'] = get_option('stylesheet');

            array_push($update_list, $theme);
        }

        return $update_list;
    }

    /**
     * Enqueue theme scripts and stylesheets.
     * 
     * @return void
     */
    static public function action_enqueue_scripts()
    {
        $version = strpos(SITEPILOT_THEME_VERSION, '-dev') !== false ? time() : SITEPILOT_THEME_VERSION;

        wp_enqueue_style('sitepilot-module', get_stylesheet_directory_uri() . '/assets/dist/css/module.css', [], SITEPILOT_THEME_VERSION);
        wp_enqueue_style('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/dist/css/theme.css', [], $version);
        //wp_enqueue_script('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/dist/js/theme.js', array(), SITEPILOT_THEME_VERSION, $version);
    }

    /**
     * Returns the Blade instance.
     *
     * @return Blade
     */
    static public function get_blade_instance(): Blade
    {
        if (!self::$blade) {
            self::$blade = new Blade(SITEPILOT_THEME_DIR . '/views', SITEPILOT_THEME_DIR . '/cache');
        }

        return self::$blade;
    }
}
