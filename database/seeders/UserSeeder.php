<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     //! Самостоятельная работа: Задание 1
        //     $faker = Factory::create();

        //     for ($i = 0; $i < 10; $i++) {
        //         DB::table('users')->insert([
        //             'name' => Str::random(10),
        //             'email' => Str::random(10) . '@gmail.com',
        //             'age' => $faker->numberBetween(14, 120),
        //             'salary' => $faker->randomNumber(5),
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]);
        //     }


        //! Самостоятельная работа: Задание 7
        User::factory()->count(5)
            ->has(Post::factory()->count(3))
            ->create();


        //! Самостоятельная работа: Задание 9
        $jsonPath = database_path('data/users.json');
        $jsonContent = File::get($jsonPath);

        $users = json_decode($jsonContent, true);
        DB::table('users')->insert($users);


        //! Самостоятельная работа: Задание 10
        $existingUser = DB::table('users')->where('email', 'admin@test.com')->first();

        if (!$existingUser) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'age' => 25,
                'salary' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        //! Самостоятельная работа: Задание 15
        User::factory()->inactive()->count(5)->create();

        
    }
}
