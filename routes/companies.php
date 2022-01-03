<?php 

	Route::get('/companies',['as' => 'adminuse.company',  'uses' =>'CompaniesController@index']);
	Route::post('/company/store',['as'=> 'company.store','uses'=> 'CompaniesController@companyadd']);

	Route::get('/company/updateform/{id}',['as' => 'company.update','uses' => 'CompaniesController@updateform']);

	Route::post('/company/update/{id}',['as' => 'update.company', 'uses' => 'CompaniesController@update']);

	Route::get('/company/delete/{id}',['as' => 'delete.company', 'uses' => 'CompaniesController@delete']);

	Route::get('/company/{com}/programs', 'CompaniesController@filterProgram');

 ?>