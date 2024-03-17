<?php

namespace Database\Seeders;

use App\Models\PageHome;
use App\Repositories\PageHomeRepository;
use Illuminate\Database\Seeder;

class PageHomeSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (PageHome::count() > 0) {
            return;
        }

        app(PageHomeRepository::class)->create([
            'title' => [
                'en' => 'PageHome',
                // add other languages here
            ],
            'meta_title' => [
                'en' => 'PageHome',
                // add other languages here
            ],
            'meta_description' => [
                'en' => '',
                // add other languages here
            ],
        ]);
    }
}
