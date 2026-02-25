<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Manager',
                'Developer',
                'Designer',
                'QA Engineer',
                'Team Lead',
                'Product Owner',
                'HR Manager',
                'Sales Manager',
                'Marketing Specialist',
                'System Administrator'
            ]),
        ];
    }
}
