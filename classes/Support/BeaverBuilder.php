<?php

namespace Sitepilot\Theme\Support;

final class BeaverBuilder
{
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

        if (self::is_builder_active()) {
            /* Filters */
            add_filter('fl_builder_color_presets', __CLASS__ . '::filter_color_presets');
        }

        if (self::is_theme_active()) {
            // Theme actions and filters.
        }

        if (self::is_themer_active()) {
            // Themer actions and filters.
        }
    }

    /**
     * Checks if Beaver Builder plugin or theme is active.
     *
     * @return boolean
     */
    static public function is_active()
    {
        return self::is_builder_active() || self::is_theme_active() || self::is_themer_active();
    }

    /**
     * Checks if Beaver Builder plugin is active.
     *
     * @return boolean
     */
    static public function is_builder_active()
    {
        return defined('FL_BUILDER_VERSION');
    }

    /**
     * Checks if Beaver Builder theme is active.
     *
     * @return boolean
     */
    static public function is_theme_active()
    {
        return defined('FL_THEME_VERSION');
    }

    /**
     * Checks if Beaver Builder themer is active.
     *
     * @return boolean
     */
    static public function is_themer_active()
    {
        return defined('FL_THEME_BUILDER_VERSION');
    }

    /**
     * Load theme colors.
     *
     * @param $colors
     * @return array
     */
    static public function filter_color_presets($colors)
    {
        $colors = !is_array($colors) ? array() : $colors;

        $colors[] = "#25d366";
        $colors[] = "#000000";

        return $colors;
    }
}
