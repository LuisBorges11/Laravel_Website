<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemplo de dados para modelos de carros
        $carModels = [
            ['model' => 'Sedan'],
            ['model' => 'SUV'],
            ['model' => 'Coupe'],
            ['model' => 'Hatchback'],
            ['model' => 'Convertible'],
            ['model' => 'Carrinha'],
            ['model' => 'Van'],
            ['model' => 'Crossover'],
            // Adicione mais modelos conforme necessário
        ];

        // Inserir os dados no banco de dados
        foreach ($carModels as $modelData) {
            CarModel::create($modelData);
        }
    }
}
