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

Route::get('/', 'HomeController@home');

Route::get('/NewProject', 'ProjectController@index');

Route::post('/NewProject', 'ProjectController@create');

Route::get('/project/{project}', 'ProjectController@show');

Route::delete('/project/{project}', 'ProjectController@destroy');

Route::patch('/task/{task}', 'TaskController@completed');

Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/project/{project}/NewTask', 'TaskController@index');

Route::get('/project/{project}/edit', 'ProjectController@edit');

Route::patch('/project/{project}/edit', 'ProjectController@patch');

Route::post('/NewTask', 'TaskController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'HomeController@news')->name('news');

Route::patch('/project/{project}/fav', 'ProjectController@favorite');

Route::get('/settings', 'HomeController@Settings');

Route::patch('/user/{user}', 'HomeController@Avatar');

Route::get('/board', 'HomeController@Board')->name('board');