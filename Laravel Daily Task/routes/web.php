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

Route::get('/hai', function () {
    return view('welcome');
});
Route::get('/create', function () {
    return view('Books.book');
});
Route::get('/create', function () {
    return view('Students.stud');
});
Route::get('/form', function () {    
    return view('form');
});
Route::get('/sample','BooksController@sample');
/*
Route::get('/hello', function () {
    return "<h1>Beautiful Day</h1>";
});*/
Route::get('/users/{id}', function ($id) {
    return 'hai my id is '.$id;
});
//Route::get('/con', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@service');
Route::resource('/book', 'BooksController');
Route::resource('/stud', 'StudController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
