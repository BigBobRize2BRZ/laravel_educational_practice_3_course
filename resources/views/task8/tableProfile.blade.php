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
        @foreach ($profiles as $profile)
        <tr>
        <td>{{$profile->id ?? 'Не указано'}}</td>
        <td>{{$profile->name ?? 'Не указано'}}</td>
        <td>{{$profile->surname ?? 'Не указано' }}</td>
        <td>{{$profile->email ?? 'Не указано' }}</td>
        <td>{{$profile->user->login ?? 'Не указано'}}</td>
        <td>{{$profile->user->password ?? 'Не указано'}}</td>
        </tr>
        @endforeach
</table>

@endsection

@section('title', $title ?? 'Task 8')
