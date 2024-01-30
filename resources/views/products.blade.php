@extends('layouts.aaryav')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <!-- <span class="text-white">Our Products</span> -->
          <h1 class="text-capitalize mb-5 text-lg">Our Products</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section_add_products">
  <div class="container">
    @guest
    @else
    <div class="row">
      <div class="col-lg-10">
        <a href ="{{url('/add_product')}}">Add Products</a>
      </div>
      <div class="col-lg-2">
        <a href ="{{url('/add_category')}}">Add Category</a>
      </div>
    </div>
    @endif
  </div>
</section>

<section class="section1 service-2">
  <div class="container">
    <div class="row">
    @if(count($products)>0)
      @foreach($products as $key => $ph)

      <div class="col-lg-4 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat2&quot;]">
        <a href="{{url('/')}}/products/{{base64_encode($ph['id'])}}" class="view_prfl">
          <div class="position-relative doctor-inner-box">
              <div class="doctor-profile top1">
                  <div class="doctor-img">
                     <img src="{{asset('public/uploads/portfolio/').'/'.$ph['image']}}" alt="doctor-image" class="img-fluid w-100">
                  </div>
              </div>
              <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor-single.html">{{$ph['name']}}</a></h4>
                  @auth
                  <a href="{{url('/')}}/edit/{{base64_encode($ph['id'])}}" class="bok_ssn"><button type="button" class="btn btn-primary btn-sm text-white ">Edit</button></a>
                  @endauth
              </div> 
          </div>  
        </a>
      </div>

      @endforeach
      @else 
      <div class="col-lg-4 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat2&quot;]">
        No record found
      </div>
    @endif
    </div>
  </div>
</section>
@endsection