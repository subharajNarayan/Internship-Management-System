<?php 

Route::get('/program',['as' => 'adminuse.program',  'uses' =>'ProgramController@index']);

Route::post('/program/store',['as' => 'program.store', 'uses' =>'ProgramController@addprogram']);

Route::get('/program/updateform/{id}', ['as'=>'program.update', 'uses'=>'ProgramController@updateform']);

Route::get('/program/update/{id}', ['as'=>'update.program', 'uses'=>'ProgramController@update']);

Route::get('/program/delete/{id}', ['as'=>'program.delete', 'uses'=>'ProgramController@delete']);
Route::get('/program/{id}/show', 'ProgramController@show');

Route::post('/program/apply', 'ProgramController@applyProgram')->middleware('auth');
Route::get('/program/apply', function ()
{
	return redirect()->back()->with('success', 'You can apply for the program!!');
});