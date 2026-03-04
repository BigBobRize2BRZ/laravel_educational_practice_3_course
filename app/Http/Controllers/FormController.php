<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //! 9) Формы

    // // Задание 2
    // public function result(Request $request)
    // {
    //     $number1 = $request->input('number-1');
    //     $number2 = $request->input('number-2');
    //     $number3 = $request->input('number-3');

    //     $sum = $number1 + $number2 + $number3;

    //     $taskNumber = '2';
    //     return view('task9.sumResult', compact('taskNumber', 'sum'));
    // }

    // public function form()
    // {
    //     $taskNumber = '2';
    //     return view('task9.sumForm', compact('taskNumber'));
    // }


    // // Задание 3
    // public function result(Request $request)
    // {
    //     $userName = $request->input('name');
    //     $userAge = $request->input('age');
    //     $userSalary = $request->input('salary');


    //     $taskNumber = '3';
    //     return view('task9.userResult', compact('taskNumber', 'userName', 'userAge', 'userSalary'));
    // }

    // public function form()
    // {
    //     $taskNumber = '3';
    //     return view('task9.userForm', compact('taskNumber'));
    // }


    // // Задание 4
    // public function form(Request $request)
    // {
    //     $userCity = null;
    //     $userCountry = null;

    //     if ($request->has('city') and $request->has('country')) {
    //         $userCity = $request->input('city');
    //         $userCountry = $request->input('country');
    //     }

    //     $taskNumber = '4';
    //     return view('task9.task4.userForm', compact('taskNumber', 'userCity', 'userCountry'));
    // }


    // // Задание 5
    // public function form(Request $request)
    // {
    //     $data = null;

    //     if ($request->has('value-1') and $request->has('value-2') and $request->has('value-3')) {
    //         $data = $request->all();
    //     }

    //     $taskNumber = '5';
    //     return view('task9.task5.allValueForm', compact('taskNumber', 'data'));
    // }


    // // Задание 6
    // public function form(Request $request)
    // {
    //     $data = null;

    //     if ($request->has('name') and 
    //     $request->has('surname') and 
    //     $request->has('email') and
    //     $request->has('login') and
    //     $request->has('password')) {
    //         $data = $request->only(['name', 'login']);
    //     }

    //     $taskNumber = '6';
    //     return view('task9.task6.someValueForm', compact('taskNumber', 'data'));
    // }


    // // Задание 7
    // public function form(Request $request)
    // {
    //     $data = null;

    //     if (
    //         $request->has('name') and
    //         $request->has('surname') and
    //         $request->has('email') and
    //         $request->has('login') and
    //         $request->has('password')
    //     ) {
    //         $data = $request->except(['password', 'email']);
    //     }

    //     $taskNumber = '7';
    //     return view('task9.task6.someValueForm', compact('taskNumber', 'data'));
    // }


    // Задание 8
    public function form(Request $request, $id, $login)
    {
        $routeId = $id;
        $routeLogin = $login;

        $name = null;
        $surname = null;
        $email = null;
        $formLogin = null;
        $password = null;


        if ($request->isMethod('post')) {
            $name = $request->input('user.name');
            $surname = $request->input('user.surname');
            $email = $request->input('user.email');
            $formLogin = $request->input('user.login');
            $password = $request->input('user.password');
        }

        $taskNumber = '8';
        return view('task9.task8.hardNameFieldForm', compact('taskNumber', 'routeId', 'routeLogin', 'name', 'surname', 'email', 'formLogin', 'password'));
    }

    public function methods(Request $request)
    {
        if ($request->isMethod('get')) {
            if ($request->is('test/*')) {
                echo $request->path() . '<br>';
                echo $request->url() . '<br>';
                echo $request->fullUrl() . '<br>';
            }
        }
    }
}
