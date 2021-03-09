@extends('user.master.master')

@section('title')
E-Photos | Product Add
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
  </div><!-- /.container-fluid -->
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="padding: 13px">
        <div class="card-header">
          <h3>Add Product</h3>
        </div>

        <form method="post" action="{{route('user.store_user_product')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label>Catagory Name</label>
            <select class="form-control" name="cat_id" id="prod_cat_id">
            
              @foreach($category as $categories)

              <option value="{{ $categories->id }}">

              {{ $categories->category_name }}

              </option>

              @endforeach
            </select>
          </div>

          <div class="form-group" >
            <label>Subcatagory  Name</label>

            <select id="subcategory" class="form-control productname" name="subcat_id">
            
              <option value="0" disabled="true" selected="true">Select Subcatagory</option>
              
            </select>

          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1" placeholder="Product name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Product Description</label>
            <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Product discription">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Product Price</label>
            <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Product Price">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Product Discount Price</label>
            <input type="number" name="discount_price" class="form-control" id="exampleFormControlInput1" placeholder="Product discount Price">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Product Image</label>
            <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Product Image">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
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
<script type="text/javascript">

  $(document).ready(function(){

    $('#prod_cat_id').on('change',function(){
            //console.log("hmm its change");

            var cat_id=$(this).val();
             //console.log(cat_id);
             var div=$(this).parent();


             var op=`<label for="exampleInputEmail1">Subcatagory Name</label>
             <select class="form-control productname" name="subcat_id" >`;

             $.ajax({
              type:'get',
              url:'{!!URL::to('findProductName')!!}',
              data:{'id':cat_id},
              success:function(data){

                  //console.log('success');

                    //console.log(data);

                    //console.log(data.length);

                   // op+='<option value="0" selected disabled>choose sub-category</option>';
                   for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].subcategory_name+'</option>';
                  }
                  // console.log(op)

                  op+= `</select>`

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