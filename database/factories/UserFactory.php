<?php

namespace Database\Factories;

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

        $createdAt = $this->faker->dateTimeBetween('-1 year', 'now');

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(18, 120),
            'salary' => $this->faker->numberBetween(30000, 200000),
            'created_at' => $createdAt,
            'updated_at' => $this->faker->dateTimeBetween($createdAt, 'now'),
        ];
    }
    /**
        Состояние для неактивного пользователя
     */

    //! Самостоятельная работа: Задание 15
    public function inactive()
    {
        return $this->state(function (array $attributes) {
            $createdAt = $this->faker->dateTimeBetween('-1 year', '-10 months');
            $updatedAt = $this->faker->dateTimeBetween($createdAt, '-9 months');

            return [
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ];
        });
    }
}
