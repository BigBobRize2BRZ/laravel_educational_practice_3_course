<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $options = [
            'color' => $this->faker->safeColorName(),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'weight' => $this->faker->randomFloat(2, 0.1, 10) . ' kg',
            'material' => $this->faker->randomElement(['plastic', 'metal', 'wood', 'glass']),
        ];

        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'quantity' => $this->faker->numberBetween(0, 100),
            'is_active' => $this->faker->boolean(80),
            'options' => $options,
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
            'updated_at' => now(),
        ];
    }
}
