@extends('layouts.vcode')
@section('content')
 <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
         <h1 class="services_taital">Our Services</h1>
         <p class="services_text">There are many variations of passages of Lorem Ipsum</p>
         <div class="services_section_2 layout_padding">
            <div class="row">
         <div class="col-lg-6 col-sm-12">
            <div class="box_main">
               <div class="repair_text"><img src="{{ asset('public/images/graphic_design.png')}}" width="65" height="50"><span  class="padding_left_10">Graphic Design</span></div>
               <p class="long_text">We are here to assist you with Print Ads, Social Media Banners , logos and other required marketing material.Here, We create the affectionate designs for you. </p>
               <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
         <div class="col-lg-6 col-sm-12">
            <div class="box_main active">
               <div class="repair_text"><img src="{{ asset('public/images/web_design.png')}}" width="65" height="50"><span  class="padding_left_10">Web Design</span></div>
               <p class="long_text">To meet your expectations, we grab your information and create the astonishing web designs for your website or mobile apps. We want you be a part of the real world with unique identity of your business designs.</p>
               <!-- <div class="read_bt active"><a href="#">Read More</a></div> -->
            </div>
         </div>
         <div class="col-lg-6 col-sm-12">
            <div class="box_main active">
               <div class="repair_text"><img src="{{ asset('public/images/web_develoment.png')}}" width="65" height="50"><span  class="padding_left_10">Web Development </span></div>
               <p class="long_text">With excellent skills of our expert crew developers , we develop the source code for your projects. We write FULLY COMMENTED, TESTED, CRISP, ROBUST and EXTENSIBLE code.  </p>
               <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>

          <!-- <div class="col-lg-4 col-sm-12">
            <div class="box_main">
               <div class="repair_text"><img src="{{ asset('public/images/icon-3.png')}}"><span  class="padding_left_10">Digital Marketing </span></div>
               <p class="long_text">Our SEO experts value your business , that's why we do efforts to rank your website in Google search. Also, we do advertisement to feel you like, you are everywhere.  </p>
            </div>
         </div> -->

          <div class="col-lg-6 col-sm-12">
            <div class="box_main">
               <div class="repair_text"><img src="{{ asset('public/images/quality.png')}}" width="65" height="50"><span  class="padding_left_10">Quality Assurance</span></div>
               <p class="long_text">To deliver the 100% bug free solutions to our globally chained clients, we have very excellent testers, which performs their roles and responsibilities with very these oprations; they execute and log the tests, evaluate the results and document problems found.  </p>
               <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
      </div>
         </div>
      </div>
      </div>
      <!-- about section end -->
      
@endsection