<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/create', array ('as' => 'category.create', 'uses' => 'CategoryController@staticCreate'));
Route::get('/category/id?', array ('as' => 'category.get', 'uses' => 'CategoryController@get'));
