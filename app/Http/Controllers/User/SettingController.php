<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index(){

      return view('user.setting.setting');
  }


  public function updatePassword(Request $request)
  {
    $this->validate($request,[
        'old_password' => 'required',
        'password' => 'required|confirmed',
    ]);
    $hashedPassword = Auth::user()->password;
    if (Hash::check($request->old_password,$hashedPassword))
    {
        if (!Hash::check($request->password,$hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Toastr::success('Password Successfully Changed','Success');
            Auth::logout();
            return redirect()->back();
        } else {
            Toastr::error('New password cannot be the same as old password.','Error');
            return redirect()->back();
        }
    } else {
        Toastr::error('Current password not match.','Error');
        return redirect()->back();
    }
}

protected function imageUpload($request){
    $productImage = $request->file('image');
    $imageName = $productImage->getClientOriginalName();
    $directory = 'public/uploads/';
    $imageUrl = $directory.$imageName;
    Image::make($productImage)->resize(440,440)->save($imageUrl);
    return $imageUrl;
}

// protected function saveProductInfo($request, $imageUrl){
//     $product = new User();
//     $product->mobile_no = $request->mobile_no;
//     $product->email = $request->email;
//     $product->name = $request->name;
//     $product->image = $imageUrl;
//     $product->save();
//         //$subscribers = Subscriber::all();
//         //foreach ($subscribers as $subscriber)
//         //{
//            // Notification::route('mail',$subscriber->email)
//                 //->notify(new NewAdNotify($product));
//         //}
//     Toastr::success('profile Successfully Saved :)' ,'Success');
//     return redirect()->route('user.product');

// }

public function updateProfile(Request $request, $id)
{
    $profile = User::find($id);
    $profile->name = $request->name;
    $profile->email = $request->email;
    $profile->mobile_no = $request->mobile_no;
    $profile->country = $request->country;
    
    if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('public/uploads/',$filename);
        $profile->image = $filename;
    }
    $profile->save();
    Toastr::success('Successfully Updated :)','Success');
    return redirect()->back();
}
}
