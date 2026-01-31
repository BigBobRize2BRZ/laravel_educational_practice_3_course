<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task4Controller extends Controller
{

    public function one()
    {
        $name = 'John';
        $age = 34;
        $salary = 600;

        return view('task4blades.one', compact('name', 'age', 'salary'));
    }



    public function two()
    {
        $class = '.text-success';
        $value1 = 'Значение 1';
        $value2 = 'Значение 2';
        $value3 = 'Значение 3';
        $redColor = 'color: red;';
        $text = "Ссылка на документацию laravel";
        $href = 'https://laravel.su/docs/10.x/installation';


        return view('task4blades.two', compact('class', 'value1', 'value2', 'value3', 'redColor', 'text', 'href',));
    }



    public function three()
    {
        $employee = [
            'name' => 'John',
            'age' => 34,
            'salary' => 900,
        ];

        return view('task4blades.three', compact('employee'));
    }


    public function four()
    {
        $city = 'Тюмень';
        $location = [
            'country' => '',
            'city' => '',
        ];

        $year = '2021';
        $month = '11';
        $day = '23';

        $str = '<b>name</b>';

        return view('task4blades.four', compact('str'));
    }


    public function five()
    {
        $age = 19;
        $age1 = 14;
        $arrOfNum = [1, 2, 3, 4, 5, 0, 7];
        $arrOfStr = [
            '1' => 'Первая строка',
            '2' => 'Вторая строка',
            '3' => 'Третья строка',
            '4' => 'Четвёртая строка',
            '5' => 'Пятая строка',
        ];
        $data = [1, 2];
        $nestedArr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ];
        $usersNames = [
            'name1' => 'Имя1',
            'name2' => 'Имя2',
            'name3' => 'Имя3',
        ];
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],

        ];

        return view('task4blades.five', compact('age', 'age1', 'arrOfNum', 'arrOfStr', 'data', 'nestedArr', 'employees', 'usersNames', 'links'));
    }

    public function six()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];

        $arrOfStr = [
            '1' => 'Первая строка',
            '2' => 'Вторая строка',
            '3' => 'Третья строка',
            '4' => 'Четвёртая строка',
            '5' => 'Пятая строка',
        ];

        $daysOfMonth = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
        $currentDay = date('d');
        return view('task4blades.six', compact('employees', 'users', 'arrOfStr', 'daysOfMonth', 'currentDay'));
    }
}
