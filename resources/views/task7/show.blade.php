@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 7 практики' }}</h2><br>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Пол</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Дата рождения</th>
        <th>Возраст</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Зарплата</th>
        <th>Город</th>
        <th>Дата и время создания</th>
    </tr>
        @foreach ($users as $user)
        <tr>
        <td>{{$user->id ?? 'Не указано'}}</td>
        <td>{{$user->sex ?? 'Не указано'}}</td>
        <td>{{$user->first_name ?? 'Не указано' }}</td>
        <td>{{$user->second_name ?? 'Не указано' }}</td>
        <td>{{$user->birth_date ?? 'Не указано'}}</td>
        <td>{{$user->age ?? 'Не указано'}}</td>
        <td>{{$user->email ?? 'Не указано'}}</td>
        <td>{{$user->avatar ?? 'Не указано'}}</td>
        <td>{{$user->salary ?? 'Не указано'}}</td>
        <td>{{$user->cities_id ?? 'Не указано'}}</td>
        <td>{{$user->created_at ?? 'Не указано'}}</td>
        </tr>
        @endforeach
</table>

@endsection

@section('title', $title ?? 'Task 7')