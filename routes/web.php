<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController as AdminController;
use App\Http\Controllers\Game\GenreGameController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ************ Admin Routes
Route::get(
    '/admin',
    [AdminController::class, 'index']
)->name('admin');
Route::get(
    '/admin/genre-game',
    [GenreGameController::class, 'index']
)->name('game.genre.index');
Route::get(
    '/admin/genre-game/create',
    [GenreGameController::class, 'create']
)->name('game.genre.create');
Route::post(
    '/admin/genre-game/store',
    [GenreGameController::class, 'store']
)->name('game.genre.store');
