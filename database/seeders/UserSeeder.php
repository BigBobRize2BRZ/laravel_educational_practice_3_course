<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::factory(20)
            ->create();

        $positions = Position::factory(10)->create();

        User::factory(20)
            ->has(Profile::factory())
            ->create([
                'city_id' => fn() => $cities->random()->id,
                'position_id' => fn() => $positions->random()->id,
            ]);
    }
}
