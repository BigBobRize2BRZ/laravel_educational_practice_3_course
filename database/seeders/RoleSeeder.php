<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //! Самостоятельная работа: Задание 6

        $possibleRoles = ['Admin', 'Moderator', 'User', 'Guest'];
        $roles = [];

        for ($i = 0; $i < 10; $i++) {
            $roles[] = [
                'name' => $possibleRoles[rand(0, 3)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('roles')->insert($roles);

        //! Самостоятельная работа: Задание 8 и 13

        $roleIds = DB::table('roles')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        $userIds->each(function ($userId) use ($roleIds) {
            DB::table('role_user')->insert([
                'user_id' => $userId,
                'role_id' => $roleIds->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        //! Самостоятельная работа: Задание 14
        // Если таблица пустая, то он её заполнит
        if (DB::table('roles')->count() === 0) {
            $roles = [];

            for ($i = 0; $i < 10; $i++) {
                $roles[] = [
                    'name' => $possibleRoles[rand(0, 3)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('roles')->insert($roles);
        }
    }
}
