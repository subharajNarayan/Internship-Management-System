<?php

namespace App\Http\Controllers\userprogram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProgram;
use App\Mail\maildemo;
use App\User;
use App\Program;
use App\Company;

class UserProgramController extends Controller
{
	protected $view_path = 'admin.adminuse';
	public function userpro(){
		$userprogram = UserProgram::get();
		// dd($userprogram);
		return view('admin.adminuse.userprogram',compact('userprogram'));
	}
	public function mail(Request $request ,$id)
	{
		$up = UserProgram::find($id);
		$p = Program::find($up->program_id);
		$user  = Company::find($p->company_id);
	    $user_mail = $user->email;

	   \Mail::to($user_mail)->send(new maildemo());
	   return redirect()->route('adminuse.userprogram');


	}
}
