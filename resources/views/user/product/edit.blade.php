@extends('user.master.master')

@section('title')
E-Photos | Update product
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Update product</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="padding: 13px;">
        <div class="card-header">
          <h3>Update product</h3>
        </div>

        <form method="post" action="{{route('user.update_user_product')}}" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="id" value="{{$product->id}}" class="form-control" id="exampleFormControlInput1" 
          placeholder="">

          <div class="form-group">
            <label>Category Name</label>

            <select class="form-control" name="cat_id" id="prod_cat_id">

              @foreach($category as $categories)

              <option value="{{ $categories->id }}" {{ $categories->id == $product->cat_id ? 'selected' : '' }}>
                
                {{ $categories->category_name }}

              </option>

              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Subcatagory  Name</label>

            <select class="form-control productname" name="subcat_id"  id="subcategory">

             @foreach($subcategory as $subcategories)

             <option value="{{ $subcategories->id }}" {{ $subcategories->id == $product->subcat_id ? 'selected' : '' }}>

              {{ $subcategories->subcategory_name }}

            </option>

            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Product name</label>
          <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" id="exampleFormControlInput1" placeholder="Product name">

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Product desceiption</label>
          <input type="text" name="description" value="{{$product->description}}" class="form-control" id="exampleFormControlInput1" placeholder="Product desceiption">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Price</label>
          <input type="number" name="price" value="{{$product->price}}" class="form-control" id="exampleFormControlInput1" placeholder="Product Price">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Discount Price</label>
          <input type="number" name="discount_price" value="{{$product->discount_price}}" class="form-control" id="exampleFormControlInput1" placeholder="Product Price">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Image</label>
          <input type="file" name="image"  class="form-control" id="exampleFormControlInput1" placeholder="Product Image">
          <img src="{{asset('/')}}{{$product->image}}" width="70px" height="70px">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Status</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1" }}>
            
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inctive</option>

          </select>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>


      </form>

    </div>
  </div>
</div>
</div>

</section>
<script type="text/javascript">

  $(document).ready(function(){

    $('#prod_cat_id').on('change',function(){
            //console.log("hmm its change");

            var cat_id=$(this).val();
            //  console.log(cat_id);
            var div=$(this).parent();


            var op=` <label for="exampleInputEmail1">Subcatagory Name</label>
            <select class="form-control productname" name="subcat_id" >`;

            $.ajax({
              type:'get',
              url:'{!!URL::to('findProductName')!!}',
              data:{'id':cat_id},

              success:function(data){

                  //console.log('success');

                    // console.log(data);

                    // console.log(data.length);

                  //  op+='<option value="0" selected disabled>choose sub-category</option>';
                  for(var i=0;i<data.length;i++){
                    
                    op+='<option value="'+data[i].id+'">'+data[i].subcategory_name+'</option>';
                  }
                  // console.log(op);

                  op+=`</select>`

                  $('#subcategory').html(op);
                  // div.find('#subcategory').append(op);


                },
                error:function(){
                  
                }

              });

          });
  });

</script>
@endsection