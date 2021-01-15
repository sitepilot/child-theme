<?php

namespace Sitepilot\Theme\Blocks;

use Sitepilot\Theme\Block;

class Example extends Block
{
    public function __construct(...$arguments)
    {
        parent::__construct(...$arguments);

        $this->name(__('Example Block', 'sitepilot-theme'));
    }

    public function fields(): array
    {
        return [
            $this->field_text(__('Slot', 'sp-theme'), 'sp_slot'),

            $this->field_block_margin(__('Block Margin', 'sp-theme'), 'sp_margin')
        ];
    }
}
