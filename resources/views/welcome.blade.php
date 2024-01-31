@extends('layouts.vcode')
@section('content')
<!-- services section start -->
<div class="services_section layout_padding">
<div class="container">
   <h1 class="services_taital">Our Services</h1>
   <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum</p> -->
   <div class="services_section_2 layout_padding">
      <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <div class="box_main">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-1.png')}}"><span  class="padding_left_10">Graphic Design</span></div>
                     <p class="long_text">We are here to assist you with Print Ads, Social Media Banners , logos and other required marketing material.Here, We create the affectionate designs for you. </p>
                     <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="box_main active">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-2.png')}}"><span  class="padding_left_10">Web Design</span></div>
                     <p class="long_text">To meet your expectations, we grab your information and create the astonishing web designs for your website or mobile apps. We want you be a part of the real world with unique identity of your business designs.</p>
                     <!-- <div class="read_bt active"><a href="#">Read More</a></div> -->
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="box_main active">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-3.png')}}"><span  class="padding_left_10">Web Development </span></div>
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
                     <div class="repair_text"><img src="{{ asset('public/images/icon-3.png')}}"><span  class="padding_left_10">Quality Assurance</span></div>
                     <p class="long_text">To deliver the 100% bug free solutions to our globally chained clients, we have very excellent testers, which performs their roles and responsibilities with very these oprations; they execute and log the tests, evaluate the results and document problems found.  </p>
                     <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                  </div>
               </div>

            </div>
   </div>
</div>
<!-- services section end -->
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
               <p class="lorem_text">With 5 years of experience in IT Industry we stepIN for providing our web services globaly to make your dreams true. Guided by our personal working experience, we implemented this idea into reality that we will deliver the high quality web designs & best bug free web development solutions to our clients for grow more in the global marketing, as well as innovative internet-driven marketing and sales strategies. In our relatively young history, we have been a key to the never-ending success stories of many internet businesses and successfully implemented projects.With a consistent growth track record that has surpassed the industry trends year 
on year since our inception, what keeps us moving is our philosophy of pursuing 
that we call “measured success”.</p>
               <!-- <div class="read_more_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<!-- staff section start -->
<div class="staff_section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-sm-12">
            <div class="staff_section_main">
               <h1 class="everything_text">Everything<br> you need under one </h1>
               <div class="profesinal_main">
                  <div class="left_main">
                     <div class="services_icon"><img src="{{ asset('public/images/service-icon.png')}}"></div>
                  </div>
                  <div class="right_main">
                     <h2 class="professional_text">Professional Staff</h2>
                     <h4 class="many_text">There are many variations of passages </h4>
                  </div>
               </div>
               <div class="profesinal_main">
                  <div class="left_main">
                     <div class="services_icon"><img src="{{ asset('public/images/support-icon.png')}}"></div>
                  </div>
                  <div class="right_main">
                     <h2 class="professional_text">24/7 Services</h2>
                     <h4 class="many_text">There are many variations of passages </h4>
                  </div>
               </div>
               <div class="profesinal_main">
                  <div class="left_main">
                     <div class="services_icon"><img src="{{ asset('public/images/wallet-icon.png')}}"></div>
                  </div>
                  <div class="right_main">
                     <h2 class="professional_text">Save money</h2>
                     <h4 class="many_text">There are many variations of passages </h4>
                  </div>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12 padding_right_0">
            <div class="image_1"></div>
         </div>
      </div>
   </div>
</div>
<!-- staff section end -->
<!-- client section start -->
<div class="client_section layout_padding">
   <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="client_taital">Testimonial</h1>
               <p class="client_text">Lorem Ipsum available, but the majority</p>
               <div class="client_section_2">
                  <div class="client_main">
                     <div class="client_img"><img src="{{ asset('public/images/client-img.png')}}"></div>
                     <h4 class="client_name">Believable</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you </p>
                     <div class="quite_icon"><a href="#"><img src="{{ asset('public/images/quite-icon.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="client_taital">Testimonial</h1>
               <p class="client_text">Lorem Ipsum available, but the majority</p>
               <div class="client_section_2">
                  <div class="client_main">
                     <div class="client_img"><img src="{{ asset('public/images/client-img.png')}}"></div>
                     <h4 class="client_name">Believable</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you </p>
                     <div class="quite_icon"><a href="#"><img src="{{ asset('public/images/quite-icon.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="client_taital">Testimonial</h1>
               <p class="client_text">Lorem Ipsum available, but the majority</p>
               <div class="client_section_2">
                  <div class="client_main">
                     <div class="client_img"><img src="{{ asset('public/images/client-img.png')}}"></div>
                     <h4 class="client_name">Believable</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you </p>
                     <div class="quite_icon"><a href="#"><img src="{{ asset('public/images/quite-icon.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
      <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
      <i class="fa fa-angle-right"></i>
      </a>
   </div>
</div>
<!-- client section end -->
<!-- news section start -->
<div class="news_section layout_padding">
   <div class="container">
      <h1 class="client_taital">Exciting News</h1>
      <p class="client_text">Lorem Ipsum available, but the majority</p>
      <div class="news_section_2 layout_padding">
         <div class="row">
            <div class="col-sm-6">
               <div class="iamge_2"><img src="{{ asset('public/images/img-2.png')}}"></div>
               <h2 class="teration_text">Teration in some form, by injected humour</h2>
               <h6 class="date_text">06 Feb 2022</h6>
               <p class="lorem_ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
            </div>
            <div class="col-sm-6">
               <div class="iamge_2"><img src="{{ asset('public/images/img-3.png')}}"></div>
               <h2 class="teration_text">Teration in some form, by injected humour</h2>
               <h6 class="date_text">06 Feb 2022</h6>
               <p class="lorem_ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- news section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="contact_main">
         <h1 class="request_text">Get In Touch</h1>
         <form action="/action_page.php">
            <div class="form-group">
               <input type="text" class="email-bt" placeholder="Name" name="Name">
            </div>
            <div class="form-group">
               <input type="text" class="email-bt" placeholder="Email" name="Name">
            </div>
            <div class="form-group">
               <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
            </div>
            <div class="form-group">
               <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
            </div>
         </form>
         <div class="send_btn"><a href="#">SEND</a></div>
      </div>
   </div>
</div>
<!-- contact section end -->

@endsection