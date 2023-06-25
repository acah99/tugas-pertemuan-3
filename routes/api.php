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

route::get('/tasks', 'taskController@index')->name('tasks.index');

route::post('/tasks', 'taskController@store')->name('tasks.store');

route::get('/tasks/{task}', 'taskController@show')->name('tasks.show');

route::delete('/tasks/{task}', 'taskController@destroy')->name('tasks.destroy');
