<?php

namespace App\View\Components;

use App\Models\MenuItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        /** @var MenuItem[] $links */
        $links = MenuItem::published()->ordered()->get()->toTree();

        return view('components.menu', ['links' => $links]);
    }
}
