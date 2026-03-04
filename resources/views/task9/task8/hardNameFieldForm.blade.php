@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<form action="" method="POST">
    @csrf
    <p>
    <p>Введите имя пользователй</p>
    <input name="user[name]">
    </p>
    <p>
    <p>Введите фамилию пользователй</p>
    <input name="user[surname]">
    </p>
    <p>
    <p>Введите email пользователй</p>
    <input name="user[email]">
    </p>
    <p>
    <p>Введите логин пользователй</p>
    <input name="user[login]">
    </p>
    <p>
    <p>Введите пароль пользователй</p>
    <input name="user[password]" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@if (!empty($routeId) && !empty($routeLogin) && !empty($name) && !empty($surname) && !empty($email) && !empty($formLogin) && !empty($password))
<ul>
    <li>Id из роута: {{ $routeId }}</li>
    <li>Логин из роута: {{ $routeLogin }}</li>
    <br>
    <li>Имя из формы: {{ $name }}</li>
    <li>Фамилия из формы: {{ $surname }}</li>
    <li>Email из формы: {{ $email }}</li>
    <li>Логин из формы: {{ $formLogin }}</li>
    <li>Пароль из формы: {{ $password }}</li>
</ul>
@endif

@endsection

@section('title', $title ?? 'Task 9')