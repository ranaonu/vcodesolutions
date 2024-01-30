@extends('layouts.aaryav')
@section('content')
<!-- Slider Start -->

<section class="section">
    <div class="container-fluid">
       <div class="wrapper">
      <div class="carousel">
        <div><img src="{{ asset('public/images/bg/banner-3.jpg')}}"></div>
        <div><img src="{{ asset('public/images/bg/banner-2.jpg')}}"></div>
        <div><img src="{{ asset('public/images/bg/banner-1.jpeg')}}"></div>
      </div>
</div>
    </div>
</section>



<!-- <section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                    <h1 class="mb-3 mt-3">Your most trusted health partner</h1>
                    
                    <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                    <div class="btn-container ">
                        <a href="{{url('/contact')}}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
                        <a href="{{url('/contact')}}" class="btn btn-main btn-round-full">Make a appoinment</a>
                    </div>
                
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                        </ul>
                    </div>
                
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="section about">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-sm-12">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{ asset('public/images/blog/blog-7.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">ABOUT US</h2>
                    <h3 class="title-color1">Medirav Pvt. Ltd | Pharma Franchise Company.</h2>
                    <p class="mt-4">Medirav is specialized in the distribution of a diverse range of medicines, healthcare products that meet the growing needs of patients across India. We are a leading provider of high-quality pharmaceutical products and healthcare solutions. Our company is the Best Pharma Franchise Company and is ISO, WHO-GMP, and GLP certified. We have committed to delivering safe, effective, and affordable healthcare solutions to improve the health and well-being of people across the country.</p>
                    <p class="" ><a class="read-more" href="{{url('/about')}}">Read More <i class="icofont-simple-right ml-2"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3 counter" data-count="100">0</span>%
                        <p>Trust</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3 counter" data-count="500">0</span>+
                        <p>Clients</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3 counter" data-count="22">0</span>
                        <p>States</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3 counter" data-count="10">0</span>
                        <p>Year Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-sm-12">
                <div class="about-content pl-4 mt-4 mt-lg-0 borderArea">
                    <h4 class="title-color">OUR COMMITMENTS</h4>
                    <p>We are driven by constant goal to discover new medicines, new technologies and new ways to manage health to help people to live healthier lives. Our comprehensive line of products encircles life and address important health needs from infancy to golden years.</p>

                    <h4 class="title-color">TO BUSINESS PARTNERS</h4>
                    <p>Based on delivering value to its stakeholders Medirav constantly inspires its people to innovate, achieve excellence and set new global benchmarks. Driven by the passion of its more than 400 strong multicultural workforce Medirav continues to aggressively pursue its mission of "Enriching lives globally, with quality and affordable pharmaceuticals".  Our comprehensive line of products encircles life and address important health needs from infancy to golden years.</p>

                </div>
            </div>
            <div class="col-lg-6 col-sm-12 ">
                <div class="about-content pl-4 mt-4 mt-lg-0 borderArea">
                    <h4 class="title-color">SALIENT FEATURES</h4>
                    <div class="skill-list">
                    <ul class="list-unstyled department-service">
                        <li>Experience in the manufacturing and supply of pharmaceuticals</li>
                        <li>Highly integrated portfolio of porducts for the pharmaceuticals and healthcare sectors.</li>
                        <li>Customer base across the globe</li>
                        <li>One of the largest manufacturer/exporter of highest caliber of professionals in scientiests, engineers, lab technicians, production heads and functional managers.</li>
                        <li>Muticultural and multidiscipline workforce that is motivated towards the highest standards of customer satisfaction</li>
                        <li>Strict adherence to Current Good Manufacturing Practices (c-GMP)</li>
                        <li>Driven by quality, integrity and care values</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row ">
            
            <div class="col-lg-12 col-sm-12 ">
                <div class="about-content pl-4 mt-4 mt-lg-0 ">
                    <h4 class="title-color">QUALITY POLICY</h4>
                    <p>We take considerable pride in developing sustaining, unsurpassed levels of quality in manufacturing of drug formulations in order ot meet customer satisfaction. Our quality policy comprises of:</p>
                    <div class="skill-list">
                    <ul class="list-unstyled department-service">
                        <li>Manufacturing & supplying excellent quality drugs to consistently meet the needs of esteemed clients and the mankind in general.</li>
                        <li>Ensuring strict compliance with camps guidelines, prevailing national and international standards in accordance with the pharmaceutical industry.</li>
                        <li>Treating health, safety and environmental protection as integral part of the quality strategy.</li>
                        <li>Enhancing customer satisfaction through continuous improvement in Quality management System in conformity with ISO 9001:2008.</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- <section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="{{ asset('public/images/about/img-3.jpg')}}" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
                         <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="appoinment.html" >Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
                </form>
            </div>
            </div>
        </div>
    </div>
</section> -->
@endsection