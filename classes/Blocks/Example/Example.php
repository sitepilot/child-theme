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
                ->defaultValue(get_bloginfo('name')),

            Editor::make('Content', 'slot')
                ->defaultValue('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        ];
    }
}
