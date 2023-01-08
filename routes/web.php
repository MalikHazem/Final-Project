<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintingController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/Vartgallery', [App\Http\Controllers\V_artgallery::class, 'index']);

Route::get('/Paintings', [App\Http\Controllers\PaintingController::class, 'main'])->name('home')->middleware('auth');
Route::get('/Paintings/showuser', [App\Http\Controllers\PaintingController::class, 'index'])->middleware('auth');
Route::get('/Paintings/showadmin', [App\Http\Controllers\PaintingController::class, 'showadmin'])->middleware('auth');
Route::get('/Paintings/create', [App\Http\Controllers\PaintingController::class, 'create'])->middleware('auth');
Route::post('/Paintings/store', [App\Http\Controllers\PaintingController::class, 'store'])->middleware('auth');
Route::get('/Paintings/edit/{id}', [App\Http\Controllers\PaintingController::class, 'edit'])->middleware('auth');
Route::post('/Paintings/update/{id}', [App\Http\Controllers\PaintingController::class, 'update'])->middleware('auth');
Route::get('/Paintings/delete/{id}', [App\Http\Controllers\PaintingController::class, 'destroy'])->middleware('auth');
Route::get('/Paintings/show_painting/{id}', [App\Http\Controllers\PaintingController::class, 'show_painting'])->middleware('auth');
Route::get('/Paintings/like', [App\Http\Controllers\PaintingController::class, 'Like'])->middleware('auth');

// Route::get('/Paintings', [App\Http\Controllers\PaintingController::class, 'main'])->name('home');
Route::get('/Paintings/{category}', [App\Http\Controllers\PaintingController::class, 'maincategory'])->middleware('auth');

Route::get('/Users', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth');
Route::get('/Users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth');
Route::post('/Users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth');
Route::post('/Users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->middleware('auth');
Route::get('/Users/passwordEdit', [App\Http\Controllers\UserController::class, 'PasswordEdit'])->middleware('auth');
Route::post('/Users/passwordUpdate', [App\Http\Controllers\UserController::class, 'PasswordUpdate'])->middleware('auth');

Route::post('/Orders/done/{id}', [App\Http\Controllers\OrderController::class, 'done'])->middleware('auth');
Route::post('/Orders/cancel/{id}', [App\Http\Controllers\OrderController::class, 'cancel'])->middleware('auth');
Route::get('/Orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware('auth');

Route::get('/logout', [App\Http\Controllers\UserController::class,'logout'])->middleware('auth');
