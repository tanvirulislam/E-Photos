@extends('admin.master.master')

@section('title')
Update Media
@endsection

@section('body')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Media</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    @if($video!=null)
                                    <li class="nav-item"><a class="nav-link active" href="#video" data-toggle="tab">Video</a></li>
                                    @elseif($audio!=NULL)
                                    <li class="nav-item"><a class="nav-link active" href="#audio" data-toggle="tab">Audio</a></li>
                                    @elseif($td!=NULL)
                                    <li class="nav-item"><a class="nav-link active" href="#three_d" data-toggle="tab">3D</a></li>
                                    @endif
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    @if($video!=NULL)
                                    <div class="active tab-pane" id="video">

                                        <form action="{{route('admin.update_video')}}" id="form_validation" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$video->id}}" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Video category</label>
                                                <input value="{{$video->category}}" type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="Video category">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Video </label>
                                                <!-- <input type="file"  value="{{$video->video_file}}" class="form-control" name="video_s" placeholder=""> -->
                                                <input  type="file" name="video_file" class="form-control" id="exampleFormControlInput1" placeholder="Video category">

                                                <video width="320" height="240" controls="" style="vertical-align: middle" src="{{asset('public/storage/uploads/video')}}/{{$video->video_file}}" type="video/mp4" controlslist="nodownload">
                                                Your browser does not support the audio element.</video>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Video description</label>
                                                <input value="{{$video->video_desp}}" type="text" name="video_desp" class="form-control" id="exampleFormControlInput1" placeholder="Video category">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Status</label>
                                                
                                                <select name="status" class="form-control" id="exampleFormControlSelect1" }}>
                                                <option value="1" {{ $video->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $video->status == 0 ? 'selected' : '' }}>Inctive</option>

                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-success">Update</button>
                                            <a href="{{route('admin.media')}}" type="button" class="btn btn-danger">Cancel</a>

                                        </form>
                                    </div>
                                    @elseif($audio!=NULL)
                                    
                                    <div class="tab-pane active" id="audio">
                                        <form action="{{route('admin.update_audio')}}" id="form_validation" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$audio->id}}" class="form-control" id="exampleFormControlInput1" placeholder="">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Audio category</label>
                                                <input value="{{$audio -> category}}" type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="audio category">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Audio file</label>
                                                <input  type="file" name="audio_file" class="form-control" id="exampleFormControlInput1" placeholder="audio category">
                                                <audio controls="" style="vertical-align: middle" src="{{asset('public/storage/uploads/audio')}}/{{$audio->audio_file}}" type="audio/ogg/mpeg/mpga/mp3/wav/aac" controlslist="nodownload">
                                                Your browser does not support the audio element.</audio>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">description</label>
                                                <input value="{{ $audio->audio_desp }}" type="text" class="form-control" name="audio_desp" placeholder="Place some text here"
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Status</label>

                                                <select name="status" class="form-control" id="exampleFormControlSelect1" }}>
                                                <option value="1" {{ $audio->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $audio->status == 0 ? 'selected' : '' }}>Inctive</option>

                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-success">Add</button>
                                            <a href="#" type="button" class="btn btn-danger">Cancel</a>

                                        </form>
                                    </div>
                                
                                    @elseif($td!=NULL)

                                    <div class="tab-pane active" id="three_d">
									
                                        <form action="{{route('admin.update_three_d')}}" id="form_validation" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$td->id}}" class="form-control" id="exampleFormControlInput1" placeholder="">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">3D Category</label>
                                                <input value="{{ $td->category }}" type="text" name="category" class="form-control"  placeholder="Template category">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">3D photo</label>
                                                <input value="{{$td->picture}}" type="file" name="picture" class="form-control" id="exampleFormControlInput1" placeholder="audio file">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">3D description</label>
                                                <input value="{{ $td->desp }}" type="text" class="form-control" name="desp" placeholder="Place some text here"
                                                >
                                            </div>

                                            <button type="submit" class="btn btn-success">Add</button>
                                            <a href="{{route('admin.media')}}" type="button" class="btn btn-danger">Cancel</a>
                                        </form>
                                    </div>

                                    @endif

                                </div>
                                
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content --> 
</div>
<!-- ./wrapper -->
</body>

@endsection