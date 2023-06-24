<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="website/images/favicon.webp">
<title>404 Error | Shield Defence College</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<META NAME="GOOGLEBOT" content="NOINDEX, NOFOLLOW" />
<meta name="yahooSeeker" content="noindex, nofollow" />
<meta name="msnbot" content="noindex, nofollow" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
</head>
<body>

@include('include.header')
<div class="clear"></div><!-- Clear End Here -->
<!-- Header Section End Here -->

<div class="error_section equal_space">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 error_sec">
    <img src="website/images/404-error-img.png">
    <h1>Oops. That page doesn't exist.</h1>
    <p>The page you are looking for doesn't exist or has been moved.</p>
    <p>This Page Will be <span>Redirect After 5 Sec</span>.</p>
   </div>
  </div>    
 </div>
</div>

@include('include.footer');
<!-- Footer Section End Here -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
<script>
setTimeout(function () {
window.location.replace('{{ url('/') }}');
}, 5000);
</script>
</html>