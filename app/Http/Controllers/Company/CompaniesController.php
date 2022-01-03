<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\User;

class CompaniesController extends Controller
{
    protected $view_path='Admin.adminuse';
    protected $modal_path='Admin.modal';

    public function index(){
        if(auth()->user()->is_admin):
            $companies = Company::get();
        elseif(count(auth()->user()->hasCompany()) > 0):
            $companies = auth()->user()->hasCompany();
        endif;
        $contacts = User::select('id', 'email')->get();
    	return view($this->view_path.'.company', compact('contacts', 'companies'));
    }

    public function companyadd(Request $data){
        $path = '';
        if($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('company', $filename);
            $path = 'company'.DIRECTORY_SEPARATOR.$filename;
        }

    	$company = new Company;
    	$company->name = $data->name;
        $company->image = $path;
    	$company->address = $data->address;
    	$company->established_date = $data->estdate;
    	$company->contact = $data->contact;
    	$company->email = $data->email;
        $company->user_id = $data->user_id;
    	$company->save();

        return redirect('/companies');
    }
    public function updateform($id){
        $company = Company::find($id);
        $users = User::get();
        return view($this->modal_path.'.updatecompanies',compact('company','users'));
    }
    public function update(Request $data, $id){
        $path = '';
        if ($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('company', $filename);
            $path = 'company'.DIRECTORY_SEPARATOR.$filename;
        }
        $company = Company::find($id);
        $company->name = $data->name;
        $company->image = $path;
        $company->address = $data->address;
        $company->established_date = $data->estdate;
        $company->email = $data->email;
        $company->user_id = $data->user_id;
        $company->save();
        // dd($company);
        return redirect()->route('adminuse.company');
    }
    public function delete($id){
        $delete = Company::find($id);
        $delete->delete();
        return redirect()->route('adminuse.company');
    }

    public function filterProgram(Company $com){
        $program = \App\Program::where('company_id', $com->id)->get();
        $text = "All Programs From ".$com->name;
        return view('pages.program.filter-program', compact('program', 'text'));
    }
}
