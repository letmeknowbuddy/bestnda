<?php
$webmaster_update  = DB::Table('webmaster_update')->where('id', 1)->first();
$analytics_update  = DB::Table('analytics_update')->where('id', 1)->first();
$pagedata  = DB::Table('add_page')->where('status',0)->where('page_name', "Contact Us")->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="website/images/favicon.webp">
<title><?php if($pagedata!='') echo $pagedata->meta_title?></title>
<meta content="<?php if($pagedata!='') echo $pagedata->meta_keyword?>" name="keywords">
<meta content="<?php if($pagedata!='') echo $pagedata->meta_descrption?>" name="description">
<link rel="canonical" href="{{ URL::current() }}">
<link rel="alternate" href="{{ URL::current() }}" hreflang="en-us">
<meta name="google-site-verification" content="<?php echo $webmaster_update->google ?>" />
<!-- <meta name="yandex-verification" content="<?php echo $webmaster_update->yandex ?>" /> -->
<!-- <meta name="msvalidate.01" content="<?php echo $webmaster_update->pintrest ?>" /> -->
<meta name="ROBOTS" content="INDEX, FOLLOW">
<META NAME="GOOGLEBOT" content="INDEX, FOLLOW">
<meta name="yahooSeeker" content="index, follow">
<meta name="msnbot" content="index, follow">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Shield Defence College">
<meta property="og:title" content="Contact Us - Best NDA Coaching in Lucknow" />
<meta property="og:description" content="Contact BNCL for NDA Coaching in Lucknow. Get short and long term training courses from reputed Defense Force Career Training Academy in Lucknow." />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:site_name" content="Shield Defence College Lucknow - SDC" />
<meta property="og:updated_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:image" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta property="og:image:secure_url" content="{{ URL::asset('menuimage/og_img/' .$pagedata ->omg_image) }}" />
<meta property="og:image:width" content="765" />
<meta property="og:image:height" content="400" />
<meta property="og:image:alt" content="Contact Us" />
<meta property="og:image:type" content="image/webp" />
<meta property="article:published_time" content="2023-01-04T00:28:23+05:30" />
<meta property="article:modified_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:ttl" content="345600">
<meta property="fb:profile_id" content="/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="/">
<meta name="twitter:creator" content="/">
<meta name="twitter:title" content="Contact Us - Best NDA Coaching in Lucknow" />
<meta name="twitter:description" content="Contact BNCL for NDA Coaching in Lucknow. Get short and long term training courses from reputed Defense Force Career Training Academy in Lucknow." />
<meta name="twitter:image" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="Sdacollege" />
<meta name="twitter:label2" content="Time to read" />
<meta name="twitter:data2" content="1 minute" />
<meta property="og:updated_time" content="2021-01-06T13:49:21">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
<?php echo $analytics_update->header; ?>

<?php echo $analytics_update->body; ?>
<style>
  .error{
    color:#fff;
  }
</style>
</head>
<body>
@include('include.header')
<div class="clear"></div><!-- Clear End Here -->
<!-- Header Section End Here -->

<div class="banner-section contact_banner" style="background-image:url({{asset('menuimage/banner_img/'.$pagedata->baneer_image)}})">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="banner_inner">
     <h1>Contact Us</h1>
     <ul>
      <li><a href="index.php">Home</a></li>
      <li class="lst_sep"> » </li>
      <li>Contact Us</li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="clear"></div><!-- Clear End Here -->
<!-- Banner Section End Here -->

<div class="contact_form_details equal_space">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="sub_head">
     <h2 class="heading"> Contact Details </h2>
    </div>
   </div>

   <div class="col-lg-4 col-md-12 col-sm-12 col-12">
    <div class="row">
     <div class="col-lg-12 col-md-4 col-sm-12 col-12">
      <div class="contact_contents">
       <span><i class="fas fa-location"></i></span>
       <p class="contct_heading">Our Location</p>
       <p class="contct_des mb-0">Gaura, Mohanlalganj, Raebareli Road, Lucknow. 226301</p>
      </div>
     </div>
     <div class="col-lg-12 col-md-4 col-sm-6 col-12">
      <div class="contact_contents">
       <span><i class="fa-solid fa-mobile-screen-button"></i></span>
       <p class="contct_heading">Phone Number</p>
       <a href="tel:9140272051">9140272051</a>, <br>
       <a href="tel:8881444811">8881444811</a>
      </div>
     </div>
     <div class="col-lg-12 col-md-4 col-sm-6 col-12">
      <div class="contact_contents">
       <span><i class="fas fa-envelope" aria-hidden="true"></i></span>
       <p class="contct_heading">Email Address</p>
       <a href="mailto:info@bestndacoachinginlucknow.com">info@bestndacoachinginlucknow.com</a>
      </div>
     </div>
    </div>
   </div>
   <div class="col-lg-8 col-md-12 col-sm-12 col-12">
    <form action="{{ route('admin.savecontct') }}" method="POST">
      @csrf
     <h3>Online <span>Query</span></h3>
     <div class="row">
      @error('name')
      <span class="pt-1 pb-1 error">{{$message}}</span>
          
      @enderror
      <div class="col-lg-12">
       <input type="text"  name="name" class="form-control" placeholder="Enter Your Name* " onkeydown="return /[a-z]/i.test(event.key)">
      </div>
       @error('email')
      <span class="pt-1 pb-1 error">{{$message}}</span>     
      @enderror
      <div class="col-lg-12">
       <input type="email"  name="email" class="form-control" placeholder="Enter Your E-Mail* "  pattern="[^ @]*@[^ @]*"/>
      </div>
       @error('number')
      <span class="pt-1 pb-1 error">{{$message}}</span>       
      @enderror
      <div class="col-lg-12">
       <input type="text"  name="number" class="form-control" placeholder="Enter Your Ph. No.* " maxlength="10" onkeypress="return isNumber(event)">
      </div>
       @error('subject')
      <span class="pt-1 pb-1 error">{{$message}}</span>      
      @enderror
      <div class="col-lg-12">
       <input type="text"  name="subject" class="form-control" placeholder="Enter Your Subject* ">
      </div>
       @error('message')
      <span class="pt-1 pb-1 error">{{$message}}</span>  
      @enderror
      <div class="col-lg-12">
       <textarea name="message" class="form-control" placeholder="Your Message Here...*"></textarea>
      </div>
      <div class="col-12">
       <button type="submit" name="submit" class="submit_btn">Submit Now</button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
<div class="clear"></div><!-- Clear End Here -->
<!-- Contact Address Section End Here -->

<div class="cont_map_section">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="cont_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d14008.493983013297!2d77.3668853!3d28.6260606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d28.6223124!2d77.3701038!4m0!5e0!3m2!1sen!2sin!4v1681877230348!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </div>
  </div>
 </div>
</div>

@include('include.footer')
<!-- Footer Section End Here -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script>
   function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57 ||charCode>=190)) {
    return false;
}
return true;
}
</script>
</body>
</html>