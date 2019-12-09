<?php

namespace Sitepilot\Theme\Modules;

final class PluginAcf
{
    static public $options_page;

    /**
     * Initialize hooks.
     *
     * @return void
     */
    static public function init()
    {
        if (!class_exists("ACF")) {
            return;
        }

        /* Filters */
        add_filter('sp_menu', '__return_true');

        /* Actions */
        add_action('acf/init', __CLASS__ . '::action_register_options_page');
    }

    /**
     * Register theme options page.
     *
     * @return void
     */
    static public function action_register_options_page()
    {
        // Check if function exists.
        if (!function_exists('acf_add_options_page'))
            return;

        // Register options page.
        self::$options_page = acf_add_options_page(array(
            'page_title' => __('Theme Options', 'sitepilot-theme'),
            'menu_title' => __('Theme', 'sitepilot-theme'),
            'menu_slug' => 'sitepilot-theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'parent_slug' => 'sitepilot-menu',
            'position' => 0
        ));
    }
}
