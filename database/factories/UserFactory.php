<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
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
        $sex = $this->faker->randomElement(['male', 'female']);

        return [
            'sex'         => $sex,
            'first_name'  => $this->faker->firstName($sex), 
            'second_name' => $this->faker->lastName(),
            'birth_date'  => $this->faker->date(max: 'now'),
            'age'         => $this->faker->numberBetween(18, 100), 
            'email'       => $this->faker->unique()->safeEmail(),
            'avatar'      => $this->faker->imageUrl(200, 200, 'people'),
            'salary'      => (string) $this->faker->optional(0.7, '0')->numberBetween(10000, 200000),
            'cities_id'   => City::inRandomOrder()->first()?->id ?? 1, 
            'created_at'  => $this->faker->dateTimeBetween('-2 years'),
        ];
    }
}
