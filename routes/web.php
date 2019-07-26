<?php
use App\Task;

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

Route::get('/', 'TasksController@index');

Route::post('/task', 'TasksController@store')
    ->name('task.store');

Route::delete('/task/{id}', 'TasksController@destroy')
    ->name('task.destroy');
