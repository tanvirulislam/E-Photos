@extends('front.master.master')

@section('title')
Cart
@endsection

@section('body')

<body>
  <div class="view-container view-container--default motmot">
    <div class="container-relative in-front">
      <div class="overflow-hidden">
        <div class="mti-hero-image" >
          <picture>
            <source srcset="{{asset('public/front/images/other_banner.jpg')}}" type="image/webp" />
            <img style="height:325px; width: 100%;" data-t="main-header-hero-image" src="{{asset('public/front/images/other_banner.jpg')}}"
            class="mti-hero-image mti-hero-image--cover mti-hero-image--large js-hero-image-full container-full hidden">
          </picture>
        </div>
        <div
        class="mti-hero-image mti-hero-image--large js-hero-image blurry-image scaled-image"
        style="background-image: url('data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAEAA4DASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAUG/8QAHxAAAQQCAgMAAAAAAAAAAAAAAQIDBBEABRJBFCFR/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAL/xAAaEQACAgMAAAAAAAAAAAAAAAAAAUHwAjND/9oADAMBAAIRAxEAPwDPMznJC1eSht5uO3EbZbUKShPBJNVR9n6clanZTpmzlxZMt1caPZabNUjktVgGr6HeMYW1qwTyxdk//9k=');"></div>
      </div>
      <script>
        window.adobestock_heroImage.lazyLoadHeroImage(
          document.getElementsByClassName('js-hero-image')[0],
          document.getElementsByClassName('js-hero-image-full')[0]
          );
        </script>
        <div class="container-absolute to-all medium-black-overlay">
          <div class="padding-large">
            <div class="container-table container-full">
              <div class="container-table-cell">
                <div class="hide-on-med-and-down">
                  <a class='logo_text' href="{{route('home')}}">
                    <img src="{{asset('public/front/images/E-Photos.png')}}" class="img-fluid" 
                    style="width:188px; height:61px" alt="logo">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>




        <section  class="ftco-section ftco-cart">
          <div style="" class="container">
            <div class="block-title" style="text-align: center;
            font-size: 25px;
            font-weight: 700;
            color: #2680eb;
            margin-bottom: 10px;">
            <span class="title">Your Cart List</span>
          </div>
          @if(session()->has('success_msg'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success_msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          @endif
          @if(session()->has('alert_msg'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('alert_msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          @endif
          @if(count($errors) > 0)
          @foreach($errors0>all() as $error)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          @endforeach
          @endif
          <div class=" row">
            <!--new cart model -->
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="text-center panel-heading">
                  @if(\Cart::getTotalQuantity()>0)
                  <br>
                  <h4 class="text-center" style="color:black"><b>{{ \Cart::getTotalQuantity()}} Item(s) In Your Cart<b></h4><br>
                    @else
                    <h4 class="text-center">No Item(s) In Your Cart</h4><br>
                    <a  href="{{ route('home') }}" class="btn btn-info">Take a look again</a>
                    <br>
                    <br>
                    @endif
                  </div>

                  <div class="panel-body">
                    @foreach($cartCollection as $item)
                    <div class="row">
                      <div class="column on-small-12 on-medium-4 on-large-4">
                        <img src="{{asset('public/storage/uploads/image/water_mark')}}/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                      </div>
                      <div class="column on-small-12 on-medium-4 on-large-4">
                        <p>
                          <b>{{ $item->name }}</b><br>

                          <b>Price: </b>{{ $item->price }} &nbsp $<br>

                          <b>Sub Total: </b>{{ \Cart::get($item->id)->getPriceSum() }} &nbsp $<br>

                          <!-- {{--<b>With Discount: </b>BDT.{{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}} -->
                        </p>
                      </div>

                      <div class="column on-small-12 on-medium-4 on-large-4">
                        <form action="{{ route('cart.remove') }}" method="POST" class="form-inline">
                          @csrf
                          <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                          <button style="color:black" class="button button--action button--silent btn btn-danger" style="">Delete</button>
                        </form>
                      </div>
                      
                    </div>
                    <hr>
                    @endforeach


                    <div class="panel-footer" style="text-align: center;">
                      <div class="row">
                        <div class="column on-small-12 on-medium-4 on-large-4">
                          @if(count($cartCollection)>0)
                          <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button style="color:black" class="button button--action button--silent">Clear Cart</button>
                          </form>
                          @endif
                        </div>
                        <div class="column on-small-12 on-medium-4 on-large-4">
                          @if(count($cartCollection)>0)

                          <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item"><b>Total: </b>{{ \Cart::getTotal() }} &nbsp $</li>
                          </ul>
                          <br>
                          <button style="color:black" class="button button--action button--silent">
                          <a style="margin:8px 0px;color:black" href="{{route('home')}}">Take a look again</a> &nbsp &nbsp
                          </button>
                          
                          <br>
                          <br>
                          
                          @if( Session::get('customerId'))
                          <button style="color:black" class="button button--action button--silent">
                          <a href="#">Proceed To Checkout</a> 
                          </button>
                          
                          @else
                         <button style="color:black" class="button button--action button--silent">
                          <a href="#" style="margin:8px 0px;color:black">Proceed To Checkout</a> 
                          </button>
                          @endif
                          @endif
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <!--new cart model -->
              <br>


            </div>
          </div>
        </section>
        <div>
        </body>
        @endsection
