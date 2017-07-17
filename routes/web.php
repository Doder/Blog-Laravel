<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
