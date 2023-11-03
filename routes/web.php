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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::get('/admin/categories', 'App\Http\Controllers\Categories\CategoriesController@index')->name('categories_index');
    Route::post('/admin/categories/category_store', [App\Http\Controllers\Categories\CategoriesController::class, 'category_store'])->name('category_store');

});

