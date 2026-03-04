@extends('components.layout')

@section('content')
<h2>Задание {{ $taskNumber ?? 'из 9 практики' }}</h2><br>

@if (!empty($userCity) && !empty($userCountry))
<p>Город пользователя: <b>{{ $userCity ?? '' }}</b></p>
<p>Город пользователя: <b>{{ $userCountry ?? '' }}</b></p>
@endif

<form action="" method="POST">
    @csrf
    <p>
    <p>Введите город пользователя</p>
    <input name="city">
    </p>
    <p>
    <p>Введите страну пользователя</p>
    <input name="country">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

@endsection

@section('title', $title ?? 'Task 9')