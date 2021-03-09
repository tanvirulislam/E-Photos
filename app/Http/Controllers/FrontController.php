<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use App\Category;
use App\Product;
use App\Subcategory;
use App\Three_d;
use App\Video;


class FrontController extends Controller
{
    public function index()
    {

        $category = Category::where('status', 1)->latest()->get();

        $subcategory = Subcategory::where('status', 1)->latest()->get();

        $product = Product::where('status', 1)->latest()->get();

        return view('front.home', compact('category', 'product', 'subcategory'));
    }

    public function header(Request $request){
    
        $category = Category::where('id',$request->id)->get();

        return view('include.header', compact('category'));

    }

    public function audio()
    {

        $audio = Audio::all();

        return view('front.audio', compact('audio'));

    }

    public function photo()
    {
        $category = Category::all();

        $subcategory = Subcategory::all();

        $product = Product::where('status', 1)->latest()->get();
        // $product = Product::where('status', 1)->where('cat_id', $slug)->latest()->get();

        return view('front.photo', compact('category', 'product', 'subcategory'));

    }

    public function illustration()
    {
        return view('front.illustration');
    }

    public function vector()
    {
        return view('front.vector');
    }

    public function free()
    {
        return view('front.free');
    }

    public function templates()
    {
        return view('front.templates');
    }

    public function three_d_view()
    {

        $three_d = Three_d::all();

        return view('front.three_d_view', compact('three_d'));
    }

    public function editorial()
    {
        return view('front.editorial');
    }

    public function premium()
    {
        return view('front.premium');
    }

    public function video()
    {

        $video = Video::where('status', 1)->latest()->get();

        return view('front.video', compact('video'));

    }

    public function test_banner()
    {
        return view('front.test_banner');
    }

    // product view
    public function product_view($slug)
    {
        
        $item_category = Category::all();

        $item_view = Product::where('subcat_id', $slug)->orderBy('id', 'desc')->get();

        return view('front.product_view', compact('item_category', 'item_view'));

    }

    public function search(Request $request){

        $slug = $request->slug;

        $search = $request->search;

        $category = Category::all();
        

        if($slug == 'all'){

            $product = Product::where('product_name','LIKE','%'.$search.'%')
                ->orWhere('description','LIKE','%'.$search.'%')
                ->get();


        }
        else
        {
            $product = Product::where('cat_id', $slug)
                ->where('product_name','LIKE','%'.$search.'%')
                ->orWhere('description','LIKE','%'.$search.'%')
                // ->oRwhere('subcat_id','LIKE','%'.$search.'%')
                ->get();

        }
        
            return view('front.search', compact('product', 'category'));
    }
}
