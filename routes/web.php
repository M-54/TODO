<?php

use Illuminate\Support\Facades\Route;

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
//
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('user.index');
Route::get('user/login',[\App\Http\Controllers\LoginController::class,'index'])
    ->name('user.login');

Route::post('user/login',[\App\Http\Controllers\LoginController::class,'check'])
    ->name('user.check');

Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('user.create');

Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');

Route::get('tasks', [\App\Http\Controllers\TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('tasks/create', [\App\Http\Controllers\TaskController::class, 'create'])
    ->name('tasks.create');

Route::post('tasks/store', [\App\Http\Controllers\TaskController::class, 'store'])
    ->name('tasks.store');

Route::get('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show'])
    ->name('tasks.show');

