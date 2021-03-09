@extends('admin.master.master')

@section('title')
Subcatagory
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Subcategory</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
          <li class="breadcrumb-item active">Subcategory</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header">
         <div class="row">
          <div class="col-md-3">
           <a href="{{route('admin.subcategory.create')}}" type="button" class="btn btn-success">Add </a>
         </div>
       </div>
     </div>
     <div class="card-body">
     <div class="table-responsive">
        <table class="table table-bordered table-hover" >
          <thead class=" thead-light">

          <tr>
            <th scope="col">id</th>
            <th scope="col">Category name</th>
            <th scope="col">Subcategory name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody >
          

          @foreach($subcategory as $subcategories)
          <tr>
            <th scope="row">{{ $subcategories -> id }}</th>
            <td>
              @foreach($category as $categories)

              @if( $categories->id == $subcategories->category_id)

              {{ $categories->category_name }}

              @endif
              @endforeach
            </td>
            <td>
              {{$subcategories->subcategory_name}}
            </td>
            <td>
              @if($subcategories->status ==1)

              Active

              @else

              Inactive

              @endif
            </td>

            <td>
              <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $subcategories->id }})"><i class="fas fa-trash-alt"></i></button>
              <form id="delete-form-{{ $subcategories->id }}" action="{{ route('admin.subcategory.delete',['id'=>$subcategories->id]) }}" method="POST" style="display: none;">
                @csrf
              </form>
              <a href="{{ route('admin.subcategory.edit',$subcategories->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
            {!! $subcategory->links() !!}
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

 <!-- search script -->
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