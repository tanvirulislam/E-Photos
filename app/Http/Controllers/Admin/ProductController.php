<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Subcategory;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function index()
    {

        $category = Category::all();

        $subcategory = Subcategory::all();

        $product = Product::latest()->paginate(8);

        return view('admin.product.manage', compact('category', 'subcategory', 'product'));

    }

    public function create()
    {

        $category = Category::all();

        $subcategory = Subcategory::all();

        $product = Product::all();

        return view('admin.product.add', compact('category', 'subcategory', 'product'));

    }

    // ajax for subcategory
    public function findProductName(Request $request)
    {

        $data = Subcategory::select('subcategory_name', 'slug')->where('category_id', $request->id)->get();

        return response()->json($data);

    }

    protected function imageUpload($request)
    {

        $productImage = $request->file('image');

        $extension = $productImage->getClientOriginalExtension();

        $directory = 'public/storage/uploads/image/water_mark/';

        $imageUrl = time() . '.' . $extension;

        $watermark = Image::make('public/admin/images/water_mark.png')->opacity(50);

        $img = Image::make($productImage);

        $watermarkSize = $img->width() - 20; //size of the image minus 20 margins
       
        $watermarkSize = $img->width() / 2; //half of the image size
       
        $resizePercentage = 70; //70% less then an actual image (play with this value)

        $watermarkSize = round($img->width() * ((100 - $resizePercentage) / 100), 2); //watermark will be $resizePercentage less then the actual width of the image

        // resize watermark width keep height auto
        $watermark->resize($watermarkSize, null, function ($constraint) {

            $constraint->aspectRatio();
            
        });

        $img->insert($watermark, 'center');

        $img->save($directory . $imageUrl);

        Image::make($productImage)->save('public/storage/uploads/image/original_image/' . $imageUrl);

        return $imageUrl;

    }

    public function store(Request $request)
    {
        $request->validate([

            'cat_id' => 'required',
            'subcat_id' => 'required',
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'image' => 'required',
            'status' => 'required',

        ]);

        if ($request->file('image') !== null) {

            $image = $this->imageUpload($request);

        } else {

            $image = null;
        }

        $product = new Product();
        $product->user_post_id = Auth::user()->id;
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->status = $request->status;
        $product->image = $image;
        $product->save();

        Toastr::success('Successully Add 🙂', 'Success');

        return redirect()->route('admin.product')->with('message', 'Registered succesfully');

    }

    public function edit($id)
    {

        $category = Category::all();

        $subcategory = Subcategory::all();

        $product = Product::find($id);

        return view('admin.product.edit', compact('category', 'subcategory', 'product'));

    }

    public function productInfoUpdate($product, $request, $imageUrl)
    {

        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->image = $imageUrl;
        $product->status = $request->status;
        $product->save();

    }

    public function update(Request $request)
    {

        $productImage = $request->file('image');

        if ($productImage) {

            $product = Product::find($request->id);

            unlink('public/storage/uploads/image/water_mark/' . $product->image);

            unlink('public/storage/uploads/image/original_image/' . $product->image);

            $imageUrl = $this->imageUpload($request);

            $this->productInfoUpdate($product, $request, $imageUrl);

            return redirect()->route('admin.product');
        } else {

            $product = Product::find($request->id);
            $product->cat_id = $request->cat_id;
            $product->subcat_id = $request->subcat_id;
            $product->product_name = $request->product_name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->discount_price = $request->discount_price;
            $product->status = $request->status;
            $product->save();

            Toastr::success('Product Successfully Updated 🙂', 'Success');
            return redirect()->route('admin.product');
        }

    }

    public function delete($id)
    {

        $product = Product::find($id);

        unlink('public/storage/uploads/image/water_mark/' . $product->image);

        unlink('public/storage/uploads/image/original_image/' . $product->image);

        $product->delete();

        Toastr::warning('Successully Deleted 🙂', 'Success');

        return redirect()->route('admin.product');

    }


    // -------------------search option------------------

    
}
