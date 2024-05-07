<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Select;
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
            Select::make()
                ->name('margin_top')
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('thin', 'Thin'),
                        Option::make('medium', 'Medium'),
                        Option::make('wide', 'Wide'),
                    ])
                ),
            Select::make()
                ->name('margin_bottom')
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('thin', 'Thin'),
                        Option::make('medium', 'Medium'),
                        Option::make('wide', 'Wide'),
                    ])
                ),
            Select::make()
                ->name('size')
                ->label('Text Size')
                ->default('base')
                ->options(
                    Options::make([
                        Option::make('small', 'Small'),
                        Option::make('base', 'Base'),
                        Option::make('large', 'Large'),
                        Option::make('extra-large', 'Extra Large'),
                    ])
                ),
            Select::make()
                ->name('color')
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
                        Option::make('nightingale', 'Nightingale'),
                        Option::make('poppins', 'Poppins'),
                    ])
                ),
            Medias::make()->name('free_image')->label('Floating image'),
            Select::make()
                ->name('image_size')
                ->default('32')
                ->options(
                    Options::make([
                        Option::make('32', 'Small'),
                        Option::make('40', 'Medium'),
                        Option::make('48', 'Large'),
                        Option::make('64', 'Extra Large'),
                    ])
                ),
            Select::make()
                ->name('float_direction')
                ->default('right')
                ->options(
                    Options::make([
                        Option::make('left', 'Left'),
                        Option::make('right', 'Right'),
                    ])
                ),
            Checkbox::make()->name('enlargable')
                ->label('Enable click to show full image')
                ->default(true),
            Wysiwyg::make()->name('text')->translatable()
                ->toolbarOptions([
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'align',
                    ['list' => 'bullet'],
                    ['list' => 'ordered'],
                    'link',
                    'table',
                ]),
        ]);
    }
}
