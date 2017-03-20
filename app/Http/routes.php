<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/create', array ('as' => 'category.create', 'uses' => 'CategoryController@staticCreate'));
Route::get('/category/{id?}', array ('as' => 'category.get', 'uses' => 'CategoryController@get'));
Route::post('/category', array ('as' => 'category.post', 'uses' => 'CategoryController@create'));


//Route::get('/category/article/create', array ('as' => 'article.create', 'uses' => 'ArticleController@staticCreate'));
Route::get('/article/{id?}', array ('as' => 'article.get', 'uses' => 'ArticleController@get'));
Route::post('/article', array ('as' => 'article.post', 'uses' => 'ArticleController@create'));
