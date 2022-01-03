<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\User;

class LayoutController extends Controller
{
	protected $view_path='layout.layoutpage';

    public function index(){
        $program = Program::all();
		return view('home', compact('program'));
	}

	public function about(){
		return view($this->view_path.'.about');
	}

    public function contact()
    {
    	return view($this->view_path.'.contact');
    }

    public function data()
    {
      $program = Program::all();
    return view('layout.master',compact('program'));
    }
}
