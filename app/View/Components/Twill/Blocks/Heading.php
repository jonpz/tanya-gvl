<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Heading extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'wysiwyg_header';
    }

    public function getTranslatableValidationRules(): array
    {
        return [
            'title' => 'required',
        ];
    }

    public function render(): View
    {
        return view('components.twill.blocks.heading');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable(),
        ]);
    }
}
