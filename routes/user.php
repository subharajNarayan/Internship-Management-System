<?php 

Route::get('/user',['as' => 'adminuse.user',  'uses' =>'UserController@index']);

Route::get('/user/profile-s/{id}/my',['as' => 'user.profile',  'uses' =>'UserController@profile']);
Route::post('/user/profile-update/{id}',['as' => 'update.profile',  'uses' =>'UserController@updateprofile']);

Route::get('/user/updateform/{id}',['as' => 'user.update',  'uses' => 'UserController@updateform']);

Route::post('/user/update/{id}', ['as' => 'update.user', 'uses' => 'UserController@update']);

Route::get('/user/delete/{id}', ['as' => 'delete.user', 'uses' => 'UserController@delete']);
