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
    return view('pages.welcome');
})->name('welcome');

Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('user.index');

Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('user.create');

Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');
// task routes
Route::get('tasks', [\App\Http\Controllers\TaskController::class,'index'])->name('task.index');

Route::get('task/create',[\App\Http\Controllers\TaskController::class,'create'])->name('task.create');

Route::post('task/store',[\App\Http\Controllers\TaskController::class,'store'])->name('task.store');

Route::post('task/update',[\App\Http\Controllers\TaskController::class,'update'])->name('task.update');

Route::post('task/delete',[\App\Http\Controllers\TaskController::class,'delete'])->name('task.delete');



