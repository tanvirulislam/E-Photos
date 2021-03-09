<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function index(){

        $category = Category::all();

        $subcategory = Subcategory::latest()->paginate(12);

        return view('admin.subcategory.manage', compact('category', 'subcategory'));

    }

    public function create(){

        $category = Category::all();

        return view('admin.subcategory.add', compact('category'));

    }

    public function store(Request $request){
     
        $request->validate([

            'category_id' => 'required',

            'subcategory_name' => 'required',

            'status' => 'required'
            
        ]);


        
        $subcategory = new Subcategory();

        $subcategory->category_id = $request->category_id;

        $subcategory->subcategory_name = $request->subcategory_name;

        $subcategory->status = $request->status;

        $subcategory->slug = Str::slug($request->subcategory_name);

        $subcategory->save();

        Toastr::success('Successully Add 🙂' ,'Success');

        return redirect()->route('admin.subcategory')->with('message','Registered succesfully');

    }

    public function edit($id){

        $category = Category::all();

        $subcategory = Subcategory::find($id);

        return view('admin.subcategory.edit', compact('category', 'subcategory'));


    }

    public function update(Request $request){

        DB::table('subcategories')->where('id', $request->id)->update([

            'subcategory_name' => $request->subcategory_name, 

            'category_id' => $request->category_id,

            'status' => $request->status,

            'slug' => Str::slug($request->subcategory_name),

 
        ]);
        
        Toastr::success('Successully Updated 🙂' ,'Success');
        
        return redirect()->route('admin.subcategory');

    }

    public function delete($id){

        $subcategory = Subcategory::find($id);
        
        $subcategory->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.subcategory');

    }

    // Search option for subcategory6

    public function search(Request $request)

{

	if($request->ajax())

	{

		$output="";

		$products=DB::table('products')->where('subcategory_name','LIKE','%'.$request->search."%")->get();

		if($products)

		{

			foreach ($products as $key => $product)
			{

			$output.='<tr>'.

				'<td>'.$product->id.'</td>'.

				'<td>'.$product->category_id.'</td>'.

                '<td>'.$product->status.'</td>'.
                
			'</tr>';

		    }



			return Response($output);



		}



	}


}
}
