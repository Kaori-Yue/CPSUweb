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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');

Route::get('teacher', 'TeacherController@index');
Route::post('teacher', 'TeacherController@store');
Route::get('teacher/create', 'TeacherController@create');

Route::get('test', 'TestController@index');