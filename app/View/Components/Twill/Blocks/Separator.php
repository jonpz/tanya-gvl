<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Separator extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'more-dots';
    }

    public function render(): View
    {
        return view('components.twill.blocks.separator');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('stupid')->default('Just submit the form. So dumb.'),
        ]);
    }
}
