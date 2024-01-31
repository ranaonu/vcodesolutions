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
                     <p class="lorem_text">With 5 years of experience in IT Industry we stepIN for providing our web services globaly to make your dreams true. Guided by our personal working experience, we implemented this idea into reality that we will deliver the high quality web designs & best bug free web development solutions to our clients for grow more in the global marketing, as well as innovative internet-driven marketing and sales strategies. The growth curve continued to rise steeply over the years for us. In our relatively young history, we have been a key to the never-ending success stories of many internet businesses and successfully implemented projects.With a consistent growth track record that has surpassed the industry trends year 
on year since our inception, what keeps us moving is our philosophy of pursuing 
that we call “measured success”.</p>
                     <!-- <div class="read_more_bt"><a href="#">Read More</a></div> -->
                     <ul class="lorem_text about_us_list">
                        <li>Global presence with happy clients</li>
                        <li>Certified Developers and Solution Specialists</li>
                        <li>24x7 services</li>
                        <li>Daily Work Update to Client</li>
                        <li>Meet Deadlines</li>
                        <li>40 hours/week </li>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      
@endsection