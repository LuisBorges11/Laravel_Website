<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'color' => $this->faker->color,
            'price' => $this->faker->randomFloat(2, 10000, 50000),
            // Outros campos e valores de exemplo
        ];
    }
}
