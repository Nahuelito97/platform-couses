<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Level Basico'
        ]);

        Level::create([
            'name' => 'Level Medio',
        ]);

        Level::create([
            'name' => 'Level Avanzado',
        ]);
    }
}
