<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::prefix('dashboard')->group(function () {
    Route::get('/',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('products')->group(function () {
        Route::resources([
            'category' => App\Http\Controllers\CategoryController::class
        ]);
        Route::resources([
            'product' => App\Http\Controllers\ProductController::class
        ]);
        Route::resources([
            'brand' => App\Http\Controllers\BrandController::class
        ]);
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
