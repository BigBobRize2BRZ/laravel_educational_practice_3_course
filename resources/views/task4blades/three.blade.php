@extends('components.layout')

@section('content')
<h2>Задание 7-8</h2>
<p>Имя: {{ $employee['name'] }}</p>
<p>Возраст: {{ $employee['age'] }}</p>
<p>Зарплата: {{ $employee['salary'] }}</p>

<p>Количество элементов в массиве: {{ count($employee) }}</p>


@endsection

@section('title', $title ?? 'Task 4')