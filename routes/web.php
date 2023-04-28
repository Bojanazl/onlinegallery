<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\Auth\LoginRegisterController;

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

/*Welcome page*/
Route::get('/', function () {
    return view('welcome');
});

/*Welcome page*/
Route::get('/welcome', function () {
    return view('welcome');
});

/*Sends to Dashboard*/
Route::get('/dashboard', function () {
    return view('/auth/dashboard');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/image-gallery', [ImageGalleryController::class, 'index']);
Route::post('/image-gallery', [ImageGalleryController::class, 'upload']);
Route::delete('/image-gallery/{id}', [ImageGalleryController::class, 'destroy']);

Auth::routes();

