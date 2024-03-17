<?php

namespace App\View\Components\Twill\Blocks\Base;

use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class BlockComponent extends TwillBlockComponent
{
    public function render(): View
    {
        return view();
    }

    public function getForm(): Form
    {
        return Form::make([]);
    }

    public static function getBlockGroup(): string
    {
        return '';
    }
}
