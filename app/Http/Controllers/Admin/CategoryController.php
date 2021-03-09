<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Category;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    
    public function index(){

        $category = Category::latest()->paginate(10);

        return view('admin.category.manage', compact('category'));


    }

    public function create(){
        return view('admin.category.add');
    }

    public function store(Request $request){

        $request->validate([

            'category_name' => 'required',

            'status' => 'required',
            
        ]);
        
        $categories = new Category();

        $categories->category_name = $request->category_name;

        $categories->status = $request->status;

        $categories->slug = Str::slug($request->category_name);

        $categories->save();
        
        Toastr::success('Successully Add 🙂' ,'Success');

        return redirect()->route('admin.category')->with('message','Registered succesfully');
        

    }

    public function edit($id){

        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));

    }

    public function update(Request $request){

        DB::table('categories')->where('id', $request->id)->update([

            'category_name' => $request->category_name,

            'status' => $request->status,

            'slug' =>  Str::slug($request->category_name),

        ]);

        Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.category');
    }

    public function delete($id){

        $categories = Category::find($id);

        $categories->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');
        
        return redirect()->route('admin.category');
        
    }
}
