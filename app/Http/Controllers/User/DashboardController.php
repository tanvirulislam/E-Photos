<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dashboard;
Use App\Category;
Use App\Subcategory;
Use App\Product;
use App\Balance;
Use Image;
Use DB;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
  public function index(){
    
    return view('user.home.index');

}

    // User Product Start----------------------------

public function user_product(){

  $category = Category::all();

  $subcategory = Subcategory::all();

  $product = Product::where('user_post_id',Auth::user()->id)->get();

  return view('user.product.manage', compact('category', 'subcategory', 'product'));

}

public function add_user_product(){
    
    $category = Category::all();

  $subcategory = Subcategory::all();

  $product = Product::all();

  return view('user.product.add', compact('category', 'subcategory', 'product'));

}

public function findProductName(Request $request){
    $data = Subcategory::select('subcategory_name','id')->where('category_id',$request->id)->get();
    return response()->json($data);
}

protected function imageUpload($request){
    $productImage = $request->file('image');
    $imageName = $productImage->getClientOriginalName();
    $directory = 'public/uploads/';
    $imageUrl = $directory.$imageName;
    Image::make($productImage)->resize(400,400)->save($imageUrl);
    return $imageUrl;
}

public function store_user_product(Request $request){
    $request->validate([

      'cat_id' => 'required',
      'subcat_id' => 'required',
      'product_name' => 'required',
      'description' => 'required',
      'price' => 'required',
      'discount_price' => 'required',
      'image' => 'required',
      'status' => 'required'
      
  ]);
    if($request->file('image')!==null){
      $image=$this->imageUpload($request);
  }else{
   $image=null;
}

$product = new Product();
  //  to get user id 
$product->user_post_id = Auth::user()->id;
  //  end
$product->cat_id = $request->cat_id;
$product->subcat_id = $request->subcat_id;
$product->product_name = $request->product_name;
$product->description = $request->description;
$product->price = $request->price;
$product->discount_price = $request->discount_price;
$product->image = $image;
$product->status = $request->status;
$product->save();

Toastr::success('Successully Add 🙂' ,'Success');

return redirect()->route('user.user_product')->with('message','Registered succesfully');

}

public function edit_user_product($id){

  $category = Category::all();

  $subcategory = Subcategory::all();

  $product = Product::find($id);

  return view('user.product.edit', compact('category', 'subcategory', 'product'));

}

public function productInfoUpdate ($photo_product, $request, $imageUrl){

  $product->cat_id = $request->cat_id;
  $product->subcat_id = $request->subcat_id;
  $product->product_name = $request->product_name;
  $product->description = $request->description;
  $product->price = $request->price;
  $product->discount_price = $request->discount_price;
  $product->image = $image;
  $product->status = $request->status;
  $product->save();

}

public function update_user_product(Request $request){
  $productImage = $request->file('image');

  if($productImage){
    $photo_product = Product::find($request->id);

    unlink($photo_product->image);
    $imageUrl = $this->imageUpload($request);
    $this->productInfoUpdate($photo_product, $request, $imageUrl);
    
    return redirect()->route('user.user_product');
} 
else {
    $product = Product::find($request->id);
    $product->cat_id = $request->cat_id;
    $product->subcat_id = $request->subcat_id;
    $product->product_name = $request->product_name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->discount_price = $request->discount_price;
    $product->status = $request->status;
    $product->save();

    Toastr::success('Product Successfully Updated 🙂' ,'Success');
    return redirect()->route('user.user_product');
}

}

public function delete_user_product($id){
  $product = Product::find($id);
  $product->delete();

  Toastr::warning('Successully Deleted 🙂' ,'Success');
  return redirect()->route('user.user_product');

}

// End user Product-------

// Account balance -------

public function user_account_balance(){

  $balance = Balance::all();

  return view('user.account_balance.manage', compact('balance'));

}



}
