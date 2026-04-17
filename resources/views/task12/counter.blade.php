@extends('components.layout')

@section('content')
    <h2>Задание {{ $taskNumber ?? 'из 12 практики' }}</h2><br>

    <h1>Вы обновили страницу {{ $counter }} раз(а)</h1>
    <p>При первом заходе значение = 1.</p>
    <a href="{{ url('/cookie/counter') }}">Обновить страницу</a>
@endsection

@section('title', $title ?? 'Cookie Counter')
