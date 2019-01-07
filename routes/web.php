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

Auth::routes();

#Free Route
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');
Route::get('news', 'BlogController@index');
Route::get('research', 'ResearchController@index');
Route::get('research/filter/{filter}', 'ResearchController@filter');
Route::get('staff', 'StaffController@index');
Route::get('person', 'UserController@index');
Route::get('teacher', 'TeacherController@index');
Route::get('contact', 'ContactController@index');
Route::get('document', 'DocumentController@index');
Route::get('curricula', 'CurriculaController@index');
Route::get('curricula/bachelor', 'CurriculaController@bachelor');
Route::get('curricula/master', 'CurriculaController@master');
Route::get('curricula/doctor', 'CurriculaController@doctor');
#Route::get('thesis', 'ThesisController@index');


Route::get('news/{slug}', 'BlogController@show');
Route::get('research/{slug}', 'ResearchController@show');

Route::get('curricula/{slug}', 'CurriculaController@show');
Route::get('teacher/{id}', 'TeacherController@show');
Route::get('staff/{id}', 'StaffController@show');
Route::get('tag/{slug}', 'TagController@show');
Route::get('file/show/{id}', 'FileController@show');
Route::get('image/show/{id}', 'ImageController@show');
Route::get('image/crop/{id}', 'ImageController@crop');
Route::get('image/thumbnail/{id}', 'ImageController@thumbnail');
Route::get('news/category/{category}', 'BlogController@category');
Route::get('document/category/{category}', 'DocumentController@category');

Route::group(['middleware' => 'auth'], function (){

    Route::get('dashboard', 'UserController@dashboard');
    Route::get('profile', 'UserController@profile');
    Route::get('profile/edit', 'UserController@editProfile');

    Route::get('research/teacher/create', 'ResearchController@createTeacher');
    Route::get('research/{id}/edit', 'ResearchController@edit');
    // Route::get('research/teacher/{id}/edit', 'ResearchController@editTeacher');
    Route::patch('research/{id}', 'ResearchController@update');
    Route::delete('research/{id}', 'ResearchController@destroy');

    Route::post('user/update', 'UserController@updateProfile');
    Route::post('research', 'ResearchController@store');

    Route::group(['middleware' => 'adminAuth'], function (){
        #Admin Route
        Route::get('admin', 'AdminController@dashboard');

        Route::post('img', 'ImageController@store');
        Route::post('file', 'FileController@store');
        Route::post('news', 'BlogController@store');
        Route::post('user','UserController@store');
        Route::post('teacher', 'TeacherController@store');
        Route::post('staff', 'StaffController@store');
        Route::post('thesis', 'ThesisController@store');
        // Route::post('research', 'ResearchController@store');
        Route::post('curricula', 'CurriculaController@store');
        Route::post('document', 'DocumentController@store');
        Route::post('category', 'CategoryController@store');


        Route::get('image/{id}/edit', 'ImageController@edit');
        Route::get('file/{id}/edit', 'FileController@edit');
        Route::get('news/{slug}/edit', 'BlogController@edit');
        Route::get('user/{id}/edit', 'UserController@edit');
        Route::get('teacher/{id}/edit', 'TeacherController@edit');
        Route::get('staff/{id}/edit', 'StaffController@edit');
        // Route::get('research/{id}/edit', 'ResearchController@edit');
        Route::get('curricula/{id}/edit', 'CurriculaController@edit');
        Route::get('document/{id}/edit', 'DocumentController@edit');
        Route::get('category/{id}/edit', 'CategoryController@edit');


        Route::patch('image/{id}', 'ImageController@update');
        Route::patch('file/{id}', 'FileController@update');
        Route::patch('news/{id}', 'BlogController@update');
        Route::patch('user/{id}', 'UserController@update');
        Route::patch('teacher/{id}', 'TeacherController@update');
        Route::patch('staff/{id}', 'StaffController@update');
        // Route::patch('research/{id}', 'ResearchController@update');
        Route::patch('curricula/{id}', 'CurriculaController@update');
        Route::patch('document/{id}', 'DocumentController@update');
        Route::patch('category/{id}', 'CategoryController@update');


        Route::delete('image/{id}', 'ImageController@destroy');
        Route::delete('file/{id}', 'FileController@destroy');
        Route::delete('news/{id}', 'BlogController@destroy');
        Route::delete('teacher/{id}', 'TeacherController@destroy');
        Route::delete('staff/{id}', 'StaffController@destroy');
        // Route::delete('research/{id}', 'ResearchController@destroy');
        Route::delete('curricula/{id}', 'CurriculaController@destroy');
        Route::delete('document/{id}', 'DocumentController@destroy');
        Route::delete('category/{id}', 'CategoryController@destroy');


        Route::get('admin/news', 'AdminController@blog');
        Route::get('admin/news/create', 'BlogController@create');
        Route::get('admin/news/filter/{filter}', 'BlogController@filter');


        Route::get('admin/teacher', 'AdminController@teacher');
        Route::get('admin/teacher/create', 'TeacherController@create');
        Route::get('admin/teacher/filter/{filter}', 'TeacherController@filter');


        Route::get('admin/staff', 'AdminController@staff');
        Route::get('admin/staff/create', 'StaffController@create');
        Route::get('admin/staff/filter/{filter}', 'StaffController@filter');


        Route::get('admin/curricula', 'AdminController@curricula');
        Route::get('admin/curricula/create', 'CurriculaController@create');
        Route::get('admin/curricula/filter/{filter}', 'CurriculaController@filter');


        Route::get('admin/user', 'AdminController@user');
        Route::get('admin/user/create','UserController@create');
        Route::get('admin/user/filter/{filter}', 'UserController@filter');


        Route::get('admin/image', 'AdminController@image');
        Route::get('admin/image/create', 'ImageController@create');
        Route::get('admin/image/filter/{filter}', 'ImageController@filter');


        Route::get('admin/document', 'AdminController@document');
        Route::get('admin/document/create', 'DocumentController@create');


        Route::get('admin/file', 'AdminController@file');
        Route::get('admin/file/create', 'FileController@create');


        Route::get('admin/research', 'AdminController@research');
        Route::get('admin/research/filter/{filter}', 'AdminController@research_filter');
        Route::get('admin/research/create', 'ResearchController@create');


        Route::get('admin/thesis', 'AdminController@thesis');
        Route::get('admin/thesis/create', 'ThesisController@create');

        Route::get('admin/category', 'AdminController@category');
        Route::get('admin/category/create', 'CategoryController@create');
    });

    Route::group(['middleware' => 'teacherAuth'], function (){
        Route::get('dashboard/teacher', 'TeacherController@dashboard');
        #Route::get('teacher/blog', 'AdminController@blog');
    });
});
Route::get('department', function (){
    return view('department');
});

Route::get('history', function (){
    return view('history2');
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


//Route::get('test', 'TestController@test23');
//Route::get('test/compress', 'TestController@testCompress');
//Route::get('test/compress_all', 'TestController@compressAll');


