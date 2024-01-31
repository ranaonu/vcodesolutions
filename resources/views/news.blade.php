@extends('layouts.vcode')
@section('content')
 <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">There are many variations of passages of Lorem Ipsum</p>
            <div class="about_section_2">
               <div class="row">
                  <div class="col-lg-5 col-sm-12">
                     <div><img src="{{ asset('public/images/about-img.png')}}"class="about_img"></div>
                  </div>
                  <div class="col-lg-7 col-sm-12">
                     <h1 class="dealing_taital">Dealing with problems in your home</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     <div class="read_more_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      
@endsection