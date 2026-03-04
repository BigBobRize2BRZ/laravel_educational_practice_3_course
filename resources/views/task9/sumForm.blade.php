@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<form action="/result">
    <p>
        <p>Введите первое число</p>
        <input name="number-1">
    </p>
    <p>
        <p>Введите второе число</p>
        <input name="number-2">
    </p>
    <p>
        <p>Введите третье число</p>
        <input name="number-3">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@endsection

@section('title', $title ?? 'Task 9')