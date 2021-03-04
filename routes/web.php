<?php

// use App\Http\Controllers\Admin\CategoryController;

use Illuminate\Support\Facades\Auth;
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

Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
Route::get('/admin/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{id}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categories.update');
Route::get('/admin/categories/{id}/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{id}/destroy', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categories.destroy');

Route::post('/admin/categories/search', [App\Http\Controllers\Admin\CategoryController::class, 'search'])->name('categories.search');


// Route::resource('/admin/categories', 'Admin\CategoryController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
