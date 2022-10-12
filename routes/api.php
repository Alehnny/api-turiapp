<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->prefix('/auth')->group(function () {
    Route::post('/login', 'loginUser')->name('login');;
    Route::post('/register', 'createUser')->name('register');
});

Route::middleware('auth:sanctum')->group(function () {
    /* Route::controller(Department::class)->prefix('/department')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
    }); */
});
