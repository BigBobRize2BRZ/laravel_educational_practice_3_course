<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //! 2) Контроллеры

    // public function show()
    // {
    //     return 'hello world';
    // }

    // public function all()
    // {
    //     return 'all';
    // }

    // public function name($name)
    // {
    //     return 'Имя пользователя: ' . $name;
    // }

    // public function surnameName($surname, $name)
    // {
    //     return 'Фамилия пользователя: ' . $surname . '<br>' . 'Имя пользователя: ' . $name;
    // }

    // public function sendIntoTown($user)
    // {
    //     $users = [
    //         'user1' => 'city1',
    //         'user2' => 'city2',
    //         'user3' => 'city3',
    //         'user4' => 'city4',
    //         'user5' => 'city5',
    //     ];

    //     return ($users[$user] ?? 'Такого пользователя нет');
    // }


    //! 6) Построитель запросов

    public function show()
    {
        // // Задание 1-3
        // $users = DB::table('users')->get();

        // foreach ($users as $user) {
        //     dump($user->sex);
        //     dump($user->first_name);
        //     dump($user->second_name);
        //     dump($user->birth_date);
        //     dump($user->age);
        //     dump($user->email);
        //     dump($user->avatar);
        //     dump($user->salary);
        //     dump($user->created_at);
        //     dump();
        // }


        // // Задание 4
        // $taskNumber = 4;
        // $users = DB::table('users')->get();
        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 5
        // $taskNumber = 5;
        // $users = DB::table('users')->select('first_name', 'email')->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 6
        // $taskNumber = 6;
        // $users = DB::table('users')->select('first_name', 'email as user_email')->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 7
        // $taskNumber = 7;
        // $users = DB::table('users')->where('age', '=', 30)->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 8
        // $taskNumber = 8;
        // $users = DB::table('users')->where('age', '!=', 30)->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 9
        // $taskNumber = 9;
        // $users = DB::table('users')->where('age', '>', 30)->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 10
        // $taskNumber = 10;
        // $users = DB::table('users')->where('age', '<', 30)->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 11
        // $taskNumber = 11;
        // $users = DB::table('users')->where('age', '<=', 30)->get();
        // return view('task6.show', compact('taskNumber', 'users'));

        // // Задание 12
        // $taskNumber = 12;
        // $users = DB::table('users')
        // ->where('age', '>', 20)
        // ->where('age', '<', 30)
        // ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 13
        // $taskNumber = 13;
        // $users = DB::table('users')
        //     ->where('age', '>', 30)
        //     ->orWhere('id', '>', 4)
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 14
        // $taskNumber = 14;
        // $users = DB::table('users')
        //     ->where('age', '=', 30)
        //     ->orWhere('salary', '=', 500)
        //     ->orWhere('id', '>', 4)
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 15
        // $taskNumber = 15;
        // $users = DB::table('users')
        //     ->where('salary', '=', 500)
        //     ->orWhere(function($querry) {
        //         $querry
        //             ->where('age', '>', 20)
        //             ->where('age', '<', 30);
        //     })
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 16
        // $taskNumber = 16;
        // $users = DB::table('users')
        //     ->where(function ($querry) {
        //         $querry
        //             ->where('age', '>', 20)
        //             ->where('age', '<', 30);
        //     })
        //     ->orWhere(function ($querry) {
        //         $querry
        //             ->where('salary', '>', 400)
        //             ->where('salary', '<', 800);
        //     })
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));



        // // Задание 17-18
        // $taskNumber = "17-18";
        // $users = DB::table('users')->where('id',  3)->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 19-20
        // $taskNumber = "19-20";
        // $users = DB::table('users')->where('id',  3)->value('email');

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 21-22
        // $taskNumber = "21-22";
        // $users = DB::table('users')->pluck('first_name');

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 23
        // $taskNumber = "23";
        // $users = DB::table('users')
        //     ->whereBetween('age', [30, 40])
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 24
        // $taskNumber = "24";
        // $users = DB::table('users')
        //     ->whereNotBetween('age', [30, 40])
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 25
        // $taskNumber = "25";
        // $users = DB::table('users')
        //     ->whereIn('id', [1, 2, 3, 5])
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 26
        // $taskNumber = "26";
        // $users = DB::table('users')
        //     ->whereNotIn('id', [1, 2, 3, 5])
        //     ->get();

        // return view('task6.show', compact('taskNumber', 'users'));


        // // Задание 27
        // $taskNumber = "27";
        // $users = DB::table('users')
        //     ->whereNotNull('age')
        //     ->get();
        //     dump($users);


        // // Задание 28
        // $taskNumber = "28";
        // $users = DB::table('users')
        //     ->whereId(3)
        //     ->get();
        // dump($users);


        // // Задание 29
        // $taskNumber = "29";
        // $users = DB::table('users')
        //     ->wherefirst_name('john')
        //     ->get();
        // dump($users);


        // // Задание 30
        // $taskNumber = "30";
        // $users = DB::table('users')
        //     ->whereEmail('john@mail.com')
        //     ->get();
        // dump($users);

        // // Задание 31
        // $taskNumber = "31";
        // $users = DB::table('users')
        //     ->whereIdAndAge(3, 20)
        //     ->get();
        // dump($users);

        // // Задание 32
        // $taskNumber = "32";
        // $users = DB::table('users')
        //     ->whereIdOrAge(3, 20)
        //     ->get();
        // dump($users);

        // // Задание 33
        // $taskNumber = "33";
        // $users = DB::table('users')
        //     ->orderBy('age')
        //     ->get();
        // dump($users);

        // // Задание 34
        // $taskNumber = "34";
        // $users = DB::table('users')
        //     ->orderBy('age', 'desc')
        //     ->get();
        // dump($users);

        // // Задание 35
        // $taskNumber = "35";
        // $users = DB::table('users')
        //     ->oldest()
        //     ->get();
        // dump($users);

        // // Задание 36
        // $taskNumber = "36";
        // $users = DB::table('users')
        //     ->latest()
        //     ->get();
        // dump($users);

        // // Задание 37
        // $taskNumber = "37";
        // $users = DB::table('users')
        //     ->where('age', '>', 30)
        //     ->oldest()
        //     ->get();
        // dump($users);

        // // Задание 38
        // $taskNumber = "38";
        // $users = DB::table('users')
        //     ->latest("updated_at")
        //     ->get();
        // dump($users);

        // // Задание 39
        // $taskNumber = "39";
        // $users = DB::table('users')
        //     ->where('age', '>', 30)
        //     ->oldest("updated_at")
        //     ->get();
        // dump($users);

        // // Задание 40
        // $taskNumber = "40";
        // $users = DB::table('users')
        //     ->inRandomOrder()
        //     ->get();
        // dump($users);

        // // Задание 41
        // $taskNumber = "41";
        // $users = DB::table('users')
        //     ->inRandomOrder()
        //     ->first();
        // dump($users);

        // // Задание 42
        // $taskNumber = "42";
        // $users = DB::table('users')
        //     ->whereBetween('age', [20, 30])
        //     ->inRandomOrder()
        //     ->get();
        // dump($users);

        // // Задание 43
        // $taskNumber = "43";
        // $users = DB::table('users')
        //     ->whereBetween('age', [20, 30])
        //     ->inRandomOrder()
        //     ->first();
        // dump($users);

        // // Задание 44
        // $taskNumber = "44";
        // $users = DB::table('users')
        //     ->take(3)
        //     ->get();
        // dump($users);

        // // Задание 45
        // $taskNumber = "45";
        // $users = DB::table('users')
        //     ->take(3)
        //     ->where('age', '=', 30)
        //     ->get();
        // dump($users);

        // // Задание 46
        // $taskNumber = "46";
        // $users = DB::table('users')
        //     ->skip(4)
        //     ->take(3)
        //     ->get();
        // dump($users);

        // // Задание 47
        // $taskNumber = "47";
        // $users = DB::table('users')
        //     ->skip(2)
        //     ->take(10)
        //     ->where('age', '=', 30)
        //     ->get();
        // dump($users);

        // // Задание 48
        // $taskNumber = "48";
        // $users = DB::table('users')->insert([
        //         'sex' => 'Мужской',
        //         'first_name' => 'Виктор3',
        //         'second_name' => 'Гафнер3',
        //         'birth_date' => '2007.03.21',
        //         'age' => '24',
        //         'email' => 'victorgafner3@gmail.com',
        //         'avatar' => 'путь к аватару',
        //         'salary' => '600',
        //         'created_at' => '2026-02-09 12:53:13',
        // ]);

        // // Задание 49
        // $taskNumber = "49";
        // $users = DB::table('users')->insertGetId([
        //         'sex' => 'Мужской',
        //         'first_name' => 'Виктор4',
        //         'second_name' => 'Гафнер4',
        //         'birth_date' => '2007.03.21',
        //         'age' => '26',
        //         'email' => 'victorgafner4@gmail.com',
        //         'avatar' => 'путь к аватару',
        //         'salary' => '600',
        //         'created_at' => '2026-02-09 12:54:14',
        // ]);

        // echo $users;


        // // Задание 50
        // $taskNumber = "50";
        // $users = DB::table('users')->insert([
        //     [
        //         'sex' => 'Мужской',
        //         'first_name' => 'Виктор5',
        //         'second_name' => 'Гафнер5',
        //         'birth_date' => '2007.03.21',
        //         'age' => '24',
        //         'email' => 'victorgafner5@gmail.com',
        //         'avatar' => 'путь к аватару',
        //         'salary' => '600',
        //         'created_at' => '2026-02-09 12:53:13',
        //     ],
        //     [
        //         'sex' => 'Мужской',
        //         'first_name' => 'Виктор6',
        //         'second_name' => 'Гафнер6',
        //         'birth_date' => '2007.03.21',
        //         'age' => '24',
        //         'email' => 'victorgafner6@gmail.com',
        //         'avatar' => 'путь к аватару',
        //         'salary' => '600',
        //         'created_at' => '2026-02-09 12:53:13',
        //     ],
        // ]);

        // // Задание 51
        // $taskNumber = "51";
        // $users = DB::table('users')->where('id', 5)->update([
        //     'first_name' => 'Виктор1111',
        //     'second_name' => 'Гафнер1111',
        // ]);

        // // Задание 52
        // $taskNumber = "52";
        // $users = DB::table('users')->where('age', '=', 30)->update([
        //     'salary' => 500,
        // ]);

        // // Задание 53
        // $taskNumber = "53";
        // DB::table('users')
        //     ->where('id', 1)
        //     ->increment('age');

        // // Задание 54
        // $taskNumber = "54";
        // DB::table('users')
        //     ->where('id', 1)
        //     ->decrement('age');

        // // Задание 55
        // $taskNumber = "55";
        // DB::table('users')
        //     ->where('age', '=', 30)
        //     ->increment('salary', 100);

        // // Задание 56
        // $taskNumber = "56";
        // DB::table('users')
        //     ->where('id', 5)
        //     ->delete();

        // // Задание 57
        // $taskNumber = "57";
        // DB::table('users')
        //     ->where('age', '=', 30)
        //     ->delete();

        // // Задание 58-59
        // $taskNumber = "58-59";
        $users = DB::table('users')
            ->leftJoin('cities', 'cities.id', '=', 'users.cities_id')
            ->get();
        
        dump($users);    
    }
}
