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
//group
Route::group([
    'middleware' => 'auth'
    ], function(){
        //users
        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
            ->name('user.index');

        Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])
            ->name('user.create');

        Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])
            ->name('user.store');
        //tasks
        Route::get('tasks', [\App\Http\Controllers\TaskController::class, 'index'])
            ->name('tasks.index');

        Route::get('tasks/create', [\App\Http\Controllers\TaskController::class, 'create'])
            ->name('tasks.create');

        Route::post('tasks/store', [\App\Http\Controllers\TaskController::class, 'store'])
            ->name('tasks.store');

        Route::get('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show'])
            ->name('tasks.show');

        Route::delete('tasks/{task}',[\App\Http\Controllers\TaskController::class,'destroy'])
            ->name('tasks.softDelete');

        Route::delete('tasks/{task}/delete',[\App\Http\Controllers\TaskController::class,'forceDelete'])
            ->name('tasks.forceDelete');

        Route::patch('tasks/{task}/update',[\App\Http\Controllers\TaskController::class,'update'])
            ->name('tasks.update');
    });

//auth.login
Route::get('login',[\App\Http\Controllers\Auth\LoginController::class ,'index'])
    ->name('auth.form.login');

Route::post('login',[\App\Http\Controllers\Auth\LoginController::class,'login'])
    ->name('auth.login');

//auth.register

Route::get('register',[\App\Http\Controllers\Auth\RegisterController::class,'index'])
    ->name('auth.form.register');

Route::post('register',[\App\Http\Controllers\Auth\RegisterController::class,'register'])
    ->name('auth.register');

//auth.logout

Route::post('logout',[\App\Http\Controllers\Auth\LogoutController::class,'logout'])
    ->name('auth.logout');
