<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function __invoke()
    {
        $item = Home::first();
        if (! $item) {
            abort(404);
        }

        return view('site.page', ['item' => $item]);
    }
}
