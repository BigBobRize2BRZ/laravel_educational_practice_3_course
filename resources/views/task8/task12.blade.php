@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 8 практики' }}</h2><br>

@foreach ($countries as $country)
<div>
    <h2>{{ $country->name }}</h2>
    <ul>
        @foreach ($country->cities as $city)
            <li>{{ $city->name }}</li>
        @endforeach
    </ul>
</div>
@endforeach

@endsection

@section('title', $title ?? 'Task 8')