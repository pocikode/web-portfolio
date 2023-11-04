<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'name' => 'Agus Supriyatna',
             'username' => 'agus',
             'email' => 'supriyatnaagus@outlook.com',
             'password' => bcrypt('admin'),
             'phone' => '081393817875',
             'about' => 'Lipsum',
             'city' => 'Jakarta Barat',
         ]);
    }
}
