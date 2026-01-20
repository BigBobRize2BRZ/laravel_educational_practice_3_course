<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//! 1) Маршруты

// Route::get('/', function () {
//     return view('Главная страница сайта');
// });

// // Задание 1

// Route::get('/test', function(){
//     return '!';
// });

// // Задание 2

// Route::get('dir/test', function(){
//     return '!!';
// });

// // Задание 3

// Route::get('/user/{name}', function($name) {
//     return "Имя юзера: {$name}";
// })->where(['name' => '[A-Za-z]+']);

// // Задание 4

// Route::get('/user/{surname}/{name}', function($surname, $name) {
//     return "Фамилия юзера: {$surname},<br> Имя Юзера: {$name}";
// })->where(['surname' => '[A-Za-z]+', 'name' => '[A-Za-z]+']);


// // Задание 5

// Route::get('/city/{city?}', function($city = 'minsk') {
//     return "Город: {$city}";
// })->where(['city' => '[A-Za-z]+']);

// // Задание 6-8

// Route::get('/post/{id}', function($id) {
//     return "Post page {$id},";
// })->where(['id' => '[0-9]+']); // Выдаст 404 если не цифрами вбить 

// // Задание 9

// Route::get('/user/{id}/{name}', function($id, $name) {
//     return "Id: {$id}, Name: {$name}";
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z_-]{3,}']);  

// // Задание 10

// Route::get('/posts/{date}', function($date) {
//     return "Дата: {$date}";
// })->where(['date' => '[0-9]{4}-[0-9]{2}-[0-9]{2}']); 

// // Задание 11

// Route::get('/{year}/{month}/{day}', function($year, $month, $day) {
//     return "Дата: {$year}-{$month}-{$day}";
// })->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}', 'day' => '[0-9]{2}']); 

// // Задание 12

// Route::get('/users/{order}', function($order) {
//     return "order: {$order}";
// })->where(['order' => 'name|surname|age']);  

// // Задание 13

// Route::get('/user/{id}', function($id) {
//     return "id: {$id}";
// })->whereNumber('id'); 

// // Задание 14

// Route::get('/city/{name}', function($name) {
//     return "City name: {$name}";
// })->whereAlpha('name'); 
// // Для букв и цифр whereAlphaNumeric

// // Задание 15

// Route::get('/test/{slug}', function($slug) {
//     return "slug: {$slug}";
// }); 



// // Задание 16

// Route::get('/user/{id}', function($id) {
//     return "id: {$id}";
// })->whereNumber('id'); 

// // Задание 17

// Route::get('/user/{id}/{name}', function($id, $name) {
//     return "Id: {$id}, Name: {$name}";
// })->where(['id' => '[0-9]+', 'name' => '[a-z]{3,}']); 

// // Задание 18

// Route::get('/articles/{date}', function($date) {
//     return "Дата: {$date}";
// })->where(['date' => '[0-9]{4}-[0-9]{2}-[0-9]{2}']); 

// // Задание 19

// Route::get('/users/{order}', function($order) {
//     return "order: {$order}";
// })->where(['order' => 'name|surname|age']);

// // Задание 20

// Route::get('/{year}/{month}/{day}', function($year, $month, $day) {
//     $date = "{$year}-{$month}-{$day}";
//     return "День недели: " . date('l', strtotime($date));
// })->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}', 'day' => '[0-9]{2}']); 


//! 2) Контроллеры

// Задание 1-5

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);

// Задание 6-7

Route::get('/user/{name}', [UserController::class, 'name'])->whereAlpha('name');
Route::get('/user/{surname}/{name}', [UserController::class, 'surnameName'])->whereAlpha('surname')->whereAlpha('name');


// Задание 8-9

Route::get('/users/{user}', [UserController::class, 'sendIntoTown']);

// Задание 10-11

Route::get('/pages/show/{id}', [TypeController::class, 'showOne'])->where(['id' => '[0-9]+']);
Route::get('/pages/all', [TypeController::class, 'showAll']);

// Задание 12

Route::get('/test/sum/{num1}/{num2}', [TestController::class, 'sum'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);



//! 3) Представления

// Задание 1-3

Route::get('/post/show', [TestController::class, 'show']);

// Задание 5-6

Route::get('/post/show2', [TestController::class, 'show2']);

// Задание 7-11

Route::get('/post/test1', [TestController::class, 'test1']);
Route::get('/post/test2', [TestController::class, 'test2']);
Route::get('/post/test3', [TestController::class, 'test3']);

