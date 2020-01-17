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

Route::get('products','ProductController@index');
Route::get('products/create','ProductController@create');
Route::get('products/store','ProductController@store');
Route::get('products/edit/{id}','ProductController@edit');
Route::get('products/update/{id}','ProductController@update');
Route::get('products/delete/{id}','ProductController@destroy');
