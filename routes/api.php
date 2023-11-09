<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::middleware(\App\Http\Middleware\OnlyMemberMiddleware::class)->group(function (){
    Route::controller(\App\Http\Controllers\UserController::class)->group(function (){
        Route::post('/users/login', 'login');
        Route::post('/users', 'register');
    });
    Route::controller(\App\Http\Controllers\EventPostController::class)->group(function (){
        Route::get('/posts', 'list');
    });
});
