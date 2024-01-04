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


Route::resource('cars', CarController::class);
Route::resource('brands', BrandController::class);
Route::resource('models', CarModelController::class);
Route::resource('features', FeatureController::class);


Route::get('/inserir-carros', [CarController::class, 'showInsertForm'])->name('insert-cars-form');