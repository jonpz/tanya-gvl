<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Slideshow extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'slideshow';
    }

    public function render(): View
    {
        return view('components.twill.blocks.slideshow');
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
            Medias::make()->name('free_image')->max(30),
            Radios::make()
                ->name('size')
                ->inline()
                ->border()
                ->default('80')
                ->options(
                    Options::make([
                        Option::make('72', 'Small'),
                        Option::make('80', 'Medium'),
                        Option::make('96', 'Large'),
                        Option::make('128', 'Extra Large'),
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
