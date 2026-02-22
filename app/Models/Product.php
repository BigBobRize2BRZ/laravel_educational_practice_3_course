<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    //! 7) Модели
    
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'quantity', 'is_active', 'options'];

    // Задание 20
    protected $casts = [
        'is_active' => 'boolean',
        'price'     => 'decimal:2',
        'options'   => 'array', // JSON в базе -> массив PHP
    ];

    // Задания 18

    // Локальный скоуп для активных товаров
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Локальный скоуп для товаров дороже заданной цены
    public function scopeExpensive($query, $price)
    {
        return $query->where('price', '>', $price);
    }
}
