<?php

namespace Sitepilot\Theme\Modules;

final class PluginBeaverBuilder
{
    /**
     * Initialize hooks.
     *
     * @return void
     */
    static public function init()
    {
        if (!defined("FL_BUILDER_VERSION")) {
            return;
        }

        /* Filters */
        add_filter('fl_builder_color_presets', __CLASS__ . '::filter_color_presets');
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
