<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
        Route::post('/register', [UserController::class, 'register']);
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/forget/password', [UserController::class, 'forget_password_code']);
    });


    Route::group(['middleware' => 'jwt.verify', 'prefix' => "user"], function () {
        //user
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/profile/update', [UserController::class, 'update_profile']);
        Route::post('/logout', [UserController::class, 'logout']);
    });

    Route::group(['middleware' => 'jwt.verify', 'prefix' => "post"], function () {
        Route::post('comment', [PostController::class, 'addComment']);
    });

    Route::group([  'prefix' => "post"], function () {
        Route::get('/all', [PostController::class, 'posts']);
        Route::post('/', [PostController::class, 'selectPosts']);
    });

