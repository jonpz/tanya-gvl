<?php

namespace App\View\Components\Layout;

use App\Models\MenuItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
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
        $links = MenuItem::published()->ordered()->get()->map(function ($item) {
            $slug = $item->getRelated('page')->first()->slug;
            $item->href = $slug ? route('frontend.page', $slug) : route('home');

            return $item;
        })->toTree();

        return view('components.layout.header', ['links' => $links]);
    }
}
