<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [
    'uses' => 'BlogController@index',
    'as' => 'blog'
]);

Route::get('/blog/{post}', [
    'uses'  => 'BlogController@show',
    'as'    => 'blog.show'
]);

Route::get('/category/{category}', [
    'uses'  => 'BlogController@category',
    'as'    => 'category'
]);

Route::get('/author/{author}', [
    'uses'  => 'BlogController@author',
    'as'    => 'author'
]);

Route::get('/testing', [
    'uses'  => 'BlogController@testing'
]);

//Route::get('/collection1', [
//    'uses'  => 'BlogController@collection_class',
//]);
//
//Route::get('/collection2', [
//    'uses'  => 'BlogController@collect_method',
//]);
//
//Route::get('/collection3', [
//    'uses'  => 'BlogController@search_data',
//]);

Route::get('/blog/show', function () {
    return view('blog.show');
});
Route::auth();

Route::get('/home', 'Backend\HomeController@index');
