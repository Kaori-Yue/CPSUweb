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

#Free Route
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');
Route::get('blog', 'BlogController@index');
#Route::get('thesis', 'ThesisController@index');
Route::get('research', 'ResearchController@index');
Route::get('teacher', 'TeacherController@index');
Route::get('contact', 'ContactController@index');
Route::get('curricula', 'CurriculaController@index');


Route::get('history', function (){
    return view('history');
});

Route::get('sitemap', function (){
    return view('sitemap');
});
Route::get('sitemap2', 'SiteMapController@index');


Route::get('interested', function (){
    return view('spacial.interested');
});

Route::get('current-student', function (){
    return view('spacial.student');
});


Route::get('blog/{slug}', 'BlogController@show');
Route::get('research/{slug}', 'ResearchController@show');
Route::get('curricula/{slug}', 'CurriculaController@show');
Route::get('tag/{slug}', 'TagController@show');
Route::get('file/show/{id}', 'FileController@show');
Route::get('image/show/{id}', 'ImageController@show');
Route::get('image/thumbnail/{id}', 'ImageController@thumbnail');


Route::get('blog/category/{category}', 'BlogController@category');


Route::group(['middleware' => 'auth'], function (){
    #Admin Route
    Route::get('image', 'ImageController@index');
    Route::post('image', 'ImageController@store');


    Route::post('img', 'ImageController@store');
    Route::post('file', 'FileController@store');
    Route::post('blog', 'BlogController@store');
    Route::post('teacher', 'TeacherController@store');
    Route::post('staff', 'StaffController@store');
    Route::post('thesis', 'ThesisController@store');
    Route::post('research', 'ResearchController@store');
    Route::post('curricula', 'CurriculaController@store');


    Route::get('image/{id}/edit', 'ImageController@edit');
    Route::get('file/{id}/edit', 'FileController@edit');
    Route::get('blog/{slug}/edit', 'BlogController@edit');
    Route::get('teacher/{id}/edit', 'TeacherController@edit');
    Route::get('staff/{id}/edit', 'StaffController@edit');
    Route::get('curricula/{id}/edit', 'CurriculaController@edit');
    Route::get('research/{id}/edit', 'ResearchController@edit');


    Route::patch('image/{id}', 'ImageController@update');
    Route::patch('file/{id}', 'FileController@update');
    Route::patch('blog/{id}', 'BlogController@update');
    Route::patch('teacher/{id}', 'TeacherController@update');
    Route::patch('staff/{id}', 'StaffController@update');
    Route::patch('curricula/{id}', 'CurriculaController@update');
    Route::patch('research/{id}', 'ResearchController@update');


    Route::delete('image/{id}', 'ImageController@destroy');
    Route::delete('file/{id}', 'FileController@destroy');
    Route::delete('blog/{id}', 'BlogController@destroy');
    Route::delete('teacher/{id}', 'TeacherController@destroy');
    Route::delete('staff/{id}', 'StaffController@destroy');
    Route::delete('research/{id}', 'ResearchController@destroy');
    Route::delete('curricula/{id}', 'CurriculaController@destroy');


    Route::get('admin', 'AdminController@index');


    Route::get('admin/blog', 'AdminController@blog');
    Route::get('admin/blog/create', 'BlogController@create');
    Route::get('admin/blog/filter/{filter}', 'BlogController@filter');


    Route::get('admin/teacher', 'AdminController@teacher');
    Route::get('admin/teacher/create', 'TeacherController@create');
    Route::get('admin/teacher/filter/{filter}', 'TeacherController@filter');


    Route::get('admin/thesis', 'AdminController@thesis');
    Route::get('admin/thesis/create', 'ThesisController@create');


    Route::get('admin/research', 'AdminController@research');
    Route::get('admin/research/create', 'ResearchController@create');


    Route::get('admin/curricula', 'AdminController@curricula');
    Route::get('admin/curricula/create', 'CurriculaController@create');


    Route::get('admin/staff', 'AdminController@staff');
    Route::get('admin/staff/create', 'StaffController@create');


    Route::get('admin/image', 'AdminController@image');
    Route::get('admin/image/create', 'ImageController@create');


    Route::get('admin/file', 'AdminController@file');
    Route::get('admin/file/create', 'FileController@create');

});

Route::get('test/resize', 'TestController@resizeImg');
Route::get('test/compress', 'TestController@testCompress');
Route::get('test/compress_all', 'TestController@compressAll');
Auth::routes();


