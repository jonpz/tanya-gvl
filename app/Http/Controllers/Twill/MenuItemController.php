<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use App\Models\Home;
use App\Models\Page;

class MenuItemController extends BaseModuleController
{
    protected $moduleName = 'menuItems';

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
        $this->enableReorder();
        // $this->enableEditInModal();
    }

    // public function getCreateForm(): Form
    // {
    //     return Form::make([
    //         Input::make()
    //             ->name('title')
    //             ->label('Title')
    //             ->translatable()
    //             ->onChange('formatPermalink'),
    //         Browser::make()
    //             ->name('page')
    //             ->label('Page')
    //             ->modules([
    //                 Page::class,
    //                 Home::class,
    //             ]),
    //     ]);
    // }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);
        $form->add(Browser::make()->name('page')->modules([
            Page::class,
            Home::class,
        ]));

        return $form;
    }
}
