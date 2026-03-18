<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            // // Задание 2
            // [
            //     'login' => 'login 1',
            //     'password' => 'password123',
            //     'name' => 'name 1',
            //     'email' => 'email1@mail.com',
            // ],
            // [
            //     'login' => 'login 2',
            //     'password' => 'password123',
            //     'name' => 'name 2',
            //     'email' => 'email2@mail.com',
            // ],
            // [
            //     'login' => 'login 3',
            //     'password' => 'password123',
            //     'name' => 'name 3',
            //     'email' => 'email3@mail.com',
            // ],


            // // Задание 3-5
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
            // [
            //     'login' => Str::random(10),
            //     'password' => Hash::make('12345'),
            //     'name' => Str::random(10),
            //     'email' => Str::random(10) . '@gmail.com',
            // ],
        ]);

        //! Самостоятельная работа: Задание 5
        /** 
             truncate очищает данные таблицы перед вставкой, нужно это чтобы не дублировались записи в таблице и чтобы вставлялись всегда новые данные
             delete работает с внешними  ключами
         */
        DB::table('users')->delete();
        DB::table('categories')->delete();
        DB::table('posts')->delete();

        $this->call([
            // // Задания 6-10
            // UserSeeder::class,
            // CitySeeder::class,
            // CountrySeeder::class,

            // // Задание 11
            // UserSeeder::class,
            // PostSeeder::class,

            //! Самостоятельная работа: Задание 3
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            PostSeeder::class,
            RoleSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
