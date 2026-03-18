<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //! Самостоятельная работа: Задание 11
        DB::beginTransaction();

        try {
            DB::table('users')->insert([
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'age' => 25,
                'salary' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $userId = DB::getPdo()->lastInsertId(); // id юзера

            DB::table('posts')->insert([
                'title' => 'Созданый пост',
                'slug' => 'sozdaniy-post',
                'likes' => 100,
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
