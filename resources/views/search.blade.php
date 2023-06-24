<?php
$webmaster_update  = DB::Table('webmaster_update')->where('id', 1)->first();
$analytics_update  = DB::Table('analytics_update')->where('id', 1)->first();
$resentblog = DB::table('add_blog')->where('status', 0)->take(5)->orderBy('id', 'desc')->get();
$title=DB::table('search')->where('title', $title)->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="website/images/favicon.webp">
<title>#1 Best NDA Coaching in Lucknow | NDA Academy in Lucknow</title>
<meta content="Best NDA Coaching in Lucknow" name="keywords">
<meta content="BNCL is leading NDA Coaching in Lucknow to crack the NDA written exam. Best NDA Coaching in Lucknow is renowned coaching institute for NDA course after 10th and 12th." name="description">
<link rel="canonical" href="https://www.bestndacoachinginlucknow.com/">
<link rel="alternate" href="https://www.bestndacoachinginlucknow.com/" hreflang="en-us">
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
<meta property="og:title" content="#1 Best NDA Coaching in Lucknow | NDA Academy in Lucknow" />
<meta property="og:description" content="BNCL is leading NDA Coaching in Lucknow to crack the NDA written exam. Best NDA Coaching in Lucknow is renowned coaching institute for NDA course after 10th and 12th." />
<meta property="og:url" content="https://www.bestndacoachinginlucknow.com/" />
<meta property="og:site_name" content="Shield Defence College Lucknow - SDC" />
<meta property="og:updated_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:image" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta property="og:image:secure_url" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta property="og:image:width" content="765" />
<meta property="og:image:height" content="400" />
<meta property="og:image:alt" content="NDA Coaching in Lucknow" />
<meta property="og:image:type" content="image/webp" />
<meta property="article:published_time" content="2023-01-04T00:28:23+05:30" />
<meta property="article:modified_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:ttl" content="345600">
<meta property="fb:profile_id" content="/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="/">
<meta name="twitter:creator" content="/">
<meta name="twitter:title" content="#1 Best NDA Coaching in Lucknow | NDA Academy in Lucknow" />
<meta name="twitter:description" content="BNCL is leading NDA Coaching in Lucknow to crack the NDA written exam. Best NDA Coaching in Lucknow is renowned coaching institute for NDA course after 10th and 12th." />
<meta name="twitter:image" content="https://www.bestndacoachinginlucknow.com/website/images/og_img.webp" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="Sdacollege" />
<meta name="twitter:label2" content="Time to read" />
<meta name="twitter:data2" content="1 minute" />
<meta property="og:updated_time" content="2021-01-06T13:49:21">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
<?php echo $analytics_update->header; ?>

<?php echo $analytics_update->body; ?>

</head>
<body>
@include('include.header')
<div class="clear"></div><!-- Clear End Here -->
<!-- Header Section End Here -->



<div class="banner-section blog_banner">

 <div class="container">

  <div class="row">

   <div class="col-md-12">

    <div class="banner_inner">

     <h1>Search</h1>

     <ul>

      <li><a href="/">Home</a></li>

      <li class="lst_sep"> » </li>

      <li>Search</li>

     </ul>

    </div>

   </div>

  </div>

 </div>

</div>

<div class="clear"></div><!-- Clear End Here -->

<!-- Banner Section End Here -->



<div class="blog_list_section">

 <div class="container-fluid">

  <div class="row">

   <div class="col-md-9 col-sm-12 col-12">

    <div class="row">

     <div class="col-lg-12 col-md-12 col-sm-12 col-12">

      <div class="search_form">

       <div class="search_title">

        <span class="seacrh">Search Results For</span>
{{-- @foreach ($title as $itm) --}}
<span class="search_item">{{$title->title}}</span>
    
{{-- @endforeach --}}

       </div>

       <div class="form_sec">
        <form method="GET" target="_top" action="{{ route('search.key') }}" autocomplete="off">
          <div class="form_input_group">
            <input type="text" name="blog" value="{{$title->title}}" placeholder="Hit Enter To Search" required="" class="user-valid valid">
           <button title="Search Your Query"><i class="fas fa-search"></i></button>
          </div>
         </form>
       </div>
       <span class="search_count">Found <b>{{$blog->count()}}</b> records</span>

      </div>

     </div>
@foreach($blog as $item)
     <div class="col-lg-6 col-md-6 col-sm-6 col-12">

      <div class="card">

       <a href="#!" class="card-img">

        <img src="{{ URL::asset('blog_image/thumbimg/' .$item->thumbimg) }}" alt="{{ URL::asset('blog_image/thumbimg/' .$item->thumbimg) }}" class="img-fluid">


       </a>

       <div class="card-body">

        <ul>

         <li><i class="fa-solid fa-calendar-days"></i> <a>{{ $item->create_at }}</a></li>

         <li><i class="fa-solid fa-th"></i> <a href="#!">{{$item->category}}</a></li>

        </ul>

        <a href="{{ route('blog-details',$item->blog_slug)}}"><h3>{{$item->blog_title}}</h3></a>


        {!! $item->blog !!}

       </div>

      </div>

     </div>
@endforeach

    </div>

   </div>



   <div class="col-md-3 col-sm-12 col-12">


    <div class="blog_side">

     <h4>Latest Blog</h4>

     <ul>

      <?php 

       foreach ($resentblog as $newBlog) 

       {

        ?>

       <li><a href="{{ route('blog-details',$newBlog->blog_slug)}}">{{$newBlog->blog_title}}</a></li>

        <?php

       }

      ?>

    </ul>

    </div>

   </div>

  </div>

 </div>

</div>

<div class="clear"></div><!-- Clear End Here -->

<!-- Search List Section End Here -->


@include('include.footer')
<!-- Footer Section End Here -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="/website/js/main.js"></script>