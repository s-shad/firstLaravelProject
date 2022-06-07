<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', 'TodosController@index');
Route::get('hello', 'TodosController@hello');
Route::post('/add-todo', 'TodosController@store');

Route::get('todo/delete/{id}', [
    'as' => "todo.delete",
    'uses' => 'TodosController@delete',

]);

Route::get('todo/update/{id}', [
    'as' => "todo.update",
    'uses' => 'TodosController@update',

]);

Route::post('todo/save/{id}', [
    'as' => "todo.save",
    'uses' => 'TodosController@save',

]);

Route::get('todo/completed/{id}', [
    'as' => "todo.completed",
    'uses' => 'TodosController@completed',

]);
