<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Panel extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'editor';
    }

    public function render(): View
    {
        return view('components.twill.blocks.panel');
    }

    public function getForm(): Form
    {
        return Form::make([
            BlockEditor::make()
                ->name('panel_content')
                ->label('Panel Content')
                ->blocks([
                    'app-heading',
                    'app-image',
                    'app-paragraph',
                    'app-separator',
                ]),
        ]);
    }
}
