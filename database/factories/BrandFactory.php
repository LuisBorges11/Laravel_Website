<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carBrands = [
            'BMW',
            'Mercedes',
            'Toyota',
            'Ford',
            'Honda',
            'Audi',
            'Chevrolet',
            'Volkswagen',
            'Nissan',
            'Hyundai',
            
        ];

        return [
            'Marcas' => $this->faker->unique()->randomElement($carBrands),
            
        ];
    }
}