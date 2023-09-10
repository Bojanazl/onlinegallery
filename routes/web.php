<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PostController;


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

/*-------Web Page Routes-------*/

/*Welcome page*/
Route::get('/', function () {
    return view('pages/welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('pages/welcome');
})->name('home');

/*Gallery page*/
Route::get('/paintings', function() {
    return view('pages/paintings');
});

/*Sculptures page*/

/*Advices page*/

/*Art Blog page*/
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');




Route::controller(UserController::class)->group(function() {
    Route::get('/home', 'index')->name('index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'show']);

Auth::routes();


