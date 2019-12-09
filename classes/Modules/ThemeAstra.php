<?php

namespace Sitepilot\Theme\Modules;

final class ThemeAstra
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
        if (!defined("ASTRA_THEME_VERSION")) {
            return;
        }

        add_action('wp', __CLASS__ . '::hide_page_title');
    }

    /**
     * Hide page title on pages where builder is active.
     *
     * @return void
     */
    public static function hide_page_title()
    {
        if (empty(get_post_meta(get_the_ID(), '_fl_builder_enabled', true))) {
            return;
        }

        add_filter('astra_the_title_enabled', '__return_false');
    }
}
