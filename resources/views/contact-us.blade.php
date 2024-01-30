@extends('layouts.aaryav')
@section('content')
    
   <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-live-support"></i>
          <h5>Call Us</h5>
          +91 8278868340
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-support-faq"></i>
          <h5>Email Us</h5>
          info@mediravgmail.com
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-location-pin"></i>
          <h5>Location</h5>
          2nd Floor Block B SCO-3, Showroom NO- 282, Motia Plaza Baddi, Solan, Himachal Pradesh -173205 (India)
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h2 class="text-md mb-2">Contact us</h2>
          <div class="divider mx-auto my-4"></div>
          <!-- <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit
            perferendis maiores ratione aliquam?</p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
            {!! Form::open(['url' => url('/send-contact-us-form'),'id'=>'contact-form',  'class' => 'contact__form contactForm','enctype'=>'multipart/form-data'] ) !!}
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input name="name" id="name" type="text" class="form-control required removeErrorField" placeholder="Your Full Name">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input name="email" id="email" type="text" class="form-control required removeErrorField email" placeholder="Your Email Address" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="subject" id="subject" type="text" class="form-control required removeErrorField" placeholder="Your Query Topic" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="phoneno" id="phone" type="text" class="form-control required removeErrorField number" placeholder="Your Phone Number" required>
              </div>
            </div>
          </div>

          <div class="form-group-2 mb-4">
            <textarea name="message" id="message" class="form-control required removeErrorField" rows="8" placeholder="Your Message" required></textarea>
          </div>

          <div>
            <input class="btn btn-main btn-round-full" name="submit" id="submitContactUsForm" type="button" value="Send Messege"></input>
          </div>
        {{ Form::close() }}
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <iframe class="gmap_iframe position-relative rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.4053053432026!2d76.82092097478824!3d30.931242876013318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ff5f33efc2e29%3A0xc2c8450593324eda!2sS.C.O.%203!5e0!3m2!1sen!2sin!4v1706178278964!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>



  </div>
</section>



    <!-- Contact End -->

    @endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')  