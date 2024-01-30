@extends('layouts.aaryav')
@section('content')

 <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Product Details</h1>
          <!-- <h1 class="text-capitalize mb-5 text-lg">{{$product_detail['name']}}</h1> -->

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <br/>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="doctor-img-block">
          <img src="{{asset('public/uploads/portfolio/').'/'.$product_detail['profile_pic']}}" alt="" class="img-fluid w-100">
        </div>
      </div>

      <div class="col-lg-8 col-md-6">
        <div class="doctor-details mt-4 mt-lg-0">
          <!-- <h2 class="text-md">{{$product_detail['name']}}</h2> -->
          <p class="mb-0"> <strong>Composition:</strong> {{$product_detail['composition']}}</p>
          <!-- <p class="mb-0"><strong>Packing:</strong> {{$product_detail['packing']}}</p> -->


          <p>{!! preg_replace("/<br[^>]*>(?:\s|&nbsp;)*/", '', $product_detail['content']) !!}</p>


          
        </div>
      </div>
    </div>
  </div>
</section>   

@endsection