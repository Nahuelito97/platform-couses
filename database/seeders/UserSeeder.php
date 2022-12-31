<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
       User::create([
        'name' => 'Nahuel Wagner',
        'email' => 'nahuel@gmail.com',
        'password' => bcrypt('12345'),
       ]); 
    
       User::factory(99)->create();
    }
}
