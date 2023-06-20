<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController as AdminController;
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
    Route::get('/', [ShopController::class, 'index'])->name('home');
    Route::get('/produto/{id}', [ShopController::class, 'product'])->name('product');
});


// ************ Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('genre-game', GenreGameController::class);
    Route::resource('game', AdminGameController::class);
});

Route::prefix('user')->group(function () {
    #---- Routes Shopcarts
    Route::prefix('/shopcart')
        ->name('shopcart.')
        ->controller(ShopcartController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::post('/store/{id}','store')->name('store');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/checkout', 'checkout')->name('checkout');
    });
});

Route::prefix('shop')->group(function () {

    Route::get('/game-page', function () {
        return view('shop.game-page', [ 'game' => 1]);
    });

    Route::match(
        ['get', 'post'],
        'compras/historico',
        [ShopController::class, 'historic']
    )->name('shop.historic');
    Route::post(
        'compras/detalhes',
        [ShopController::class, 'details']
    )->name('shop.details');
    Route::match(
        ['get', 'post'],
        'compras/checkout',
        [ShopController::class, 'processCheckout']
    )->name('shop.checkout');
});
