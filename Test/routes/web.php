<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSampahController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view ('home');
});

Route::get('/bantuan', function () {
    return view ('bantuan');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('
dashboard', function() {
    return view ('dashboard.index');
})->middleware('auth');

Route::get('
/dashboard/keranjang', function() {
    return view ('dashboard.keranjang.index');
})->middleware('auth');

Route::get('
/dashboard/jualsampah', function() {
    return view ('dashboard.jualsampah.index');
})->middleware('auth');

Route::resource('/dashboard/setting', DashboardSampahController::class)->middleware('auth');
