<?php

use App\Http\Controllers\FotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');


Route::get('/foto', [FotoController::class, 'index'])->name('foto');

Route::get('/tambahfoto', [FotoController::class, 'tambahfoto'])->name('tambahfoto');
Route::post('/insertfoto', [FotoController::class, 'insertfoto'])->name('insertfoto');

Route::get('/tampilfoto/{id}', [FotoController::class, 'tampilfoto'])->name('tampilfoto');
Route::post('/updatefoto/{id}', [FotoController::class, 'updatefoto'])->name('updatefoto');

Route::get('/deletefoto/{id}', [FotoController::class, 'deletefoto'])->name('deletefoto');