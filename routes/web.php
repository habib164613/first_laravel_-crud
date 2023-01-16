<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonebookController;

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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('phone-book', [PhonebookController::class, 'index'])->name('phone-book.index');
Route::get('phone-book/create', [PhonebookController::class, 'create'])->name('phone-book.create');
Route::post('phone-book', [PhonebookController::class, 'store'])->name('phone-book.store');
Route::get('phone-book/{id}', [PhonebookController::class, 'show'])->name('phone-book.show');
Route::get('phone-book/{id}/edit', [PhonebookController::class, 'edit'])->name('phone-book.edit');
Route::put('phone-book/{id}', [PhonebookController::class, 'update'])->name('phone-book.update');
Route::delete('phone-book/{id}', [PhonebookController::class, 'destroy'])->name('phone-book.destroy');
