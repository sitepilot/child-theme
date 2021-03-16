<?php

namespace Sitepilot\Child;

use Sitepilot\Fields\Field;
use Sitepilot\Blocks\Section;
use Sitepilot\Modules\Theme\Base;
use Sitepilot\Modules\Theme\Color;
use Sitepilot\Modules\Theme\CssVar;

class Theme extends Base
{
    /**
     * Initialize theme.
     *
     * @return void
     */
    protected function init()
    {
        /* Filters */
        add_filter('sp_client_website', '__return_true');
        add_filter('sp_blocks_enabled', '__return_true');
        add_filter('sp_templates_enabled', '__return_true');
    }

    /**
     * Returns the theme's option fields.
     *
     * @return Field[]
     */
    public function fields()
    {
        return [];
    }

    /**
     * Returns the theme's colors.
     *
     * @return Color[]
     */
    public function colors()
    {
        return [
            new Color('primary', [
                'value' => '#FF5733'
            ])
        ];
    }

    /**
     * Returns the theme's css vars.
     *
     * @return Color[]
     */
    public function css_vars()
    {
        return [
            new CssVar('container', [
                'value' => '1200px'
            ])
        ];
    }

    /**
     * Returns the theme's blocks.
     *
     * @return Block[]
     */
    public function blocks()
    {
        return [
            new Section([
                'type' => 'acf'
            ])
        ];
    }

    /**
     * Enqueue theme scripts and stylesheets.
     * 
     * @return void
     */
    public function enqueue_assets()
    {
        /* Styles */
        wp_enqueue_style($this->key, $this->url . '/assets/dist/css/theme.css', [], $this->version);

        /* Scripts */
        wp_enqueue_script($this->key, $this->url . '/assets/dist/js/theme.js', ['jquery'], $this->version, true);

        /* Parent Assets */
        parent::enqueue_assets();
    }
}
