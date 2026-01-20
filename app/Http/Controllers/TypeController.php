<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function showOne($id)
    {
        $square = $id*$id;

        $types = [
            '1' => 'страница 1',
            '2' => 'страница 2',
            '3' => 'страница 3',
            '4' => 'страница 4',
            '5' => 'страница 5',
        ];

        echo "Квадрат переданного числа: {$square} <br>";
        return "Элемент массива: " . ($types[$id] ?? 'Такого элемента нет'); 

    }

    public function showAll()
    {
        return 'Строка из showAll';
    }
}
