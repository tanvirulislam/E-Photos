@extends('admin.master.master')

@section('title')
Photo | Edit
@endsection


@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Photo</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Catagory</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card p-2" >
        <div class="card-header">
         <div class="row">
          <div class="col-md-3">
           
         </div>
       </div>
     </div>

     <form method="post" action="{{route('admin.category.update')}}">
     @csrf

     <input type="hidden" name="id" value="{{$category->id}}" class="form-control" id="exampleFormControlInput1" placeholder="" }}>
      
      <div class="form-group">

        <label for="exampleFormControlInput1">Photo name</label>

        <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="exampleFormControlInput1" placeholder="" }}>
        
      </div>
      <div class="form-group">

        <label for="exampleFormControlSelect1">Status</label>

        <select name="status" class="form-control" id="exampleFormControlSelect1" }}>

          <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>

          <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inctive</option>

        </select>

      </div>

      <button type="submit" class="btn btn-success">Submit</button>


    </form>

  </div>
</div>
</div>
</div>

</section>

@endsection