<?php
$blogCount = DB::table('add_blog')->count();
$contactCount = DB::table('contect')->count();
$sidebarCount = DB::table('sidebar_enquiry')->count();
$bottomCount = DB::table('bottom_enquiry')->count();
$site_map = DB::table('site_map')->count();

?>
<nav id="column-left" role="navigation">
 <ul id="menu">
  <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Dashboard"></i> <span>Dashboard</span></a></li>
  <li><a href="{{ route('admin.update')}}"><i class="fas fa-pen" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Updates"></i> <span>Updates</span></a></li>
  <li><a href="{{ route('admin.pages')}}"><i class="fas fa-copy" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Pages"></i> <span>Pages</span></a></li>
  <li><a href="{{ route('admin.blogs')}}"><i class="fa-solid fa-blog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Blogs"></i> <span>Blogs<i class="count-item">{{ $blogCount }}</i></span></a></li>
  <!-- <li><a href="{{ route('admin.services')}}"><i class="fab fa-accusoft" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Services"></i> <span>Services<i class="count-item">3</i></span></a></li> -->
  <!-- <li><a href="{{ route ('admin.category')}}"><i class="fas fa-chart-pie" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Category"></i> <span>Category<i class="count-item">5</i></span></a></li> -->
  <li><a href="{{ route('admin.search')}}"><i class="fas fa-search" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Search"></i> <span>Search</span></a></li>
  <li><a href="{{ route('admin.contact_list')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Contact List"></i> <span>Contact List<i class="count-item">{{ $contactCount }}</i></span></a></li>
  <li><a href="{{ route('admin.sidebar_enquiry_list')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Enquiry List"></i> <span>Sidebar Enquiry<i class="count-item">{{ $sidebarCount }}</i></span></a></li>
  <li><a href="{{ route('admin.bottom_enquiry_list')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Enquiry List"></i> <span>Bottom Enquiry<i class="count-item">{{ $bottomCount }}</i></span></a></li>
  <li><a href="{{ route('admin.sitemap')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Sitemap"></i> <span>Sitemap<i class="count-item">{{ $site_map }}</i></span></a></li>
  <!-- <li><a href="{{ route('admin.enquiry_list')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Enquiry List"></i> <span>Online Enquiry List</span></a></li> -->
  <!-- <li><a href="{{ route('admin.call_back_list')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Call Back List"></i> <span>Enquiry  List</span></a></li> -->
  <!-- <li><a href="{{ route('admin.online_registration')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Online Registration"></i> <span>Online Registration</span></a></li> -->
  <!-- <li><a href="{{ route ('admin.online_fee_pay')}}"><i class="fas fa-phone-volume" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Online Fee Payment"></i> <span>Online Fee Payment</span></a></li> -->
  <li><a href="{{ route('admin.users')}}"><i class="fas fa-users" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Usres"></i> <span>Usres</span></a></li>
 </ul>
</nav>
