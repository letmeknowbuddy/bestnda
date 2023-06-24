<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp" alt="LMS">
<title>Dashboard | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset ('backend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('backend/js/system.js')}}"></script>
</head>
<body>
@include('admin.include.header')

@include('admin.include.nav')
<?php
  $blogCount = DB::table('add_blog')->count();
  $contactCount = DB::table('contect')->count();
  $sidebarCount = DB::table('sidebar_enquiry')->count();
  $bottomCount = DB::table('bottom_enquiry')->count();
?>
<div id="content" class="container-fluid">
 <div class="row dashboard-stats">
 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 primary">
   <div class="tile">
    <a href="{{ route('admin.blogs')}}">
     <div class="heading">Blogs</div>
     <div class="body"> <i class="fa-solid fa-blog"></i>
      <div class="pull-right">{{ $blogCount }}</div>
     </div>
    </a>
   </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 primary">
   <div class="tile">
    <a href="{{ route('admin.contact_list')}}">
     <div class="heading">Contact List</div>
     <div class="body">
      <i class="fas fa-phone-volume"></i>
      <div class="pull-right">{{ $contactCount }}</div>
     </div>
    </a>
   </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 primary">
   <div class="tile">
    <a href="{{ route('admin.sidebar_enquiry_list')}}">
     <div class="heading">Sidebar Enquery</div>
     <div class="body">
      <i class="fas fa-phone-volume"></i>
      <div class="pull-right">{{ $sidebarCount }}</div>
     </div>
    </a>
   </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 primary">
   <div class="tile">
    <a href="{{ route('admin.bottom_enquiry_list')}}">
     <div class="heading">Bottom Enquery</div>
     <div class="body">
      <i class="fas fa-phone-volume"></i>
      <div class="pull-right">{{ $bottomCount }}</div>
     </div>
    </a>
   </div>
  </div>
  
 </div>
</div>

@include('admin.include.footer')
</body>
</html>