<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');

});
// Route::get('/aboutus', function () {
//     return view('layouts.book');

// });
Route::get('/harga', [IndexController::class, 'harga']);
Route::get('/service', [IndexController::class, 'service']);
Route::get('/doctor', [IndexController::class, 'doctor']);
Route::get('/Bookingsucces', [IndexController::class, 'Bookingsuccess']);
Route::get('/booking', [IndexController::class, 'book']);
Route::get('/contact', [IndexController::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');