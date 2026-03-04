@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<form action="" method="POST">
    @csrf
    <p>
    <p>Введите значение 1</p>
    <input name="value-1">
    </p>
    <p>
    <p>Введите значение 2</p>
    <input name="value-2">
    </p>
    <p>
    <p>Введите значение 3</p>
    <input name="value-3">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@if (!empty($data))
<ul>
    @foreach ($data as $value)
    <li>Значение: {{ $value }}</li>
    @endforeach
</ul>
@endif

@endsection

@section('title', $title ?? 'Task 9')