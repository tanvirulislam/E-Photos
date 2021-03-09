@extends('user.master.master')

@section('title')
Account balance
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Account balance</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Account balance</li> 

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

         </div>
       </div>
     </div>
     <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" >
          <thead>

            <tr>
              <th scope="col">Id</th>
              
              <th scope="col">Affiliate balance</th>
              <th scope="col">Total balance</th>
              <th scope="col">Withdraw balance</th>
              <th scope="col">Add balance</th>
              <th scope="col">Main balance</th>
              
            </tr>
          </thead>
          <tbody >

            @php($i=1)

            @foreach($balance as $net_worth)
            <tr>
              <th scope="row">{{ $i++ }}</th>
              
              <td>{{ $net_worth->affiliate_balance }}</td>
              <td>{{ $net_worth->total_balance }}</td>
              <td>{{ $net_worth->withdraw_balance }}</td>
              <td>{{ $net_worth->add_balance }}</td>
              <td>{{ $net_worth->main_balance }}</td>
                            
            </tr>
            @endforeach

          </tbody>
        </table>
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
@endsection