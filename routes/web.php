<?php

use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/keluhan', [KeluhanController::class, 'index']);
Route::get('/keluhan/{id}', [KeluhanController::class, 'detail']);
Route::post('/keluhan', [KeluhanController::class, 'action']);

Route::put('/action-formulir', function () {
    return 'Formulir berhasil diubah';
});

Route::resource('/pelanggan',PelangganController::class);