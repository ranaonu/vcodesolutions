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
                     <li class="active"><a href="{{url('/')}}">Home</a></li>
                     <li><a href="{{url('/about')}}">About</a></li>
                     <li><a href="{{url('/services')}}">Services</a></li>
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
      {!! HTML::script('public/js/fancybox.min.js?v='.time()) !!}
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