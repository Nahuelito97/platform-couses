<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Books',
        ]);

        Category::create([
            'name' => 'Movies',
        ]);

        Category::create([
            'name' => 'Desarollo web',
        ]);

        Category::create([
            'name' => 'Laravels',
        ]);
}
}
