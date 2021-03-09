@extends('admin.master.master')

@section('title')
Product
@endsection

@section('body')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Product</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Product</li>

				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card" style="">
					<div class="card-header">
						<div class="row">
							<div class="col-md-3">
								<a href="{{route('admin.product.create')}}" type="button" class="btn btn-success">Add product</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover " >
								<thead class="thead-light">
									<tr>
										<th scope="col">ID</th>
										<th scope="col">User</th>
										<th scope="col">Image</th>
										<th scope="col">Category</th>
										<th scope="col">Subcategory</th>
										<th scope="col">Product name</th>
										<th scope="col">Product Descreption</th>
										<th scope="col">Price</th>
										<th scope="col">Discount Price</th>
										<th scope="col">Status</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody >



									@foreach($product as $products)
									<tr>
										<th scope="row">{{ $products -> id }}</th>

										<td>{{ $products->user_info->name }}</td>

										<td><img src="{{asset('public/storage/uploads/image/water_mark')}}/{{$products->image}}" width="70px" height="70px">

										</td>
										<td>
											@foreach( $category as $categories )

											@if( $categories->id == $products->cat_id)

											{{ $categories -> category_name }}

											@endif
											@endforeach
										</td>
										<td>
											@foreach( $subcategory as $subcategories )

											@if( $subcategories->slug == $products->subcat_id)

											{{ $subcategories->subcategory_name }}

											@endif
											@endforeach
										</td>
										<td>{{ $products->product_name }}</td>
										<td>{{ $products->description }}</td>
										<td>{{ $products->price }}</td>
										<td>{{ $products->discount_price }}</td>
										<td>
											@if( $products->status == 1 )
											Active
											@else
											Inactive
											@endif
										</td>

										<td>

											<a href="{{ route('admin.product.edit',$products->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

											<form id="delete-form-{{ $products->id }}" action="{{ route('admin.product.delete',$products->id) }}" method="POST" style="display: none;">
												@csrf
											</form>

											<button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $products->id }})"><i class="fas fa-trash-alt"></i></button>

										</td>
									</tr>

									@endforeach


								</tbody>
							</table>
							<div class="d-flex justify-content-center">
								{!! $product->links() !!}
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>

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

<!--                  search option                  -->
<script type="text/javascript">
	$('#search').on('keyup',function(){
		$value=$(this).val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('search')}}',
			data:{'search':$value},
			success:function(data){
				$('tbody').html(data);
			}
		});
	})
</script>
<script type="text/javascript">
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
