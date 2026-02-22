<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory(50)->create();

        $specificCities = [
            ['name' => 'Москва'],
            ['name' => 'Санкт-Петербург'],
            ['name' => 'Новосибирск'],
            ['name' => 'Екатеринбург'],
            ['name' => 'Казань'],
        ];

        foreach ($specificCities as $city) {
            City::firstOrCreate($city);
        }
    }
}
