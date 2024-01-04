<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarModel>
 */
class CarModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carModels = [
            'Sedan',
            'SUV',
            'Coupe',
            'Hatchback',
            'Convertible',
            'Carrinha',
            'Van',
            'Crossover',
            // Adicione mais modelos conforme necessário
        ];

        return [
            'models' => $this->faker->unique()->randomElement($carModels),
            'brand_id' => \App\Models\Brand::factory(),
            // Adicione outros campos conforme necessário
        ];
    }
}