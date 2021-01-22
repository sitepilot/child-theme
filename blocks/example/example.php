<?php

namespace Sitepilot\Theme\Blocks;

use Sitepilot\Theme\Block;

class Example extends Block
{
    public function __construct()
    {
        parent::__construct([
            'id' => 'sp-example',
            'name' => __('Example Block', 'sp-theme'),
            'supports' => [
                'block_margin' => true
            ]
        ]);
    }

    public function fields(): array
    {
        return [
            $this->field_text(__('Slot', 'sp-theme'), 'slot')
        ];
    }
}
