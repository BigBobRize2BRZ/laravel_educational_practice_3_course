@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 8 практики' }}</h2><br>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Логин</th>
        <th>Пароль</th>
    </tr>
        @foreach ($users as $user)
        <tr>
        <td>{{$user->profile->id ?? 'Не указано'}}</td>
        <td>{{$user->profile->name ?? 'Не указано'}}</td>
        <td>{{$user->profile->surname ?? 'Не указано' }}</td>
        <td>{{$user->profile->email ?? 'Не указано' }}</td>
        <td>{{$user->login ?? 'Не указано'}}</td>
        <td>{{$user->password ?? 'Не указано'}}</td>
        </tr>
        @endforeach
</table>

@endsection

@section('title', $title ?? 'Task 8')
