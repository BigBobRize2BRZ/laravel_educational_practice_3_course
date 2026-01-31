@extends('components.layout')

@section('content')
<h2>Задание 1</h2>
<p>{{ $name }}</p>
<p>{{ $age }}</p>
<p>{{ $salary }}</p>
@endsection

@section('title', $title ?? 'Task 4')