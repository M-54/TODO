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

    Route::get('tasks', [\App\Http\Controllers\TaskController::class, 'index'])
        ->name('tasks.index');

    Route::get('tasks/create', [\App\Http\Controllers\TaskController::class, 'create'])
        ->name('tasks.create');

    Route::post('tasks/store', [\App\Http\Controllers\TaskController::class, 'store'])
        ->name('tasks.store');

    Route::get('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show'])
        ->name('tasks.show');

    Route::patch('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'update']);

    Route::delete('tasks/{task}', [\App\Http\Controllers\TaskController::class, 'destroy'])
        ->name('tasks.destroy');

    # https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
    Route::delete('tasks/{task}/force', [\App\Http\Controllers\TaskController::class, 'forceDelete'])
        ->name('tasks.forceDelete');

    // TODO: بازگرداندن تسک با روش update
    Route::patch('tasks/{task}/restore', [\App\Http\Controllers\TaskController::class, 'restore'])
        ->name('tasks.restore');

    Route::get('tasks/{task}/done', [\App\Http\Controllers\TaskController::class, 'done'])
        ->name('tasks.done');

    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])
        ->name('auth.logout');

    # https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller
    Route::resource('tags', \App\Http\Controllers\TagController::class);

    Route::resource('posts', \App\Http\Controllers\PostController::class);
});

Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])
    ->name('auth.form.login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::get('translate/{locale}', function ($locale = 'fa'){
    \Illuminate\Support\Facades\App::setLocale($locale);
    return redirect('/');
});

Route::get('active', function (){
    /**
     * @var $user \App\Models\User
     */
    $user = auth()->user();
    return $user->updatePushSubscription('/');
});

Route::get('sample', function (){
   return [
       'data' => [
           [
               'id' => 1
           ],
           [
               'id' => 2
           ]
       ]
   ];
});

Route::get('testapi', function (){
    $response = \Illuminate\Support\Facades\Http::get(route('api.tasks.index'));

    return $response->json();
});

//Route::get('weather', function (){
//    $response = \Illuminate\Support\Facades\Http::get('api.openweathermap.org/data/2.5/weather', [
//        'q' => 'tehran',
//        'appid' => '8516dbc0b619c1a5b25dc01f1ce492b1',
//        'units' => 'metric'
//    ]);
//
//    return $response->json();
//});

Route::get('weather', \App\Http\Controllers\WeatherController::class);
