<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LoginController::class, 'show'])->name('login');
Route::post('/', [LoginController::class, 'auth'])->name('login.auth');

Route::resource('bunga', BungaController::class) ->name('index', 'bunga');

Route::get('/bunga', [BungaController::class, 'index']) ->name('home.bunga');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    Route::get('/data-pengguna',[HomeController::class,'showDataPengguna'])->name('home.showDataPengguna');
});