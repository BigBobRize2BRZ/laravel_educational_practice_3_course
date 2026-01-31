@extends('components.layout')

@section('content')
<h2>Задание 14-39</h2>
<p>
    @if ($age > 18)
    Вы совершеннолетний
    @elseif ($age = 18)
    Вам 18
    @else
    Вы несовершеннолетний
    @endif
</p>

@unless($age1 >= 18)
<p>Вы несовершеннолетний</p>
@endunless

@if (count($arrOfNum) > 0)
<p>Количество элементов в массиве чисел: {{ count($arrOfNum) }}</p>
@else
<p>Количество чисел в массиве равно нулю</p>
@endif

<ul>
    @foreach ($arrOfNum as $num)
    <li style="list-style-type: square;">Квадрат элемента массива чисел: {{ $num ** 2  }}</li><br>
    @endforeach
</ul>

<ul>
    @foreach ($arrOfStr as $key => $str)
    <li>{{ $key + 1 }} - {{ $str }}</li><br>
    @endforeach
</ul>

<ul>
    @foreach ($arrOfNum as $num)
    @if ($num % 2 == 0)
    <li>{{ $num }}</li><br>
    @endif
    @endforeach
</ul>

@if (is_array($data))
<ul>
    @foreach ($data as $num)
    <li>{{ $num }}</li><br>
    @endforeach
</ul>
@elseif (is_int($data))
<p>{{ $data }}</p>
@endif


<table>
    @foreach ($nestedArr as $subArr)
    <tr>
        @foreach ($subArr as $elem)
        <td>{{ $elem }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

<ul>
    @foreach ($employees as $employee)
    <li>Имя: {{ $employee['name'] }}</li>
    <li>Фамилия: {{ $employee['surname'] }}</li>
    <li>Зарплата: {{ $employee['salary'] }}</li>
    <br>
    @endforeach
</ul>

<table>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{ $employee['name'] }}</td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
    @endforeach
</table>
<br>


@forelse ($usersNames as $userName)
<p>{{ $userName }}</p>
@empty
<p>В массиве нет элементов</p>
@endforelse

<ul>
    @foreach ($usersNames as $elem)
    <li class="@if($loop->first)first @elseif($loop->last)last @endif">
        {{ $loop->iteration }}: {{ $elem }}
    </li>
    @endforeach
</ul>

@foreach ($arrOfNum as $elem)
@if($loop->iteration <= count($arrOfNum) - 3)
    <b>{{ $elem }}</b>
    @else
    <i>{{ $elem }}</i>
    @endif
    @endforeach


    <ul>
        @foreach ($arrOfNum as $elem)
        <li>{{ $elem }}</li>

        @break($elem == 0)
        @endforeach
    </ul>

    <ul>
        @foreach ($arrOfNum as $elem)
        @if ($elem == 0)
        @continue
        @endif
        <li>{{ $elem }}</li>
        @endforeach
    </ul>

    @for ($i = 1; $i < 11; $i++)
        <p>Значение счётчика: {{ $i }}</p>
    @endfor

    @php
        echo 123;
    @endphp

    <ul>
        @foreach ($links as $link)
            <li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
        @endforeach
    </ul>





    @endsection

    @section('title', $title ?? 'Task 4')