<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use App\Models\Home;
use App\Models\Page;
use Illuminate\Contracts\View\View;

class Button extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'wysiwyg_link';
    }

    public function data(): array
    {
        $data = parent::data();
        if (isset($data['block']->getRelated('page')->first()->slug)) {
            $href = config('app.url').'/'.$data['block']->getRelated('page')->first()->slug;
            $target = null;
        } else {
            $href = $data['block']->input('link');
            $target = '_blank';
        }
        $content = $data['block']->getAttribute('content');
        $content['href'] = $href;
        $content['target'] = $target;
        $data['block']->setAttribute('content', $content);

        return $data;
    }

    public function render(): View
    {
        return view('components.twill.blocks.button');
    }

    public function getValidationRules(): array
    {
        return [
            'link' => 'url|nullable',
        ];
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
                ->name('background_color')
                ->default('none')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('zinc-300', 'Light Gray'),
                        Option::make('tbeige', 'Beige'),
                        Option::make('red-700', 'Red'),
                        Option::make('amber-700', 'Amber'),
                        Option::make('lime-700', 'Lime'),
                        Option::make('indigo-800', 'Indigo'),
                        Option::make('tpurple', 'Purple'),
                        Option::make('tgray', 'Dark Gray'),
                    ])
                ),
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
            Select::make()
                ->name('rounded')
                ->default('none')
                ->options(
                    Options::make([
                        Option::make('none', 'None'),
                        Option::make('md', 'Slight'),
                        Option::make('xl', 'Well'),
                        Option::make('full', 'Full'),
                    ])
                ),
            Radios::make()
                ->name('size')
                ->inline()
                ->border()
                ->default('medium')
                ->options(
                    Options::make([
                        Option::make('small', 'Small'),
                        Option::make('medium', 'Medium'),
                        Option::make('large', 'Large'),
                    ])
                ),
            Input::make()->name('text'),
            Browser::make()->name('page')->modules([
                Page::class,
                Home::class,
            ]),
            Input::make()->name('link')->type('url'),
        ]);
    }
}
