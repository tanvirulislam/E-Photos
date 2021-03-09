@extends('admin.master.master')

@section('title')
Add Media
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
									<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Video</a></li>
									<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Audio</a></li>
									<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">3D View</a></li>
								</ul>
							</div><!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content">
									<div class="active tab-pane" id="activity">

										<form action="{{route('admin.add_video')}}" id="form_validation" method="POST" enctype="multipart/form-data">
											@csrf

											<div class="form-group">
												<label for="exampleFormControlInput1">Video category</label>
												<input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="Video category">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">Video File</label>
												<input type="file" name="video_file" class="form-control" id="exampleFormControlInput1" placeholder="Video file">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">Video description</label>
												<input type="text" name="video_desp" class="form-control" id="exampleFormControlInput1" placeholder="Video description">
											</div>

											<div class="form-group">
													<label for="exampleFormControlSelect1">Status</label>
													<select name="status" class="form-control" id="exampleFormControlSelect1" }}>
													<option value="1">Active</option>
													<option value="0">INactive</option>
													
													</select>
											</div>

											<button type="submit" class="btn btn-success">Add</button>
											<a href="#" type="button" class="btn btn-danger">Cancel</a>

										</form>
									</div>
									<!-- /.tab-pane -->
									<div class="tab-pane" id="timeline">
										<form action="{{route('admin.add_audio')}}" id="form_validation" method="POST" enctype="multipart/form-data">
											@csrf

											<div class="form-group">
												<label for="exampleFormControlInput1"> photo</label>
												<input type="file" name="picture[]" multiple class="form-control" id="exampleFormControlInput1" placeholder="audio file">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">Audio category</label>
												<input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="audio category">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">Audio File</label>
												<input type="file" name="audio_file" class="form-control" id="exampleFormControlInput1" placeholder="audio file">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">Audio description</label>
												<input type="text" class="form-control" name="audio_desp" placeholder="Audio description">
											</div>

											<div class="form-group">
													<label for="exampleFormControlSelect1">Status</label>
													<select name="status" class="form-control" id="exampleFormControlSelect1" }}>
													<option value="1">Active</option>
													<option value="0">INactive</option>
													
													</select>
											</div>

											<button type="submit" class="btn btn-success">Add</button>
											<a href="#" type="button" class="btn btn-danger">Cancel</a>

										</form>
									</div>
									<!-- /.tab-pane -->

									<div class="tab-pane" id="settings">

									<form action="{{route('admin.add_three_d')}}" id="form_validation" method="POST" enctype="multipart/form-data">
											@csrf

											<div class="form-group">
												<label for="exampleFormControlInput1">3D View</label>
												<input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="3D category">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">3D photo</label>
												<input type="file" name="picture" class="form-control" id="exampleFormControlInput1" placeholder="audio file">
											</div>

											<div class="form-group">
												<label for="exampleFormControlInput1">3D description</label>
												<input type="text" name="desp" class="form-control" id="exampleFormControlInput1" placeholder="3d description">
											</div>

											<button type="submit" class="btn btn-success">Add</button>
											<a href="#" type="button" class="btn btn-danger">Cancel</a>

										</form>

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
</body>

@endsection