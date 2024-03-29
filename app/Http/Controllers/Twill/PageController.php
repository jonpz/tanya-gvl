<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    protected function setUpController(): void
    {
        $this->setPermalinkBase('');
        $this->withoutLanguageInPermalink();
    }

    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);
        $form->add(BlockEditor::make()->withoutSeparator());

        return $form;
    }

    public function getSideFieldsets(TwillModelContract $model): Form
    {
        $form = parent::getSideFieldsets($model);

        $form->addFieldset(
            Fieldset::make()
                ->title('SEO')
                ->id('seo')
                ->fields([
                    Input::make()
                        ->name('meta_title')
                        ->label('Title')
                        ->translatable()
                        ->maxLength(100),

                    Input::make()
                        ->name('meta_description')
                        ->label('Description')
                        ->translatable()
                        ->type('textarea')
                        ->maxLength(200),
                ])
        );

        $form->addFieldset(
            Fieldset::make()
                ->title('Page Settings')
                ->id('page_settings')
                ->fields([
                    Radios::make()
                        ->name('page_theme')
                        ->inline()
                        ->border()
                        ->default('dark')
                        ->options(
                            Options::make([
                                Option::make('light', 'Light Mode'),
                                Option::make('dark', 'Dark Mode'),
                            ])
                        ),
                    Radios::make()
                        ->name('content_width')
                        ->inline()
                        ->border()
                        ->default('medium')
                        ->options(
                            Options::make([
                                Option::make('wide', 'Wide'),
                                Option::make('medium', 'Medium'),
                                Option::make('thin', 'Thin'),
                            ])
                        ),
                ])
        );

        return $form;
    }
}
