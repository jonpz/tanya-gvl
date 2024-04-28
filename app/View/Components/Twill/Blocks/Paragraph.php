<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Paragraph extends TwillBlockComponent
{
    public static function getBlockTitle(): string
    {
        return 'Text';
    }

    public function getTranslatableValidationRules(): array
    {
        return [
            'text' => 'required',
        ];
    }

    public function data(): array
    {
        $data = parent::data();
        $data['parent'] = Block::find($data['block']->parent_id);

        return $data;
    }

    public function render(): View
    {
        return view('components.twill.blocks.paragraph');
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
            Radios::make()
                ->name('alignment')
                ->inline()
                ->border()
                ->default('left')
                ->options(
                    Options::make([
                        Option::make('left', 'Left'),
                        Option::make('center', 'Center'),
                        Option::make('right', 'Right'),
                    ])
                ),
            Radios::make()
                ->name('size')
                ->inline()
                ->border()
                ->default('base')
                ->options(
                    Options::make([
                        Option::make('small', 'Small'),
                        Option::make('base', 'Base'),
                        Option::make('large', 'Large'),
                        Option::make('extra-large', 'Extra Large'),
                    ])
                ),
            Radios::make()
                ->name('color')
                ->inline()
                ->border()
                ->default('inherit')
                ->options(
                    Options::make([
                        Option::make('inherit', 'Inherit'),
                        Option::make('twhite', 'White'),
                        Option::make('zinc-300', 'Light Gray'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Radios::make()
                ->name('font')
                ->inline()
                ->border()
                ->default('inherit')
                ->options(
                    Options::make([
                        Option::make('inherit', 'Inherit'),
                        Option::make('nightingale', 'Nightingale (serif)'),
                        Option::make('poppins', 'Poppins (sans)'),
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
