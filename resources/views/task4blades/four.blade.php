@extends('components.layout')

@section('content')
<h2>Задание 9-13</h2>
<p>Город: {{ $city ?? 'Москва' }}</p>

<p>Страна: {{ $location['country'] ?? 'Россия' }}</p>
<p>Город: {{ $location['city'] ?? 'Москва' }}</p>

<p>
    Год: {{ $year ?? date('Y') }} <br>
    Месяц: {{ $month ?? date('m') }} <br>
    День: {{ $day ?? date('d') }} <br>
</p>

<p>Hello, {!! $str !!}</p>

{{-- Комментраий --}}



@endsection

@section('title', $title ?? 'Task 4')
