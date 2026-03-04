@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<p>
    Имя пользователя: <b>{{ $userName }}</b>
</p>
<p>
    Возраст пользователя: <b>{{ $userAge }}</b>
</p>
<p>
    Зарплата пользователя: <b>{{ $userSalary }}</b>
</p>

@endsection

@section('title', $title ?? 'Task 9')
