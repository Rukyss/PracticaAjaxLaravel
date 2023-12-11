<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalesTakeliController;

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

Route::get('/pepe', function () {
    return view('welcome');
});

Route::get('/dameAnimales', [AnimalesTakeliController::class, 'getAnimales']);

Route::get('/vistaParaAjax', function () {
    return view('prueba');
});