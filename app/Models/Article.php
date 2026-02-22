<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Article extends Model
{
    //! 7) Модели

    use HasFactory;
    protected $table = 'blog_articles';
    protected $guarded = ['views_count'];
    protected $fillable = ['title', 'body'];


    // Задание 19

    // Добавлят глобальный скоуп PublishedScope
    protected static function booted()
    {
        static::addGlobalScope(new PublishedScope);
    }

    // Задание 21

    /**
     * Аксессор: при чтении заголовка каждое слово с заглавной буквы
     */

    protected function title(): Attribute
    {
        return Attribute::make(
            // get – это аксессор, который преобразует значение при чтении свойства
            get: fn (string $value) => mb_convert_case($value, MB_CASE_TITLE, 'UTF-8'), // аналог ucwords для кириллицы
            // set – это мутатор, который обрабатывает значение перед сохранением в базу
            set: fn (string $value) => trim(strip_tags($value))
        );
    }
}
