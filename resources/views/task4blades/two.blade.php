@extends('components.layout')

@section('content')
<h2>Задание 2-6</h2>
<p class="{{ $class }}">Текст для задания 2</p>

<div class="input-container d-flex flex-column">
    <input value="{{ $value1 }}">
    <input value="{{ $value2 }}">
    <input value="{{ $value3 }}">
</div>

<a href="{{ $href }}">{{ $text }}</a>

<p>Дата: {{ date("d.m.y") }}</p>

@endsection

@section('title', $title ?? 'Task 4')