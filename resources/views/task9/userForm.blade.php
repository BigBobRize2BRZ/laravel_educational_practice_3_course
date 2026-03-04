@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<form action="/result" method="POST">
    @csrf
    <p>
        <p>Введите имя пользователя</p>
        <input name="name">
    </p>
    <p>
        <p>Введите возраст пользователя</p>
        <input name="age">
    </p>
    <p>
        <p>Введите зарплату пользователя</p>
        <input name="salary">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@endsection

@section('title', $title ?? 'Task 9')