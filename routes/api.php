<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('test', function (){
    return array(1,2,3,4);
});

// route('api.tasks.index')
//Route::group([
//    'as' => 'api.'
//], function () {
//    Route::apiResource('tasks', \App\Http\Controllers\API\TaskAPIController::class);
//});

Route::apiResource('tasks', \App\Http\Controllers\API\TaskAPIController::class);
