@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 11 практики' }}</h2><br>

<form method="POST" action="{{ route('flash.submit') }}">
    @csrf
    <input type="text" name="name" placeholder="Ваше имя">
    <button>Отправить</button>
</form>
@endsection

@section('title', $title ?? 'Task 11')