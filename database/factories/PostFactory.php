<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //! Самостоятельная работа: Задание 4
        $title = $this->faker->sentence(3);
        
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1000, 9999),
            'likes' => $this->faker->numberBetween(0, 999999),
            'user_id' => null,
            'created_at' => $this->faker->time( 'H:i:s', '15:00:00' ),
            'updated_at' => $this->faker->time( 'H:i:s', '15:00:00' ),
        ];
    }
}
