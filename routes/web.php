<?php


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

// Route::get('/users/{id}/{name}', function($id){
//     return 'This is user '.$id;
// 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
