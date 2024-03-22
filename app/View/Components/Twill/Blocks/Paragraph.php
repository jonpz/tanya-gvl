<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Paragraph extends TwillBlockComponent
{
    public function getTranslatableValidationRules(): array
    {
        return [
            'text' => 'required',
        ];
    }

    public function render(): View
    {
        return view('components.twill.blocks.paragraph');
    }

    public function getForm(): Form
    {
        return Form::make([
            Wysiwyg::make()->name('text')->translatable()
                ->toolbarOptions([
                    'bold',
                    'italic',
                    ['list' => 'bullet'],
                    ['list' => 'ordered'],
                    ['script' => 'super'],
                    ['script' => 'sub'],
                    'link',
                    'clean',
                ]),
        ]);
    }
}
