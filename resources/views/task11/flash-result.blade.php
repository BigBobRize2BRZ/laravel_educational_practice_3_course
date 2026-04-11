@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 11 практики' }}</h2><br>

@if(session('success'))
<div style="color: green;">{{ session('success') }}</div>
@else
<p>Сообщения нет (обновите страницу – оно пропало).</p>
@endif
<a href="/session/flash-form">Назад</a>
@endsection

@section('title', $title ?? 'Task 11')