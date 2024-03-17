<?php

namespace App\Http\Controllers\Twill;

// use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use App\Http\Controllers\Twill\Base\ModuleController as BaseModuleController;

class PageContentController extends BaseModuleController
{
    protected $moduleName = 'pageContents';

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->enableReorder();
        $this->setPermalinkBase('');
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            BlockEditor::make()->withoutSeparator()
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    // protected function additionalIndexTableColumns(): TableColumns
    // {
    //     $table = parent::additionalIndexTableColumns();

    //     $table->add(
    //         Text::make()->field('description')->title('Description')
    //     );

    //     return $table;
    // }

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

        return $form;
    }

    protected function previewData($item)
    {
        return $this->previewForInertia($item->only([
            'title',
            'meta_title',
            'meta_description',
        ]), [
            'page' => 'Page/Content',
        ]);
    }
}
