<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    //'register' => false
]);

Route::get('/', 'PizzaController@welcome')->name('pizzas.welcome');
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');
Route::get('/kebab/create', 'KebabController@create')->name('kebab.create');
Route::get('/kebab', 'KebabController@orders')->name('kebab.orders');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pizzas{id}', 'PizzaController@test');
