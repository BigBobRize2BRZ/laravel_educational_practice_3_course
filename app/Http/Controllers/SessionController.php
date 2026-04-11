<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    // Задание 1
    public function getSessionObject(Request $request)
    {
        dump($request->session());
    }

    // Задание 2
    public function setValue(Request $request)
    {
        $request->session()->put('key', 'value');
    }

    public function getValue(Request $request)
    {
        $value = $request->session()->get('key');
        dump($value);
    }

    // Задание 3-4
    public function pageCounter(Request $request)
    {
        $counter = $request->session()->get('counter', 1);

        $request->session()->put('counter', $counter + 1);

        $taskNumber = '3-4';

        return view('task11.counter', compact('counter', 'taskNumber'));
    }

    // Задание 5
    public function firstVisitTime(Request $request)
    {
        if (!$request->session()->has('first_visit_time')) {
            $request->session()->put('first_visit_time', now()->toDateTimeString());
        }

        $firstVisit = $request->session()->get('first_visit_time');
        $currentTime = now()->toDateTimeString();

        $taskNumber = '5';

        return view('task11.first-visit', compact('firstVisit', 'currentTime', 'taskNumber'));
    }

    // Задание 6 
    public function deleteVariable(Request $request)
    {
        $request->session()->put('some_key', 'value');

        $request->session()->forget('some_key');

        $value = $request->session()->get('some_key');
        dump($value);
    }

    // Задание 7
    public function pullAndShow(Request $request)
    {
        $request->session()->put('temp_pull', 'Это значение будет прочитано и удалено методом pull');

        $value = $request->session()->pull('temp_pull', 'Значение не найдено (переменная уже удалена или не существовала)');

        dump($value);

        $exists = $request->session()->has('temp_pull');
        dump($exists);
    }

    // Задание 8
    public function showAllSession(Request $request)
    {
        $request->session()->put('user', 'Анна');
        $request->session()->put('role', 'admin');
        $request->session()->put('theme', 'dark');

        $allData = $request->session()->all();
        dump($allData);
    }

    // Задание 9
    public function checkTime(Request $request)
    {
        $session = $request->session();

        if ($session->has('time')) {
            $timeValue = $session->get('time');
            $message = "Переменная 'time' существует. Её значение: $timeValue";
        } else {
            $currentTime = now()->toDateTimeString();
            $session->put('time', $currentTime);
            $timeValue = $currentTime;
            $message = "Переменной 'time' не было. Установлено текущее время: $currentTime";
        }

        dump($message);
        dump($timeValue);
    }

    // Задание 10
    public function setNumberArray()
    {
        $numbers = [10, 20, 30, 40, 50];
        Session::put('numbers', $numbers); // через фасад

        dump('Массив записан в сессию:');
        dump($numbers);
    }

    // Задание 11
    public function addToArray()
    {
        dump('Массив ДО добавления:');
        dump(Session::get('numbers'));

        Session::push('numbers', 60);

        dump('Массив ПОСЛЕ добавления через push():');
        dump(Session::get('numbers'));
    }

    // Задание 12
    public function saveViaGlobalHelper()
    {
        session(['global_data' => 'Сохранено через session() helper']);

        dump('Данные сохранены в сессию:');
        dump(session('global_data'));
    }

    // Задание 13
    public function getViaGlobalHelper()
    {
        $value = session('global_data', 'Ключ не найден');

        dump('Получение данных из сессии:');
        dump($value);
    }


    //? Самостоятельная работа
    // Задание 1
    public function saveUsername()
    {
        session(['username' => 'Алексей Иванов']);
        dump('Имя пользователя сохранено:', session('username'));
    }

    // Задание 2
    public function facadePutGet(Request $request)
    {
        $request->session()->put('facade_value', 'Данные через request');
        $value = $request->session()->get('facade_value');
    }

    // Задание 3
    public function checkHasKey(Request $request)
    {
        $key = 'username';
        if ($request->session()->has($key)) {
            dump("Ключ '$key' существует. Значение: " . $request->session()->get($key));
        } else {
            dump("Ключ '$key' отсутствует.");
        }
    }

    // Задание 4
    public function forgetDemo(Request $request)
    {
        $request->session()->put('temp_key', 'временное значение');
        dump('До удаления:', $request->session()->get('temp_key'));
        $request->session()->forget('temp_key');
        $exists = $request->session()->has('temp_key');
        dump('После удаления, ключ temp_key существует?', $exists ? 'Да' : 'Нет');
    }

    // Задание 5
    public function showFlashForm()
    {
        return view('task11.flash-form');
    }

    public function submitFlashForm(Request $request)
    {
        Session::flash('success', 'Форма отправлена! Сообщение только один раз.');
        return redirect('/session/flash-result');
    }

    public function showFlashResult()
    {
        return view('task11.flash-result');
    }

    // Задание 6
    public function getAllSessionData(Request $request)
    {
        $allData = $request->session()->all();
        dump('Все данные сессии:', $allData);
    }

    // Задание 7
    public function flushAll(Request $request)
    {
        $request->session()->flush();
        $isEmpty = empty($request->session()->all());
        dump('Сессия очищена. Пуста?', $isEmpty ? 'Да' : 'Нет');
    }

    // Задание 8
    public function pushArrayDemo()
    {
        if (!Session::has('fruits')) {
            Session::put('fruits', ['яблоко', 'банан']);
            dump('Массив создан:', Session::get('fruits'));
        }
        Session::push('fruits', 'апельсин');
        dump('После push:', Session::get('fruits'));
    }
}
