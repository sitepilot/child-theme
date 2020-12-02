<?php

namespace Sitepilot\Theme;

final class Shortcodes
{
    /**
     * Initialize shortcodes.
     *
     * @return void
     */
    static public function init()
    {
        add_shortcode('sp-example', __CLASS__ . '::shortcode_example');
    }

    /**
     * Example shortcode.
     *
     * @param array $args
     * @param string $slot
     * @return void
     */
    static public function shortcode_example($args = [], $slot = ''): string
    {
        $args = array_merge([
            'slot' => $slot ? $slot : '',
            'title' => 'Test Title'
        ], !$args ? [] : $args);

        return Theme::get_blade_instance()->make('shortcodes/sp-example', $args)->render();
    }
}
