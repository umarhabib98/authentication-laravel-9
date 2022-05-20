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

Route::get('/', function () {
    return view('pages/home');
});

//login
Route::get('/login', function () {
    return view('auth/login');
})->name('login');
//register
Route::get('/register', function () {
    return view('auth/register');
})->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/aus-wine-login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('aus-wine-login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/wines-list', [App\Http\Controllers\WineController::class, 'index'])->name('wines-list');

//staff route
Route::group(['middleware' => ['role:staff']], function () {
Route::post('/store', [App\Http\Controllers\WineController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\WineController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\WineController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\WineController::class, 'delete'])->name('delete');
Route::get('/creat/wine', function () {
    return view('pages/create-wine');
});
});