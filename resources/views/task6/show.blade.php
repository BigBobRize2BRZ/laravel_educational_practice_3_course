@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 6 практики' }}</h2>

@foreach ($users as $user)
<div>
    <h5>Фамилия: {{ $user->second_name ?? 'Не указано' }}, Имя: {{ $user->first_name ?? 'Не указано' }}</h5>
</div>
<div>
    <ul>
        <li>id: {{$user->id ?? 'Не указано'}}</li>
        <li>Пол: {{$user->sex ?? 'Не указано'}}</li>
        <li>Дата рождения: {{$user->birth_date ?? 'Не указано'}}</li>
        <li>Возраст: {{$user->age ?? 'Не указано'}}</li>
        <li>Email: {{$user->email ?? 'Не указано'}}</li>
        <li>Avatar: {{$user->avatar ?? 'Не указано'}}</li>
        <li>Зарплата: {{$user->salary ?? 'Не указано'}}</li>
    </ul>
</div>
@endforeach

@endsection

@section('title', $title ?? 'Task 6')