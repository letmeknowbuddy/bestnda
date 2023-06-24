<?php 
$site_update = DB::Table('site_update')->where('id', 1)->first();
$page = DB::Table('add_page')->where('status', 0)->get();
?>
<header>
 <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
   <a class="navbar-brand" href="/">
    <img src="{{ URL::asset('logo/header_image/' .$site_update->logo) }}" alt="Shield Defence College" class="normal_logo">
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
        @foreach ($page as $item)
           <li class="nav-item"><a class="nav-link" href="{{ $item->slug}}">{{$item->page_name}}</a></li>
            
        @endforeach
    
     {{-- <li class="nav-item"><a class="nav-link" href="{{ route ('about-us')}}">About Us</a></li>
     <li class="nav-item"><a class="nav-link" href="{{ route('blog')}}">Blog</a></li>
     <li class="nav-item"><a class="nav-link" href="{{ route('contact-us')}}">Contact Us</a></li> --}}
    </ul>
   </div>
  </div>
 </nav>
</header>