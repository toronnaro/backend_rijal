<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UlalaController;

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
Route::get('/foto', [UlalaController::class, 'index'])->name('foto');

Route::get('/tambahfoto', [UlalaController::class, 'tambahfoto'])->name('tambahfoto');
Route::post('/insertfoto', [UlalaController::class, 'insertfoto'])->name('insertfoto');

Route::get('/tampilkandatafoto/{id}', [UlalaController::class, 'tampilkandatafoto'])->name('tampilkandatafoto');
Route::post('/updatedatafoto/{id}', [UlalaController::class, 'updatedatafoto'])->name('updatedatafoto');