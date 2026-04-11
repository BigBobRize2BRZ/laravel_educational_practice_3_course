@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 11 практики' }}</h2><br>

<h2>Время первого захода: {{ $firstVisit }}</h2>
<h2>Текущее время: {{ $currentTime }}</h2>
<a href="{{ url('/session/first-visit') }}">Обновить</a>
@endsection

@section('title', $title ?? 'Task 11')