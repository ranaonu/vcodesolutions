<header>
  <div class="header-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <ul class="top-bar-info list-inline-item pl-0 mb-0">
            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>info@mediravgmail.com</a></li>
            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address 2nd Floor Block B SCO-3, Showroom NO- 282, Motia Plaza Baddi, Solan, Himachal Pradesh -173205 (India)</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
            <a href="tel:+23-345-67890">
              <span>Call Now : </span>
              <span class="h4">+91 8278868340</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{ asset('public/images/logo_1.jpeg')}}" alt="" class="img-fluid logo animated">
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
        aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @if(isset($active_menu)) {{$active_menu == 'home'?'active':''}} @endif"><a class="nav-link" href="{{url('/')}}">Home</a></li>
           <!-- <li class="nav-item @if(isset($active_menu)) {{$active_menu == 'about'?'active':''}} @endif"><a class="nav-link" href="{{url('/about')}}">About </a></li>           
            <li class="nav-item dropdown @if(isset($active_menu)) {{$active_menu == 'products'?'active':''}} @endif">
            <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Products <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              <li><a class="dropdown-item" href="{{url('/products/dosage')}}">By Dosage Form</a></li>
              <li><a class="dropdown-item" href="{{url('/products/therapy')}}">By Therapy Wise</a></li>
            </ul>
          </li> -->
          <li class="nav-item @if(isset($active_menu)) {{$active_menu == 'products'?'active':''}} @endif"><a class="nav-link" href="{{url('/products')}}">Products</a></li>

          <li class="nav-item @if(isset($active_menu)) {{$active_menu == 'gallary'?'active':''}} @endif"><a class="nav-link" href="{{url('/product-gallery')}}">Gallery</a></li>

          <li class="nav-item @if(isset($active_menu)) {{$active_menu == 'contact'?'active':''}} @endif"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
           <li class="nav-item">

            @guest
              <a href="{{url('/login')}}" class="nav-item nav-link">Login </a>
            @else
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
              <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"
              ><i class="fa fa-power-off me-1 ms-1"></i> {{ __('Logout') }}</a>

            @endif
          </li>
        

          <!--<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              <li><a class="dropdown-item" href="department.html">Departments</a></li>
              <li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
                    
              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
      
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
              <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
              <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>

              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
      
                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown05">
              <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>
              <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
            </ul>
          </li>
           -->
        </ul>
      </div>
    </div>
  </nav>
</header>