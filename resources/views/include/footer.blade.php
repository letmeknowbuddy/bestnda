<?php 
$socal_updated  = DB::table('socal_updated')->where('id',1)->first();
$site_update = DB::Table('site_update')->where('id', 1)->first();
?>
<footer>
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-5 col-md-8 col-sm-8 col-12">
    <div class="foot_links about_us_link">
     <img src="{{ URL::asset('logo/header_image/' .$site_update->logo) }}" alt="">
     <p>{{$site_update->about }}</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-4 col-sm-4 col-12">
    <div class="foot_links site_link">
     <h3>Quick Links</h3>
     <ul>
      <li><a href="{{ route('about-us')}}"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
      <li><a href="{{ route('blog')}}"><i class="fa-solid fa-angles-right"></i> Blog</a></li>
      <li><a href="{{ route('contact-us')}}"><i class="fa-solid fa-angles-right"></i> Contact Us</a></li>
      <li><a href="{{ route('privacy-policy')}}"><i class="fa-solid fa-angles-right"></i> Privacy & Policy</a></li>
      <li><a href="{{ route('terms-and-conditions')}}"><i class="fa-solid fa-angles-right"></i> Terms & Condition</a></li>
     </ul>
    </div>
   </div>
   <div class="col-lg-4 col-md-12 col-sm-12 col-12">
    <div class="foot_links foot_cont">
     <h3>Get in Touch</h3>
     <ul>
      <li><i class="fas fa-location"></i> <span>Gaura, Mohanlalganj, Raebareli Road, Lucknow. 226301</span></li>
      <li><i class="fas fa-phone"></i><a href="tel:9140272051">9140272051</a>,
       <a href="tel:8881444811">8881444811</a>
      </li>
     </ul>
    </div>
    <div class="foot_links social_links">
     <ul>
      <li><a href="{{$socal_updated->Facebook}}"><i class="fa-brands fa-facebook-f"></i></a></li>
      <li><a href="{{$socal_updated->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="{{$socal_updated->intagram}}"><i class="fa-brands fa-instagram"></i></a></li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</footer>
<div class="copyright">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="copy_inner">
     <p>© 2023 <a href="/">Best NDA Coaching in Lucknow</a> - All Rights Reserved  | Design & Developed by BALJ Technology Pvt. Ltd.</p>
    </div>
   </div>
  </div>
 </div>
</div>