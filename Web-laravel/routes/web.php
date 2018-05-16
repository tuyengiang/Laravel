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
Route::get('/','PageController@index');

Route::get('/articles/{id}',[
	'as'=>'articles.show', 'uses'=>'PageController@show_articles'
]);


Route::get('/article/create-articles',[
	'as'=>'create.articles','uses'=>'PageController@form_create'
]);


Route::post('/',[
	'as'=>'articles.index','uses'=>'PageController@create'

]);


Route::get('edit/{id}',[
	'as'=>'articles.edit','uses'=>'PageController@edit'
]);

Route::put('/{id}/',[
	'as'=>'articles.update','uses'=>'PageController@update'
]);


Route::delete('/{id}',[
	'as'=>'articles.delete','uses'=>'PageController@destroy'

]);

/** login */


Route::get('/dang-nhap',[
	'as'=>'form.login','uses'=>'PageController@login'
]);



