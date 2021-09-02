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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('user.index');

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

Route::get('register',[\App\Http\Controllers\Auth\RegisterController::class,'index'])->name('register.index');

Route::post('register/store',[\App\Http\Controllers\Auth\RegisterController::class,'store'])->name('register.store');
