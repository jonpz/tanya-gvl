<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Grid extends TwillBlockComponent
{
    public static function getBlockTitle(): string
    {
        return 'Responsive Grid';
    }

    public static function getBlockIcon(): string
    {
        return 'fix-grid';
    }

    public function data(): array
    {
        $data = parent::data();
        $data['parent'] = Block::find($data['block']->parent_id);

        return $data;
    }

    public function render(): View
    {
        return view('components.twill.blocks.grid');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()
                ->name('xl_cols')
                ->label('Desktop Col. Count')
                ->type('number')
                ->min(1)
                ->max(6)
                ->default(4),
            Input::make()
                ->name('lg_cols')
                ->label('Tablet Landscape Col. Count')
                ->type('number')
                ->min(1)
                ->max(4)
                ->default(3),
            Input::make()
                ->name('md_cols')
                ->label('Tablet Portrait Col. Count')
                ->type('number')
                ->min(1)
                ->max(3)
                ->default(2),
            Input::make()
                ->name('sm_cols')
                ->label('Mobile Col. Count')
                ->type('number')
                ->min(1)
                ->max(2)
                ->default(1),
            Select::make()
                ->name('spacing')
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
                ->name('align_panels')
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
            Select::make()
                ->name('bg_color')
                ->label('Container Background Color')
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
            Select::make()
                ->name('panel_padding')
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
                ->name('panel_bg_color')
                ->label('Panel Background Color')
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
            Select::make()
                ->name('panel_rounded')
                ->default('none')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('md', 'Slight'),
                        Option::make('xl', 'Medium'),
                        Option::make('3xl', 'Well'),
                    ])
                ),
            InlineRepeater::make()
                ->name('panels')
                ->fields([
                    Checkbox::make()->name('xl_visible')
                        ->label('Desktop Visibility')
                        ->default(true),
                    Checkbox::make()->name('lg_visible')
                        ->label('Tablet Landscape Visibility')
                        ->default(true),
                    Checkbox::make()->name('md_visible')
                        ->label('Tablet Portrait Visibility')
                        ->default(true),
                    Checkbox::make()->name('sm_visible')
                        ->label('Mobile Visibility')
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
                            'app-slideshow',
                            'app-grid',
                        ]),
                ]),
        ]);
    }
}
