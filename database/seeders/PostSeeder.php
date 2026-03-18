<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // Задание 11
        // $faker = Factory::create();

        // DB::table('posts')->insert([
        //     'title' => Str::random(10),
        //     'slug' => Str::random(10),
        //     'likes' => $faker->numberBetween(0, 999999),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // //! Самостоятельная работа: Задание 4
        // Post::factory()->count(50)->create();
    }
}
