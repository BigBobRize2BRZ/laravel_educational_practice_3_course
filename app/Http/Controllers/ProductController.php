<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    //! 7) Модели
    public function create()
    {
        $product = Product::create([
            'name'  => 'Ноутбук',
            'price' => 55000.50,
            'quantity' => 10,
        ]);

        dd($product->toArray());
    }

    public function eloquent()
    {
        $allProducts = Product::all();
        dump($allProducts);

        $productById = Product::find(5);
        dump($productById);

        $firstProduct = Product::first();
        dump($firstProduct);

        try {
            $product = Product::findOrFail(1676776);
        } catch (ModelNotFoundException $e) {
            echo "Товара с указанным ID не существует.";
        }
    }

    public function createMethod1()
    {
        $product = new Product();
        $product->name = 'Новый товар';
        $product->price = 199.99;
        $product->quantity = 5;
        $product->save();
    }

    public function createMethod2()
    {
        $product = Product::create([
            'name' => 'Новый товар',
            'price' => 199.99,
            'quantity' => 5,
        ]);
    }

    public function findAndUpdate()
    {
        $product = Product::find(3);
        $product->price = 999.99;
        $product->save();

        Product::where('quantity', 0)->update(['is_active' => 0]);
    }

    public function delete()
    {
        $product = Product::find(11);
        $product->delete();

        Product::where('price', '<', '10')->delete();

        Product::destroy(12);
    }

    public function filtiring()
    {
        // // Задание 11
        // $products = Product::where('price', '>', '500')
        //     ->where('is_active', 1)
        //     ->orderBy('price', 'desc')
        //     ->get();

        // dump($products);


        // // Задание 13
        // $productsPriceRange = Product::whereBetween('price', [100, 500])->get();
        // dump($productsPriceRange);

        // $productsQuantityIn = Product::whereIn('quantity', [0, 5, 10, 15])->get();
        // dump($productsQuantityIn);


        // // Задание 15
        // $products = Product::where(function ($query) {
        //     $query->where('price', '>', 1000)
        //         ->where('quantity', '>', 0);
        // })
        //     ->orWhere('is_active', false)
        //     ->get();

        // dump($products);


        // Задание 16
        $activeCount = Product::where('is_active', true)->count();
        echo "Количество всех активных товаров: {$activeCount}<br>";

        $averagePrice = Product::avg('price');
        echo "Средняя цена товара: {$averagePrice}<br>";

        $maxPrice = Product::max('price');
        $minPrice = Product::min('price');
        echo "Максимальная цена товара: {$maxPrice}<br>";
        echo "Минимальная цена товара: {$minPrice}<br>";

        $totalQuantity = Product::sum('quantity');
        echo "Сумма всех quantity: {$totalQuantity}<br>";

        // Задание 17
        $groupedStats = Product::selectRaw('is_active, count(*) as count, avg(price) as avg_price')
            ->groupBy('is_active')
            ->get();
        dump($groupedStats);
    }

    public function scopes()
    {
        // Задания 18
        $products = Product::active()->expensive(500)->get();

        dump($products);
    }

    public function casts()
    {
        $product = Product::create([
            'name'     => 'Смартфон',
            'price'    => 29999.99,
            'quantity' => 15,
            'is_active' => true,
            'options'  => [
                'color'    => 'black',
                'size'  => 'XL',
                'weight' => '2 kg',
                'material' => 'plastic'
            ]
        ]);

        dump($product->options);
    }
}
