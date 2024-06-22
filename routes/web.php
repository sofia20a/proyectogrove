<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;


use Illuminate\Support\Facades\Route;

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

Route::get('/events/all', [EventController::class, 'index']);

Route::resource('admin',EventController::class);

Route::get('/courses/{id}', [TestController::class, 'show'])->name('course');


//users

Route::get('/login', [UsersController::class, 'login']);
Route::resource('/singup', UsersController::class);