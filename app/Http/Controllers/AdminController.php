<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('isAdmin');
	}

   public function adminindex(){
   	return view('home');
   }
}
