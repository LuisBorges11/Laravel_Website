<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Brand::factory(5)->create(); // Cria 5 marcas
        \App\Models\CarModel::factory(10)->create(); // Cria 10 modelos de carros
        \App\Models\Feature::factory(8)->create(); // Cria 8 características
    }
}
