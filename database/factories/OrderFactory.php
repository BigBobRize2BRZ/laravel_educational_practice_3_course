<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount'      => $this->faker->randomFloat(2, 10, 5000),
            'status'      => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'created_at'  => $this->faker->dateTimeBetween('-6 months'),
            'updated_at'  => now(),
        ];
    }
}
