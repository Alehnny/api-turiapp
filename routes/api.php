<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PlaceVisitedController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TownController;
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
    Route::controller(DepartmentController::class)->prefix('/department')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::get('/{id}/towns', 'showTowns');
    });

    Route::controller(TownController::class)->prefix('/town')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::get('/department/{id}', 'showWithDepartament');
    });

    Route::controller(CommentController::class)->prefix('/comment')->group(function () {
        Route::post('/create', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
        Route::get('/{id}', 'show');
        Route::get('/user/{id}', 'showCommentsToUser');
        Route::get('/tourist-place/{id}', 'showCommentsToTouristPlace');
    });

    Route::controller(PlaceVisitedController::class)->prefix('/place-visited')->group(function () {
        Route::post('/create', 'store');
        Route::get('/user/{id}', 'showWithUser');
    });

    Route::controller(PriceController::class)->prefix('/price')->group(function () {
        Route::get('/tourist-place/{id}', 'showWithTouristPlace');
        Route::post('/create', 'store');
        Route::put('/{id}', 'update');
    });
});
