@extends('layouts.aaryav')
@section('content')
  
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">About Us</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('public/images/blog/blog-7.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <h3>Company Profile</h3>
                <p>Medirav Pharmaceuticals is one of the Best PCD Pharma Franchise Company in India with the best range of pharma products. Our company is an ISO-certified company with the most prominent name in the pharmaceutical industry. We are one of the best companies to provide top quality pharma products. Our company is a WHO-GMP-certified PCD Pharma company in India. Medirav Pharmaceuticals provides the best monopoly rights and various promotional tools.</p>
                <!-- <img src="images/about/sign.png" alt="" class="img-fluid"> -->
            </div>
        </div>
    </div>
</section>



<section class="section about-page">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 about_us_section_column">
                <h4>Our Mission</h4>
                <p>Our mission as a pharmaceutical company is to improve the health and well-being of people around the world. We are providing high-quality healthcare solutions and services to our customers</p>
            </div>

            <div class="col-lg-4 about_us_section_column">
                <h4>Our Vision</h4>
                <p>Our vision is to become a global leader in the pharmaceutical industry by continuously advancing our scientific knowledge and expertise. We envision a future where our medicines help people live longer, healthier, and more fulfilling lives.</p>
            </div>

            <div class="col-lg-4 about_us_section_column">
                <h4>Our Value</h4>
                <p>At our pharmaceutical company, we are guided by a set of core values that define who we are. And how we operate. We conduct our business with the highest ethical standards and always do what is right for our patients, customers, and employees.</p>
            </div>
            
        </div>
    </div>
</section>

<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('public/images/about/quality-assurance-1.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <h3>Quality Assured Products at Medirav Pharmaceuticals</h3>
                <p>Medirav Pharmaceuticals is committed to producing high-quality products that meet the highest standards of safety, efficacy, and reliability. Our quality assurance is designed to ensure that every product that leaves our facilities is thoroughly tested. And inspected to meet or exceed regulatory requirements. We use advanced manufacturing processes and state-of-the-art equipment to produce our products, and we follow strict protocols for quality control and testing. Our experienced team of scientists and technicians performs rigorous analytical testing at every stage of production, from raw materials to finished products.</p>
                <!-- <img src="images/about/sign.png" alt="" class="img-fluid"> -->
            </div>
        </div>
    </div>
</section>

@endsection