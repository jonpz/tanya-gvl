<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class Quoteblock extends TwillBlockComponent
{
    public static function getBlockTitle(): string
    {
        return 'Quote Block';
    }

    public static function getBlockIcon(): string
    {
        return 'quote';
    }

    public function render(): View
    {
        return view('components.twill.blocks.quoteblock');
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
                        Option::make('zinc-300', 'Light Gray'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Select::make()
                ->name('background_opacity')
                ->default('100')
                ->searchable()
                ->options(
                    Options::make([
                        Option::make('100', '100%'),
                        Option::make('90', '90%'),
                        Option::make('80', '80%'),
                        Option::make('70', '70%'),
                        Option::make('60', '60%'),
                        Option::make('50', '50%'),
                        Option::make('40', '40%'),
                        Option::make('30', '30%'),
                        Option::make('20', '20%'),
                        Option::make('10', '10%'),
                    ])
                ),
            Select::make()
                ->name('background_icon')
                ->default('')
                ->searchable()
                ->options(
                    Options::make($this->makeHeroiconOptions())
                ),
            Radios::make()
                ->name('icon_color')
                ->inline()
                ->border()
                ->default('tgray')
                ->options(
                    Options::make([
                        Option::make('twhite', 'White'),
                        Option::make('zinc-300', 'Light Gray'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Gray'),
                        Option::make('tblack', 'Black'),
                    ])
                ),
            Radios::make()
                ->name('icon_size')
                ->inline()
                ->border()
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('small', 'Small'),
                        Option::make('medium', 'Medium'),
                        Option::make('large', 'Large'),
                        Option::make('extra-large', 'Extra Large'),
                    ])
                ),
            Radios::make()
                ->name('icon_placement')
                ->inline()
                ->border()
                ->default('top-left')
                ->options(
                    Options::make([
                        Option::make('top-left', 'Top Left'),
                        Option::make('top-center', 'Top Center'),
                        Option::make('top-right', 'Top Right'),
                        Option::make('middle-left', 'Middle Left'),
                        Option::make('middle-center', 'Middle Center'),
                        Option::make('middle-right', 'Middle Right'),
                        Option::make('bottom-left', 'Bottom Left'),
                        Option::make('bottom-center', 'Bottom Center'),
                        Option::make('bottom-right', 'Bottom Right'),
                    ])
                ),
            Checkbox::make()->name('rounded')
                ->default(true),
            BlockEditor::make()
                ->name('panel_content')
                ->label('Panel Content')
                ->blocks([
                    'app-heading',
                    'app-image',
                    'app-freeimage',
                    'app-paragraph',
                    'app-button',
                    'app-quoteblock',
                    'app-separator',
                ]),
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

    public function makeHeroiconOptions(): array
    {
        $options = [
            Option::make('', 'None'),
        ];

        $svgDir = base_path('vendor/blade-ui-kit/blade-heroicons/resources/svg');
        if (! File::exists($svgDir)) {
            return [];
        }
        $svgFiles = File::files($svgDir);

        foreach ($svgFiles as $file) {
            $iconName = pathinfo($file, PATHINFO_FILENAME);
            $options[] = Option::make('heroicon-'.$iconName, $iconName);
        }

        return $options;
    }
}
