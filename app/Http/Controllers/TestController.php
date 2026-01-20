<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sum($num1, $num2)
    {
        return "Сумма двух значений: " . $num1 + $num2;
    }

    // Задание 1-3
    public function show()
    {
        return view('post.test', ['name' => 'Виктор', 'surname' => 'Гафнер']);
    }

    // Задание 5-6
    public function show2()
    {
        return view('post.test2');
    }

    // Задания 7-11
    public function test1()
    {
        return view('post.test3', ['title' => 'Название 1', 'text' => 'Тестовый контент 1']);
    }

    public function test2()
    {
        return view('post.test3', ['title' => 'Название 2', 'text' => 'Тестовый контент 2']);
    }

    public function test3()
    {
        return view('post.test3', ['title' => 'Название 3', 'text' => 'Тестовый контент 3']);
    }
}
