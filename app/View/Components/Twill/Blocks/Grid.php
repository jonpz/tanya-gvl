<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Radios;
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
        $content = $data['block']->getAttribute('content');
        switch ($data['block']->input('spacing')) {
            case 'none':
                $content['gap_diff'] = '0rem';
                $content['gap_diff_md'] = '0rem';
                break;
            case 'thin':
                $content['gap_diff'] = '0.5rem';
                $content['gap_diff_md'] = '1rem';
                break;
            case 'medium':
                $content['gap_diff'] = '1rem';
                $content['gap_diff_md'] = '2rem';
                break;
            case 'wide':
                $content['gap_diff'] = '2rem';
                $content['gap_diff_md'] = '4rem';
                break;
        }
        $data['block']->setAttribute('content', $content);

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
            Radios::make()
                ->name('spacing')
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
                ->name('bg_color')
                ->label('Container Background Color')
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
                ->name('panel_padding')
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
                ->name('panel_bg_color')
                ->label('Panel Background Color')
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
                ->name('panel_rounded')
                ->inline()
                ->border()
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
