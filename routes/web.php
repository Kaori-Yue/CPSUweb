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

# Todo edit & delete route

#Free Route
Route::get('/', 'HomeController@index');
Route::get('blog', 'BlogController@index');
Route::get('thesis', 'ThesisController@index');
Route::get('research', 'ResearchController@index');
Route::get('teacher', 'TeacherController@index');
Route::get('contact', 'ContactController@index');
Route::get('curricula', 'CurriculaController@index');

Route::get('blog/{slug}', 'BlogController@show');
Route::get('research/{slug}', 'ResearchController@show');
Route::get('curricula/{slug}', 'CurriculaController@show');
Route::get('image/show/{id}', 'ImageController@show');
Route::get('file/show/{id}', 'FileController@show');


#Admin Route
Route::get('image', 'ImageController@index');
Route::post('image', 'ImageController@store');


Route::post('blog', 'BlogController@store');
Route::post('teacher', 'TeacherController@store');
Route::post('thesis', 'ThesisController@store');
Route::post('research', 'ResearchController@store');
Route::post('curricula', 'CurriculaController@store');


Route::get('blog/{slug}/edit', 'BlogController@edit');
Route::get('teacher/{id}/edit', 'TeacherController@edit');


Route::patch('blog/{id}', 'BlogController@update');
Route::patch('teacher/{id}', 'TeacherController@update');


Route::get('admin', 'AdminController@index');


Route::get('admin/blog', 'AdminController@blog');
Route::get('admin/blog/create', 'BlogController@create');
Route::post('admin/blog/sort', 'BlogController@sortBy');


Route::get('admin/teacher', 'AdminController@teacher');
Route::get('admin/teacher/create', 'TeacherController@create');
Route::post('admin/teacher/sort', 'TeacherController@sortBy');


Route::get('admin/thesis', 'AdminController@thesis');
Route::get('admin/thesis/create', 'ThesisController@create');
// sort

Route::get('admin/research', 'AdminController@research');
Route::get('admin/research/create', 'ResearchController@create');
// sort

Route::get('admin/curricula', 'AdminController@curricula');
Route::get('admin/curricula/create', 'CurriculaController@create');
// sort

Route::get('test', 'TestController@index');
Route::get('test/slug', 'TestController@slug');