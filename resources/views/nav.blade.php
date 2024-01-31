 <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="{{url('/')}}">Home</a>
               <a href="{{url('/services')}}">Services</a>
               <a href="{{url('/about')}}">About</a>
               <!-- <a href="{{url('/news')}}">News</a> -->
               <a href="{{url('/contact')}}">Contact Us</a>
            </div>
            <div id="main">
               <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()">&#9776;</span>
            </div>
            <a href="{{url('/')}}" class="logo"><img src="{{ asset('public/images/logo.png')}}"></a>
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
         @if($active_menu && $active_menu=='home')
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h4 class="maintain_text">Wings to your dreams</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">V-CODE" Quality Solutions <br>"V-CODE" Work For Reality...</p>
                           <div class="contact_bt"><a href="{{url('/contact')}}">Contact Us</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h4 class="maintain_text">Wings to your dreams</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">V-CODE" Quality Solutions <br>"V-CODE" Work For Reality...</p>
                           <div class="contact_bt"><a href="{{url('/contact')}}">Contact Us</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h4 class="maintain_text">Wings to your dreams</h4>
                        <h1 class="banner_taital">Service you can trust</h1>
                        <div class="banner_text_main">
                           <p class="banner_text">V-CODE" Quality Solutions <br>"V-CODE" Work For Reality...</p>
                           <div class="contact_bt"><a href="{{url('/contact')}}">Contact Us</a></div>
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
         @endif
         <!-- banner section end -->
      </div>
      <!-- header section end -->