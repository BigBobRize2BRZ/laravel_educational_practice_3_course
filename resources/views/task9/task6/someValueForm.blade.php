@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<form action="" method="POST">
    @csrf
    <p>
    <p>Введите имя пользователй</p>
    <input name="name">
    </p>
    <p>
    <p>Введите фамилию пользователй</p>
    <input name="surname">
    </p>
    <p>
    <p>Введите email пользователй</p>
    <input name="email">
    </p>
    <p>
    <p>Введите логин пользователй</p>
    <input name="login">
    </p>
    <p>
    <p>Введите пароль пользователй</p>
    <input name="password" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@if (!empty($data))
<ul>
    @foreach ($data as $value)
    <li>Значение из формы: {{ $value }}</li>
    @endforeach
</ul>
@endif

@endsection

@section('title', $title ?? 'Task 9')