<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){ 


    return view('welcome');
});

Route::get('/about',function(){
  
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/posts/{id}','PostsController@index');


Route::get('/articles','ArticlesController@index');
Route::get('/articles/create','ArticlesController@create');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/{article}','ArticlesController@show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}','ArticlesController@update');
Route::delete('/articles/{article}','ArticlesController@destroy');