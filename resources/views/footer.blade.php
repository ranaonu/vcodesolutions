
<!-- footer Start -->
<footer class="footer section ">
  <div class="container">
    <hr />
    <div class="row">
      <div class="col-lg-4 mr-auto col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <div class="mb-4">
            <img src="{{asset('public/images/logo_1.jpeg')}}" alt="" class="img-fluid logo animated" style="width:45%">
          </div>
          <p>Medirav Pharmaceuticals is one of the Best PCD Pharma Franchise Company in India with the best range of pharma products. Our company is an ISO-certified company with the most prominent name in the pharmaceutical industry. </p>

         <!--  <ul class="list-inline footer-socials mt-4">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
            </li>
          </ul> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="widget mb-5 mb-lg-0" id="navbarmain">
          <h4 class="text-capitalize mb-3">Quick Links</h4>
          <div class="divider mb-4"></div>

          <ul class="list-inline  mt-4">
            <li class="list-inline-item"><a href="{{url('/about')}}">About Us </a></li>
            <li class="list-inline-item"><a href="{{url('/contact')}}">Contact</a></li>
            <li class="list-inline-item" class="@if(isset($active_menu)) {{$active_menu == 'gallary'?'active':''}} @endif"><a href="{{url('/product-gallery')}}">Gallery</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget widget-contact mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Get in Touch</h4>
          <div class="divider mb-4"></div>

          <div class="footer-contact-block mb-4">
            <div class="icon d-flex align-items-center">
              <i class="icofont-email mr-3"></i>
              <span class="h6 mb-0">Support Available for 24/7</span>
            </div>
            <h4 class="mt-2"><a href="mailto:support@email.com">info@mediravgmail.com</a></h4>
          </div>

          <div class="footer-contact-block">
            <div class="icon d-flex align-items-center">
              <i class="icofont-support mr-3"></i>
              <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
            </div>
            <h4 class="mt-2"><a href="tel:+91 8278868340">+91 8278868340</a></h4>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="footer-btm py-4 mt-5">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
            <form action="#" class="subscribe">
              <input type="text" class="form-control" placeholder="Your Email address" required>
              <button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <a class="backtop scroll-top-to" href="#top">
            <i class="icofont-long-arrow-up"></i>
          </a>
        </div>
      </div>
    </div> -->
  </div>
</footer>
</div>
<script type="text/javascript">
     var site_url = "{{url('/')}}";
   </script> 
<!-- JavaScript Libraries -->
{!! HTML::script('public/plugins/jquery/jquery.js?v='.time()) !!}
{!! HTML::script('public/plugins/bootstrap/bootstrap.min.js?v='.time()) !!}
{!! HTML::script('public/plugins/slick-carousel/slick/slick.min.js?v='.time()) !!}
{!! HTML::script('public/plugins/shuffle/shuffle.min.js?v='.time()) !!}
{!! HTML::script('public/plugins/google-map/gmap.js?v='.time()) !!}
<!-- Template Javascript -->
{!! HTML::script('public/js/script.js?v='.time()) !!}
{!! HTML::script('public/js/common.js?v='.time()) !!}
@yield('js-files')
</body>
</html>