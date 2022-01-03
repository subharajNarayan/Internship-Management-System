<?php 

	Route::get('/categories',['as' => 'adminuse.category',  'uses' =>'CategoriesController@index']);

	Route::get('/category',['as' => 'user.category',  'uses' =>'CategoriesController@category']);

	// Route::get('/category/{id}',['as' => 'all.category',  'uses' =>'CategoriesController@allcategory']);

	Route::post('/category/store',['as' => 'category.store','uses' => 'CategoriesController@store']);

	Route::get('/category/updateform/{id}',['as' => 'category.update','uses' => 'CategoriesController@updateform']);

	Route::post('/category/update/{id}',['as' => 'update.category', 'uses' => 'CategoriesController@update']);

	Route::get('/category/delete/{id}',['as' => 'delete.category', 'uses' =>'CategoriesController@delete']);

	Route::get('/category/{cat}/programs', 'CategoriesController@filterPrograms');
	