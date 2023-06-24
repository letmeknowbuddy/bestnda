<?php
$webmaster_update  = DB::Table('webmaster_update')->where('id', 1)->first();
$analytics_update  = DB::Table('analytics_update')->where('id', 1)->first();
$pagedata  = DB::Table('add_page')->where('status', 0)->where('page_name', "About Us")->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="website/images/favicon.webp">
<title><?php if($pagedata!='') echo $pagedata->meta_title ?></title>
<meta content="<?php if($pagedata!='') echo$pagedata->meta_keyword?>" name="keywords">
<meta content="<?php if($pagedata!='') echo$pagedata->meta_descrption?>" name="description">
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
<meta property="og:title" content="About US - Best NDA Coaching in Lucknow" />
<meta property="og:description" content="BNCL is the best NDA Coaching in Lucknow with Highest rate of selection in NDA Exam. Top Faculty and hostel facility available for candidates." />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:site_name" content="Shield Defence College Lucknow - SDC" />
<meta property="og:updated_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:image" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta property="og:image:secure_url" content="{{ URL::asset('menuimage/og_img/' .$pagedata ->omg_image) }}" />
<meta property="og:image:width" content="765" />
<meta property="og:image:height" content="400" />
<meta property="og:image:alt" content="About SDC" />
<meta property="og:image:type" content="image/webp" />
<meta property="article:published_time" content="2023-01-04T00:28:23+05:30" />
<meta property="article:modified_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:ttl" content="345600">
<meta property="fb:profile_id" content="/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="/">
<meta name="twitter:creator" content="/">
<meta name="twitter:title" content="About US - Best NDA Coaching in Lucknow" />
<meta name="twitter:description" content="BNCL is the best NDA Coaching in Lucknow with Highest rate of selection in NDA Exam. Top Faculty and hostel facility available for candidates." />
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

</head>
<body>
@include('include.header')
<div class="clear"></div><!-- Clear End Here -->
<!-- Header Section End Here -->

<div class="banner-section about_banner" style="background-image:url({{asset('menuimage/banner_img/'.$pagedata->baneer_image)}})">

 <div class="container">

  <div class="row">

   <div class="col-md-12">

    <div class="banner_inner">

     <h1>About Us</h1>

     <ul>

      <li><a href="index.php">Home</a></li>

      <li class="lst_sep"> » </li>

      <li>About Us</li>

     </ul>

    </div>

   </div>

  </div>

 </div>

</div>

<div class="clear"></div><!-- Clear End Here -->

<!-- Banner Section End Here -->



<div class="about_first_section equal_space">

 <div class="container">

  <div class="row">

  <div class="col-lg-6 col-md-6 col-sm-12 col-12">

    <div class="abt_info">
     <h2>Best NDA Coaching in Lucknow</h2>
     <p>When it comes to the best NDA coaching in Lucknow, our institute stands out as a leading choice. With a team of highly experienced faculty members, we offer comprehensive and result-oriented training to aspiring candidates. Our well-structured curriculum covers all aspects of the NDA examination, including written tests, physical fitness, and interview preparation. Through regular mock tests, individual attention, and personalized feedback, we strive to maximize the potential of each student.</p>
     <p>Additionally, our state-of-the-art facilities and study materials further enhance the learning experience. Join us to receive top-notch guidance and achieve your dream of entering the prestigious National Defense Academy.</p>

    </div>

   </div>

   <div class="col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="abt_img">
     <img src="website/images/abt_1.webp" alt="About Us" class="img-fluid">
    </div>

   </div>

  </div>

 </div>

</div>

<div class="clear"></div><!-- Clear End Here -->

<!-- About First Section End Here -->



<div class="about_module_section equal_space">

 <div class="container">

  <div class="row">

   <div class="col-md-3 col-sm-3 col-6">

    <div class="mod_inner mb-4">

     <i class="fas fa-users"></i>

     <div class="count_inner">

     <span class="number">1800</span><i>+</i>

     </div>

     <p>Students</p>

    </div>

   </div>

   <div class="col-md-3 col-sm-3 col-6">

    <div class="mod_inner mb-4">

     <i class="fa-solid fa-book"></i>

     <div class="count_inner">

     <span class="number">70</span>

     </div>

     <p>Courses</p>

    </div>

   </div>

   <div class="col-md-3 col-sm-3 col-6">

    <div class="mod_inner mb-0">

    <i class="fa-solid fa-user-group"></i>

     <div class="count_inner">

     <span class="number">700</span><i>+</i>

     </div>

     <p>Certified Teachers</p>

    </div>

   </div>

   <div class="col-md-3 col-sm-3 col-6">

    <div class="mod_inner mb-0">

     <i class="fa-solid fa-award"></i>

     <div class="count_inner">

     <span class="number">1200</span><i>+</i>

     </div>

     <p>Award Winning</p>

    </div>

   </div>

  </div>

 </div>

</div>

<div class="clear"></div><!-- Clear End Here -->

<!-- Home Module Section End Here -->



<div class="about_first_section equal_space">

 <div class="container">

  <div class="row">

   <div class="col-md-5">

    <img src="website/images/abt_2.webp" alt="Best NDA Coaching" class="img-fluid">

   </div>

   <div class="col-md-7">

    <div class="abt_info">

     <span>Best NDA Coaching in Lucknow</span>
     <h2>Why choose us?</h2>
     <p>When it comes to the best NDA coaching in Lucknow, our institute stands apart for several compelling reasons. With a proven track record of success, our experienced faculty provides comprehensive training, covering all aspects of the NDA examination. We offer a result-oriented approach, focusing on individualized attention, regular mock tests, and personalized feedback. Our state-of-the-art facilities, extensive study materials, and strategic teaching methods ensure a holistic learning experience.</p>
     <p>Moreover, our emphasis on discipline, time management, and character development sets us apart. Choose us for unparalleled guidance, unwavering support, and a nurturing environment that will propel you towards achieving your dream of joining the esteemed National Defense Academy.</p>

    </div>

   </div>

  </div>

 </div>

</div>



@include('include.request-call-back')

<!-- Request Call Back Section End Here -->



@include('include.footer')

<!-- Footer Section End Here -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

<script>

  $(".number").counterUp({time:5000});

</script>



</body>

</html>