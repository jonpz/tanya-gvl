<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
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
            Radios::make()
                ->name('margin_top')
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
            Input::make()->name('title')->translatable(),
            Radios::make()
                ->name('size')
                ->inline()
                ->border()
                ->default('h2')
                ->options(
                    Options::make([
                        Option::make('h1', 'H1 (1/page pref.)'),
                        Option::make('h2', 'H2'),
                        Option::make('h3', 'H3'),
                        Option::make('h4', 'H4'),
                        Option::make('h5', 'H5'),
                    ])
                ),
            Radios::make()
                ->name('color')
                ->inline()
                ->border()
                ->default('default')
                ->options(
                    Options::make([
                        Option::make('default', 'Default (background decides)'),
                        Option::make('twhite', 'White'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Radios::make()
                ->name('alignment')
                ->inline()
                ->border()
                ->default('center')
                ->options(
                    Options::make([
                        Option::make('left', 'Left'),
                        Option::make('center', 'Center'),
                        Option::make('right', 'Right'),
                    ])
                ),
            Radios::make()
                ->name('margin_bottom')
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
        ]);
    }
}
