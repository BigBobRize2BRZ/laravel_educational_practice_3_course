<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'login' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(),
            'name' => $this->faker->name(),
            'city_id' => City::inRandomOrder()->first()?->id ?? 1,
            'position_id' => Position::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}
