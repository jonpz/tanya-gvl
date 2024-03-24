<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Repositories\HomeRepository;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Home::count() > 0) {
            return;
        }

        app(HomeRepository::class)->create([
            'title' => [
                'en' => 'Home',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
