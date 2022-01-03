<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    protected $view_path = 'Admin.adminuse';
	protected $modal_path = 'Admin.modal';

	public function __construct(){
		$this->middleware('isAdmin')->only('updateform');
	}

    public function index(){
    	$users = User::get();
    	return view($this->view_path.'.user', compact('users'));
    }
    public function profile($id){
        // return $id;
        $users = User::find($id);
        return view('pages.profile.profile',compact('users'));
    }
    public function updateprofile(Request $data,$id){
        $path = '';
        if($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('images/profile', $filename);
            $path = 'images/profile'.DIRECTORY_SEPARATOR.$filename;
        }
        $users = User::find($id);

        $users->name = $data->name();
        $users->image = $path;
        $users->gender = $data->gender();
        $users->address = $data->address();
        $users->phone = $data->phone();
        $users->phone = $data->dob();
        $users->email = $data->email();
        $users->save();
dd($users);
        // return view('pages.index');
    }

    public function updateform($id){
        $users = User::find($id);
        // dd($users);
        return view('Admin.modal.updateuser', compact('users'));
    }

    public function update(Request $data,$id){
        $path = '';
        if($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('images/profile', $filename);
            $path = 'images/profile'.DIRECTORY_SEPARATOR.$filename;
        }
        $users = User::find($id);

        $users->name = $data->name();
        $users->image = $path;
        $users->gender = $data->gender();
        $users->address = $data->address();
        $users->phone = $data->phone();
        $users->phone = $data->dob();
        $users->email = $data->email();
        $users->save();
        // dd($users);

        return redirect()->route('adminuse.user');
    }

    public function delete($id){
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('adminuse.user');
    }
}
