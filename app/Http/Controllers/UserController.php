<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return 'hello world';
    }

    public function all()
    {
        return 'all';
    }

    public function name($name)
    {
        return 'Имя пользователя: ' . $name;
    }

    public function surnameName($surname, $name)
    {
        return 'Фамилия пользователя: ' . $surname . '<br>' . 'Имя пользователя: ' . $name;
    }

    public function sendIntoTown($user)
    {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];

        return ($users[$user] ?? 'Такого пользователя нет');
    }
}
