<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');

Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
