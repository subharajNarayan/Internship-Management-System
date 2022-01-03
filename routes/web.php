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
// Index pages



Route::get('/', function(){
	$companies = \DB::table('programs')
					->leftJoin('companies as c', 'c.id', '=', 'programs.company_id')
					->select('c.name as company', 'c.address as comp_address', 'c.image as logo', 'programs.*')
					->get();
	$programs = [];
	$company = [];
	foreach($companies  as $key => $c):
		$programs[$c->company_id][$key] = $c;
		$company[$c->company_id]["name"] = $c->company;
		$company[$c->company_id]["image"] = $c->logo;
	endforeach;
	return view('pages.index', compact('programs', 'company'));
});

Route::get('/home' , 'LayoutController@index')->middleware('isAdmin');
Route::get('/about', ['as' => 'user.about', 'uses' => 'LayoutController@about']);
Route::get('/contact' , 'LayoutController@contact');


// USERPROGRAM
Route::get('/userpro',['as' => 'adminuse.userprogram',  'uses' =>'userprogram\UserProgramController@userpro']);

Route::get('/userprogram/{id}',['as' => 'user.program', 'uses' => 'userprogram\UserProgramController@userprogram']);

Route::get('/mail/{id}',['as'=>'user.mail', 'uses'=>'userprogram\UserProgramController@mail']);

// End of Index pages

Auth::routes();

Route::get('index', 'HomeController@index')->name('index');



