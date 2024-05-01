<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Freeimage extends TwillBlockComponent
{
    public static function getBlockTitle(): string
    {
        return 'Free Image';
    }

    public static function getBlockIcon(): string
    {
        return 'image';
    }

    public function render(): View
    {
        return view('components.twill.blocks.freeimage');
    }

    public function getValidationRules(): array
    {
        return [
            'restrict_height' => 'in:96,80,72,64,60,52,48,40,32|nullable',
            'restrict_width' => 'in:96,80,72,64,60,52,48,40,32|nullable',
        ];
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
            Medias::make()->name('free_image'),
            Input::make()->name('restrict_height'),
            Input::make()->name('restrict_width'),
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
            Checkbox::make()->name('enlargable')
                ->label('Enable click to show full')
                ->default(true),
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