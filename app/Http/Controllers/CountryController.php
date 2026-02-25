<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    //! 8) Связи в моделях

    public function task12()
    {
        // Задание 11

        // $countries = Country::all();
        // dump($countries);

        // Задание 12
        $taskNumber = '12';

        $countries = Country::all();

        return view('task8.task12', compact('taskNumber', 'countries'));
    }

    public function show()
    {
        // // Задание 15
        // $countries = Country::all();

        // foreach ($countries as $country) {
        //     $cities = $country
        //         ->cities()
        //         ->where('population', '>', 100000)
        //         ->get();

        //     dump("Страна: " . $country->name, $cities);
        // }


        // // Задание 16
        // $countries = Country::all();

        // foreach ($countries as $country) {
        //     $cities = $country
        //         ->cities()
        //         ->orderBy('population')
        //         ->get();

        //     dump($cities);
        // }


        // // Задание 18
        // $city = City::find(1);
        // dump("Город: " . $city->name);
        // dump("Страна: " . $city->country->name);


        // // Задание 19
        // $cities = City::all();

        // foreach ($cities as $city) {
        //     dump("Город: " . $city->name);
        //     dump("Страна: " . $city->country->name);
        // }


        // Задание 20
        $cities = City::all()->where('population', '>', 100000);

        foreach ($cities as $city) {
            dump("Город: " . $city->name);
            dump("Страна: " . $city->country->name);
        }
    }
}
