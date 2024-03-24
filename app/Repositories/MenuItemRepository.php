<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\MenuItem;

class MenuItemRepository extends ModuleRepository
{
    use HandleNesting, HandleTranslations;

    protected $relatedBrowsers = ['page', 'home'];

    public function __construct(MenuItem $model)
    {
        $this->model = $model;
    }
}
