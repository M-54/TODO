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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group([
    'middleware' => 'auth',
], function () {

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
        ->name('user.index');


    Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])
        ->name('user.create');

Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');
    


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

    Route::delete('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'destroy'])
        ->name('tasks.destroy');

    # https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
    Route::delete('tasks/{task}/force', [\App\Http\Controllers\TaskController::class, 'forceDelete'])
        ->name('tasks.forceDelete');

    // TODO: بازگرداندن تسک با روش update
    Route::patch('tasks/{task}/restore', [\App\Http\Controllers\TaskController::class, 'restore'])
        ->name('tasks.restore');

    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])
        ->name('auth.logout');
});

Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])
    ->name('auth.form.login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::get('test', function () {
    $collection = collect(['taylor', 'abigail', null, 'ehsan'])
        ->map(function ($name) {
            return strtoupper($name);
        })->reject(function ($name) {
            return empty($name);
        });

    dd($collection);
});
=======
Route::get('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show'])
    ->name('tasks.show');


