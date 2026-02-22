<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Scopes\PublishedScope;
/* Для работы с датами и временем */
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function create()
    {
        $article = Article::create([
            'title' => 'Новая статья',
            'body'  => 'Текст статьи...',
        ]);

        dd($article->toArray());
    }

    public function filtiring()
    {
        // // Задание 12
        // $articles = Article::where('title', 'LIKE', '%Laravel%')
        //     ->orWhere('views_count', '>', 1000)
        //     ->limit(10)
        //     ->offset(5)
        //     ->get();

        // dump($articles);        


        // // Задание 14
        // $articles = Article::whereNotNull('published_at')
        //     ->whereDate('created_at', Carbon::today())
        //     ->get();

        // dump($articles);
    }

    public function scopes()
    {
        // Отключает конкретный скоуп для конкретного запроса
        $articles = Article::withoutGlobalScope(PublishedScope::class)->get();

        // Отключает все глобальные скоупы
        $articles = Article::withoutGlobalScopes()->get();
    }

    public function attribute()
    {
        $article = Article::create([
            'title' => '  новый заголовок с тегами <b>важно</b>  ',
            'body'  => 'Текст статьи...'
        ]);

        echo $article->title;
    }
}
