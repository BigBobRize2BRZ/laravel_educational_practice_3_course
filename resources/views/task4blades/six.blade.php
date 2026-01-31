@extends('components.layout')

@section('content')
<h2>Задание 40-48</h2>

<table>
    <tr>
        <th></th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
    </tr>
    @foreach ($employees as $employee)
    @if ($employee['salary'] > 2000)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $employee['name'] }}</td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
    @endif
    @endforeach
</table>
<br>

<table>
    <tr>
        <th></th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['surname'] }}</td>
        <td>
            @if ($user['banned'] == true)
            <span class="text-danger">Забанен</span>
            @elseif ($user['banned'] == false)
            <span class="text-success">Активен</span>
            @endif
        </td>
    </tr>
    @endforeach
</table>
<br>

@foreach ($arrOfStr as $str)
<p><input value="{{ $str }}"></p>
@endforeach

<select>
    @foreach ($arrOfStr as $str)
    <option value="{{ $str }}">{{ $str }}</option>
    @endforeach
</select>


<ul>
    @foreach ($daysOfMonth as $day)
    <li class="@if($day == $currentDay)active @endif">
        {{ $day }}
    </li>
    @endforeach
</ul>

@endsection

@section('title', $title ?? 'Task 4')