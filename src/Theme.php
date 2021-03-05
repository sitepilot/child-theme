<?php

namespace Sitepilot\Child;

final class Theme
{
    /**
     * The theme instance.
     * 
     * @var Theme
     */
    private static Theme $instance;

    /**
     * Create a new theme instance.
     *
     * @return static
     */
    public static function make(...$arguments)
    {
        if (!isset(self::$instance)) {
            self::$instance = new static(...$arguments);
        }

        return self::$instance;
    }

    /**
     * Construct the theme.
     * 
     * @return void
     */
    public function __construct()
    {
        /* Actions */
        add_action('wp_enqueue_scripts', [$this, "action_enqueue_scripts"]);
        add_action('enqueue_block_editor_assets', [$this, 'action_enqueue_scripts']);

        /* Filters */
        add_filter('sp_client_website', '__return_true');
        add_filter('sp_blocks_enabled', '__return_true');
        add_filter('sp_templates_enabled', '__return_true');
        add_filter('sp_update_list', [$this, 'filter_update_list']);
    }

    /**
     * Register theme to the Sitepilot updater.
     *
     * @param array $update_list
     * @return array $update_list
     */
    public function filter_update_list(array $update_list): array
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
    public function action_enqueue_scripts(): void
    {
        $version = strpos(SITEPILOT_THEME_VERSION, '-dev') !== false ? time() : SITEPILOT_THEME_VERSION;

        /* Styles */
        wp_enqueue_style('sp-theme', get_stylesheet_directory_uri() . '/assets/dist/css/theme.css', [], $version);

        /* Scripts */
        wp_enqueue_script('sp-theme', get_stylesheet_directory_uri() . '/assets/dist/js/theme.js', ['jquery'], $version, true);
    }
}
