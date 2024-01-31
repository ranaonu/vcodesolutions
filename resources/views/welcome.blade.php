<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>VCode Solutions</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">



      {!! HTML::style('public/css/bootstrap.min.css?v='.time()) !!}
      {!! HTML::style('public/css/style.css?v='.time()) !!}
      {!! HTML::style('public/css/responsive.css?v='.time()) !!}
      <link rel="icon" href="{{ asset('public/images/fevicon.png')}}" type="image/gif" />
      {!! HTML::style('public/css/jquery.mCustomScrollbar.min.css?v='.time()) !!}
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      {!! HTML::style('public/css/owl.carousel.min.css?v='.time()) !!}
      {!! HTML::style('public/css/owl.theme.default.min.css?v='.time()) !!}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="index.html">Home</a>
               <a href="services.html">Services</a>
               <a href="about.html">About</a>
               <a href="news.html">News</a>
               <a href="contact.html">Contact Us</a>
            </div>
            <div id="main">
               <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()">&#9776;</span>
            </div>
            <a href="index.html" class="logo"><img src="{{ asset('public/images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">
                        <div>
                           <img src="{{ asset('public/images/map-icon.png')}}" class="map_image">
                        </div>
                        <div>
                           <h2 class="call_text">Location</h2>
                           <h4 class="call_text">is that it has a</h4>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <div>
                           <img src="{{ asset('public/images/map-icon.png')}}" class="map_image">
                        </div>
                        <div>
                           <h2 class="call_text">Working Days</h2>
                           <h4 class="call_text">Mon 07;00 to Fri 07:00</h4>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <div>
                           <img src="{{ asset('public/images/map-icon.png')}}" class="map_image">
                        </div>
                        <div>
                           <h2 class="call_text">Call:</h2>
                           <h4 class="call_text">+01 01234567890</h4>
                        </div>
                     </a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div><img src="{{ asset('public/images/search-icon.png')}}" class="serach_icon"></div>
               </form>
            </div>
         </nav>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h4 class="maintain_text">Maintain</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">dolor sit amet consectetur adipiscing elit, sed do</p>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h4 class="maintain_text">Maintain</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">dolor sit amet consectetur adipiscing elit, sed do</p>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h4 class="maintain_text">Maintain</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">dolor sit amet consectetur adipiscing elit, sed do</p>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Our Services</h1>
         <p class="services_text">There are many variations of passages of Lorem Ipsum</p>
         <div class="services_section_2 layout_padding">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="box_main">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-1.png')}}"><span  class="padding_left_10">Repair</span></div>
                     <p class="long_text">It is a long established fact that a reader will be distracted by the readable </p>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="box_main active">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-2.png')}}"><span  class="padding_left_10">Repair</span></div>
                     <p class="long_text">It is a long established fact that a reader will be distracted by the readable </p>
                     <div class="read_bt active"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="box_main">
                     <div class="repair_text"><img src="{{ asset('public/images/icon-3.png')}}"><span  class="padding_left_10">Repair</span></div>
                     <p class="long_text">It is a long established fact that a reader will be distracted by the readable </p>
                     <div class="read_bt"><a href="#">Read More</a></div>
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
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     <div class="read_more_bt"><a href="#">Read More</a></div>
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
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_taital_main">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer_logo"><img src="{{ asset('public/images/footer-logo.png')}}"></div>
                     <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Navigation</h2>
                     <div class="footer_menu">
                        <ul>
                           <li class="active"><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="location.html">Location</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="features.html">Features</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contact Info</h2>
                     <h4 class="addres_link active"><a href="#">Mantain Office Address:</a></h4>
                     <h4 class="addres_link_1"><a href="#"><img src="{{ asset('public/images/map-icon-1.png')}}"><span class="padding_left_20"> New York, NY 36524</span></a></h4>
                     <h4 class="addres_link active"><a href="#">Customer Service:</a></h4>
                     <h4 class="addres_link_1"><a href="#"><img src="{{ asset('public/images/call-icon-1.png')}}"><span class="padding_left_20">+( +01 1234567890 )</span></a></h4>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Discover</h2>
                     <div class="discover_menu">
                        <ul>
                           <li><a href="#">Help</a></li>
                           <li><a href="#">How It Works</a></li>
                           <li><a href="#">subscribe</a></li>
                           <li><a href="#">Contact Us</a></li>
                        </ul>
                     </div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{ asset('public/images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('public/images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('public/images/instagram-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('public/images/linkedin-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2022 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->

      {!! HTML::script('public/js/jquery.min.js?v='.time()) !!}
      {!! HTML::script('public/js/popper.min.js?v='.time()) !!}
      {!! HTML::script('public/js/bootstrap.bundle.js?v='.time()) !!}
      {!! HTML::script('public/js/jquery-3.0.0.min.js?v='.time()) !!}
      {!! HTML::script('public/js/plugin.js?v='.time()) !!}
      {!! HTML::script('public/js/jquery.mCustomScrollbar.concat.min.js?v='.time()) !!}
      {!! HTML::script('public/js/custom.js?v='.time()) !!}
      {!! HTML::script('public/js/owl.carousel.js?v='.time()) !!}
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
           document.getElementById("main").style.marginLeft= "0";
         }
      </script>
   </body>
</html>