<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" href="images/favicon.webp">

<title>Add User | Shield Defence College</title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>

</head>

<body>

@include('admin.include.header')

 @include('admin.include/nav')

<div id="content" class="container-fluid">

 <ol class="breadcrumb">

  <li><a href="index.php">Home</a></li>

  <li><a href="{{ route('admin.users')}}">User List</a></li>

  <li>Add User</li>

 </ol>

 <div class="panel panel-default">

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Add User</h1>

   <div class="pull-right form-inline">
    <form method="post" action="{{ route('admin.saveuser')}}" target="_blank" id="/" class="form-horizontal">
        @csrf
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

    <a href="{{ route('admin.users')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>

   </div>

  </div>

  <div class="panel-body">

 
    <div class="row">

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="text" name="f_name" class="form-control" required>

       <label class="required">First Name</label>

      </div>

     </div>
     @error('f_name')
         <span>{{$message}}</span>
     @enderror

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="text" name="l_name" class="form-control" required>

       <label class="required">Last Name</label>

      </div>

     </div>

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="email" name="email" class="form-control" required>

       <label class="required">Your E-Mail</label>

      </div>

     </div>

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="password" name="password" class="form-control" required maxlength="25">

       <label class="required">Your Password</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="password" name="password_confirmation" class="form-control" required maxlength="25">

       <label class="required">Confirm Your Password</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <select class="form-control mul_sel" multiple name="permission[]"> 

        <option value="updates">Updates</option>

        <option value="pages">Pages</option>

        <option value="blogs">Blogs</option>

        <option value="category">Category</option>

        <option value="services">Services</option>

        <option value="subscribe">Subscribe</option>

        <option value="sitemap">Sitemap</option>

        <option value="redirect">Redirect</option>

        <option value="robots">Robots</option>

        <option value="users">Users</option>

       </select>

       <label class="required">Select Permission</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <select class="form-control" name="role"> 

        <option value="Admin">Admin</option>

        <option value="sub admin">Sub Admin</option>

        <option value="user">User</option>     

       </select>

       <label class="required">Select Role</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

</div>

   

 <!-- <div class="form-group">

     <div class="col-sm-6">

      <input type="file" name="bg-image" class="form-control" placeholder="Banner Image" >

     </div>

     <div class="col-sm-1 border-none"><img src="images/user.png" style="width: 35px;height: 35px;" title="Jhon" alt="Jhon"></div>

     <div class="col-sm-3"><span class="pt-2">12-01-2021 ( Profile created date )</span></div>

    </div> -->



 @include('admin.include.footer')

</body>

</html>