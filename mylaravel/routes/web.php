<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});
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
