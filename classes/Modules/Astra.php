<?php

namespace Sitepilot\Theme\Modules;

final class Astra
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

        /* Actions */
        add_action('wp', __CLASS__ . '::action_hide_builder_page_title');
    }

    /**
     * Checks if Astra is active.
     *
     * @return boolean
     */
    static public function is_active()
    {
        return defined("ASTRA_THEME_VERSION");
    }

    /**
     * Hide page title on pages where builder is active.
     *
     * @return void
     */
    public static function action_hide_builder_page_title()
    {
        if (empty(get_post_meta(get_the_ID(), '_fl_builder_enabled', true))) {
            return;
        }

        add_filter('astra_the_title_enabled', '__return_false');
    }
}
