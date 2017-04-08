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

Route::get('image', 'ImageController@index');
Route::get('image/show/{id}', 'ImageController@show');
Route::post('image', 'ImageController@store');

Route::get('blog', 'BlogController@index');
Route::post('blog', 'BlogController@store');
Route::get('blog/create', 'BlogController@create');
Route::get('blog/{slug}', 'BlogController@show');

Route::get('teacher', 'TeacherController@index');
Route::post('teacher', 'TeacherController@store');
Route::get('teacher/create', 'TeacherController@create');

Route::get('contact', 'ContactController@index');

Route::get('admin/dashboard', 'AdminController@dashboard');

Route::get('test', 'TestController@index');