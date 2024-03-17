<?php

namespace App\Http\Controllers\Twill;

// use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use App\Http\Controllers\Twill\Base\SingletonModuleController as BaseModuleController;

class PageHomeController extends BaseModuleController
{
    protected $moduleName = 'pageHomes';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
        $this->disableCreate();
        $this->disableDelete();
        $this->disablePublish();
        $this->disableEditor();
    }

    protected function formData($request)
    {
        return [
            'customPermalink' => route('home'),
        ];
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            BlockEditor::make()
                ->withoutSeparator()
                ->blocks([
                    'common-title',
                    'image',
                ])
        );

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

        return $form;
    }

    /**
     * @param  Model  $item
     * @return array
     */
    protected function previewData($item)
    {
        $item->computeBlocks();

        return $this->previewForInertia($item->only($item->publicAttributes), [
            'page' => 'Page/Home',
        ]);
    }
}
