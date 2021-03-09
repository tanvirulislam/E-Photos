@extends('admin.master.master')

@section('title')
Subcatagory
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Subcatagory</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Subcatagory</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="padding: 13px">
        
        <form method="post" action="{{route('admin.subcategory.store')}}">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlSelect1">Category </label>
            <select name="category_id" class="form-control" id="exampleFormControlSelect1" }}>

              @foreach($category as $categories)

              <option value="{{$categories->id}}">

              {{$categories->category_name}}

              </option>

              @endforeach
              
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Subcatagory name</label>
            <input type="text" name="subcategory_name" class="form-control" id="exampleFormControlInput1" placeholder="Subcategory" }}>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1" }}>
            
              <option value="1">Active</option>
              <option value="0">Inactive</option>
              
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