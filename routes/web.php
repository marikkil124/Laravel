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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', \App\Http\Controllers\Main\IndexController::class);

Route::prefix('admin')->group(function () {

    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);

    Route::prefix('categories')->group(function () {

        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)
        ->name('admin.category.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)
        ->name('admin.category.create');
        Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)
        ->name('admin.category.store');

    });

});
