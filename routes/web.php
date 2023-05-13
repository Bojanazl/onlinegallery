<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\Auth\LoginRegisterController;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategorieController;

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
});

/*Welcome page*/
Route::get('/welcome', function () {
    return view('pages/welcome');
});

/*Gallery page*/
Route::get('/paintings', function() {
    return view('pages/paintings');
});
/*Sculptures page*/
/*Advices page*/
/*Art Blog page*/


/*-------Content Manager Routes-------*/

/*Sends to Dashboard*/
Route::get('/dashboard', function () {
    return view('/auth/dashboard');
});

/*Sends to login, register or dashboard*/
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

/*Sends to image-gallery to upload or delete images*/
Route::controller(ImageGalleryController::class)->group(function() {
    Route::get('/image-gallery', 'index')->name('image-gallery');
    Route::post('/image-gallery', 'upload')->name('image-gallery');
    Route::delete('/image-gallery/{id}', 'destroy')->name('image-gallery');
});

/*Routes for users*/
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategorieController::class);
});

/*Route::get('/home', [HomeController::class, 'index'])->name('home');*/

Route::controller(UserController::class)->group(function() {
    Route::get('/home', 'index')->name('index');
});

Route::controller(CategorieController::class)->group(function() {
    Route::get('/categorie', 'index')->name('index');
});

Auth::routes();




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
