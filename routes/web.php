<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('pages.login');
})->name('login');

Route::resource('/customer', CustomerController::class)->middleware('LoginSek');




// Rute untuk halaman login
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

// Rute untuk login
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk halaman register
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Rute untuk register
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
