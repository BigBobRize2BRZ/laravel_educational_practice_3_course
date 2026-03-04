@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

<p>
    Сумма чисел: <b>{{ $sum }}</b>
</p>

@endsection

@section('title', $title ?? 'Task 9')