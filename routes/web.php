<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/cosmetic', [App\Http\Controllers\CosmeticController::class, 'index']);
Route::get('/cosmetic/create', [App\Http\Controllers\CosmeticController::class, 'create']);
Route::post('/cosmetic', [App\Http\Controllers\CosmeticController::class, 'store']);
Route::get('/cosmetic/{id}/edit', [App\Http\Controllers\CosmeticController::class, 'edit']);
Route::patch('/cosmetic/{id}', [App\Http\Controllers\CosmeticController::class, 'update']);
Route::delete('/cosmetic/{id}', [App\Http\Controllers\CosmeticController::class, 'destroy']);

