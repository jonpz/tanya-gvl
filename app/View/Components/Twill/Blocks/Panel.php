<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
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
            Radios::make()
                ->name('padding')
                ->inline()
                ->border()
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('thin', 'Thin'),
                        Option::make('medium', 'Medium'),
                        Option::make('wide', 'Wide'),
                    ])
                ),
            Radios::make()
                ->name('background_color')
                ->inline()
                ->border()
                ->default('none')
                ->options(
                    Options::make([
                        Option::make('none', 'Transparent'),
                        Option::make('twhite', 'White'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Radios::make()
                ->name('content_width')
                ->inline()
                ->border()
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('wide', 'Wide'),
                        Option::make('medium', 'Medium'),
                        Option::make('thin', 'Thin'),
                    ])
                ),
            BlockEditor::make()
                ->name('panel_content')
                ->label('Panel Content')
                ->blocks([
                    'app-heading',
                    'app-image',
                    'app-paragraph',
                    'app-button',
                    'app-separator',
                ]),
        ]);
    }
}
