<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CountryController::class, 'index'])->name('home');
// Route::get()
Route::get('/buat', [CountryController::class, 'create'])->name('country.tambah-data');
Route::post('/buat-data', [CountryController::class, 'store'])->name('country.buat-data');

// edit
Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/update/{id}', [CountryController::class, 'update'])->name('country.update');

// delete
Route::delete('/delete/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

// show
Route::get('/detail/{id}', [CountryController::class, 'show'])->name('country.show');

Route::get('count', 'CountryController@count');