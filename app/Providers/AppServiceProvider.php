<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;

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
                ->title('Content')
                ->forModule('pageContents')
                ->doNotAddSelfAsFirstChild()
                ->setChildren([
                    NavigationLink::make()
                        ->title('Home')
                        ->forSingleton('pageHome'),
                    NavigationLink::make()
                        ->title('Pages')
                        ->forModule('pageContents'),
                ]),
        );
    }
}
