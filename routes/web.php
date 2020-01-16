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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about','AboutController@viewAboutFile');

Route::get('contact','ContactUsController@viewContactUsFile');
Route::get('blog','BlogController@viewBlogFile');

Route::post('blog','BlogController@viewBlogFile');

Route::get('posts','PostController@index');
Route::get('posts/create','PostController@create');
Route::get('posts/store','PostController@store');
Route::get('posts/edit/{id}','PostController@edit');
Route::get('posts/update/{id}','PostController@update');
Route::get('posts/delete/{id}','PostController@destroy');
