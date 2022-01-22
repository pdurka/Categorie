<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translation = [
            [
                ['country' => 'PL', 'name' => 'Kawa'],
                ['country' => 'EN', 'name' => 'Coffee'],
                ['country' => 'DE', 'name' => 'Kaffee'],
                ['country' => 'FR', 'name' => 'Café']
            ],
            [
                ['country' => 'PL', 'name' => 'Herbaty'],
                ['country' => 'EN', 'name' => 'Tea'],
                ['country' => 'DE', 'name' => 'Tee']
            ],
            [
                ['country' => 'PL', 'name' => 'Makarony'],
                ['country' => 'EN', 'name' => 'Pasta']
            ],
            [
                ['country' => 'PL', 'name' => 'Mleka']
            ]
        ];

        for ($i = 0; $i < 4; $i++) {
            Categories::create()->translations()->createMany($translation[$i]);
        }

    }
}
