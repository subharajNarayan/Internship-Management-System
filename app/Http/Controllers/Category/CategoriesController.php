<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    protected $view_path='Admin.adminuse';
    protected $modal_path='Admin.modal';

    public function index(){
        $categories = Category::get();
    	return view('Admin.adminuse.category',compact('categories'));
    }
    public function category(){
        $categories = Category::get();
        return view('layout.layoutpage.category',compact('categories'));
    }
    public function store(Request $data){
        $path = '';
        if($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('cat', $filename);
            $path = 'cat'.DIRECTORY_SEPARATOR.$filename;
        }
    	$category = New Category;
    	$category->category= $data->name;
    	$category->image = $path;

        $category->save();

    	return redirect('/categories');
    }

    public function updateform($id){
        $category = Category::find($id);
        return view($this->modal_path.'.updatecategories',compact('category'));
    }

    public function update(Request $data, $id){
        $path = '';
        if ($data->hasFile('img')){
            $file = $data->file('img');
            $filename = $data->name.time().$file->getClientOriginalName();
            $file->move('cat', $filename);
            $path = 'cat'.DIRECTORY_SEPARATOR.$filename;
        }
        $category = Category::find($id);
        $category->category = $data->name;
        $category->image = $path;

        $category->save();
        return redirect('/categories');
    }
    public function delete($id)
    {
      $delete= Category::find($id);

      $delete->delete();
      
      return redirect()->route('adminuse.category');

    }

    public function filterPrograms(Category $cat)
    {
        $program = \App\Program::where('category_id', $cat->id)->get();
        $text = "All Programs From Category ".$cat->category;
        return view('pages.program.filter-program', compact('program' , 'text'));
    }
}
