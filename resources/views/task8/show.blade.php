@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 8 практики' }}</h2><br>

<h1>{{ $user }}</h1>
<h3>{{ $user }}</h3>
<h6>{{ $user }}</h6>
<p>{{ $user }}</p>

@endsection

@section('title', $title ?? 'Task 8')
