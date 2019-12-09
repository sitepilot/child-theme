<?php

namespace Sitepilot\Theme;

final class Theme
{
    /**
     * Initialize theme.
     *
     * @return void
     */
    static public function init()
    {
        self::init_classes();

        /* Filters */
        add_filter('sp_client_website', '__return_true');
        add_filter('sp_update_themes', __CLASS__ . '::filter_update_themes');

        /* Actions */
        add_action('wp_enqueue_scripts', __CLASS__ . "::action_enqueue_scripts");
    }

    /**
     * Enqueue theme scripts and stylesheets.
     * 
     * @return void
     */
    static public function action_enqueue_scripts()
    {
        wp_enqueue_style('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/css/theme.css', [], SITEPILOT_THEME_VERSION);
        wp_enqueue_script('sitepilot-theme', get_stylesheet_directory_uri() . '/assets/js/theme.js', array(), SITEPILOT_THEME_VERSION, true);
    }

    /**
     * Register theme to the Sitepilot updater.
     *
     * @param array $themes
     * @return array $themes
     */
    static public function filter_update_themes(array $themes)
    {
        $theme = [];
        $theme['file'] = SITEPILOT_THEME_FILE;
        $theme['slug'] = get_option('stylesheet');

        array_push($themes, $theme);
        return $themes;
    }

    /**
     * Initialize theme classes.
     *
     * @return void
     */
    static private function init_classes()
    {
        Modules\ThemeAstra::init();
        Modules\ThemeBeaverBuilder::init();
        Modules\PluginAcf::init();
        Modules\PluginBeaverBuilder::init();
    }
}
