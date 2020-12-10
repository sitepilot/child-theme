<?php

namespace Sitepilot\Theme\Support;

final class Acf
{
    static public $options_page;

    /**
     * Initialize hooks.
     *
     * @return void
     */
    static public function init()
    {
        if (!self::is_active()) {
            return;
        }

        /* Actions */
        add_action('acf/init', __CLASS__ . '::action_register_options_page');
    }

    /**
     * Checks if ACF is active.
     *
     * @return boolean
     */
    static public function is_active()
    {
        return class_exists("ACF");
    }

    /**
     * Register theme options page.
     *
     * @return void
     */
    static public function action_register_options_page()
    {
        if (!function_exists('acf_add_options_page'))
            return;

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

    /**
     * Returns a theme option.
     * 
     * @param string $key
     * @param mixed $default
     * @return void
     */
    static public function get_option($key, $default = null)
    {
        $value = null;

        if (self::is_active()) {
            $value = get_field($key, 'option');
        }

        return $value ? $value : $default;
    }
}
