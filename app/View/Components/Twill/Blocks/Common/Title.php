<?php

namespace App\View\Components\Twill\Blocks\Common;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use Illuminate\Contracts\View\View;

class Title extends Base
{
    public function render(): View
    {
        return view();
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()
                ->name('title')
                ->label(__('Title'))
                ->translatable(),
        ]);
    }
}
