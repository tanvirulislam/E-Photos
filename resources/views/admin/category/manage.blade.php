@extends('admin.master.master')

@section('title')
Category
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Category</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Category</li> 

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
           <a href="{{route('admin.category.create')}}" type="button" class="btn btn-success">Add </a>
         </div>
       </div>
     </div>
     <div class="card-body">
     <div class="table-responsive">
        <table class="table table-bordered table-hover" >
          <thead class=" thead-light">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Catagory name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        
        <tbody >
       
          @foreach($category as $categories)
          <tr>
            <th scope="row">{{ $categories->id }}</th>
            <td>{{ $categories->category_name }}</td>
            <td>
              @if($categories->status ==1)
              Active
              @else
              inactive
              @endif
            </td>

            <td>
            <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $categories->id }})"><i class="fas fa-trash-alt"></i></button>
              <form id="delete-form-{{ $categories->id }}" action="{{ route('admin.category.delete', $categories->id) }}" method="POST" style="display: none;">
                @csrf
              </form>
              <a href="{{ route('admin.category.edit',$categories->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

            </td>
          </tr>
          @endforeach
           
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
            {!! $category->links() !!}
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
          'Your data is safe ????',
          'error'
          )
      }
    })
  }
</script>
@endsection