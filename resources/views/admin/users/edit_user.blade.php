<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Edit User | Shield Defence College</title>
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
  <li>Edit User</li>
 </ol>
   <form method="POST" action="{{ route('admin.userupdate')}}"  class="form-horizontal">
   @csrf
  <input type="hidden" name="id" value="{{$user_edit->id}}">
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="far fa-edit"></i> Edit Login Details</h1>
   <div class="pull-right form-inline">
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>
    <a href="#!" class="btn btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="View Profile"><i class="fas fa-eye"></i></a>
    <a href="{{ route('admin.users')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>
   </div>
  </div>
  <div class="panel-body">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="f_name" class="form-control" value="{{$user_edit->name}}">
       <label class="required">First Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="l_name" class="form-control" value="{{$user_edit->last_name}}">
       <label class="required">Last Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="email" name="email" class="form-control" value="{{$user_edit->email}}" required>
       <label class="required">E-Mail</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="password" name="password" class="form-control" required maxlength="25" value="{{$user_edit->password}}">
       <label class="required">Your Password</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group mb-0">
       <input id="access_ip" type="text" name="access_ip" class="form-control" required="" value="{{$user_edit->ip_address}}">
       <label class="required">Access IP</label>
      </div>
       <a onclick="getAccessIp('122.160.44.241');" href="#" title="" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add Current IP"><i class="fa fa-server"></i> Add Current IP</a>
       <a onclick="getAccessIp('0.0.0.0');" href="#" title="" data-toggle="tooltip" class="btn btn-success" data-original-title="Add Public IP"><i class="fa fa-globe"></i> Add Public IP</a>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <select class="form-control mul_sel" name="permission[]" multiple>
       <?php 
       $permission = explode (", ", $user_edit->page_permission)
       ?> 
    <option value="updates" <?php if(in_array('updates', $permission)){ echo "selected"; } ?> >Updates</option>
    <option value="pages" <?php if(in_array('pages', $permission)){ echo "selected"; } ?> >Pages</option>
    <option value="blogs" <?php if(in_array('blogs', $permission)){ echo "selected"; } ?> >Blogs</option>
    <option value="category" <?php if(in_array('category', $permission)){ echo "selected"; } ?> >Category</option>
    <option value="services" <?php if(in_array('services', $permission)){ echo "selected"; } ?> >Services</option>
    <option value="Contect List" <?php if(in_array('Contect List', $permission)){ echo "selected"; } ?> >Contect List</option>

    <option value="Online Enquery" <?php if(in_array('Online Enquery', $permission)){ echo "selected"; } ?> >Online Enquery</option>
    <option value="Call Back" <?php if(in_array('Call Back', $permission)){ echo "selected"; } ?> >Call Back</option>
     <option value="Registaion" <?php if(in_array('Registaion', $permission)){ echo "selected"; } ?> >Registaion</option>
     <option value="users" <?php if(in_array('users', $permission)){ echo "selected"; } ?> >Users</option>
       </select>
       <label class="required">Select Permission</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <select class="form-control" name="role"> 
        <option value="{{$user_edit->role}}" selected>{{$user_edit->role}}</option>
        <option value="admin">Admin</option>
        <option value="sub admin">Sub Admin</option>
        <option value="user">User</option>     
       </select>
       <label class="required">Select Role</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <select class="form-control" name="status">    
         <option value="0" <?php if($user_edit->status== 0){echo "selected";} ?> >Active</option>
         <option value="1" <?php if($user_edit->status== 1){echo "selected";} ?> >Inactive</option>   
       </select>
       <label class="required">Select Status</label>
      </div>
     </div>
    </div>
   </form>
  </div>
 </div>
 <p class="text-right"><span>Last Updated on:</span> {{$user_edit->created_at}} </p>
</div>
 @include('admin.include.footer')
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</html>