<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', [UserController::class, 'signup']);

Route::post('login', [UserController::class, 'login']);

Route::get('users', [UserController::class, 'index']);



Route::get('items', [ItemController::class, 'index']);



Route::get('items/{id}', [ItemController::class, 'show']);

Route::get('logout', [UserController::class, 'logout']);




Route::post('items', [ItemController::class, 'store']);

Route::put('/user/{user_id}', [UserController::class, 'updateProfile']);


Route::delete('/items/{id}', [ItemController::class, 'destroy']);

Route::delete('/users/{id}', [UserController::class, 'destroy']);


Route::put('items/{id}', [ItemController::class, 'update']);

Route::put('users/{id}', [UserController::class, 'update']);
