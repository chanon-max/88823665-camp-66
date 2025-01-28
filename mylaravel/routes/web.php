<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\HomeController;

Route::get('/hello', function () {
    return "<h1>HELLO WOLRD</h1>";
});

Route::get(
    '/mycontroller/{id?}',
    [MyController::class, 'myfunction']
);

Route::post(
    '/mycontroller/{id?}',
    [MyController::class, 'myfunction']
);

Route::get('/', function () {
    return view('layouts.default');
});

Route::get(
    '/hello/{id?}',
    function ($val = "") {
        return "<h1>Hello World $val</h1>";
    }
);
Route::get(
    '/login',
    [loginController::class, 'index']
);
Route::get('/register',
    [RegisterController::class, 'index']);

    Route::get('/home',
    [HomeController::class, 'index']);
