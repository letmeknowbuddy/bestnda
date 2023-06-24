<?php 
$resentblog = DB::table('add_blog')->where('status', 0)->take(5)->orderBy('id', 'desc')->get();
$webmaster_update  = DB::Table('webmaster_update')->where('id', 1)->first();
$analytics_update  = DB::Table('analytics_update')->where('id', 1)->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="website/images/favicon.webp">
<title><?php echo html_entity_decode(@$blogs->blog_title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></title>
<meta content="<?php echo html_entity_decode(@$blogs->meta_keywords, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" name="keywords">
<meta content="<?php echo html_entity_decode(@$blogs->meta_description, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" name="description">
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
<meta property="og:title" content="<?php echo html_entity_decode(@$blogs->blog_title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" />
<meta property="og:description" content="<?php echo html_entity_decode(@$blogs->meta_description, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:site_name" content="Shield Defence College Lucknow - SDC" />
<meta property="og:updated_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:image" content="{{ URL::asset('blog_image/thumbimg/' .$blogs->thumbimg) }}" />
<meta property="og:image:secure_url" content="{{ URL::asset('blog_image/thumbimg/' .$blogs->thumbimg) }}" />
<meta property="og:image:width" content="765" />
<meta property="og:image:height" content="400" />
<meta property="og:image:alt" content="<?php echo html_entity_decode(@$blogs->blog_title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" />
<meta property="og:image:type" content="image/webp" />
<meta property="article:published_time" content="2023-01-04T00:28:23+05:30" />
<meta property="article:modified_time" content="2023-05-02T14:53:07+05:30" />
<meta property="og:ttl" content="345600">
<meta property="fb:profile_id" content="/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="/">
<meta name="twitter:creator" content="/">
<meta name="twitter:title" content="<?php echo html_entity_decode(@$blogs->blog_title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" />
<meta name="twitter:description" content="<?php echo html_entity_decode(@$blogs->meta_description, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" />
<meta name="twitter:image" content="{{ URL::asset('blog_image/thumbimg/' .$blogs->thumbimg) }}" />
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

<div class="blog_list_section equal_space top_border">

 <div class="container-fluid">

  <div class="row">

   <div class="col-md-9 col-sm-12 col-12">

    <div class="blog_inner">

     <div class="blog_inn_banner">

      <img src="{{ URL::asset('blog_image/banner_img/' .$blogs->banner_img) }}" alt="<?php echo html_entity_decode(@$blogs->blog_title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" class="img-fluid">

     </div>

     <div class="blog_inn_dtl">

      <ul class="user_dtl">

       <li><i class="fa-solid fa-user"></i> <a href="#!">{{$blogs->u_name}}</a></li>

        <li><i class="fas fa-clock"></i> {{ date("d M Y", strtotime($blogs->create_at)) }}</li>

       <li><i class="fa-solid fa-th"></i> <a href="#!">{{$blogs->category}}</a></li>

       <li><i class="fa-solid fa-eye"></i> <a href="#!">5</a></li>

      </ul>

      <h2>{{$blogs->blog_title}}</h2>

      {!! $blogs->blog !!}

     </div>

    </div>

   </div>



   <div class="col-md-3 col-sm-12 col-12">

    <div class="blog_side">

     <h3>Search</h3>

     <form method="GET" action="{{ route('search.key') }}" autocomplete="off">
      <input type="text" name="blog" placeholder="Search Hear" required="" class="user-invalid valueMissing">
           <button title="Search Your Query"><i class="fas fa-search"></i></button>

     </form>

    </div>

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

<!-- Blog Details Section End Here -->





@include('include.request-call-back')

<!-- Request Call Back Section End Here -->



@include('include.footer')

<!-- Footer Section End Here -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>