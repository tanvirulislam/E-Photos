@extends('admin.master.master')

@section('title')
Subcategory
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Subcategory</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
      <div class="card" style="padding:13px;">
        <div class="card-header">
         <div class="row">
          
         </div>
       </div>

       <form method="post" action="{{route('admin.subcategory.update')}}">
        @csrf

        <input type="hidden" name="id" value="{{$subcategory->id}}" class="form-control" id="exampleFormControlInput1" placeholder="" }}>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Subcategory name</label>

          <select name="category_id" class="form-control" id="exampleFormControlSelect1" }}>

            @foreach( $category as $categories )

            <option value="{{$categories->id}}" {{ $categories->id == $subcategory->category_id ? 'selected' : '' }}>

            {{ $categories->category_name }}

            </option>
            @endforeach

          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Subcategory name</label>

          <input type="text" name="subcategory_name" value="{{$subcategory->subcategory_name}}" class="form-control" id="exampleFormControlInput1" placeholder="" }}>

        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Status</label>

          <select name="status" class="form-control" id="exampleFormControlSelect1" }}>

            <option value="1" {{ $subcategory->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $subcategory->status == 0 ? 'selected' : '' }}>Inctive</option>

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