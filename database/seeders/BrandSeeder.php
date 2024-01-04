<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemplo de dados para marcas
        $brands = [
            ['name' => 'BMW'],
            ['name' => 'Mercedes'],
            ['name' => 'Toyota'],
            ['name' => 'Ford'],
            ['name' => 'Honda'],
            ['name' => 'Audi'],
            ['name' => 'Chevrolet'],
            ['name' => 'Volkswagen'],
            ['name' => 'Nissan'],
            ['name' => 'Hyundai'],
            // Adicione mais marcas conforme necessário
        ];

        // Inserir os dados no banco de dados
        foreach ($brands as $brandData) {
            Brand::create($brandData);
        }

    }
}
