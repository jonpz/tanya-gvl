<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Separator extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'more-dots';
    }

    public function render(): View
    {
        return view('components.twill.blocks.separator');
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
            Radios::make()
                ->name('color')
                ->inline()
                ->border()
                ->default('tbeige')
                ->options(
                    Options::make([
                        Option::make('twhite', 'White'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Radios::make()
                ->name('width')
                ->inline()
                ->border()
                ->default('full')
                ->options(
                    Options::make([
                        Option::make('full', '100%'),
                        Option::make('4/5', '80%'),
                        Option::make('2/3', '66%'),
                        Option::make('1/2', '50%'),
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
