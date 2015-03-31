<?php

Route::get('/', ['uses' => 'ConcertsController@index', 'as' => 'concerts.index']);
Route::get('/login',['uses' => 'ConcertsController@login', 'as' => 'concerts.login']);
Route::post('/login','ConcertsController@login');
Route::get('/signin',['uses' => 'ConcertsController@signin', 'as' => 'concerts.signin']);
Route::post('/signin','ConcertsController@signin');
Route::get('/logout',['uses' => 'ConcertsController@logout', 'as' => 'concerts.logout']);