@extends('layouts.vcode')
@section('content')
 <!-- contact section start -->
      <div class="contact_section layout_padding margin_top_90">
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