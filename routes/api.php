<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesEventController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories/all', [CategoriesEventController::class, 'index']);
Route::get('/users/all', [UsersController::class, 'index']);
Route::post('/users/login', [UsersController::class,'check']);
Route::get('/events/all', [EventController::class, 'index']);
Route::post('/users/signin', [UsersController::class, 'store']);
Route::get('/events/event/{id}', [EventController::class, 'show']);

Route::post('/users/create', [EventController::class, 'store']);