<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()
                ->title(Str::ucfirst(__('content')))
                ->forModule('pages')
                ->doNotAddSelfAsFirstChild()
                ->setChildren([
                    NavigationLink::make()
                        ->title(Str::ucfirst(__('home')))
                        ->forSingleton('home'),
                    NavigationLink::make()
                        ->title(Str::ucfirst(__('pages')))
                        ->forModule('pages'),
                ])
        );
        TwillNavigation::addLink(
            NavigationLink::make()
                ->title(Str::ucfirst(__('navigation')))
                ->forModule('menuItems')
                ->doNotAddSelfAsFirstChild()
                ->setChildren([
                    NavigationLink::make()
                        ->title(Str::ucfirst(__('menu')))
                        ->forModule('menuItems'),
                ])
        );
    }
}
