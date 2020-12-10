<?php

namespace Sitepilot\Theme\Blocks\Example;

use Sitepilot\Block\Block;
use Sitepilot\Block\Fields\Text;
use Sitepilot\Block\Fields\Editor;

class Example extends Block
{
    /**
     * Get the name of the shortcode.
     *
     * @return string   
     */
    public function name(): string
    {
        return __('Example', 'sitepilot-theme');
    }

    /**
     * Get the fields used by the shortcode.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Text::make('Title', 'title')
                ->default_value(get_bloginfo('name')),

            Editor::make('Content', 'slot')
                ->default_value('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        ];
    }
}
