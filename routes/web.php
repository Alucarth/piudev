<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulationController;
use App\Http\Controllers\PersonController;

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

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('lista_postulantes',[PostulationController::class,'lista_postulantes']);

Route::resource('persona',PersonController::class);
