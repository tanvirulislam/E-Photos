@extends('admin.master.master')

@section('title')
Media
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

						<br>
						<a href="{{route('admin.add_media')}}" type="button" class="btn btn-success">Add Media</a>
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
									<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Video</a></li>
									<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Audio</a></li>
									<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">3D View</a></li>
								</ul>
							</div><!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content">
									<div class="active tab-pane" id="activity">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th scope="col">ID</th>
													<th scope="col">Category</th>
													<th scope="col">Video file</th>
													<th scope="col">Description</th>
													<th scope="col">Status</th>
													<th scope="col">Action</th>

												</tr>
											</thead>
											<tbody>
												@foreach($video as $videos)
												<tr>
													<td scope="row">{{$videos->id}}</td>
													<td>{{ $videos->category }}</td>
													<td>
													<video src="{{asset('public/storage/uploads/video')}}/{{$videos->video_file}}" width="320" 
													height="240" controls="" style="vertical-align: middle" type="video/mp4" controlslist="nodownload">
													Your browser does not support the video element.</video>
													</td>
													<td>{{$videos->video_desp}}</td>
													<td>
													@if( $videos -> status == 1)
													Active
													@else
													inactive
													@endif
													</td>

													<td>
														<a href="{{ route('admin.edit_video',$videos->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>
														<form id="delete-form-{{ $videos->id }}" action="{{ route('admin.delete_video',$videos->id) }}" method="POST" style="display: none;">
															@csrf
														</form>
														<button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $videos->id }})"><i class="fas fa-trash-alt"></i></button>

													</td>

												</tr>
												@endforeach
											</tbody>
										</table>
										<div class="d-flex justify-content-center">
           									{!! $video->links() !!}
										</div>


									</div>
									<!-- /.tab-pane -->
									<div class="tab-pane" id="timeline">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th scope="col">Id</th>
													<th scope="col">Audio Image</th>
													<th scope="col">Category</th>
													<th scope="col">File</th>
													<th scope="col">Description</th>
													<th scope="col">Status</th>
													<th scope="col">Action</th>

												</tr>
											</thead>
											<tbody>
												@foreach($audio as $audios)
												<tr>
													<th scope="row">{{$audios->id}}</th>
													<td><img src="{{asset('public/storage/uploads/image/audio_image')}}/{{$audios->picture}}" width="70px" height="70px"></td>
													<td>{{$audios->category}}</td>
													<td>
													<audio src="{{asset('public/storage/uploads/audio')}}/{{$audios->audio_file}}" type="audio/ogg/mpeg/mpga/mp3/wav/aac"
													controls="" style="vertical-align: middle" controlslist="nodownload">
													Your browser does not support the audio element.</audio>
													</td>
													<td>{{$audios->audio_desp}}</td>
													<td>
													@if( $audios -> status == 1)
													Active
													@else
													Inactive
													</td>
													@endif
													<td>
														<a href="{{ route('admin.edit_audio',$audios->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>
														<form id="delete-form-{{ $audios->id }}" action="{{ route('admin.delete_audio',$audios->id) }}" method="POST" style="display: none;">
															@csrf
														</form>
														<button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $audios->id }})"><i class="fas fa-trash-alt"></i></button>

													</td>

												</tr>
												@endforeach

											</tbody>
										</table>
										<div class="d-flex justify-content-center">
           									{!! $audio->links() !!}
										</div>
									</div>
									<!-- /.tab-pane -->

									<div class="tab-pane" id="settings">

										<table class="table table-bordered">
											<thead>
												<tr>
													<th scope="col">Id</th>
													<th scope="col">3D Image</th>
													<th scope="col">Category</th>
													<th scope="col">description</th>
													<th scope="col">Action</th>

												</tr>
											</thead>
											<tbody>
												@foreach($three_d as $td)
												<tr>
													<td>{{$td->id}}</td>
													<td><img src="{{asset('public/storage/uploads/image/water_mark')}}/{{$td->picture}}" width="70px" height="70px"></td>
													<TD>{{$td->category}}</TD>
													<td>{{$td->desp}}</td>
													<td>
														<a href="{{ route('admin.edit_three_d',$td->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>
														<form id="delete-form-{{ $td->id }}" action="{{ route('admin.delete_three_d',$td->id) }}" method="POST" style="display: none;">
															@csrf
														</form>
														<button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $td->id }})"><i class="fas fa-trash-alt"></i></button>

													</td>

												</tr>
												@endforeach

											</tbody>
										</table>
										<div class="d-flex justify-content-center">
           									{!! $audio->links() !!}
										</div>
									</div>

								</div>
								<!-- /.tab-pane -->
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
<script type="text/javascript">
	function deleteTag(id) {
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!',
			confirmButtonClass: 'btn btn-success',
			cancelButtonClass: 'btn btn-danger',
			buttonsStyling: false,
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				event.preventDefault();
				document.getElementById('delete-form-'+id).submit();
			} else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                    ) {
				swal(
					'Cancelled',
					'Your data is safe 🙂',
					'error'
					)
			}
		})
	}
</script>
</body>

@endsection
