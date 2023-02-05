<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::prefix('/user')->group(function()
// {
//     Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
// });

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [App\Http\Controllers\AuthController::class,'login']);
    Route::post('signup', [App\Http\Controllers\AuthController::class,'signup']);

    Route::group([
    'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [App\Http\Controllers\AuthController::class,'logout']);
        Route::get('user', [App\Http\Controllers\AuthController::class, 'user']);
    });
});

Route::get('/Paintings/location/{location}', [App\Http\Controllers\PaintingController::class, 'show1']);
Route::post('/Paintings/available/{location}', [App\Http\Controllers\PaintingController::class, 'available']);
Route::get('/Paintings/like/{location}/{searcha}', [App\Http\Controllers\PaintingController::class, 'LocationLike']);


Route::post('/Order/store', [App\Http\Controllers\OrderController::class, 'store']);
Route::get('/Orders/{id}', [App\Http\Controllers\OrderController::class, 'show']);

Route::post('/applogin', [App\Http\Controllers\HomeController::class, 'applogin'])->name('applogin');

Route::get('/Users', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth');
Route::get('/Users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth');
Route::post('/Users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth');

Route::get('/Previews/{id}', [App\Http\Controllers\PreviewController::class, 'index']);
Route::post('/Previews/store', [App\Http\Controllers\PreviewController::class, 'store']);
