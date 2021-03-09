<?php

namespace App\Http\Controllers\Admin;

use App\Audio;
use App\Http\Controllers\Controller;
use App\Three_d;
use App\Video;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;
use Image;

// use App\Media;

class MediaController extends Controller
{

    public function add()
    {

        return view('admin.media.add_media');
    }

    public function index()
    {

        $audio = Audio::latest()->paginate(4);
        $video = Video::latest()->paginate(5);
        $three_d = Three_d::latest()->paginate(3);
        return view('admin.media.media', ['video' => $video, 'audio' => $audio, 'three_d' => $three_d]);

    }

    public function add_video(Request $request)
    {
        $request->validate([

            'category' => 'required',
            'video_desp' => 'required',
            'video_file' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,
            video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi,video/webm',
            'status' => 'required',

        ]);

        $video = new Video();
        $video->category = $request->category;
        $video->video_desp = $request->video_desp;
        $video->status = $request->status;

        if ($request->file('video_file')) {

            $file = $request->file('video_file');

            $extension = $request->file('video_file')->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $file->move('public/storage/uploads/video', $filename);

            $watermark = Image::make('public/admin/images/water_mark.png');

            $img = Image::make('public/storage/uploads/video'.$filename);

            $img->insert($watermark, 'center');

            $img->save($directory . $filename);

            FFMpeg::open('public/admin/images/water_mark.png')

                ->addFilter(function ($filters) use ($watermarkPath) {

                    $filters->watermark($watermarkPath, [
                        'position' => 'relative',
                        'bottom' => 50,
                        'right' => 50,
                    ]);

                })->export();

            $video->video_file = $filename;

        }

        $video->save();

        return redirect()->route('admin.media');

    }

    public function edit_video($id)
    {

        $video = Video::find($id);

        return view('admin.media.edit_media', compact('video'));

    }

    public function update_video(Request $request)
    {

        $video = Video::find($request->id);

        $video->category = $request->category;
        $video->video_desp = $request->video_desp;
        $video->status = $request->status;

        if ($request->hasfile('video_file')) {

            $file = $request->file('video_file');

            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $file->move('public/storage/uploads/video', $filename);

            unlink('public/storage/uploads/video/' . $video->video_file);

            $video->video_file = $filename;

        }

        $video->save();

        Toastr::success('Successully Updated 🙂', 'Success');
        return redirect()->route('admin.media');
    }

    public function delete_video($id)
    {

        $video = Video::find($id);

        unlink('public/storage/uploads/video/' . $video->video_file);

        $video->delete();

        Toastr::warning('Successully Deleted 🙂', 'Success');
        return redirect()->route('admin.media');
    }

// ---------------------------------------AUDIO-----------------------------------

    public function add_audio(Request $request)
    {
        $request->validate([

            'category' => 'required',
            'audio_desp' => 'required',
            'audio_file' => 'required',
            'picture' => 'required',
            'status' => 'required',

        ]);

        $audio = new Audio();
        $audio->category = $request->category;
        $audio->audio_desp = $request->audio_desp;
      
        $audio->status = $request->status;

        if ($request->file('audio_file')) {

            $file = $request->file('audio_file');

            $extension = $request->file('audio_file')->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $file->move('public/storage/uploads/audio/', $filename);

            $audio->audio_file = $filename;

        }

        $picture =array();

        if($files = $request->file('picture')){

            foreach($files as $file){

                $name = $file->getClientOriginalName();
                
                $file->move('public/storage/uploads/image/audio_image/', $name);
                
                $picture[] = $name;
                
            }
            $audio->picture = json_encode($picture);
            // $audio->picture =implode(",",$picture); 

        //    print_r( $picture);
        }

        // }
        
// dd($audio);
// exit();
        $audio->save();
        echo('ok');
                exit();


        return redirect()->route('admin.media');

    }

    public function edit_audio($id)
    {

        $audio = Audio::find($id);
        $video = '';
        return view('admin.media.edit_media', compact('audio', 'video'));

    }

    public function update_audio(Request $request)
    {

        $audio = Audio::find($request->id);
        $audio->category = $request->category;
        $audio->audio_desp = $request->audio_desp;
        $audio->status = $request->status;

        if ($request->hasfile('audio_file')) {

            $file = $request->file('audio_file');

            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $file->move('public/storage/uploads/audio/', $filename);

            $audio->audio_file = $filename;

        }

        
        

        if ($request->hasfile('picture')) {

            $file = $request->file('picture');

            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $file->move('public/storage/uploads/image/audio_image/', $filename);

            $audio->picture = $filename;

        }

        $audio->save();
        Toastr::success('Successully Updated 🙂', 'Success');
        return redirect()->route('admin.media');
    }

    public function delete_audio($id)
    {
        $audio = Audio::find($id);

        $audio->delete();

        Toastr::warning('Successully Deleted 🙂', 'Success');
        return redirect()->route('admin.media');

    }

    protected function imageUpload($request)
    {

        $productImage = $request->file('picture');

        $extension = $productImage->getClientOriginalExtension();

        $directory = 'public/storage/uploads/image/water_mark/';

        $imageUrl = time() . '.' . $extension;

        $watermark = Image::make('public/admin/images/water_mark.png');

        $img = Image::make($productImage);

        $img->insert($watermark, 'center');

        $img->save($directory . $imageUrl);

        Image::make($productImage)->save('public/storage/uploads/image/original_image/' . $imageUrl);

        return $imageUrl;
    }

    public function add_three_d(Request $request)
    {

        $request->validate([
            'category' => 'required',
            'picture' => 'required',
            'desp' => 'required',
        ]);

        if ($request->file('picture') !== null) {

            $image = $this->imageUpload($request);

        } else {

            $image = null;
        }

        $td = new Three_d();
        $td->category = $request->category;
        $td->picture = $image;
        $td->desp = $request->desp;
        $td->save();

        Toastr::success('Successully Add 🙂', 'Success');

        return redirect()->route('admin.media');

    }

    public function edit_three_d($id)
    {

        $td = Three_d::find($id);
        $audio = '';
        $video = '';

        return view('admin.media.edit_media', compact('td', 'video', 'audio'));

    }
    public function productInfoUpdate($product, $request, $imageUrl)
    {

        $product->category = $request->category;

        $product->desp = $request->desp;

        $product->picture = $imageUrl;

        $product->save();

    }
    public function update_three_d(Request $request)
    {

        $productImage = $request->file('picture');

        if ($productImage) {

            $product = Three_d::find($request->id);

            unlink('public/storage/uploads/image/water_mark/' . $product->picture);

            unlink('public/storage/uploads/image/original_image/' . $product->picture);

            $imageUrl = $this->imageUpload($request);

            $this->productInfoUpdate($product, $request, $imageUrl);

            return redirect()->route('admin.media');
        } else {

            $td = Three_d::find($request->id);

            $td->category = $request->category;

            $td->desp = $request->desp;

        }

        $td->save();

        Toastr::success('Successully Updated 🙂', 'Success');

        return redirect()->route('admin.media');
    }

    public function delete_three_d($id)
    {
        $td = Three_d::find($id);

        unlink('public/storage/uploads/image/water_mark/' . $td->picture);

        unlink('public/storage/uploads/image/original_image/' . $td->picture);

        $td->delete();

        Toastr::warning('Successully Deleted 🙂', 'Success');
        return redirect()->route('admin.media');
    }

}
