<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    // Задание 1
    public function setCookie()
    {
        return response('Кука установлена')
            ->cookie('test_cookie', 'Hello', 10);
    }

    public function getCookie(Request $request)
    {
        $value = $request->cookie('test_cookie');

        if ($value) {
            return "Значение куки 'test_cookie': " . $value;
        } else {
            return "Кука 'test_cookie' не найдена (возможно, истекла или не установлена).";
        }
    }

    // Задание 2
    public function counter(Request $request)
    {
        $counter = $request->cookie('page_count', 1);

        $newCounter = $counter + 1;

        $taskNumber = '2';

        $response = response()->view('task12.counter', compact('counter', 'taskNumber'));

        return $response->cookie('page_count', $newCounter, 60);
    }

    // Задание 3 
    public function queueCookies()
    {
        Cookie::queue('cookie_one', 'Значение первой куки', 10);
        Cookie::queue('cookie_two', 'Значение второй куки', 20);
        Cookie::queue('cookie_three', 'Значение третьей куки', 30);

        return response('Три куки поставлены в очередь и будут отправлены.');
    }


    //? Самостоятельная работа
    // Задание 1 и 3
    public function setUsernameCookie()
    {
        $value = 'User_' . rand(1000, 9999);

        return response('Кука username установлена (через withCookie)')
            ->withCookie('username', $value, 60);
    }

    // Задание 2 и 6
    public function getUsernameCookie(Request $request)
    {
        $username = $request->cookie('username');

        if ($request->hasCookie('username')) {
            $message = "Кука 'username' существует. Значение: $username";
        } else {
            $message = "Кука 'username' не найдена.";
        }

        return response($message);
    }

    // Задание 4
    public function queueCookieWithHelper()
    {
        $cookie = cookie('helper_cookie', 'Это кука из хелпера', 30);

        Cookie::queue($cookie);

        return response('Кука добавлена в очередь через хелпер cookie()');
    }

    // Задание 5
    public function forgetCookie()
    {
        Cookie::queue(Cookie::forget('username'));

        return response('Кука username удалена (срок истёк)');
    }

    // Задание 7
    public function secureCookie()
    {
        $secureCookie = cookie(
            'secure_cookie',     // имя
            'only_https',        // значение
            60,                  // минуты
            '/',                 // путь
            null,                // домен
            true,                // secure (только HTTPS)
            true                 // httpOnly (по умолчанию)
        );

        Cookie::queue($secureCookie);

        return response('Установлена HTTPS-кука (будет отправлена только по HTTPS)');
    }

    // Задание 8
    public function arrayCookie()
    {
        $data = [
            'user_id' => 123,
            'preferences' => ['theme' => 'dark', 'language' => 'ru'],
            'last_visit' => now()->toDateTimeString()
        ];

        $jsonData = json_encode($data);

        return response('Массив сохранён в куке array_data')
            ->cookie('array_data', $jsonData, 10);
    }

    public function readArrayCookie(Request $request)
    {
        $jsonData = $request->cookie('array_data');
        if ($jsonData) {
            $array = json_decode($jsonData, true);
            dump($array);
            return response('Массив восстановлен из куки.');
        } else {
            return response('Кука array_data не найдена.');
        }
    }
}
