<?php

use A17\Twill\Facades\TwillRoutes;
use App\Http\Controllers\Twill\Base\PreviewController;
use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// TwillRoutes::module('posts');

Route::group(['prefix' => 'content'], function () {
    TwillRoutes::module('pageContents');
});

TwillRoutes::singleton('pageHome');

Route::get('preview', PreviewController::class)->name('preview');
