<?php

namespace App\Http\Controllers\Program;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;
use App\Company;
use App\Category;

class ProgramController extends Controller
{
    protected $view_path='Admin.adminuse';
    protected $modal_path='Admin.modal';

    public function __construct(){
      $this->middleware('isAdmin')->except('show', 'applyProgram');
    }

    public function index(){
      $categories = Category::get();
      if(auth()->user()->is_admin):
        $companies = Company::get();
        $program = Program::get();
      elseif(count(auth()->user()->hasCompany()) > 0):
        $companies = auth()->user()->hasCompany();
        $program = Program::ofCompany($companies);
      endif;  
    	return view('Admin.adminuse.program',compact('program','companies','categories'));
    }
    public function addprogram(Request $data){
    	$program = new Program;
    	$program->name = $data->name;
    	$program->level = $data->level;
    	$program->description = $data->description;
    	$program->category_id = $data->category_id;
    	$program->duration_month = $data->durationmnth;
    	$program->start_date = $data->startdate;
    	$program->end_date = $data->enddate;
      $program->shift = $data->shift;
      $program->company_id = $data->company_id;
    	$program->save();

    	return route('adminuse.program');

    }

    public function updateform($id)
    {

      $categories = Category::get();
        $program = Program::find($id);
        return view($this->modal_path.'.updateprogram',compact('program', 'categories'));
    }

    public function update(Request $request, $id)
    {
       $program = Program::find($id);

       $program->name = $request->name;
       $program->level = $request->level;
       $program->description = $request->description;
       $program->category_id = $request->category_id;
       $program->duration_month = $request->durationmnth;
       $program->start_date = $request->startdate;
       $program->end_date = $request->enddate;
       $program->shift = $request->shift;
       $program->save();

       return redirect()->route('adminuse.program');    
    }

    public function delete($id){
      $delete= Program::find($id);
      $delete->delete();
      return redirect()->route('adminuse.program');
    }

    public function show($id){
      $program = Program::find($id);
      $program->votes++;
      $program->update();
      return view('pages.program.index', compact('program'));
    }

    public function applyProgram(Request $data){
      \DB::table('user_program')->insert([
        'program_id' => $data->program_id,
        'user_id'    => $data->user_id
      ]);
      return redirect()->back()->with('success', 'You have successfully applied for this program');
    }
}
