<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UlalaController;
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



Route::get('/foto', [UlalaController::class, 'index'])->name('foto');

Route::get('/tambahfoto', [UlalaController::class, 'tambahfoto'])->name('tambahfoto');
Route::post('/insertfoto', [UlalaController::class, 'insertfoto'])->name('insertfoto');

Route::get('/tampilkandatafoto/{id}', [UlalaController::class, 'tampilkandatafoto'])->name('tampilkandatafoto');
Route::post('/updatedatafoto/{id}', [UlalaController::class, 'updatedatafoto'])->name('updatedatafoto');

Route::get('/deletedatafoto/{id}', [UlalaController::class, 'deletedatafoto'])->name('deletedatafoto');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');