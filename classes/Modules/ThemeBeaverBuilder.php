<?php

namespace Sitepilot\Theme\Modules;

final class ThemeBeaverBuilder
{
    /**
     * Initialize hooks.
     *
     * @return void
     */
    static public function init()
    {
        add_action('after_setup_theme', __CLASS__ . '::action_setup');
    }

    /**
     * Setup module after themes are loaded.
     *
     * @return void
     */
    static public function action_setup()
    {
        if (!defined("FL_THEME_VERSION")) {
            return;
        }
    }
}
