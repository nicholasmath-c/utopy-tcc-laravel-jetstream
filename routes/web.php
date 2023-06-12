<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\GenreGameController;
use App\Http\Controllers\Admin\AdminGameController;
use App\Http\Controllers\User\ShopcartController;
use App\Http\Controllers\Shop\ShopController;
use App\Models\Game;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('shop')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('shop');
        Route::get('/game/{id}/{title}', [ShopController::class, 'product'])->name('game-page');
    });

});


// ************ Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin');
    Route::resource('genre-game', GenreGameController::class);
    Route::resource('game', AdminGameController::class);
});

Route::prefix('user')->group(function () {
    Route::resource('/shopcarts', ShopcartController::class);

    Route::get('/library', function () {
        return view('client.library');
    });
});




