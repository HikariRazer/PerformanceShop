<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    ProductController,
    HomeController,
    CategoryController,
    BrandController
};

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

Route::get('/',[HomeController::class, 'index']);

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'product' => ProductController::class
    ]);

    Route::prefix('products')->group(function () {
        Route::resources([
            'category' => CategoryController::class
        ]);
        Route::resources([
            'brand' => BrandController::class
        ]);
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
